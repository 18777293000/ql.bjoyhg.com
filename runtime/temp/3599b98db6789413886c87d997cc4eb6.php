<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/www/wwwroot/ql.bjoyhg.com/public/../application/admin/view/index/settings.html";i:1578149360;s:63:"/www/wwwroot/ql.bjoyhg.com/application/admin/view/leftlist.html";i:1578149360;}*/ ?>
<!--网站WEB 小程序 android APP定制开发qq:839070295-->
<!DOCTYPE html>
<html>
  <head>
    <title>聊天室后台系统</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="/static/admin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/static/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/static/admin/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/static/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/static/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/static/admin/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/static/admin/css/main.css?version=4.4.0" rel="stylesheet">
  </head>
  <!--menu-position-side menu-side-left full-screen with-content-panel-->
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
    
	  <!--网站WEB 小程序 android APP定制开发qq:839070295-->
 
 <div class="layout-w">
	 
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="index.html"><img src="/static/admin/img/logo.png"><span>管理员</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="/static/admin/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                 <?=cookie("admin")?>
                </div>
                <div class="logged-user-role">
                  超级管理员
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <!--
              <li class="has-sub-menu">
                <a href="layouts_menu_top_image.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>聊天室操作</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="layouts_menu_side_full.html">聊天室列表</a>
                  </li>
                </ul>
              </li>
			  <li class="has-sub-menu">
                <a href="layouts_menu_top_image.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>用户管理</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="layouts_menu_side_full.html">用户列表</a>
                  </li>
                </ul>
              </li>
              -->
            	<li class="selected">
              <a href="/">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
              <span></span>首页</a>
            </li>
            <li class="selected">
              <a href="/admin">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>聊天室管理</span></a>
             <!-- <div class="sub-menu-w">
                <div class="sub-menu-header">
                  聊天室操作
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="index.html">聊天室列表</a>
                    </li>
					
                  </ul>
                </div>
              </div>-->
            </li>
			 <li class="selected">
              <a href="/admin/index/usercenter">
                <div class="icon-w">
                 <div class="os-icon os-icon-layout"></div>
                </div>
                <span>用户管理</span></a>
            </li>
			
           <!--  <li class="selected">
              <a href="/admin/index/compactcard">
                <div class="icon-w">
                 <div class="os-icon os-icon-layout"></div>
                </div>
                <span>生成群卡</span></a>
            </li>-->
			<li class="selected ">
              <a href="/admin/index/groupchat">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>聊天记录</span></a>
            </li>

			<!--<li class="selected ">
              <a href="/admin/index/chatold">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>管理私聊记录</span></a>
            </li>-->

			
			<li class="selected ">
              <a href="/admin/index/fdchat">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>好友聊天记录</span></a>
            </li>

			<li class="selected ">
              <a href="/admin/index/settings">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>系统设置</span></a>
            </li>

			<li class="selected ">
              <a href="/admin/index/logout">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>退出登陆</span></a>
            </li>
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            <div class="mobile-menu-magic">
			 <h4>
              聊天系统
            </h4>
            <p>
              qq:839070295
            </p>
            <div class="btn-w">
              <a class="btn btn-white btn-rounded" href="##" target="_blank">购买程序</a>
            </div>
           
            </div>
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        -------------------->
		
		<!--------------------
       PC左侧列表
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="index.html">
              <div class="logo-element"></div>
              <div class="logo-label">
               超级管理员
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="/static/admin/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <?=cookie("admin")?>
                </div>
                <div class="logged-user-role">
                  系统管理员
                </div>
              </div>
            </div>
          </div>

          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>系统操作</span>
            </li>
			<!--has-sub-menu 下标箭头-->
			<li class="selected">
              <a href="/">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                 <span>网站首页</span></a>
            </li>
            <li class="selected">
              <a href="/admin">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>聊天室管理</span></a>
             <!-- <div class="sub-menu-w">
                <div class="sub-menu-header">
                  聊天室操作
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="index.html">聊天室列表</a>
                    </li>
					
                  </ul>
                </div>
              </div>-->
            </li>
			 <li class="selected">
              <a href="/admin/index/usercenter">
                <div class="icon-w">
                 <div class="os-icon os-icon-layout"></div>
                </div>
                <span>用户管理</span></a>
            </li>
			
           <!--  <li class="selected">
              <a href="/admin/index/compactcard">
                <div class="icon-w">
                 <div class="os-icon os-icon-layout"></div>
                </div>
                <span>生成群卡</span></a>
            </li>-->
			<li class="selected ">
              <a href="/admin/index/groupchat">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>聊天记录</span></a>
            </li>

		<!--<li class="selected ">
              <a href="/admin/index/chatold">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>管理私聊记录</span></a>
            </li>-->

			
			<li class="selected ">
              <a href="/admin/index/fdchat">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>好友聊天记录</span></a>
            </li>

			<li class="selected ">
              <a href="/admin/index/settings">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>系统设置</span></a>
            </li>

			<li class="selected ">
              <a href="/admin/index/logout">
			    <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>退出登陆</span></a>
            </li>
			
          </ul>
         
        </div> 
     
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
         
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">首页</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/index/settings">系统设置</a>
            </li>
        
          </ul>
          
  <div class="col-sm-7">
    <div class="element-wrapper">
      <div class="element-box">
       
          <div class="element-info">
            <div class="element-info-with-icon">
              <div class="element-info-icon">
                <div class="os-icon os-icon-wallet-loaded"></div>
              </div>
              <div class="element-info-text">
                <h5 class="element-inner-header">
                  系统设置
                </h5>
                <div class="element-inner-desc">
                注意务必记住自己修改信息,修改后需要重新用新账号登陆
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> 管理员账号密码更改</label>
			<input class="form-control" data-error="Your email address is invalid" value="<?php echo $admininfo['name']; ?>" id="user" name="user" required="required" vatype="text">
            <div class="help-block form-text with-errors form-control-feedback"></div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> 密码</label><input class="form-control" data-minlength="6" placeholder="密码" name="pw" id="pw"  type="text" value="<?php echo $admininfo['pw']; ?>">
                <div class="help-block form-text text-muted form-control-feedback">
                 必须大于六位
                </div>
              </div>
            </div>
		<!--
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">再次输入密码</label><input class="form-control"  name="pw2" placeholder="再次输入密码"  type="text">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>
            </div>
			-->
          </div>

		    <div class="form-group">
                <label for="">网站标题</label><input class="form-control"  name="title" id="title" placeholder="聊天室系统"  type="text" value="<?php echo $settings[0]['title']; ?>">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>
		   
           <div class="form-group">
                <label for="">朋友圈载入链接</label><input class="form-control"  name="qyj" id="pyq" placeholder="朋友圈载入链接比如http://www.baidu.com"  type="text" value="<?php echo $settings[0]['pyq']; ?>">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>

			   <div class="form-group">
                <label for="">设置官方客服填入注册账号即可,留空则不显示</label><input class="form-control"  name="kf" id="kf" placeholder="在线客服账号"  type="text" value="<?php echo $settings[0]['kf']; ?>">
                <div class="help-block form-text with-errors form-control-feedback"></div>
              </div>
          
          <div class="form-group">
            <label for=""> 新建聊天室是否需要审核</label><select class="form-control" name="examine" id="sh">
              <option value="0" <?php if($settings[0]['data'] == '0'): ?>selected<?php endif; ?>>
                是
              </option>
              <option value="1" <?php if($settings[0]['data'] == '1'): ?>selected<?php endif; ?>>
                否
              </option>
              
            </select>
          </div>

		 

		  <div class="form-group">
            <label for=""> 是否开启自动注册</label><select class="form-control" name="reg" id="reg">
              <option value="0" <?php if($settings[0]['reg'] == '0'): ?>selected<?php endif; ?>>
                是
              </option>
              <option value="1" <?php if($settings[0]['reg'] == '1'): ?>selected<?php endif; ?>>
                否
              </option>
              
            </select>
          </div>
		  <!--
          <div class="form-group">
            <label for=""> Multiselect</label><select class="form-control select2" multiple="true">
              <option selected="true">
                New York
              </option>
              <option selected="true">
                California
              </option>
              <option>
                Boston
              </option>
              <option>
                Texas
              </option>
              <option>
                Colorado
              </option>
            </select>
          </div>
		  <!--
          <fieldset class="form-group">
            <legend><span>Section Example</span></legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> First Name</label><input class="form-control" data-error="Please input your First Name" placeholder="First Name" required="required" type="text">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Last Name</label><input class="form-control" data-error="Please input your Last Name" placeholder="Last Name" required="required" type="text">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Date of Birth</label><input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Twitter Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        @
                      </div>
                    </div>
                    <input class="form-control" placeholder="Twitter Username" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Date Range Picker</label><input class="multi-daterange form-control" type="text" value="03/31/2017 - 04/06/2017">
            </div>
            <div class="form-group">
              <label> Example textarea</label><textarea class="form-control" rows="3"></textarea>
            </div>
          </fieldset>
          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to terms and conditions</label>
          </div>-->
          <div class="form-buttons-w">
            <button class="btn btn-primary" id="post" type="submit">保存设置</button>
          </div>
       
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="/static/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/static/admin/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="/static/admin/bower_components/moment/moment.js"></script>
    <script src="/static/admin/bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="/static/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="/static/admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="/static/admin/bower_components/ckeditor/ckeditor.js"></script>
    <script src="/static/admin/bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="/static/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/static/admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="/static/admin/bower_components/dropzone/dist/dropzone.js"></script>
    <script src="/static/admin/bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="/static/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/static/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/static/admin/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/static/admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/static/admin/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="/static/admin/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/util.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/button.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="/static/admin/bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="/static/admin/js/demo_customizer.js?version=4.4.0"></script>
    <script src="/static/admin/js/main.js?version=4.4.0"></script>
    <script>
      
      
        $(function(){
	$("#post").on("click", function(){
		
		


	 $.post("/operate/index/admininfo",
    {
      pw:$("#pw").val(),
	  id:$("#user").val(),
	  idd:<?php echo $admininfo['id']; ?>,
	  sh:$("#sh").val(),
	  reg:$("#reg").val(),
	  pyq:$("#pyq").val(),
	  kf:$("#kf").val(),
	  title:$("#title").val(),
	  //content:$("#content").val(),
    },
    function(data,status){
		if(data==1){
			Toast('修改成功',3000);
			// window.location.reload();
		}
		//document.getElementById("user").innerHTML=data;
		
    });
	
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
  </body>
</html>
