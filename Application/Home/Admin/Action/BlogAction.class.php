<?php

Class BlogAction extends Action {

	//文章列表
	public function index () {

		$this->assign('blog',M('blog')->select())->display();
	}
	
	//添加文章
	public function blog () {
		$this->display();
	}

	//添加文章表单处理
	public function addBlog () {
		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'time' => time(),
			'click' => (int) $_POST['click'],
			'cid' => (int) $_POST['cid']
		);

		if (M('blog')->data($data)->add()) {
			$this->success('添加文章成功','index');
		}else{
			$this->error('添加文章失败,请重试...');
		}
	}
	
	//编辑器图片上传处理
	public function upload() {
	import('ORG.Net.UploadFile');
	$upload = new UploadFile();
	$upload->autoSub = true;
	$upload->subType = 'date';
	$upload->dateFormat = 'Ym';

	if ($upload->imagePathFormat = '__ROOT__/uploads/'){
		$info = $upload->getUploadFileInfo();
		//import('ORG.Util.Image');
		//Image::water('./uploads/'.$info[0]['savename'],'./uploads/logo.png');

		echo json_encode(array(
			'url' => $info[0]['savename'],
			'title' => htmlspecialchars($_POST['pictitle'],ENT_QUOTES),
			'original' => $info[0]['name'],
			'state' => 'SUCCESS'
		));
	}else{
		echo json_encode(array(
			'state' => 	$upload->getErrorMsg()
		));
	}

	$title = htmlspecalchars($_POST['pictitle'], ENT_QUOTES);
	}
}

?>