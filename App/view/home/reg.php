<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/plugins/layui/layui/css/layui.css">
	<script type="text/javascript" src="/static/plugins/layui/layui/layui.js"></script>
</head>
<body style="padding: 10px">
	<div class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">用户名</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" id="username">
			</div>
		</div>

		<div class="layui-form-item">
			<label class="layui-form-label">密码</label>
			<div class="layui-input-inline">
				<input type="password" class="layui-input" id="pwd">
			</div>
		</div>

		<div class="layui-form-item">
			<label class="layui-form-label">再输一次</label>
			<div class="layui-input-inline">
				<input type="password" class="layui-input" id="repwd">
			</div>
		</div>

		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" onclick="reg()">注册</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		layui.use(['layer'],function(){
			layer = layui.layer;
			$ = layui.jquery;
		});

		function reg(){
			var username = $.trim($('#username').val());
			var pwd = $.trim($('#pwd').val());
			var repwd = $.trim($('#repwd').val());
			if(username==''){
				layer.alert('请输入用户名',{icon:2});
				return;
			}
			if(pwd == ''){
				layer.alert('请输入密码',{icon:2});
				return;
			}
			if(repwd != pwd){
				layer.alert('两次密码不一致');
				return;
			}
			$.post('/Home/doreg',{'username':username,'pwd':pwd},function(res){
				if(res.code>0){
					layer.alert(res.msg,{icon:2});
				}else{
					layer.msg(res.msg);
					setTimeout(function(){parent.window.location.reload();},1000);
				}
			},'json');
		}
	</script>
</body>
</html>