<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta property="wb:webmaster" content="b1217e0e46e1e300"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url().'resource/dist/css/AdminLTE.css'?>">
    <link rel="stylesheet" href="<?= base_url().'resource/dist/css/skins/_all-skins.min.css'?>">

    <script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!--顶部导航-->
    <header class="main-header">
        <a href="{{url('/dashboard')}}" class="logo">
            <span class="logo-mini">LC</span>
            <span class="logo-lg"><b>AdminLC</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="<?= base_url().'resource/dist/img/avatar.jpeg' ?>">
                            <i class="fa fa-home"></i>
                            <span class="label label-info">H</span>
                        </a>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">最新私信列表</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            你的网站做的真好啊
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看更多</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=  base_url().'resource/dist/img/avatar.jpeg' ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin Info</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?=  base_url().'resource/dist/img/avatar.jpeg' ?>" class="img-circle" alt="User Image">

                                <p>
                                    LaravelChen is a Good Programmer
                                    <small>Member since Nov. 2017</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">PHP</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">VUEJS</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">C++</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--主导航-->
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url().'resource/dist/img/avatar.jpeg' ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>LaravelChen</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">主导航栏</li>
                <li>
                    <a href="<?=base_url().'admin/dashboard' ?>">
                        <i class="fa fa-dashboard"></i> <span>控制面板</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>用户管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url().'admin/admininfo' ?>"><i class="fa fa-star-o"></i>个人资料</a></li>
                        <li><a href="<?= base_url().'admin/usermembershow' ?>"><i class="fa fa-star-o"></i>管理员(用户)</a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i>角色</a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i>权限</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>内容管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url().'admin/articleshow'?>"><i class="fa fa-star-o"></i>文章</a></li>
                        <li><a href=""><i class="fa fa-star-o"></i>评论</a></li>
                    </ul>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

<!--内容-->