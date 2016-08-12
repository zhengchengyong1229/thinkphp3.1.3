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
		
		if (empty($_FILES)) {
			$this->error('必须选择上传标题图');
		}else{
			$a=$this->upload();
			/*
			if(isset($a)){
				//写入数据库方方法
				if($this->c($a)){
					$this->success('数据库上传成功');
				}else{
					$this->error('写入数据库失败');
				}
			}else{
				$this->error('上传文件有异常，请与管理员联系');
			}
			*/

		}

		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'time' => time(),
			'click' => (int) $_POST['click'],
			'cid' => (int) $_POST['cid'],
			'image'=>$a[0]['savename']
		);

		if (M('blog')->data($data)->add()) {
			$this->success('添加文章成功',U('Admin/Index/index'));
		}else{
			$this->error('添加文章失败,请重试...');
		}
	}

	//私有方法c
	/*
	private function c($a){
		$file=M('blog');
		$data['image']=$data[0]['savename'];
		if($file->data($data)->add()){
			return true;
		}else{
			return false;
		}
	}
	*/
	
	//编辑器图片上传处理
	public function upload() {
	import('ORG.Net.UploadFile');
	$upload = new UploadFile();
	$upload->autoSub = true;
	$upload->subType = 'date';
	$upload->dateFormat = 'Ym';

	$upload->savePath='./uploads/';
	$upload->allowExts=array('jpg','jpeg','png','gif','bmp');
	$upload->allowTypes=array('image/png','image/jpg','image/pjpeg','image/gif','image/jpeg');
	$upload->thumb=true;  //是否开启缩略图
	$upload->thumbMaxWidth='150,640';
	$upload->thumbMaxHeight='180,480';
	$upload->thumbPrefix='s_,m_';   //缩略图文件前缀

	if($upload->upload()){
		$info=$upload->getUploadFileInfo();
		return $info;
	}else{
		$this->error($upload->getErrorMsg());
	}


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
	$image=$info[0]['savename'];
	$title = htmlspecalchars($_POST['pictitle'], ENT_QUOTES);
	}

	public function cid () {
		
		$this->assign('cid',M('top')->where('cid>0')->select())->display();

	}
}

?>