<?php

/**
* 
*/
class Article extends Base
{
	
	// 发贴
	public function publish(){
		$data['cates'] = Db::lists('cates',array());
		
		FrameWork::view('/article/publish.php',$data);
	}

	public function dopublish(){
		$data['title'] = trim(post('title'));
		$data['cid'] = (int)post('cate');
		$data['message'] = trim(post('message'));
		if($data['title']==''){
			exit(json_encode(array('code'=>1,'msg'=>'标题不能为空')));
		}
		if($data['cid'] <= 0){
			exit(json_encode(array('code'=>1,'msg'=>'分类不正确')));
		}

		if($data['message']=='<p><br></p>'){
			exit(json_encode(array('code'=>1,'msg'=>'贴子内容不能为空')));
		}
		$data['message'] = htmlspecialchars($data['message']);
		$data['uid'] = $this->user['uid'];
		$data['status'] = 1;
		$data['add_time'] = time();
		$res = Db::insert('article',$data);
		if(!$res){
			exit(json_encode(array('code'=>1,'msg'=>'发布失败')));
		}
		exit(json_encode(array('code'=>0,'msg'=>'发布成功')));
	}
}