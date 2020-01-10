<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/www/wwwroot/ql.bjoyhg.com/public/../application/login/view/index/login.html";i:1561474068;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/static/css/reset.css" />
	<link rel="stylesheet" href="/static/css/animate.css" />
	<link rel="stylesheet" href="/static/css/layout.css" />
	
	<script src="/static/js/jquery-1.9.1.min.js"></script>
	<script src="/static/js/zepto.min.js"></script>
	<script src="/static/js/fontSize.js"></script>
	<script src="/static/js/wcPop/wcPop.js"></script>
	
</head>
  <style type="text/css">
	a#J__btnreg {
    background-color: #3caf55;
}
  </style>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //登录页面 -->
			<div class="wc__lgregPanel flex1">
				<h2 class="hdtips">账号登录</h2>
				<div class="forms">
					<form action="login.html" method="post" id="loginForm" autocomplete="on">
						<ul class="clearfix">
							<li><label class="lbl flexbox"><em>账号</em><input class="iptxt flex1" type="text" name="account" placeholder="请填写登陆账号" /></label></li>
							<li><label class="lbl flexbox"><em>密码</em><input class="iptxt flex1" type="password" name="password" placeholder="请填写密码" /></label></li>
							<input type="hidden" name="tj" value ='1'/>
						</ul>
						<div class="lgway"><a href="javascript:;" class="J__swtLgWay">切换登录方式</a></div>
						<div class="btns"><a class="wc__btn-primary btn__login" id="J__btnLogin" onclick="document:loginForm.submit()" href="javascript:;">登录</a>
						<br>
						<a class="wc__btn-primary btn__reg" id="J__btnreg" href="javascript:;">注册</a>
						</div>
					</form>
				</div>
			</div>
			<!-- //底部 -->
			<div class="wc__lgregFoot">
				<ul class="clearfix">
					<li><a href="#">找回密码</a></li>
					<li><a href="#">更多</a></li>
				</ul>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		/** __公共函数 */
		$(function(){
			// ...
		});
		
		/** __自定函数 */
		$(function(){
			// 登录验证
			/**
			$("#J__btnLogin").on("click", function(){
				var account = $("#lgregForms input[name='account']").val();
				var pass = $("#lgregForms input[name='password']").val();

				if(account == ''){
					wcPop({content: '用户名不能为空！', time: 2});
				}else if(pass == ''){
					wcPop({ content: '密码不能为空！', time: 2 });
				}else{
					window.location.href = 'index.html';
				}
			});
			**/

			// 注册验证
			$("#J__btnreg").on("click", function(){
					window.location.href = 'reg.html';
			});

			// 切换登录方式
			$(".J__swtLgWay").on("click", function(){
				var loginIdx = wcPop({
					skin: 'actionsheetMini',
					// content: '<span style="color:#aaa;">弹窗内容，告知当前状态、信息和解决方法，描述文字尽量控制在三行内</span>',
					anim: 'footer',
					shadeClose: true,

					btns: [
						{
							text: '用密码登录',
							style: 'color:#343434;line-height:50px;',
							onTap() {
								//回调提示
								wcPop({
									anim: 'fadeIn',
									content: '您点击了用密码登录',
									shade: true,
									time: 2
								});
							}
						},
						{
							text: '用短信验证码登录',
							style: 'color:#343434;line-height:50px;',
						}
					]
				});
			});
		});
	</script>
	
</body>
</html>
