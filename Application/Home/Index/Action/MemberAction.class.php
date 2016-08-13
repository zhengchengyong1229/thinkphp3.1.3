<?php
Class MemberAction extends Action {

	Public function index () {
		$this->display();
	}

	Public function reg () {
		$this->display();
	}

	Public function addreg () {

		if($user != "")
			 {
				$this->error('用户昵称已存在，请重新输入');
			 }
		if($_POST["username"]=="")
			 {
				$this->error('用户昵称不能为空');
			 }
		if($_POST["password"]=="")
			 {
				$this->error('密码不能为空');
			 }
		if (!isset($_POST['repassword']) || ($_POST['repassword'] != $_POST['password'])) 
			{
				$this->error('两次密码不一样');
			 }
		$data = array(
			'username' => $_POST['username'],
			'password' =>md5($_POST['password']),
			'regtime' => time(),
			'class' => $_POST['class']
		);

		
		if ($_POST['class']==1){
			if (M('user')->data($data)->add()) {
				$this->success('注册成功','index');
			}else{
				$this->error('注册失败,请重试...');
			}
		}else{
			if (M('user')->data($data)->add()) {
				$this->success('注册成功','index');
			}else{
				$this->error('注册失败,请重试...');
			}
		}
		

		$user=M('user')->where(array('username'=>$username))->find();

		$data=array(
			'id' => $user['id'],
			'logintime' => time(),
			'loginip' => get_client_ip(),
		);

		M('user')->save($data);

		Session('uid',$user['id']);
		Session('username',$user['username']);
		Session('class',$user['class']);
		Session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		Session('loginip',$user['loginip']);


	}

	Public function gedit () {
		$this->assign('gedit',M('user_geren')->select())->display();
		$this->display();
	}

	//添加个人信息处理
	public function addgedit () {

		if (empty($_FILES)) {
			$this->error('必须选择上传文件');
		}else{
			$a=$this->upload();
		}

		if(!empty($_POST['username'])){

		Session::set('username',$_POST['username']);

		}

		if(!empty($_POST['id'])){

		Session::set('uid',$_POST['id']);

		}

		$data = array(
			'id' => $_SESSION['uid'],
			'xname' => $_POST['xname'],
			'jiguan' =>$_POST['jiguan'],
			'shengri' => $_POST['shengri'],
			'minzu' =>$_POST['minzu'],
			'hunyin' => $_POST['hunyin'],
			'zhengzhi' =>$_POST['mianmao'],
			'tel' => $_POST['tel'],
			'address' =>$_POST['address'],
			'qcontent' => $_POST['content'],
			'image'=>$a[0]['savename']
		);

		if (M('user_geren')->data($data)->add()) {
			$this->success('资料填写成功',U('Index/Index/index'));
		}else{
			$this->error('资料填写失败,请重试...');
		}
	}

	Public function qedit () {
		$this->assign('qedit',M('user_qiye')->select())->display();
		//$this->display();
	}

	//添加企业信息处理
	public function addqedit () {

		if (empty($_FILES)) {
			$this->error('必须选择上传文件');
		}else{
			$a=$this->upload();
		}

		if(!empty($_POST['username'])){

		Session::set('username',$_POST['username']);

		}

		if(!empty($_POST['id'])){

		Session::set('uid',$_POST['id']);

		}

		$data = array(
			'pid' => $_SESSION['uid'],
			'xname' => $_POST['xname'],
			'tel' => $_POST['tel'],
			'email' => $_POST['email'],
			'address' =>$_POST['address'],
			'jingying' =>$_POST['jingying'],
			'mcontent' => $_POST['content'],
			'image'=>$a[0]['savename']
		);
		
		if (M('user_qiye')->add($data)) {
			$this->success('资料填写成功',U('Index/Index/index'));
		}else{
			$this->error('资料填写失败,请重试...');
		}
	}
	
	//编辑器图片上传处理
	public function upload() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->autoSub = true;
		$upload->subType = 'date';
		//$upload->dateFormat = 'Ym';

		$upload->savePath='./uploads/';
		$upload->allowExts=array('jpg','jpeg','png','gif','bmp');
		$upload->allowTypes=array('image/png','image/jpg','image/pjpeg','image/gif','image/jpeg');
		$upload->thumb=true;  //是否开启缩略图
		$upload->thumbMaxWidth='50,640';
		$upload->thumbMaxHeight='50,480';
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


	Public function login () {
		if (!IS_POST) halt('页面不存在');

		if (I('code','','md5') != session('verify')) {
			$this->error('验证码错误');
			}
		$username=I('username');
		$pwd=I('password','','md5');

		$user=M('user')->where(array('username'=>$username))->find();
		

		if (!$user || $user['password'] != $pwd) {
			$this->error('帐号或密码错误');
		}

		if ($user['lock']) $this->error('用户被锁定');

		$data=array(
			'id' => $user['id'],
			'logintime' => time(),
			'loginip' => get_client_ip(),
		);

		M('user')->save($data);

		Session('uid',$user['id']);
		Session('username',$user['username']);
		Session('class',$user['class']);
		Session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		Session('loginip',$user['loginip']);

		


		$this->redirect('Index/Index/index');


		
	}
	

}
?>