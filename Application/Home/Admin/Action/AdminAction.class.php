<?php

Class AdminAction extends Action {

	public function manager () {

		$this->assign('info',M('admin')->select())->display();

	}

		public function addreg(){
			if($_POST["username"]=="")
			 {
			   echo "<script language=javascript>alert('用户昵称不能为空');</script>"; 
			 }
			   if($_POST["password"]=="")
			 {
			   echo "<script language=javascript>alert('密码不能为空');</script>"; 
			 }
			 if (!isset($_POST['rpassword']) OR ($_POST['rpassword'] != $_POST['password'])) {
			  echo "<script language=javascript>alert('两次密码不一样');</script>";
			 }

			 $data = array(
				 
				'username' => $_POST['username'],
				'password' => md5($_POST['password']),
				'regtime'  => time()

			 );

			 if (M('admin')->data($data)->add()) {
				$this->success('管理员添加成功','manager');
			 }else{
				$this->error('管理员添加失败，请重试。。。');
			 }


		}

		public function delete () {

			$id = I('id','','intval');

			if (M('admin')->where(array('id'=>$id))->delete()) {
				$this->success('删除成功',U('Admin/Blog/index'));
			}else{
				$this->error('删除失败');
			}

		}


}

?>