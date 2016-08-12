<?php


class IndexAction extends Action
{

    //系统首页
    public function index()
    {



		if(!empty($_POST['username'])){

		Session::set('username',$_POST['username']);

		}

		if(!empty($_POST['id'])){

		Session::set('uid',$_POST['id']);

		}

		if(!empty($_POST['class'])){

		Session::set('class',$_POST['class']);

		}

		$count = M('user')->count();

		$this->huiyuan = $count;

		$this->display();


		/*
		if(!empty($_POST)){
               $user=D('user');

               if ($user->create($_POST)) {
               $_SESSION['username']=$name;
				//session('username',$name);

               $this->assign('username',$name);
                   $this->success('恭喜您，登录成功',U('Index/Index/index'));
               }else{
               $this->error($model->getError());
               }
           }
        $this->display();
		*/
    }


	public function logout () {
			session_unset();
			session_destroy();
			$this->redirect('Index/Index/index');
	}

    

}