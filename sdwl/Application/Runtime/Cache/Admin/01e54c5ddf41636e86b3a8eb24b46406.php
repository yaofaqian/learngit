<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>闪电物流</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/Public/asset/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/asset/admin/lib/font-awesome/css/font-awesome.css">
    <script src="/Public/asset/admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="/Public/asset/admin/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="/Public/asset/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="/Public/asset/admin/stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <link rel="shortcut icon" href="../assets/ico/favicon.ico">

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="#"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 闪电物流</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> admin
                    <i class="fa fa-caret-down"></i>
                </a>
				<ul class="dropdown-menu">
					<li><a tabindex="-1" href="/index.php/Admin/Login/logoout">退出</a></li>
				</ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
		<ul>
			<li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>首页</a></li>

			<li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i>用户管理<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="legal-menu nav nav-list collapse">
					<li ><a href=""><span class="fa fa-caret-right"></span>用户列表</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>更改密码</a></li>
				</ul>
			</li>
			
			<li><a href="#" data-target=".role-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-group"></i>角色管理<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="role-menu nav nav-list collapse">
					<li ><a href=""><span class="fa fa-caret-right"></span>角色管理</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>节点管理</a></li>
				</ul>
			</li>
			
			<li><a href="#" data-target=".peizi-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-gear"></i>配置管理<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="peizi-menu nav nav-list collapse">
					<li ><a href=""><span class="fa fa-caret-right"></span>车源配置</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>车辆配置</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>积分配置</a></li>
				</ul>
			</li>
			
			<li><a href="#" data-target=".info-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-comment"></i>基本信息<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="info-menu nav nav-list collapse">
					<li ><a href=""><span class="fa fa-caret-right"></span>用户信息</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>用户认证</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>企业认证</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>广告列表</a></li>
					<li ><a href="/index.php/Admin/Area/index"><span class="fa fa-caret-right"></span>区域列表</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>资讯信息</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>公司信息</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>车源信息</a></li>
					<li ><a href=""><span class="fa fa-caret-right"></span>货源信息</a></li>
				</ul>
			</li>
			
		</ul>
    </div>


    <script src="/Public/asset/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
</body>
</html>

<div class="content">
    <div class="main-content">
        <div class="row">


            <table class="table table-bordered table-striped">
                <tbody>
                <form action="" method="post">

                    市区:<input  class="form-control span6" type="text" value="">

                </form>
                </tbody>
            </table>


            <div class="col-sm-12 col-md-12">



                <div class="panel panel-default">
                    <div class="panel-heading no-collapse">区域列表</div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>市区</th>
                            <th>区(县)</th>
                            <th>地区</th>
                            <th>市区操作</th>
                            <th>地区</th>
                            <th>地区</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vo["city"]); ?></td>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td></td>
                                <td>
                                    <a href=""><i class="fa fa-plus"></i></a>
                                    <a href=""><i class="fa fa-pencil"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-plus"></i></a>
                                    <a href=""><i class="fa fa-pencil"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <ul class="pagination">
            <?php echo ($show); ?>
        </ul>
    </div>
</div>