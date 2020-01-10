<?php
/*
*��վWeb android С�����ƿ���QQ839070295
*/
namespace app\common\model;
use think\Model;
use think\Db;
/**
 * ����ģ����
 */

class Base extends Model {

	public function test(){
		return '1';
	}
	public function adddb($db,$data){
		//д�����ݿⷵ��ID
		$id=Db::name($db)->insertGetId($data);
		return $id;
	}

	//������ѯ
	public function wheredb($db,$where)
	{
		$info=Db::name($db)->where($where)->find();
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}

	//�б���ѯ
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
	//�б���ѯ
	public function listsdb($db,$where)
	{
		$order='id desc';
		$info=Db::name($db)->where($where)->order($order)->select();
		//$info=Db::name($db)->where($where)->order($order)->paginate(20);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}

	//�б���ѯ
	public function listadb($db,$where)
	{
		$order='id asc';
		$info=Db::name($db)->where($where)->order($order)->select();
		//$info=Db::name($db)->where($where)->order($order)->paginate(20);
		//Cache::set($db.json_encode($where),$info,3600);
		return $info;
	}


	

	//���ݸ���
	public function savedb($db,$update)
	{
		$info=Db::name($db)->update($update);
		return $info;
	}
  
  //ɾ������
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