<?php
	Class IndexAction extends CommonAction{

		public function index(){

			import('ORG.Util.Page');

			$count = M('blog')->count();
			$page = new Page($count,15);
			$limit =  $page->firstRow.','.$page->listRows;
			$blog = M('blog')->order('time DESC')->limit($limit)->select();
			$this->blog = $blog;
			$this->page = $page->show();
			$this->display();

			//$this->assign('blog',M('blog')->select())->display();

		}

		public function logout () {
			session_unset();
			session_destroy();
			$this->redirect('Admin/Login/index');
		}

		public function delete () {

			$id = I('id','','intval');

			if (M('blog')->where(array('id'=>$id))->delete()) {
				$this->success('删除成功',U('Admin/Blog/index'));
			}else{
				$this->error('删除失败');
			}

		}


	}
?>