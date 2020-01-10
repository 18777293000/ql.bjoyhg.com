<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/wwwroot/ql.bjoyhg.com/public/../application/member/view/index/addfd.html";i:1561474068;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>添加好友</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/static/css/reset.css" />
	<link rel="stylesheet" href="/static/css/animate.css" />
	<link rel="stylesheet" href="/static/css/swiper-3.4.1.min.css" />
	<link rel="stylesheet" href="/static/css/layout.css" />
	
	<script src="/static/js/jquery-1.9.1.min.js"></script>
	<script src="/static/js/zepto.min.js"></script>
	<script src="/static/js/fontSize.js"></script>
	<script src="/static/js/swiper-3.4.1.min.js"></script>
	<script src="/static/js/wcPop/wcPop.js"></script>
	
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<a class="back" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">添加好友</h2>
					<!--<a class="batBtn" href="javascript:;">保存</a>-->
				</div>
			</div>

			<!-- //个人信息页 -->
			<div class="wc__ucinfoPanel">
				<div class="wc__ucinfo-personal">
				<form action="/member/index/addfd" method="post" id="loginForm" autocomplete="on">
					<ul class="clearfix">
						<li>
							<!--<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">群图标</label>
								<div id="shopimgdata">
								<img class="uimg" src="/static/img/uimg/u__chat-img11.jpg" />
								<input type="hidden" name="grouptx" value ="/static/img/uimg/u__chat-img11.jpg"/>
								</div>
								<input class="chooseImg" type="file" id="idzfilezt" accept="image/*" />
								
							</div>-->
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">好友账号</label>
								<input class="val" name="name" type="text" placeholder="请输入账号" required="required"/>
							</div>
							<input type="hidden" name="userid" value ="<?=cookie('name')?>"/>
							<!--<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">群号</label>
								<input class="val" name="" type="text" value="wQQ2018" />
							</div>-->
							<!--<div class="item flexbox flex-alignc wc__material-cell">
								<textarea name="groupinfo" class="area flex1" placeholder="请输入群介绍"></textarea>
							</div>-->
							<br>
							<div class="btns"><a class="wc__btn-primary btn__login" onclick="document:loginForm.submit()" href="javascript:;">查找好友</a></div>
							
						</li>
					</ul>
					</form>
				</div>
			</div>
<br>
<!--查找好友列表-->
<div class="wc__addrFriend-list" id="J__addrFriendList">
									<ul class="clearfix">
									<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li>
									<a href="/index/index/fdinfo.html?id=<?php echo $vo['id']; ?>"><div class="row flexbox flex-alignc wc__material-cell" >
												<img class="uimg" src="<?php echo $vo['tx']; ?>" /><span class="name flex1"><?php echo $vo['name']; ?></font></span>
											</div>
											</a>
											</li>
											<?php endforeach; endif; else: echo "" ;endif; ?>
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
			// ...
		});

		//头像上传
		function uploadPictx(formData) {
            var oReq = new XMLHttpRequest();
            oReq.open("POST", "/message/index/grouptx?name=74&kf=14&zt=0", true);
            oReq.onload = function (oEvent) {
                if (oReq.status == 200) {
					//msgWrapper.innerHTML += oReq.response;
					//$('#msgWrapper').scrollTop( $('#msgWrapper')[0].scrollHeight );//滚动条至底部
					html=oReq.response;
					$('#shopimgdata').html(html);

					// $('#uptpzt').html(html);

                } else {
					//msgWrapper.innerHTML += '';
					//document.getElementById("msgWrapper").innerHTML=oReq.status;

                }
            };

            oReq.send(formData);
        }

		$("#uptpzt").click(function(){
        $("#idzfilezt").click();
});
$("#uptpztzt").click(function(){
        $("#idzfilezt").click();
});
//用户头像上传
	$("#idzfilezt").change(function(){
	//console.log('头像主图');
    lrz(this.files[0],{width:800})
    .then(function (rst) {
        // 处理成功会执行
		//$('#shopimgdata').html('<img src="/Public/images/dd.gif">');
		Toast('图片已经提交请耐心等待',5500)
        var img = new Image();
        img.src = rst.base64;
        var type;
        type = 'idzfile2';
		//console.log(img.src);
		uploadPictx(img.src);
       // up_ajax(rst.base64,type);

    });
});

	$("#photoFile").change(function(){
	//console.log('主图');
    lrz(this.files[0],{width:800})
    .then(function (rst) {
        // 处理成功会执行
		Toast('图片已经提交请耐心等待',5500)
        var img = new Image();
        img.src = rst.base64;
        var type;
        type = 'idzfile2';
		//console.log(img.src);
		uploadPic(img.src);
       // up_ajax(rst.base64,type);

    });
});

function Toast(msg,duration){  
    duration=isNaN(duration)?3000:duration;  
    var m = document.createElement('div');  
    m.innerHTML = msg;  
    m.style.cssText="width: 60%;min-width: 150px;opacity: 0.7;height: 30px;color: rgb(255, 255, 255);line-height: 30px;text-align: center;border-radius: 5px;position: fixed;top: 40%;left: 20%;z-index: 999999;background: rgb(0, 0, 0);font-size: 12px;";  
    document.body.appendChild(m);  
    setTimeout(function() {  
        var d = 0.5;  
        m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';  
        m.style.opacity = '0';  
        setTimeout(function() { document.body.removeChild(m) }, d * 1000);  
    }, duration);  
}  
	</script>
	<!--<script src="http://q.pxqiye.com/Public/lrz/lrz/lrz.all.bundle.js" type="text/javascript"></script>-->
</body>
</html>
