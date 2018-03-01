<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/plugins/layui/layui/css/layui.css">
	<script type="text/javascript" src="/static/plugins/layui/layui/layui.js"></script>
</head>
<body style="padding: 10px;">
	<div class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">用户名</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" id="username">
			</div>
		</div>

		<div class="layui-form-item">
			<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
			<div class="layui-input-inline">
				<input type="password" class="layui-input" id="password">
			</div>
		</div>

		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" onclick="login()">登录</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		layui.use(['layer'],function(){
			layer = layui.layer;
			$ = layui.jquery;
		});

		function login(){
			var username = $.trim($('#username').val());
			var password = $.trim($('#password').val());
			if(username==''){
				layer.alert('请输入用户名', {icon:2});
				return;
			}
			if(password==''){
				layer.alert('请输入密码', {icon:2});
				return;
			}
			$.post('/Home/dologin',{'username':username,'password':password},function(res){
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