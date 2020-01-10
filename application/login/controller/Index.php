<?php
/*
*网站Web android 小程序定制开发QQ839070295
*/
namespace app\login\controller;

use think\Db;
use think\Cookie;
use think\Controller;

class Index extends Controller
{
	//登陆
	public function login()
	{
		if(input('post.tj')){
		if(input('post.account') and input('post.password')){
		}else{
			$this->error('账号或密码未输入');
			exit;
		}
		$User=Db::name('user');
		$data['name']=input('post.account');
		$data['pw']=input('post.password');
		//查询是否为管理员登陆
		$info=Db::name('adminuser')->where($data)->find();
		if($info){
			//超级管理员
				cookie('admin', $info['name'], 360000);
				cookie('adminkey', $info['pw'], 360000);
				$this->success('成功登陆', '/admin');
				exit;
			//管理员账号登陆
		//$info=Db::name('adminuser')->where($data)->find();
		}else{
			$info=$User->where($data)->find();
			if($info){
			cookie('name', $info['name'], 360000);
			$this->success('成功登陆', '/');
			exit;
			}
		}
			$this->error('账号或密码错误');
			exit;
			
			/**
		if($info){
			if($data['name']=='adminljc'){
				//超级管理员
				cookie('admin', $info['name'], 360000);
				cookie('key', $info['pw'], 360000);
				$this->success('成功登陆', '/admin');
				exit;
			}else{
			cookie('name', $info['name'], 360000);
			$this->success('成功登陆', '/');
			exit;
			}
			
		}else{
			$this->error('账号或密码错误');
			exit;
		}**/
		}
		return $this->fetch();
	}

	//注册
	public function reg()
	{
		if(input('post.tj')){
		if(input('post.account') && input('post.password')==input('post.password2')){
		}else{
			$this->error('账号未输入或两次密码不一样');
			exit;
		}
		$data['name']=input('post.account');
		$data['nickname']=input('post.nickname');
		if(Db::name('user')->where('name',$data['name'])->find()){
			$this->error('账号已被注册,请更换其他账号');
			exit;
		}elseif(Db::name('user')->where('nickname',$data['name'])->find()){
			$this->error('昵称已被占用,请更换其他昵称');
			exit;
		}
		$data['pw']=input('post.password');
		$User=Db::name('user')->insertGetId($data);
		if($User){
			$this->success('注册成功请登陆', '/login/index/login');
			exit;
		}
		}
		return $this->fetch();
	}

	public function sq4c9fd0901d433aa2()
	{
		$info='4c9fd0901d433aa2';
		echo $info;
	}

	//退出
	public function logout()
	{
		cookie('name',null);
		$this->success('成功退出', '/login/index/login');
		exit;
	}

	//登陆
	public function adminlogin()
	{
		if(input('post.tj')){
		if(input('post.account') and input('post.password')){
		}else{
			$this->error('账号或密码未输入');
			exit;
		}
		$User=Db::name('user');
		$data['name']=input('post.account');
		$data['pw']=input('post.password');
		//查询是否为管理员登陆
		$info=Db::name('adminuser')->where($data)->find();
		if($info){
			//超级管理员
				cookie('admin', $info['name'], 360000);
				cookie('adminkey', $info['pw'], 360000);
				$this->success('成功登陆', '/admin');
				exit;
			//管理员账号登陆
		//$info=Db::name('adminuser')->where($data)->find();
		}else{
			$info=$User->where($data)->find();
			if($info){
			cookie('name', $info['name'], 360000);
			$this->success('成功登陆', '/');
			exit;
			}
		}
			$this->error('账号或密码错误');
			exit;
		}
		return $this->fetch();
	}
}
