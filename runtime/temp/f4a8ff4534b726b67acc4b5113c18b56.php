<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/www/wwwroot/ql.bjoyhg.com/public/../application/admin/view/index/usercenter.html";i:1578149360;s:63:"/www/wwwroot/ql.bjoyhg.com/application/admin/view/leftlist.html";i:1578149360;s:64:"/www/wwwroot/ql.bjoyhg.com/application/admin/view/rightlist.html";i:1561474068;}*/ ?>
<!--网站WEB 小程序 android APP定制开发qq:839070295-->
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理</title>
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
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
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
    
     <div class="content-w">
	 <!--顶部-->
	   <!--include file="top" /-->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">首页</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/index/usercenter">用户管理</a>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box"><div class="element-wrapper">
  
    <!--------------------
    START - Controls Above Table
    -------------------->
    
<!--</div>

<div class="content-box">-->
<div class="element-wrapper">
  <div class="element-box">
    <h5 class="form-header">
     用户列表
    </h5>
    <div class="form-desc">
    </div>
    <!--------------------
    START - Controls Above Table
    -------------------->
    <div class="controls-above-table">
      <div class="row">
        <div class="col-sm-6">
         
        </div>
        <div class="col-sm-6">
          <form class="form-inline justify-content-sm-end">
            <input class="form-control form-control-sm rounded bright" placeholder="搜索" type="text"><select class="form-control form-control-sm rounded bright">
              <option selected="selected" value="">
                Select Status
              </option>
              <option value="Pending">
                Pending
              </option>
              <option value="Active">
                Active
              </option>
              <option value="Cancelled">
                Cancelled
              </option>
            </select>
          </form>
        </div>
      </div>
    </div>
    <!--------------------
    END - Controls Above Table
    -------------------->
    <div class="table-responsive">
      <!--------------------
      START - Basic Table
      -------------------->
      <table class="table table-lightborder">
        <thead>
          <tr>
            <th>
              ID账号
            </th>
            <th>
              成员昵称
            </th>
            <th>
              密码
            </th>
            <th class="text-center">
              余额
            </th>
            <th class="text-right">
              操作
            </th>
          </tr>
        </thead>
        <tbody>
		<?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr class="del<?php echo $vo['id']; ?>">
            <td>
              <?php echo $vo['name']; ?>
            </td>
            <td>
              <?php echo $vo['nickname']; ?>
            </td>
            <td>
              <?php echo $vo['pw']; ?>
            </td>
            <td class="text-center">
			<?php echo $vo['money']; ?>
			<!--
			<a class="btn btn-sm btn-success" href="#">已审核</a>
			<a class="btn btn-sm btn-warning" href="#">待审核</a>
			<a class="btn btn-sm btn-secondary" href="#">拒绝</a>
			<!--
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
			  -->
            </td>
            <td class=" text-right">
			<a class="btn btn-sm btn-success" href="/admin/index/userinfo?id=<?php echo $vo['id']; ?>" >修改</a>
            <a class="btn btn-sm btn-danger" href="javascript:;" onclick="groupdel(<?php echo $vo['id']; ?>)">删除</a>
            </td>
          </tr>
		  <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <!--------------------
      END - Basic Table
      -------------------->
    </div>
  </div>
</div>
<!--------------------
      START - Controls below table
      ------------------  -->
    <!--分页-->
                    <div class="controls-below-table">
        <div class="table-records-pages">
          <ul>
            <?php echo $userlist->render(); ?>
          
          </ul>
        </div>
      </div>
      <!--分页结束-->
      <!--------------------
      END - Controls below table
      -------------------->
</div>




  






















<!--
<div class="element-wrapper">
  <div class="element-box-tp">
    <h5 class="form-header">
      Table without wrapper
    </h5>
    <div class="form-desc">You can put a table tag inside an <code>.element-box-tp</code> class wrapper and add <code>.table</code> class to it to get something like this:
    </div>
    <div class="element-box-tp">
      <!--------------------
      START - Controls Above Table
      ------------------
      <div class="controls-above-table">
        <div class="row">
          <div class="col-sm-6">
            <a class="btn btn-sm btn-secondary" href="#">Download CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a>
          </div>
          <div class="col-sm-6">
            <form class="form-inline justify-content-sm-end">
              <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                <option selected="selected" value="">
                  Select Status
                </option>
                <option value="Pending">
                  Pending
                </option>
                <option value="Active">
                  Active
                </option>
                <option value="Cancelled">
                  Cancelled
                </option>
              </select>
            </form>
          </div>
        </div>
      </div>
      <!--------------------
      END - Controls Above Table
      ------------------          --><!--------------------
      START - Table with actions
      ------------------  
      <div class="table-responsive">
        <table class="table table-bordered table-lg table-v2 table-striped">
          <thead>
            <tr>
              <th class="text-center">
                <input class="form-control" type="checkbox">
              </th>
              <th>
                Customer Name
              </th>
              <th>
                Country
              </th>
              <th>
                Order Total
              </th>
              <th>
                Referral
              </th>
              <th>
                Status
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <input class="form-control" type="checkbox">
              </td>
              <td>
                John Mayers
              </td>
              <td>
                <img alt="" src="/static/admin/img/flags-icons/us.png" width="25px">
              </td>
              <td class="text-right">
                $245
              </td>
              <td>
                Organic
              </td>
              <td class="text-center">
                <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
              </td>
              <td class="row-actions">
                <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <input class="form-control" type="checkbox">
              </td>
              <td>
                Mike Astone
              </td>
              <td>
                <img alt="" src="/static/admin/img/flags-icons/fr.png" width="25px">
              </td>
              <td class="text-right">
                $154
              </td>
              <td>
                Organic
              </td>
              <td class="text-center">
                <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
              </td>
              <td class="row-actions">
                <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <input class="form-control" type="checkbox">
              </td>
              <td>
                Kira Knight
              </td>
              <td>
                <img alt="" src="/static/admin/img/flags-icons/us.png" width="25px">
              </td>
              <td class="text-right">
                $23
              </td>
              <td>
                Adwords
              </td>
              <td class="text-center">
                <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
              </td>
              <td class="row-actions">
                <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <input class="form-control" type="checkbox">
              </td>
              <td>
                Jessica Bloom
              </td>
              <td>
                <img alt="" src="/static/admin/img/flags-icons/ca.png" width="25px">
              </td>
              <td class="text-right">
                $112
              </td>
              <td>
                Organic
              </td>
              <td class="text-center">
                <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
              </td>
              <td class="row-actions">
                <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <input class="form-control" type="checkbox">
              </td>
              <td>
                Gary Lineker
              </td>
              <td>
                <img alt="" src="/static/admin/img/flags-icons/ca.png" width="25px">
              </td>
              <td class="text-right">
                $64
              </td>
              <td>
                Organic
              </td>
              <td class="text-center">
                <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
              </td>
              <td class="row-actions">
                <a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--------------------
      END - Table with actions
      ------------------            --><!--------------------
      START - Controls below table
      ------------------  
      <div class="controls-below-table">
        <div class="table-records-info">
          Showing records 1 - 5
        </div>
        <div class="table-records-pages">
          <ul>
            <li>
              <a href="#">Previous</a>
            </li>
            <li>
              <a class="current" href="#">1</a>
            </li>
            <li>
              <a href="#">2</a>
            </li>
            <li>
              <a href="#">3</a>
            </li>
            <li>
              <a href="#">4</a>
            </li>
            <li>
              <a href="#">Next</a>
            </li>
          </ul>
        </div>
      </div>
      <!--------------------
      END - Controls below table
      ------------------
    </div>
  </div>
</div>
<div class="element-wrapper">
  <div class="element-box">
    <h5 class="form-header">
      Table Striped
    </h5>
    <div class="form-desc">You can add class <code>.table-striped</code> and <code>.table</code> to a table element to get striped table:
    </div>
    <div class="table-responsive">
      <!--------------------
      START - Basic Table
      -----------------
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Customer Name
            </th>
            <th>
              Orders
            </th>
            <th>
              Location
            </th>
            <th class="text-center">
              Status
            </th>
            <th class="text-right">
              Order Total
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              John Mayers
            </td>
            <td>
              12
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/us.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $354
            </td>
          </tr>
          <tr>
            <td>
              Kelly Brans
            </td>
            <td>
              45
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/ca.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $94
            </td>
          </tr>
          <tr>
            <td>
              Tim Howard
            </td>
            <td>
              112
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/uk.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $156
            </td>
          </tr>
          <tr>
            <td>
              Joe Trulli
            </td>
            <td>
              1,256
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/es.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $1,120
            </td>
          </tr>
          <tr>
            <td>
              Fred Kolton
            </td>
            <td>
              74
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/fr.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $74
            </td>
          </tr>
        </tbody>
      </table>
      <!--------------------
      END - Basic Table
      ------------------
    </div>
  </div>
</div>
<div class="element-wrapper">
  <div class="element-box">
    <h5 class="form-header">
      Bordered and Striped Table
    </h5>
    <div class="form-desc">You can add class <code>.table-bordered</code>, <code>.table-striped</code> and <code>.table</code> to a table element to get striped table:
    </div>
    <div class="table-responsive">
      <!--------------------
      START - Basic Table
      ------------------
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>
              Customer Name
            </th>
            <th>
              Orders
            </th>
            <th>
              Location
            </th>
            <th class="text-center">
              Status
            </th>
            <th class="text-right">
              Order Total
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              John Mayers
            </td>
            <td>
              12
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/us.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $354
            </td>
          </tr>
          <tr>
            <td>
              Kelly Brans
            </td>
            <td>
              45
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/ca.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $94
            </td>
          </tr>
          <tr>
            <td>
              Tim Howard
            </td>
            <td>
              112
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/uk.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $156
            </td>
          </tr>
          <tr>
            <td>
              Joe Trulli
            </td>
            <td>
              1,256
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/es.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $1,120
            </td>
          </tr>
          <tr>
            <td>
              Fred Kolton
            </td>
            <td>
              74
            </td>
            <td>
              <img alt="" src="/static/admin/img/flags-icons/fr.png" width="25px">
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $74
            </td>
          </tr>
        </tbody>
      </table>
      <!--------------------
      END - Basic Table
      -------------------
    </div>
  </div>
</div><!--------------------
              START - Color Scheme Toggler
              ------------------
              <div class="floated-colors-btn second-floated-btn">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Colors</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------
              <div class="floated-customizer-btn third-floated-btn">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <span>Customizer</span>
              </div>
              <div class="floated-customizer-panel">
                <div class="fcp-content">
                  <div class="close-customizer-btn">
                    <i class="os-icon os-icon-x"></i>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Menu Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Menu Position</label><select class="menu-position-selector">
                          <option value="left">
                            Left
                          </option>
                          <option value="right">
                            Right
                          </option>
                          <option value="top">
                            Top
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Style</label><select class="menu-layout-selector">
                          <option value="compact">
                            Compact
                          </option>
                          <option value="full">
                            Full
                          </option>
                          <option value="mini">
                            Mini
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field with-image-selector-w">
                        <label for="">With Image</label><select class="with-image-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Color</label>
                        <div class="fcp-colors menu-color-selector">
                          <div class="color-selector menu-color-selector color-bright selected"></div>
                          <div class="color-selector menu-color-selector color-dark"></div>
                          <div class="color-selector menu-color-selector color-light"></div>
                          <div class="color-selector menu-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Sub Menu
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                          <option value="flyout">
                            Flyout
                          </option>
                          <option value="inside">
                            Inside/Click
                          </option>
                          <option value="over">
                            Over
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Sub Menu Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                          <div class="color-selector sub-menu-color-selector color-dark"></div>
                          <div class="color-selector sub-menu-color-selector color-light"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Other Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Full Screen?</label><select class="full-screen-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Top Bar Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector top-bar-color-selector color-bright selected"></div>
                          <div class="color-selector top-bar-color-selector color-dark"></div>
                          <div class="color-selector top-bar-color-selector color-light"></div>
                          <div class="color-selector top-bar-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------
              <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
              </div>
              <div class="floated-chat-w">
                <div class="floated-chat-i">
                  <div class="chat-close">
                    <i class="os-icon os-icon-close"></i>
                  </div>
                  <div class="chat-head">
                    <div class="user-w with-status status-green">
                      <div class="user-avatar-w">
                        <div class="user-avatar">
                          <img alt="" src="/static/admin/img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="user-name">
                        <h6 class="user-title">
                          John Mayers
                        </h6>
                        <div class="user-role">
                          Account Manager
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-messages">
                    <div class="message">
                      <div class="message-content">
                        Hi, how can I help you?
                      </div>
                    </div>
                    <div class="date-break">
                      Mon 10:20am
                    </div>
                    <div class="message">
                      <div class="message-content">
                        Hi, my name is Mike, I will be happy to assist you
                      </div>
                    </div>
                    <div class="message self">
                      <div class="message-content">
                        Hi, I tried ordering this product and it keeps showing me error code.
                      </div>
                    </div>
                  </div>
                  <div class="chat-controls">
                    <input class="message-input" placeholder="Type your message here..." type="text">
                    <div class="chat-extra">
                      <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Chat Popup Box
              -------------------->
            </div>
          <!--右侧list-->
			<!--------------------
            START - Sidebar
            -------------------
            <div class="content-panel">
              <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
              </div><!--------------------
START - Support Agents
--------------------
<div class="element-wrapper">
  <h6 class="element-header">
    Support Agents
  </h6>
  <div class="element-box-tp">
    <div class="profile-tile">
      <a class="profile-tile-box" href="users_profile_small.html">
        <div class="pt-avatar-w">
          <img alt="" src="/static/admin/img/avatar1.jpg">
        </div>
        <div class="pt-user-name">
          John Mayers
        </div>
      </a>
      <div class="profile-tile-meta">
        <ul>
          <li>
            Last Login:<strong>Online Now</strong>
          </li>
          <li>
            Tickets:<strong><a href="apps_support_index.html">12</a></strong>
          </li>
          <li>
            Response Time:<strong>2 hours</strong>
          </li>
        </ul>
        <div class="pt-btn">
          <a class="btn btn-success btn-sm" href="apps_full_chat.html">Send Message</a>
        </div>
      </div>
    </div>
    <div class="profile-tile">
      <a class="profile-tile-box" href="users_profile_small.html">
        <div class="pt-avatar-w">
          <img alt="" src="/static/admin/img/avatar3.jpg">
        </div>
        <div class="pt-user-name">
          Ben Gossman
        </div>
      </a>
      <div class="profile-tile-meta">
        <ul>
          <li>
            Last Login:<strong>Offline</strong>
          </li>
          <li>
            Tickets:<strong><a href="apps_support_index.html">9</a></strong>
          </li>
          <li>
            Response Time:<strong>3 hours</strong>
          </li>
        </ul>
        <div class="pt-btn">
          <a class="btn btn-secondary btn-sm" href="apps_full_chat.html">Send Message</a>
        </div>
      </div>
    </div>
    <div class="profile-tile">
      <a class="profile-tile-box" href="users_profile_small.html">
        <div class="pt-avatar-w">
          <img alt="" src="/static/admin/img/avatar2.jpg">
        </div>
        <div class="pt-user-name">
          Ken Sorrons
        </div>
      </a>
      <div class="profile-tile-meta">
        <ul>
          <li>
            Last Login:<strong>Offline</strong>
          </li>
          <li>
            Tickets:<strong><a href="apps_support_index.html">17</a></strong>
          </li>
          <li>
            Response Time:<strong>1 hour</strong>
          </li>
        </ul>
        <div class="pt-btn">
          <a class="btn btn-danger btn-sm" href="apps_full_chat.html">Send Message</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--------------------
END - Support Agents
-------------------
<div class="element-wrapper">
  <h6 class="element-header">
    Side Tables
  </h6>
  <div class="element-box">
    <h5 class="form-header">
      Table in white box
    </h5>
    <div class="form-desc">You can put a table tag inside an <code>.element-box</code> class wrapper and add <code>.table</code> class to it to get something like this:
    </div>
    <div class="controls-above-table">
      <div class="row">
        <div class="col-sm-12">
          <a class="btn btn-sm btn-primary" href="#">Download CSV</a><a class="btn btn-sm btn-danger" href="#">Delete</a>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-lightborder">
        <thead>
          <tr>
            <th>
              Customer
            </th>
            <th class="text-center">
              Status
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              John Mayers
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
          </tr>
          <tr>
            <td>
              Kelly Brans
            </td>
            <td class="text-center">
              <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
            </td>
          </tr>
          <tr>
            <td>
              Tim Howard
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
          </tr>
          <tr>
            <td>
              Joe Trulli
            </td>
            <td class="text-center">
              <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
            </td>
          </tr>
          <tr>
            <td>
              Fred Kolton
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
            </div>
            <!--------------------
            END - Sidebar
            -------------------->
         
          <!--</div>--> 
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
      
      
       function groupdel(id){
	    if(confirm("是否确认删除")){			
		$.post("/index.php/operate/index/userdel",
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
		}
	  }

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
