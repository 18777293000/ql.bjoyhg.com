<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/www/wwwroot/ql.bjoyhg.com/public/../application/admin/view/index/fdchat.html";i:1578149360;s:63:"/www/wwwroot/ql.bjoyhg.com/application/admin/view/leftlist.html";i:1578149360;}*/ ?>
<!--网站WEB 小程序 android APP定制开发qq:839070295-->
<!DOCTYPE html>
<html>
  <head>
    <title>聊天室聊天记录</title>
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
  <body class="menu-position-side menu-side-left full-screen">
   <div class="all-wrapper solid-bg-all">
      <!--左侧菜单移动+PC-->
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
       <!--顶部-->
	   <!--include file="top" /-->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">首页</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/index/groupchat">聊天室记录</a>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <!--<h6 class="element-header">
                  Data Tables
                </h6>-->
                <div class="element-box">
                  <h5 class="form-header">
                    好友聊天记录
                  </h5>
                  <div class="form-desc">
                   好友聊天记录
                  </div>
                  <div class="table-responsive">
				 <!-- id="dataTable1"-->
                    <table  width="100%" class="table table-striped table-lightfont">
					<thead><tr>
					<th>好友用户</th>
					
					
					<th>内容</th>
					<th>时间</th>
					<th>操作</th>
					</tr>
					</thead>

					<tfoot><tr>
					<th>好友用户</th>
					
					
					<th>内容</th>
					<th>时间</th>
					<th>操作</th>
					</tr></tfoot>
					
					<tbody>
				    <?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr class="del<?php echo $vo['id']; ?>">
					<td>"<?php echo useraccount($vo['fid']); ?>"对"<?php echo useraccount($vo['userid']); ?>"说</td>
					
					<td class="content">
					<button class="btn btn-success m-2" data-placement="top" data-toggle="tooltip" title="" type="button" data-original-title="<?php echo $vo['content']; ?>"><?php echo substr($vo['content'],0,50); ?></button>
					</td>
					<td><?php echo date("Y-m-d",$vo['time']); ?></td>
					<td><a class="btn btn-sm btn-danger" href="javascript:;" onclick="groupdel(<?php echo $vo['id']; ?>)" >删除</a></td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody></table>
                    <!--分页-->
                    <div class="controls-below-table">
        <div class="table-records-pages">
          <ul>
            <?php echo $userlist->render(); ?>
          
          </ul>
        </div>
      </div>
      <!--分页结束-->
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
    <script src="/static/admin/js/dataTables.bootstrap4.min.js"></script>
    <script src="/static/admin/js/demo_customizer.js?version=4.4.0"></script>
    <script src="/static/admin/js/main.js?version=4.4.0"></script>
    <script>
	  function groupdel(id){
	   // if(confirm("是否确认删除")){			
		$.post("/index.php/operate/index/chatdel",
			{
		 id:id,//用户ID
		 },
	 function(data,status){
		if(data==1){
		Toast("删除成功",2000)
		$(".del"+id).hide()
		//window.location.reload();
		}else{
			Toast("没有权限",2000)
		}
    });
	//	}
	  }
      //-->
     
      
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