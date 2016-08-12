<?php


Class BlogAction extends Action {

	//文章列表
	public function index () {
		
		$this->diaplay();
		//$this->assign('blog',M('blog')->select())->display();
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
	//import('ORG.Net.UploadFile');
	/*
	$upload = new \Think\Upload();
	$upload->rootPath  = './Uploads/images'; // 设置附件上传根目录
	$upload->autoSub = true;
	$upload->subName = array('date','Ymd');

	if ($upload->imagePathFormat = '__ROOT__/Uploads/images'){
		$info = $upload->$info['savepath'].$info['savename'];
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
	*/
	}

	public function cid () {
		
		$this->assign('cid',M('top')->where('cid>0')->select())->display();

	}
}

?>