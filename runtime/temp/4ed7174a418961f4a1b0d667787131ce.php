<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/www/wwwroot/ql.bjoyhg.com/public/../application/index/view/index/index.html";i:1578157778;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $settings['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/static/css/reset.css" />
	<link rel="stylesheet" href="/static/css/animate.css" />
	<link rel="stylesheet" href="/static/css/swiper-3.4.1.min.css" />
	<link rel="stylesheet" href="/static/css/layout.css?12" />
	
	<script src="/static/js/jquery-1.9.1.min.js"></script>
	<script src="/static/js/zepto.min.js"></script>
	<script src="/static/js/fontSize.js"></script>
	<script src="/static/js/swiper-3.4.1.min.js"></script>
	<script src="/static/js/wcPop/wcPop.js"></script>
	  <style type="text/css">
	  /**
	p.desc.clamp2 {
    width:250px;
    white-space:nowrap;
    text-overflow:ellipsis;
    overflow:hidden;
}
        .wechat__tabBar {
    background: #fbf9fe;
    max-width: 750px;
    width: 100%;
    z-index: 1005;
    position: fixed;
    bottom: 0px;
}
**/
  </style>
</head>
<body class="overflow">
	
	<!-- <>聊天室主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<h2 class="barTit barTitLg flex1">微聊<em class="ff-ar"><!--(105)--></em></h2>
					<a class="barIco sear" href="/member/index/addfd.html" id="J__topbarSear"></a>
				</div>
			</div>

			<!-- //4个tabBar滑动切换 -->
			<div class="wc__swiper-tabBar flex1">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<!-- //1、）聊天室主页-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<!-- //聊天记录信息 -->
								<div class="wc__recordChat-list" id="J__recordChatList">
									<ul class="clearfix">
									<!--在线客服-->
									<?php if(userid($settings['kf']) != ''): ?>
									 <li class="flexbox flex-alignc wc__material-cell" routeurl="/index/index/chat.html?id=<?php echo userid($settings['kf']); ?>">
											<div class="img"><img src="/static/img/kftx.jpg"></div>
											<div class="info flex1">
                                              <h2 class="title"><font color="red">在线客服</font></h2>
											</div>
										</li>
									<?php endif; ?>
									<!--end-->
								<!--私聊消息-->
								<div id="sldata"></div>
									<!--私聊消息结束-->
									<!--群组-->
									<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/groupchat.html?id=<?php echo $vo['id']; ?>">
									<?php
									$grouplists=groupcount($vo['id']);
									if(count($grouplists) > '8'): ?>
									<div class="img imgs">
									<?php if(is_array($grouplists) || $grouplists instanceof \think\Collection || $grouplists instanceof \think\Paginator): $i = 0; $__LIST__ = $grouplists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$num): $mod = ($i % 2 );++$i;?>
								<img src="<?php echo (tx($num['userid']) ?: "/static/img/uimg/u__qun-img02.jpg"); ?>" />
								<?php endforeach; endif; else: echo "" ;endif; ?>
											</div>
									<?php else: ?>
							<div class="img">
								<img src="<?php echo (isset($vo['img']) && ($vo['img'] !== '')?$vo['img']:"/static/img/uimg/u__qun-img02.jpg"); ?>" />
											</div>
									<?php endif; ?>
									
											<div class="info flex1">
												<h2 class="title"><?php echo $vo['title']; ?></h2>
												<p class="desc clamp2"><?php echo $vo['content']; ?></p>
											</div>
											<label class="time flex-selft"><?php echo date("H:s",$vo['time']); ?></label>
										</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									<!--群组结束-->

									
									<!--
										<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/groupchat.html">
											<div class="img"><img src="/static/img/uimg/u__qun-img02.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">FIFA世界杯交流群</h2>
												<p class="desc clamp2">今晚葡萄牙VS摩洛哥，葡萄牙将在这场比赛收获首胜，推荐C罗进球2或3个，推荐比分2-0或2-1，敬请期待。</p>
											</div>
											<label class="time flex-selft">23:05</label>
										</li>


										<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/groupchat.html">
											<div class="img"><img src="/static/img/uimg/u__qun-img01.jpg" /><em class="wc__badge">105</em></div>
											<div class="info flex1">
												<h2 class="title">快3幸运彩</h2>
												<p class="desc clamp2">注册或兑换积分请联系QQ注册大使：17216510</p>
											</div>
											<label class="time flex-selft">10:25</label>
										</li>
										<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/groupchat.html">
											<div class="img imgs">
												<img src="/static/img/uimg/u__chat-img01.jpg" />
												<img src="/static/img/uimg/u__chat-img02.jpg" />
												<img src="/static/img/uimg/u__chat-img03.jpg" />
												<img src="/static/img/uimg/u__chat-img04.jpg" />
												<img src="/static/img/uimg/u__chat-img05.jpg" />
												<img src="/static/img/uimg/u__chat-img06.jpg" />
												<img src="/static/img/uimg/u__chat-img07.jpg" />
												<img src="/static/img/uimg/u__chat-img08.jpg" />
												<img src="/static/img/uimg/u__chat-img09.jpg" />
											</div>
											<div class="info flex1">
												<h2 class="title">云栖大讲堂知识交流群</h2>
												<p class="desc clamp2">最近杭州这里有没有线下的会议?</p>
											</div>
											<label class="time flex-selft">昨天</label>
										</li>
										<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/chat.html">
											<div class="img"><img src="/static/img/uimg/u__chat-img04.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">张小龙</h2>
												<p class="desc clamp2">早上好，这次微聊线下活动的视频及PPT预计明天可以公开啦</p>
											</div>
											<label class="time flex-selft">6月18日</label>
										</li>
										<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/groupchat.html">
											<div class="img imgs">
												<img src="/static/img/uimg/u__chat-img02.jpg" />
												<img src="/static/img/uimg/u__chat-img08.jpg" />
												<img src="/static/img/uimg/u__chat-img09.jpg" />
											</div>
											<div class="info flex1">
												<h2 class="title">闺蜜悄悄话群</h2>
												<p class="desc clamp2">昨晚偷偷试了下闺蜜的硅藻面膜，效果不错喔，皮肤果然白皙了狠多！</p>
											</div>
											<label class="time flex-selft">6月15日</label>
										</li>-->
									</ul>
								</div>
							</div>
						</div>
						<style type="text/css">
							i.ico.i1.news {
    background: url(/static/img/new.png) no-repeat center;
    background-size: 0.75rem;
    display: inline-block;
    vertical-align: top;
    margin-right: .2rem; 
    height: .7rem;
    width: .7rem;
}
						</style>
						<!-- //2、通讯录-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__addrFriend-list" id="J__addrFriendList">
                             
									<ul class="clearfix">
									<li>
									<div class="row flexbox flex-alignc wc__material-cell">
									<i class="ico i1 news"><em class="wc__badge"><?php if($newsfrineds != '0'): ?><?php echo $newsfrineds; endif; ?></em></i>
									<!--
                                     <img class="uimg" src="/static/img/new.png" routeUrl="/member/index/newsfd.html">-->
   							 <span class="name flex1"  routeUrl="/member/index/newsfd.html">新朋友</span>
								<img class="uimg" src="/static/img/management.png" routeUrl="/member/index/listgroup.html">
                                      <span class="name flex1" routeUrl="/member/index/listgroup.html">群组</span>
                                
                                      <img class="uimg" src="/static/img/add_user.png" routeUrl="/member/index/addfd.html">
                                       <span class="name flex1" routeUrl="/member/index/addfd.html">添加好友</span>
												
											</div>
											</li>
									<!--
									<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="/index/index/myinfo.html">
												<img class="uimg" src="<?php echo (isset($userinfo['tx']) && ($userinfo['tx'] !== '')?$userinfo['tx']:"/static/img/uimg/u__chat-img10.jpg"); ?>" />
												<span class="txt flex1">
													<em><?php echo $name; ?></em><i>微聊号：<?php echo $name; ?></i>
												</span>
												<div class="qrcode wc__arr"></div>
											</div>
										</li>
									<!-- 通讯录-->
									
										<?php if(is_array($frineds_sz) || $frineds_sz instanceof \think\Collection || $frineds_sz instanceof \think\Paginator): $i = 0; $__LIST__ = $frineds_sz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
										<li id="<?php echo $voo['firstletter']; ?>">
											<h2 class="initial"><?php echo $voo['firstletter']; ?></h2>
											<?php if(is_array($frineds) || $frineds instanceof \think\Collection || $frineds instanceof \think\Paginator): $i = 0; $__LIST__ = $frineds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['firstletter'] == $voo['firstletter']): ?>
											<div class="row flexbox flex-alignc wc__material-cell" routeUrl="/index/index/chat.html?id=<?php echo $vo['fdid']; ?>">
												<img class="uimg" src="<?php echo tx($vo['fdid']); ?>" /><span class="name flex1"><?php echo username($vo['fdid']); ?></span>
											</div>
											<?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									
									</ul>
									<div class="total"><?php echo $fdzs; ?>位联系人</div>
								</div>
							</div>
							<!-- //字母显示 -->
							<div class="wc__addrFriend-showletter">A</div>
							<!-- //26字母 -->
							<div class="wc__addrFriend-floatletter">
								<em>A</em>
								<em>B</em>
								<em>C</em>
								<em>D</em>
								<em>E</em>
								<em>F</em>
								<em>G</em>
								<em>H</em>
								<em>I</em>
								<em>J</em>
								<em>K</em>
								<em>L</em>
								<em>M</em>
								<em>N</em>
								<em>O</em>
								<em>P</em>
								<em>Q</em>
								<em>R</em>
								<em>S</em>
								<em>T</em>
								<em>U</em>
								<em>V</em>
								<em>W</em>
								<em>X</em>
								<em>Y</em>
								<em>Z</em>
							</div>
						</div>
					


<!--4-->
	
	<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__addrFriend-list" id="J__addrFriendList">
                             <!--朋友圈-->
					 <script>
					
						</script>
						<?php if($settings['pyq'] == ''): ?>
						<iframe src="/1436/" style="position: absolute; display: block; border: 0px;  top: 0px;bottom: 617px; width: 100%; height: 100%;"></iframe>
						<?php else: ?>
						<iframe src="<?php echo $settings['pyq']; ?>" style="position: absolute; display: block; border: 0px;  top: 0px;bottom: 617px; width: 100%; height: 100%;"></iframe>
						<?php endif; ?>
						
							 	
							</div>
							</div>
						</div>			
<!--end-->
	<!-- //3、我的-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__ucenter-list" id="J__ucenterList">
									<ul class="clearfix">
										<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="/index/index/myinfo.html">
												<img class="uimg" src="<?php echo (isset($userinfo['tx']) && ($userinfo['tx'] !== '')?$userinfo['tx']:"/static/img/uimg/u__chat-img10.jpg"); ?>" />
												<span class="txt flex1">
													<em><?php echo username($userinfo['id']); ?></em><i>微聊号：<?php echo $name; ?></i>
												</span>
												<div class="qrcode wc__arr"></div>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="/member/index/listgroup.html">
												<img class="icon" src="/static/img/management.png" /><span class="txt flex1">我去过的群组</span><em class="lbl"><!--1个--></em>
											</div>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="/member/index/addgroup.html">
												<img class="icon" src="/static/img/icon_jianqun.png" /><span class="txt flex1">创建新群</span><em class="lbl"><!--1个--></em>
											</div>
										
											<div class="item flexbox flex-alignc wc__material-cell" id="J__logout">
												<img class="icon" src="/static/img/icon__uc-img05.png" /><span class="txt flex1">退出登录</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>



			

			<!-- //底部tabbar -->
			<div class="wechat__tabBar">
				<div class="bottomfixed wc__borT">
					<ul class="flexbox flex-alignc wechat-pagination">
						
						<li class="flex1 on"><i class="ico i1"><!--<em class="wc__badge">105</em>--></i><span>消息</span></li>

						<li class="flex1"><i class="ico i2"></i><span>通讯录</span></li>
						
						<li class="flex1"><i class="ico i3"></i><span>朋友圈</span></li>
						<li class="flex1"><i class="ico i4"></i><span>我</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- 左右滑屏切换.Start -->
	<script type="text/javascript"> 
		var chatSwiper = new Swiper('.swiper-container',{
			pagination: '.wechat-pagination',
			paginationClickable: true,
			paginationBulletRender: function (chatSwiper, index, className) {
				switch (index) {
					case 0:
						name='<i class="ico i1"><!--<em class="wc__badge">105</em>--></i><span>消息</span>';
						break;
					case 1:
						name='<i class="ico i2"><em class="wc__badge"><?php if($newsfrineds != '0'): ?><?php echo $newsfrineds; endif; ?></em></i><span>通讯录</span>';
						break;
					case 2:
						name='<i class="ico i3"></i><span>朋友圈</span>';
						break;
					case 3:
						name='<i class="ico i4"></i><span>我</span>';
						break;
					default: name='';
					
				}
				return '<li class="flex1 ' + className + '">' + name + '</li>';
			}
		})
	</script>
	<!-- 左右滑屏切换 end -->

	<script type="text/javascript">

	
		/** __公共函数 */
		$(function(){
			// 禁止长按弹出系统菜单
			$(".wechat__panel").on("contextmenu", function(e){
				e.preventDefault();
			});
		});
		
		/** __自定函数 */
		$(function(){
			//***1、消息-------------------------
			// 聊天记录页面（长按操作）
			$("#J__recordChatList").on("longTap", "li", function(e){
				var _this = $(this);
				wcPop({
					skin: 'androidSheet',
					shadeClose: true,

					btns: [
						/*{text: '标为未读', style: 'font-size:14px;line-height:50px;'},
						{text: '置顶聊天', style: 'font-size:14px;line-height:50px;'},*/
						{
							text: '删除该聊天',
							style: 'font-size:14px;line-height:50px;',
							onTap() {
								wcPop({
									skin: 'android',
									content: '删除后，将会清空该聊天记录',

									btns: [
										{
											text: '取消',
											onTap() {
												wcPop.close();
											}
										},
										{
											text: '删除',
											style: 'color:#ffba00',
											onTap() {
												var fdidljc = _this.attr("userid");
												console.log(fdidljc);
												delsl(fdidljc);
												_this.remove();
												wcPop.close();
											}
										}
									]
								});
							}
						}
					]
				});
			});
			// 跳转链接
			$(".wechat__panel").on("click", "*[routeUrl]", function(e){
				var routeurl = $(this).attr('routeUrl');
				if(!routeurl) return;
				window.location.href = routeurl;
			});

			//***2、通讯录-------------------------
			// 右侧浮动条
			$(".wc__addrFriend-floatletter").on("click", "em", function() {
				var letter = $(this).text();
				if($("#" + letter).length > 0){
					// 滚动到指定位置
					//$("#J__addrFriendList").parent().animate({ scrollTop: $("#" + letter).position().top}, 300);
					document.getElementById(letter).scrollIntoView();
				}
				$(".wc__addrFriend-showletter").text(letter).fadeIn(300);

				setTimeout(function(){
					$(".wc__addrFriend-showletter").fadeOut(300);
				}, 500);
			});

			// 通讯录（长按操作）
			/*
			$("#J__addrFriendList").on("longTap", ".row", function(e){
				var _this = $(this);
				wcPop({
					skin: 'androidSheet',
					shadeClose: true,

					btns: [
						{
							text: '设置备注及标签',
							style: 'font-size:14px;line-height:50px;',
							onTap() {
								wcPop.close();
							}
						}
					]
				});
			});
			*/
			//***3、我的-------------------------
			// 关于微聊系统
			$("#J__aboutChatRoom").on("click", function(){
				var aboutChat = wcPop({
					skin: 'ios',
					content: '<div>群聊系统</div>',
					//style: 'max-width: 750px',

					shadeClose: true,

					btns: [
						{
							text: '知道了',
							style: 'color:#5c93fd;',
							onTap() {
								wcPop.close(aboutChat);
							}
						}
					]
				});
			});

			// 退出登录
			$("#J__logout").on("click", function(){
				var logout = wcPop({
					skin: 'android',
					content: '确定要退出聊天室嚒？',

					btns: [
						{
							text: '取消',
							onTap() {
								wcPop.close();
							}
						},
						{
							text: '退出',
							style: 'color:#5c93fd',
							onTap() {
								window.location.href = "/login/index/logout";
								wcPop.close();
							}
						}
					]
				});
			});
		});
	</script>

	<script>
	//私聊消息
refresh_fuc();
//群消息
 function refresh_fuc(){  
	 //return;
	 $.post("/index.php/index/index/sl",
    {
      zt:"0"//状态
    },
    function(data,status){
		data1=eval(data);
		// console.log(data1);
		var html='';
		  for (var j in data1) {
			  var obj = data1[j];
			  html += '<li class="flexbox flex-alignc wc__material-cell" routeUrl="/index/index/chat.html?id=' + obj.userid + '" userid="' + obj.merge + '">\
				<div class="img"><img src="' + obj.tx + '" /></div>\
				<div class="info flex1">\
				<h2 class="title">' + obj.name + '<font color="#12328e">[私聊]</font></h2>\
				<p class="desc clamp2">' + obj.content + '</p></div>\
				<label class="time flex-selft">' + obj.time + '</label></li>'
			  
			  }
			$('#sldata').html(html);
			 // console.log(html);
      // playVid2();
	  /*
        if(data1[data1.length-1].ts<10 && ljc_id != data1[data1.length-1].userid){
       //   console.log('播放');
		playVid2();
		}
		*/
	
		//initTable(data);
		//$('#msgWrapper').scrollTop( $('#msgWrapper')[0].scrollHeight );//滚动条至底部
    });
 }

 setInterval(refresh_fuc, 5000); //刷新频率   

function delsl(merge)
{
	 $.post("/member/index/delsl",
    {
     merge:merge,//postQQ号码
    },
    function(data,status){
		//document.getElementById("user").innerHTML=data;
    });
	}
</script>
	<!--网站WEB 小程序 android APP定制开发qq:839070295-->
</body>
</html>