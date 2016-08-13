<?php


class RencaiAction extends Action
{

    //影视人才首页
    public function index()
    {
       
        $this->display();
    }

	//企业招聘消息发布
	public function addzhaopin(){
		
		if(!empty($_POST['username'])){

		Session::set('username',$_POST['username']);

		}

		if(!empty($_POST['id'])){

		Session::set('uid',$_POST['id']);

		}

		$data = array(
			'pid' => $_SESSION['uid'],
			'biaoti' => $_POST['biaoti'],
			'address' =>$_POST['address'],
			'xueli' => $_POST['xueli'],
			'jingyan' =>$_POST['jingyan'],
			'renshu' => $_POST['renshu'],
			'yuexin' =>$_POST['yuexin'],
			'tel' => $_POST['tel'],
			'wuxian' => $_POST['wuxian'],
			'jieri' => $_POST['jieri'],
			'jiaotong' => $_POST['jiaotong'],
			'tongxun' => $_POST['tongxun'],
			'canbu' => $_POST['canbu'],
			'baochi' => $_POST['baochi'],
			'baozhu' => $_POST['baozhu'],
			'fenhong' => $_POST['fenhong'],
			'nianjia' =>$_POST['nianjia'],
			'tijian' => $_POST['tijian'],
			'regtime' => time(),
			'content' => $_POST['content'],
			'bumen' => $_POST['bumen'],
			'lianxiren' => $_POST['lianxiren'],
			'zhuanye' => $_POST['zhuanye'],
			'shangji' => $_POST['shangji']
			//'image'=>$a[0]['savename']
		);

		if (M('zhaopin')->data($data)->add()) {
			$this->success('招聘信息发布成功',U('Index/Index/index'));
		}else{
			$this->error('招聘信息发布失败,请重试...');
		}

	}

	//展示页面
	Public function alist(){

		$list = M('zhaopin');
		
		$id = (int)$_GET['id'];

		$alist=$list->table(array('think_zhaopin'=>'zhaopin','think_user_qiye'=>'qiye'))->where(array('id'=>$id))->find();

		//$data = $list->table('think_zhaopin a,think_user_qiye b')->where(array("a.pid"=>"b.id","a.id"=>$id))->find();
	
        $this->assign('mlist',$alist);
        $this->display();

	}


	//	more 页面展示
	Public function more () {

		import('ORG.Util.Page');

			$count = M('zhaopin')->count();
			$page = new Page($count,20);
			$limit =  $page->firstRow.','.$page->listRows;
			$blog = M('zhaopin')->order('time DESC')->limit($limit)->select();
			//$this->blog = $blog;
			//$this->aid = $_GET['id'];
			$this->page = $page->show();

		
		$this->assign('qlist',M('zhaopin')->table(array('think_zhaopin'=>'zhaopin','think_user_qiye'=>'qiye'))->where('qiye.pid=zhaopin.pid')->order('id DESC')->select())->display();
	}


}