<?php
/*
*网站Web android 小程序定制开发QQ839070295
*/
namespace app\operate\controller;

use think\Db;
use think\Cookie;
use think\Controller;

class Index extends Controller
{
	//验证登陆状态
	public function __construct(){
		parent::__construct();
		//只验证cookie 安全性低 操作时二次数据库验证
		$this->cookie =cookie('admin');
		$this->key=cookie('adminkey');
		//验证用户合法性
		if(!$this->cookie and !$this->key){
			$this->error('请登录', '/login/index/adminlogin');
			exit;
		}
		$this->Userinfo=Db::name('adminuser')
			->where(array('name'=>$this->cookie,'pw'=>$this->key))
			->find();
		if(!$this->Userinfo){
			cookie('admin', null);
			cookie('adminkey', null);
			$this->error('您的登陆数据不合法,如果你修改了管理员密码请用新密码登陆', '/admin');
			exit;
		}
		//是否具备操作权限
		//echo $this->Userinfo['rank'];
		if($this->Userinfo['rank'] == "0")
		{
			echo '0';
			exit;
		}
		//$this->assign('name', $this->cookie);
		//$this->assign('userinfo', $this->Userinfo);
	}

    public function index()
    {
	
        //return $this->fetch();
    }

	//删除聊天室聊天记录
	public function groupchatdel()
	{
		$datainfo['id']=input('post.id');
		Db::name('groupchat')->where($datainfo)->delete();
		return '1';
	}
	
	//删除普通好友聊天记录
	public function chatdel()
	{
		$datainfo['id']=input('post.id');
		Db::name('chat')->where($datainfo)->delete();
		return '1';
	}

	//删除聊天室
	public function groupdel(){
		$datainfo['id']=input('post.id');
		Db::name('group')->where($datainfo)->delete();
		return '1';
	}

	//删除用户
	public function userdel()
	{
		$datainfo['id']=input('post.id');
		Db::name('user')->where($datainfo)->delete();
		return '1';
	}

	//修改用户信息
	public function userinfo()
	{
		$datainfo['id']=input('post.id');
		$data['pw']=input('post.pw');
		$data['money']=input('post.money');
		Db::name('user')->where($datainfo)->update($data);
		return '1';
	}

	//修改管理员信息
	public function admininfo()
	{
		$datainfo['id']=input('post.idd');
		$data['pw']=input('post.pw');
		$data['name']=input('post.id');
		Db::name('adminuser')->where($datainfo)->update($data);

		//更改审核设置
		$savedata['id']=1;
		$savedata['data']=input('post.sh');
		$savedata['reg']=input('post.reg');
		$savedata['pyq']=input('post.pyq');
		$savedata['kf']=input('post.kf');
		$savedata['title']=input('post.title');

		model('base')->savedb('settings',$savedata);
		/*
		Db::name('settings')->where('id','1')->setField('data',input('post.sh'));
		Db::name('settings')->where('id','1')->setField('reg',input('post.reg'));
		Db::name('settings')->where('id','1')->setField('pyq',input('post.pyq'));
		Db::name('settings')->where('id','1')->setField('kf',input('post.kf'));
		Db::name('settings')->where('id','1')->setField('kf',input('post.kf'));
		*/
		return '1';
	}

	//清空聊天室记录
	public function groupqk(){
		$datainfo['fid']=input('post.id');
		Db::name('groupchat')->where($datainfo)->delete();
		return '1';
	}

	//设置群状态
	public function groupzt(){
		if(input('post.id')){
				$data['id']=input('post.id');
				$info=Db::name('group')->where($data)->find();
				if($info['zt']==0){
					$updata['zt']='1';
				}else{
					$updata['zt']='0';
				}
				Db::name('group')->where('id',$data['id'])->update($updata);
				echo $updata['zt'];
			}else{
				echo '2';
			}
		
	
	}

	//设置审核群
	public function groupxs(){
		if(input('post.id')){
				$data['id']=input('post.id');
				$info=Db::name('group')->where($data)->find();
				if($info['rank']==0){
					$updata['rank']='1';
				}else{
					$updata['rank']='0';
				}
				Db::name('group')->where('id',$data['id'])->update($updata);
				echo $updata['rank'];
			}else{
				echo '2';
			}
		
	
	}
}
