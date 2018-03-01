<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/plugins/layui/layui/css/layui.css">
	<script type="text/javascript" src="/static/plugins/layui/layui/layui.js"></script>
	<script type="text/javascript" src="/static/plugins/wangEditor/release/wangEditor.min.js"></script>
</head>
<body style="padding: 10px">
	<div class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">标题</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" id="title">
			</div>
		</div>

		<div class="layui-form-item">
			<label class="layui-form-label">分类</label>
			<div class="layui-input-inline">
				<select id="cate">
					<option value=0></option>
					<?php foreach($data['cates'] as $cate){?>
					<option value="<?=$cate['cid']?>"><?=$cate['title']?></option>
					<?php }?>
				</select>
			</div>
		</div>

		<!--接入富文本编辑器-->
		<div class="layui-form-item">
			<label class="layui-form-label">贴子内容</label>
			<div class="layui-input-block">
				<div id="editor"></div>
			</div>
		</div>

		<div class="layui-form-item">
			<div class="layui-input-block">
				<button id="btn" class="layui-btn" onclick="publish()">发布</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		layui.use(['form','layer'],function(){
			form = layui.form;
			$ = layui.jquery;
		});

        var E = window.wangEditor;
        var editor = new E('#editor');
        // 配置菜单
        // 自定义菜单配置
	    editor.customConfig.menus = [
	        'head',  // 标题
		    'bold',  // 粗体
		    'italic',  // 斜体
		    'underline',  // 下划线
		    'strikeThrough',  // 删除线
		    'foreColor',  // 文字颜色
		    'backColor',  // 背景颜色
		    'link',  // 插入链接
		    'list',  // 列表
		    'justify',  // 对齐方式
		    'quote',  // 引用
		    'emoticon',  // 表情
		    'image',  // 插入图片
		    'table',  // 表格
	    ];
	    editor.customConfig.zIndex = 9;
        editor.create();

        // 发贴
        function publish(){
        	var data = new Object();

        	data.title = $.trim($('#title').val());
        	data.cate = $.trim($('#cate').val());
        	// 获取富文本编辑器的内容
        	data.message = editor.txt.html();

        	if(data.title==''){
        		layer.alert('请输入贴子标题',{icon:2});
        		return;
        	}
        	if(data.cate == 0){
        		layer.alert('请选择贴子分类',{icon:2});
        		return; 
        	}
        	if(data.message=='<p><br></p>'){
        		layer.alert('请输入贴子内容',{icon:2});
        		return;
        	}

        	$('#btn').attr('disabled',true);
        	$.post('/Article/dopublish',data,function(res){
        		if(res.code>0){
        			$('#btn').attr('disabled',false);
        			layer.alert(res.msg,{icon:2});
        		}else{
        			layer.msg(res.msg);
        			setTimeout(function(){window.location.reload();},1000);
        		}
        	},'json');
        }
    </script>
</body>
</html>