<?php
/*
*网站Web android 小程序定制开发QQ839070295
*/
namespace app\common\model;
use think\Model;
use think\Db;
/**
 * 基础模型器
 */

class Base extends Model {

	public function test(){
		return '1';
	}
	public function adddb($db,$data){
		//写入数据库返回ID
		$id=Db::name($db)->insertGetId($data);
		return $id;
	}

	//条件查询
	public function wheredb($db,$where)
	{
		$info=Db::name($db)->where($where)->find();
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}

	//列表查询
	public function listdb($db,$where)
	{
		$order='id desc';
		//$info=Db::name($db)->where($where)->order($order)->select();
		$info=Db::name($db)->where($where)->order($order)->paginate(10);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}

	public function listindexdb($db,$where)
	{
		$order='rank desc,id desc';
		//$info=Db::name($db)->where($where)->order($order)->select();
		$info=Db::name($db)->where($where)->order($order)->paginate(10);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}
	public function listdbnum($db,$where,$num,$order)
	{
		
	    $info=Db::name($db)->where($where)->order($order)->paginate($num);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}
	//列表查询
	public function listsdb($db,$where)
	{
		$order='id desc';
		$info=Db::name($db)->where($where)->order($order)->select();
		//$info=Db::name($db)->where($where)->order($order)->paginate(20);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}

	//列表查询
	public function listadb($db,$where)
	{
		$order='id asc';
		$info=Db::name($db)->where($where)->order($order)->select();
		//$info=Db::name($db)->where($where)->order($order)->paginate(20);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}


	

	//数据更新
	public function savedb($db,$update)
	{
		$info=Db::name($db)->update($update);
		return $info;
	}
  
  //删除数据
   public function deldb($db,$where)
   {
   	    $info=Db::name($db)->where($where)->delete();;
		return $info;
   }

	public function message($str,$type,$url)
	{
			if($type==2){
				header('HTTP/1.1 422 Unprocessable Entity');
			}
			$message['message']=$str;
			if($url){
			$message['url']=$url;
			}
			return json_encode($message);
	}

	public function sq4c9fd0901d433aa2()
	{
		$info='4c9fd0901d433aa2';
		echo $info;
	}
}