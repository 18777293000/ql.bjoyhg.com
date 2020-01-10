<?php
/*
*网站Web android 小程序定制开发
*/
namespace app\admin\controller;

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
		//加强验证
		/**
		$this->Userinfo=Db::name('users')->where(array('loginName'=>$this->cookie,'loginPwd'=>$this->key))->find();
		if(!$this->Userinfo){
			cookie('name', null);
			cookie('key', null);
			$this->error('您的登陆数据不合法', '/login');
			exit;
		}
		**/
		$this->assign('name', $this->cookie);
		$this->assign('userinfo', $this->Userinfo);
	}

    public function index()
    {
		//获取群列表
		echo config('examine');
		//->where('status',1);
		$grouplist=Db::name('group')->order('id desc')->select();
		$this->assign('grouplist', $grouplist);
		//获取私聊消息
		
		//获取用户列表
		/**
		$userlist=Db::name('user')->order('id desc')->select();
		$this->assign('userlist', $userlist);
		//获取好友列表
		$data['userid']=$this->Userinfo['id'];
		$frineds=Db::name('frineds')->where($data)->order('firstletter asc')->select();
		$frineds_sz=Db::name('frineds')->distinct(true)->where($data)->field('firstletter')->order('firstletter asc')->select();
		;
		//获取最新私聊
		$this->assign('fdzs', count($frineds));
		$this->assign('frineds_sz', $frineds_sz);
		$this->assign('frineds', $frineds);
		**/
		
        return $this->fetch();
    }

	//系统设置
	public function settings()
    {
		//读取配置
		$settings=Db::name('settings')->order('id desc')->select();
		//dump($settings);
		//获取管理员信息

		$admininfo=Db::name('adminuser')->where('name',cookie('admin'))->find();
		//dump($admininfo);
		$this->assign('settings', $settings);
		$this->assign('admininfo', $admininfo);
        return $this->fetch();
    }

	//修改用户信息
	public function userinfo()
    {
		//读取配置
		$id=input("get.id");
		$userinfo=Db::name('user')->where('id',$id)->find();
		$this->assign('userinfo',$userinfo);
        return $this->fetch();
    }
	
	//用户管理
	public function usercenter()
	{
		//获取用户列表
		//$userlist=Db::name('user')->order('id desc')->select();
       $userlist=model('base')->listdb('user',null);
		$this->assign('userlist', $userlist);
		return $this->fetch();
	}

	//聊天记录
	public function groupchat()
		{
	//	$userlist=Db::name('groupchat')->order('id desc')->limit(100)->select();
        $userlist=model('base')->listdb('groupchat',null);
		$this->assign('userlist', $userlist);
		return $this->fetch();
		}

	//好友聊天记录
	public function fdchat(){
		//$userlist=Db::name('chat')->order('id desc')->limit(100)->select();
      	$userlist=model('base')->listdb('chat',null);
		$this->assign('userlist', $userlist);
		return $this->fetch();
	}
	//登陆
	public function logout()
	{
		cookie('admin', null);
		cookie('adminkey', null);
		$this->success('退出成功', '/');
	}
  
  //群卡生成
  	public function compactcard()
    {
      $userlist=model('base')->listdb('compactcard',null);
    //  $userlist=Db::name('user')->order('id desc')->select();
	  $this->assign('userlist', $userlist);
      return $this->fetch();
    }
  
  
  //生存卡
  public function addkey()
  {
    if(!input('id')) exit;
    for ($x=0; $x<=10; $x++) {
    $data['key']= kyeorder();
    $data['type']= input('id');
    $data['time']=time();
      model('base')->adddb('compactcard',$data);
    }
    $this->success('生成成功', '/admin/index/compactcard');
  }
/**
	//注册
	public function reg()
	{
		return $this->fetch();
	}
	**/
	//创建新群
}
