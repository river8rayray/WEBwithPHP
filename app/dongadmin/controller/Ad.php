<?php

namespace app\dongadmin\controller;

use think\facade\Db;

use think\facade\Request;


class Ad extends  Base

{


	public function index() {

		// 获取广告列表
		$type_id=input('get.type_id');
		$where=[];
        if($type_id){
            $where[] = [
                ['a.type_id','=',$type_id]
            ];
        }
        $adData = Db::name('ad')->where($where)->paginate([
			'list_rows'=> 10,//每页数量
			'query' => request()->param(),
			]);
		

		return view('', [

			//'typeData' => $typeData,
			'adData' => $adData,
			'type_id'=>$type_id,
			'left_menu'=>2

		]);

	}



    public function add() {

		if(request()->isPost()) {

			// 入库的逻辑

			$data = input('post.');
			unset($data['file']);

			$res = Db::name('ad')->insert($data);

			if($res){
				return alert('操作成功！','index',6,3);
			 }else{
				return alert('操作失败！','index',5,3);
			 }



    }}



	//编辑广告位

	public function edit(){

		$id=Request::instance()->param('id');

		$adData=Db::name('ad')->find($id);


		// 获取推荐位类别

//		$types =Db::name('Adtype')->select();



		if(request()->isPost()){

			$data=input('post.');
			unset($data['file']);
            $res=Db::name('ad')->update($data);

			if($res){
				return alert('操作成功！','index',6,3);
			 }else{
				return alert('操作失败！','index',5,3);
			 }

		}

		return view('', [

				// 'types' => $types,
				'adData'=>$adData,
				'left_menu'=>2
			]);

	}



	public function del(){
		$id=Request::instance()->param('id');
		$adData=Db::name('ad')->where('id',$id)->find();
		if($adData['thumb']){
			delFile($adData['thumb']);//删除文件
		}
		
		$res=Db::name('ad')->where('id',$id)->delete();
		if($res){
			return alert('操作成功！','index',6,3);
		 }else{
			return alert('操作失败！','index',5,3);
		 }
	}
	





}

