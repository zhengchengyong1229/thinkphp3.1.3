<?php
	Class IndexAction extends Action{
		public function index(){
			$this->assign('blog',M('blog')->select())->display();
		}
	}
?>