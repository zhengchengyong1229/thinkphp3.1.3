<?php
Class BaseAction extends Action {

	Public function index () {
		$this->display();
	}

	Public function top () {
		
		$id = $_GET['id'];

		$this->assign('top',M('admin')->where("id=$id")->select())->diaplay();
	}



}
?>