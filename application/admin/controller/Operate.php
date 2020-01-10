<?php
namespace app\index\controller\one;

use think\Db;
use think\Cookie;
use think\Controller;

class index extends Controller
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
			$this->error('您的登陆数据不合法', '/adminlogin');
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
		//->where('status',1);
		$grouplist=Db::name('group')->order('id desc')->select();
		$this->assign('grouplist', $grouplist);
		//获取私聊消息
		
		//获取用户列表
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
		
        return $this->fetch();
    }

	//系统设置
	public function settings()
    {
        return $this->fetch();
    }
	
	//用户管理
	public function usercenter()
	{
		//获取用户列表
		$userlist=Db::name('user')->order('id desc')->select();
		$this->assign('userlist', $userlist);
		return $this->fetch();
	}

	//聊天记录
	public function groupchat()
		{
		$userlist=Db::name('groupchat')->order('id desc')->select();
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
/**
	//注册
	public function reg()
	{
		return $this->fetch();
	}
	**/
	//创建新群
}
