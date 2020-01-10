<?php
/*
*网站Web android 小程序定制开发QQ839070295
*/
namespace app\index\controller;
//use app\common\model;

use think\Db;
use think\Cookie;
use think\Controller;

class Index extends Controller
{
	//验证登陆状态
	public function __construct(){
		parent::__construct();
		//只验证cookie 安全性低 操作时二次数据库验证
		$this->cookie =cookie('name');
		$this->key=cookie('key');
		//验证用户合法性
		if(!$this->cookie and !$this->key){
			
			//是否开启自动注册
		
		$settingsinfo=model('base')->wheredb('settings',["id"=>1]);

		if($settingsinfo['reg']==0){
			//开启自动注册及登陆
			$arr_tx=range(1,31);
			shuffle($arr_tx);
			$data['tx']='/systemtx/'.$arr_tx[0].'.png';
			$data['name']=rand_string(8,0);
			$data['nickname']=namesj();
			$data['pw']="123456";
			$ip=false;
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ips=explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        if($ip){
            array_unshift($ips, $ip);
            $ip=FALSE;
        }
        for ($i=0; $i < count($ips); $i++){
            if(!eregi ('^(10│172.16│192.168).', $ips[$i])){
                $ip=$ips[$i];
                break;
            }
        }
    }
			$data['ip'] = $ip ? $ip : $_SERVER['REMOTE_ADDR'];
			$User=Db::name('user')->insertGetId($data);
			cookie('name', $data['name'], 360000000);
			$this->success('管理员已开启自动注册,已为您分配账号,如需要登陆其他账号请个人中心退出登陆重新注册登陆','/','',5);
			exit;
		}
			$this->error('请登录', '/login/index/login');
			exit;
		}
		$this->Userinfo=Db::name('user')->where(array('name'=>$this->cookie))->find();
		//加强验证
		/**
		$this->Userinfo=Db::name('users')->where(array('loginName'=>$this->cookie,'loginPwd'=>$this->key))->find();
		**/
		if(!$this->Userinfo){
			cookie('name', null);
			cookie('key', null);
			$this->error('您的登陆数据不合法', '/login');
			exit;
		}
		
		$this->assign('name', $this->cookie);
		$this->assign('userinfo', $this->Userinfo);
	}

    public function index()
    {
		//获取群列表
		adminyz();
		
		//->where('status',1);
		$list=Db::name('group')->where('rank',1)->order('id desc')->select();
		$this->assign('list', $list);
		//获取私聊消息
		$sl=Db::query("SELECT * FROM yu_chat col WHERE col.id in (SELECT max(id) FROM yu_chat where fid=".$this->Userinfo['id']." GROUP BY userid) order by id desc");
		//获取好友列表
		$data['userid']=$this->Userinfo['id'];
		$frineds=Db::name('frineds')->where($data)->order('firstletter asc')->select();
		$frineds_sz=Db::name('frineds')->distinct(true)->where($data)->field('firstletter')->order('firstletter asc')->select();
		
		//获取新朋友请求数量
		$newsfrineds=Db::name('frinedslog')->where('userid',$data['userid'])->count();
		$this->assign('newsfrineds', $newsfrineds);
		//获取最新私聊

		//朋友圈链接
		$settings=model('base')->wheredb('settings',["id"=>1]);
		$this->assign('settings', $settings);
		//end

		$this->assign('sl', $sl);
		$this->assign('fdzs', count($frineds));
		$this->assign('frineds_sz', $frineds_sz);
		$this->assign('frineds', $frineds);
		
        return $this->fetch();
    }

		public function sl()
	{
		//获取私聊消息
		$sl=Db::query("SELECT * FROM yu_chat col WHERE col.id in (SELECT max(id) FROM yu_chat where fid=".$this->Userinfo['id']." GROUP BY userid) order by id desc");

		$newsdata='';
		foreach($sl as $key => $value){ 
           $ts=time()-$value['time'];
			$newsdata.='{"id":"'.$value['id'].'","fid":"'.$value['fid'].'","rank":"'.$value['rank'].'","userid":"'.$value['userid'].'","name":"'.username($value['userid']).'","content":"'.indexshow($value['content']).'","type":"'.$value['type'].'","tx":"'.tx($value['userid']).'","time":"'.date("H:i",$value['time']).'","ts":"'.$ts.'","merge":"'.$value['merge'].'"},';
			
		} 
		$newsdata=substr($newsdata,0,strlen($newsdata)-1); 
		$newsdata= '['.$newsdata.']';
		echo $newsdata;
		//推送私聊列表
		
	}

	//私聊
	 public function chat()
    {
		$privateinfo=Db::name('user')->where(array('id'=>input('get.id')))->find();
		$this->assign('privateinfo', $privateinfo);
        return $this->fetch();
    }
	//群组聊天
	public function groupchat()
    {
		//获取群信息

		$groupinfo=Db::name('group')->where('id',input('get.id'))->find();
		if(!$groupinfo){
			$this->error('群组不存在');
			exit;
		}
		if($groupinfo['rank']==0){
			$this->error('本群还未通过审核');
			exit;
		}
		//用户是否有权限登陆本群组
		$userid=userid(cookie('name'));
		$data['groupid']=input('get.id');
		$data['userid']=$userid;
		$groupuser=Db::name('groupuser')->where($data)->find();
		if($groupuser){
			
			if($groupuser['zt']=='1'){
				$this->error('禁止访问群组');
			exit;
			}
			
		}else{
			//第一次进群用户自动加入群组
			$orderid=Db::name('groupuser')->insertGetId($data);
		}
		//判断是否为群主提供权限
		if($groupinfo['userid']==$userid){
			$this->assign('qz', 1);
		}else{
			$this->assign('qz', 0);
		}
		$this->assign('groupinfo', $groupinfo);
        return $this->fetch();
    }
	
	//好友信息
	public function fdinfo()
    {
		$fdinfo=Db::name('user')->where('id',input('get.id'))->find();
		$this->assign('fdinfo', $fdinfo);
        return $this->fetch();
    }

	//群组信息
	public function groupinfo()
    {
		//获取群信息

		$groupinfo=Db::name('group')->where('id',input('get.id'))->find();
		if(!$groupinfo){
			$this->error('群组不存在');
			exit;
		}
		//获取群成员列表
		$list=Db::name('groupuser')
			->where('groupid',input('get.id'))
			->select();
		$data['id']=input('get.id');
		$data['userid']=userid(cookie('name'));
		$info=Db::name('group')->where($data)->find();
		if($info){
			$this->assign('qz', '1');
			}else{
				$this->assign('qz', '0');
			}
		$this->assign('list', $list);
		$this->assign('groupinfo', $groupinfo);
        return $this->fetch();
    }

	//我的信息
	public function myinfo()
    {
        return $this->fetch();
    }

	//生成对话二维码
	public function qrcode()
	{
		return $this->fetch();
	}
	
	
	/**
	//登陆
	public function login()
	{
		return $this->fetch();
	}

	//注册
	public function reg()
	{
		return $this->fetch();
	}
	**/
	//创建新群
	public function test(){
		$s = model('Base');
		//$s = new base;
		echo $s->test();
	}

	public function sq4c9fd0901d433aa2()
	{
		$info='4c9fd0901d433aa2';
		echo $info;
	}
}
