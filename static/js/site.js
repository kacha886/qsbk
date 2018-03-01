
layui.use(['layer','laypage'],function(){
	layer = layui.layer;
	$ = layui.jquery;
	laypage = layui.laypage;

	// 分页
	pagination();
});

// 登录
function login(){

	layer.open({
		type:2,
		title:'登录',
		area:['380px','230px'],
		content:'/Home/login'
	});
}

// 退出
function logout(){
	layer.confirm('确定要退出吗？', {
	  btn: ['确定','取消'] //按钮
	}, function(){
	  $.post('/Home/logout',function(res){
	  	layer.msg(res.msg);
	  	setTimeout(function(){window.location.reload();},1000);
	  },'json');
	});
}

// 注册
function regist(){
	layer.open({
		type:2,
		title:'注册',
		area:['380px','260px'],
		content:'/Home/reg'
	});
}

// 发贴
function publish(){
	layer.open({
		type:2,
		title:'发贴',
		area:['780px','600px'],
		content:'/Article/publish'
	});
}