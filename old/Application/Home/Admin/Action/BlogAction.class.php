<?php

Class BlogAction extends Action {

	//文章列表
	public function index () {
		$this->display();
	}
	
	//添加文章
	public function blog () {
		$this->display();
	}

	//添加文章表单处理
	public function addBlog () {
		
	}
	
	//编辑器图片上传处理
	public function upload() {
	import('ORG.Net.UploadFile');
	$upload = new UploadFile();
	$upload->autoSub = true;
	$upload->subType = 'date';
	$upload->dateFormat = 'Ym';

	$upload->imagePathFormat = '__ROOT__/uploads/';

	$title = htmlspecalchars($_POST['pictitle'], ENT_QUOTES);
	}
}

?>