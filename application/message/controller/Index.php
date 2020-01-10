<?php
/*
*网站Web android 小程序定制开发QQ839070295
*/
namespace app\message\controller;

use think\Db;
use think\Cookie;
//use think\Controller;
//extends Controller
class Index 
{
	//数据操作加强验证
	//验证登陆状态
	public function __construct(){
	//	parent::__construct();
		//只验证cookie 安全性低 操作时二次数据库验证
		/**
		$this->cookie =cookie('name');
		$this->key=cookie('key');
		//验证用户合法性
		if(!$this->cookie and !$this->key){
			$this->error('请登录', '/login/index/login');
			exit;
		}
		**/
	}
    public function index()
    {
       // return $this->fetch();
    }
	
	public function group()
	{
		//查询聊天室是否可发言
			$groupdata['id']=input('post.fid');//群ID
			//$datainfo['userid']=userid(cookie('name'));//是否群主
			$info=Db::name('group')->where($groupdata)->find();
			if($info['zt']=='0'){
				//群权限认证通过
				$data2['groupid']=input('post.fid');
				$data2['userid']=userid(cookie('name'));
				$groupuserinfo=Db::name('groupuser')->where($data2)->find();
				if($groupuserinfo){
					if($groupuserinfo['zt']=='1'){
					echo 's2';
					exit;
					}
				}
			}else{
				return 's1';
			}

		$data['userid']=input('post.id');
		$data['content']=htmlspecialchars(input('post.content'));
		if($info['userid']==$data['userid']){
			//群主消息
			$data['rank']=1;
		}
		$data['fid']=input('post.fid');
		$data['time']=time();
		$orderid=Db::name('groupchat')->insertGetId($data);
		echo $orderid;
		//echo '群组';
	}
	public function groupmessage()
	{
		$data['fid']=input('post.fid');
		$groupmessage=Db::name('groupchat')->where($data)->order('id desc')->limit(100)->select();
		if(!$groupmessage) return;
		$groupmessage=array_reverse($groupmessage);//数组反向输出
		$newsdata='';
		foreach($groupmessage as $key => $value){ 
           $ts=time()-$value['time'];
			$newsdata.='{"id":"'.$value['id'].'","fid":"'.$value['fid'].'","rank":"'.$value['rank'].'","userid":"'.$value['userid'].'","name":"'.username($value['userid']).'","content":"'.glnews(htmlspecialchars_decode($value['content'])).'","type":"'.$value['type'].'","tx":"'.tx($value['userid']).'","time":"'.$value['time'].'","ts":"'.$ts.'"},';
			//$newsdata.='{"id":"'.$value['id'].'","fid":"'.$value['fid'].'","rank":"'.$value['rank'].'","userid":"'.$value['userid'].'","name":"'.username($value['userid']).'","content":"'.glnews(htmlspecialchars_decode($value['content'])).'","type":"'.$value['type'].'","tx":"'.tx($value['userid']).'","time":"'.date('H:i:s',$value['time']).'"},';
		} 
		$newsdata=substr($newsdata,0,strlen($newsdata)-1); 
		$newsdata= '['.$newsdata.']';
		echo $newsdata;
		//群组消息
	}

	public function mytx()
		{
		$base64_image_content = file_get_contents('php://input');
       // dump($base64_image_content);
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
			
		 $type = $result[2]; //jpeg
		 if(!$type=="jpeg"||$type=="gif"||$type=="jpg"||$type=="png"||$type=="bmp"){
			 echo '上传格式错误';
			 exit;
		 }
		 $img = base64_decode(str_replace($result[1], '', $base64_image_content)); //返回文件流
		}
		mkml('./uploadimg/'.date("Y-m-d"));//文件目录是否存在不存在则生成
		$tmp_file = 'uploadimg/'.date("Y-m-d").'/'.random(5).time().'.'.$type;
		$tmp_file_1 = './'.$tmp_file;
		file_put_contents($tmp_file_1, $img);
		//用户聊天记录
		//判断是否为写入
		//将上传后的图片写入用户信息中
		$data_str= '<a href="/'.$tmp_file.'"><img class="connetimg" src="/'.$tmp_file.'"></a>';

		//写入数据库
		
		
		$data['tx']="/".$tmp_file;
		Db::name('user')->where('name',cookie('name'))->update($data); 
		
		/*
		if(I('get.name')){
			$data['qq']=I('get.name');
			$data['fid']=I('get.kf');
			$data['content']=$data_str;
			$data['zt']=I('get.zt');
			$data['time']=time();
			$User->add($data);
			//更新用户聊天时间
			$User1=M('user');
			$data1['id']=I('get.name');
			$data1['time']=time();
			$User1->save($data1); 
		}
		if($data['zt']=='0'){
		echo '<li><img src="#" class="imgright"><span class="spanright"><a href="/'.$tmp_file.'"><img src="/'.$tmp_file.'"></a></span></li>';
		}else{
			echo '<li><img src="/Public/images/tx1.jpg" class="imgleft "><span class="spanleft"><a href="/'.$tmp_file.'"><img src="/'.$tmp_file.'"></a></span></li>';
		}
		*/
		$txinfo='<img width="36" height="36" src="/'.$tmp_file.'" class="uimg" id="uptpztzt">';
		echo $txinfo;
		}
	public function grouptx(){
		$base64_image_content = file_get_contents('php://input');
       // dump($base64_image_content);
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
			
		 $type = $result[2]; //jpeg
		 if(!$type=="jpeg"||$type=="gif"||$type=="jpg"||$type=="png"||$type=="bmp"){
			 echo '上传格式错误';
			 exit;
		 }
		 $img = base64_decode(str_replace($result[1], '', $base64_image_content)); //返回文件流
		}
		mkml('./uploadimg/'.date("Y-m-d"));//文件目录是否存在不存在则生成
		$tmp_file = 'uploadimg/'.date("Y-m-d").'/'.random(5).time().'.'.$type;
		$tmp_file_1 = './'.$tmp_file;
		file_put_contents($tmp_file_1, $img);
		//用户聊天记录
		//判断是否为写入
		//将上传后的图片写入用户信息中
		//$data_str= '<a href="/'.$tmp_file.'"><img class="connetimg" src="/'.$tmp_file.'"></a>';
		//写入数据库

		$txinfo='<img width="36" height="36" src="/'.$tmp_file.'" class="uimg" id="uptpztzt"><input type="hidden" name="grouptx" value ="/'.$tmp_file.'"/>';
		//$txinfo='<img class="img__pic" src="/'.$tmp_file.'" />'; 

		echo $txinfo;
	}
	public function grouppic(){
				//查询聊天室是否可发言
			$groupdata['id']=input('get.fid');//群ID
			//$datainfo['userid']=userid(cookie('name'));//是否群主
			$info=Db::name('group')->where($groupdata)->find();
			if($info['zt']=='0'){
				//群权限认证通过
				$data2['groupid']=input('get.fid');
				$data2['userid']=userid(cookie('name'));
				$groupuserinfo=Db::name('groupuser')->where($data2)->find();
				if($groupuserinfo){
					if($groupuserinfo['zt']=='1'){
					echo 's2';
					exit;
					}
				}
			}else{
				return 's1';
			}
		$base64_image_content = file_get_contents('php://input');
       // dump($base64_image_content);
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
			
		 $type = $result[2]; //jpeg
		 if(!$type=="jpeg"||$type=="gif"||$type=="jpg"||$type=="png"||$type=="bmp"){
			 echo '上传格式错误';
			 exit;
		 }
		 $img = base64_decode(str_replace($result[1], '', $base64_image_content)); //返回文件流
		}
		mkml('./uploadimg/'.date("Y-m-d"));//文件目录是否存在不存在则生成
		$tmp_file = 'uploadimg/'.date("Y-m-d").'/'.random(5).time().'.'.$type;
		$tmp_file_1 = './'.$tmp_file;
		file_put_contents($tmp_file_1, $img);
		//用户聊天记录
		//判断是否为写入
		//将上传后的图片写入用户信息中
		//$data_str= '<a href="/'.$tmp_file.'"><img class="connetimg" src="/'.$tmp_file.'"></a>';
		//写入数据库

		//$txinfo='<img width="36" height="36" src="/'.$tmp_file.'" class="uimg" id="uptpztzt"><input type="hidden" name="grouptx" value ="/'.$tmp_file.'"/>';
		$txinfo='<div class="image"><a href="/'.$tmp_file.'" data-fancybox="images"><img class="img__pic" src="/'.$tmp_file.'" /></div>'; 
		$data['userid']=input('get.id');
		$data['type']='1';//1表示图片
		if($info['userid']==$data['userid']){
			//群主消息
			$data['rank']=1;
		}
		$data['content']=htmlspecialchars($txinfo);
		$data['fid']=input('get.fid');
		$data['time']=time();
		$orderid=Db::name('groupchat')->insertGetId($data);
		echo $txinfo;
	}

	//私聊
	public function chat(){
		$data['userid']=input('post.id');
		$data['content']=htmlspecialchars(input('post.content'));
		$data['fid']=input('post.fid');
		$data['time']=time();
		//私聊识别标识符
		if(input('post.id')>input('post.fid')){
		$data['merge']=input('post.id').input('post.fid');
		}else{
			$data['merge']=input('post.fid').input('post.id');
		}
		//消息提示
		$where['userid']=$data['userid'];
		$where['fdid']=$data['fid'];
		$update['time']=$data['time'];
		$update['zt']='1';
		Db::name('frineds')->where($where)->update($update);
		$orderid=Db::name('chat')->insertGetId($data);
		echo $orderid;
	}

	public function chatmessage()
	{
		if(input('post.fid')>input('post.userid')){
		$data['merge']=input('post.fid').input('post.userid');
		}else{
			$data['merge']=input('post.userid').input('post.fid');
		}
		
		//echo $data['merge'];
		
		$groupmessage=Db::name('chat')->where($data)->order('id desc')->limit(100)->select();
		
		if(!$groupmessage) return;
		$groupmessage=array_reverse($groupmessage);//数组反向输出
		$newsdata='';
		foreach($groupmessage as $key => $value){ 
			$newsdata.='{"id":"'.$value['id'].'","fid":"'.$value['fid'].'","rank":"'.$value['rank'].'","userid":"'.$value['userid'].'","name":"'.username($value['userid']).'","content":"'.glnews(htmlspecialchars_decode($value['content'])).'","type":"'.$value['type'].'","tx":"'.tx($value['userid']).'","time":"'.date('H:i:s',$value['time']).'"},';
		} 
		$newsdata=substr($newsdata,0,strlen($newsdata)-1); 
		$newsdata= '['.$newsdata.']';
		echo $newsdata;
		//群组消息
	}

	public function chatpic(){
		$base64_image_content = file_get_contents('php://input');
       // dump($base64_image_content);
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
			
		 $type = $result[2]; //jpeg
		 if(!$type=="jpeg"||$type=="gif"||$type=="jpg"||$type=="png"||$type=="bmp"){
			 echo '上传格式错误';
			 exit;
		 }
		 $img = base64_decode(str_replace($result[1], '', $base64_image_content)); //返回文件流
		}
		mkml('./uploadimg/'.date("Y-m-d"));//文件目录是否存在不存在则生成
		$tmp_file = 'uploadimg/'.date("Y-m-d").'/'.random(5).time().'.'.$type;
		$tmp_file_1 = './'.$tmp_file;
		file_put_contents($tmp_file_1, $img);
		//用户聊天记录
		//判断是否为写入
		//将上传后的图片写入用户信息中
		//$data_str= '<a href="/'.$tmp_file.'"><img class="connetimg" src="/'.$tmp_file.'"></a>';
		//写入数据库

		//$txinfo='<img width="36" height="36" src="/'.$tmp_file.'" class="uimg" id="uptpztzt"><input type="hidden" name="grouptx" value ="/'.$tmp_file.'"/>';
		$txinfo='<img class="img__pic" src="/'.$tmp_file.'" />'; 
		$data['userid']=input('get.id');
		$data['type']='1';//1表示图片
		$data['content']=htmlspecialchars($txinfo);
		$data['fid']=input('get.fid');
		//私聊识别标识符
		if(input('get.id')>input('get.fid')){
		$data['merge']=input('get.id').input('get.fid');
		}else{
			$data['merge']=input('get.fid').input('get.id');
		}
		$data['time']=time();
		$orderid=Db::name('chat')->insertGetId($data);
		echo $txinfo;
	}

	//清空群消息
	public function groupqk(){
		if(input('post.userid')){
			$data['id']=input('post.userid');
			$data['userid']=userid(cookie('name'));
			$info=Db::name('group')->where($data)->find();
			if($info){
				//群权限认证通过
				Db::name('groupchat')->where('fid',$data['id'])->delete();
				echo '1';
			}else{
				echo '0';
			}
		}
	}

	//删除群
	public function groupdel(){
		if(input('post.userid')){
			$data['id']=input('post.userid');
			$data['userid']=userid(cookie('name'));
			$info=Db::name('group')->where($data)->find();
			if($info){
				//群权限认证通过
				Db::name('group')->where('id',$data['id'])->delete();
				echo '1';
			}else{
				echo '0';
			}
		}
	}

	//更改群状态
	public function groupzt(){
		if(input('post.groupid')){
			$data['id']=input('post.groupid');
			$data['userid']=userid(cookie('name'));
			$info=Db::name('group')->where($data)->find();
			if($info){
				//群权限认证通过
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
	}

	public function sq4c9fd0901d433aa2()
	{
		$info='4c9fd0901d433aa2';
		echo $info;
	}

	
}
