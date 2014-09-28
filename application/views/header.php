<!DOCTYPE html>
<html lang="en" class="app">
    <head>
        <meta charset="utf-8" />
        <title>VIP</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--[if lte IE 8]>
            <link rel="shortcut icon" href="<?php echo base_url('images/logo.png'); ?>" />
        <![endif]-->
        <!--[if IE 9]>
          <link rel="shortcut icon" href="<?php echo base_url('images/logo.png'); ?>" />
        <![endif]-->
        <link rel="icon" href="<?php echo base_url('images/logo.png'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('js/jPlayer/jplayer.flat.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('css/app.v1.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('css/nprogress.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('css/vip.css'); ?>" type="text/css" />
        <!--[if lt IE 9]> 
            <script src="<?php echo base_url('js/ie/html5shiv.js'); ?>"></script> 
            <script src="<?php echo base_url('js/ie/respond.min.js'); ?>"></script>
            <script src="<?php echo base_url('js/ie/excanvas.js'); ?>"></script>
        <![endif]-->
        <script src="<?php echo base_url('js/jquery.js'); ?>"></script> 
        <script>
            var base_url = "<?php echo base_url(); ?>";
            $(document).ready(function() {
               
                $("#genre").click(function() {
                    var boundary = 1;
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() ?>vip/ajax_songs/",
                        data: {type: "genre", boundary: boundary},
                        success: function(data) {
                            boundary = boundary + 1;
                            $("#bjax-target").html(data);
                            NProgress.done(true);
                            $('#load_more').click(function() {
                                    $('#loader_image').show();
                                    $('div#loadmoreajaxloader').show();
                                    NProgress.inc();
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url() ?>vip/ajax_loading",
                                        data: {type: "genre", boundary: boundary},
                                        success: function(html) {
                                            $("#current_page").html(boundary);
                                            var total_page = $("#total_page").html();
                                            var current_page = $("#current_page").html();
                                            //alert( $("#total_page").html()+$("#current_page").html());
                                            if(total_page == current_page)
                                            {
                                                $("#load_more").hide();
                                            }
                                            boundary = boundary + 1;
                                            
                                            $('#loader_image').hide();
                                            $('#song-list').append(html);
                                            NProgress.done(true);
                                        }
                                    });
                              
                            });
                        }
                    });
                });
            });
        </script>    
    </head>
    <body >

        <section class="vbox">
            <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
                <div class="navbar-header aside bg-info nav-xs">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> 
                        <i class="icon-list"></i> 
                    </a>
                    <a href="javascript:void(null)" my-ajax data-url="home" class="navbar-brand text-lt"> <i class="icon-earphones"></i> 
                        <img src="images/logo.png" alt="." class="hide"> 
                        <span class="hidden-nav-xs m-l-sm">Vip</span> 
                    </a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> 
                        <i class="icon-settings"></i> 
                    </a>
                </div>
                <ul class="nav navbar-nav hidden-xs">
                    <li>
                        <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> 
                            <i class="fa fa-indent text"></i>  
                            <i class="fa fa-dedent text-active"></i> 
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                    <div class="form-group">
                        <div class="input-group"> 
                            <span class="input-group-btn"> 
                                <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button> 
                            </span> 
                            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
                        </div>
                    </div>
                </form>
                <div class="navbar-right ">
                    <ul class="nav navbar-nav m-n hidden-xs nav-user user">




                        <li class="dropdown">
                            <?php if ($this->myauth->isLogin()) : ?>
                                <a href="javascript:void(0);" class="dropdown-toggle bg clear" data-toggle="dropdown">
                                    <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> 
                                    </span> <?php echo $this->myauth->userName(); ?> <b class="caret"></b> 
                                </a>
                                <ul class="dropdown-menu animated fadeInRight">
                                    <li> <span class="arrow top"></span> 
                                        <a href="javascript:void(0);" class="settings">Settings</a> 
                                    </li>
                                    <li> <a href="javascript:void(0);" class="profile">Profile</a> 
                                    </li>

                                    <li class="divider"></li>
                                    <li> <a href="amember/logout" data-toggle="ajaxModal" class="logout">Logout</a> 
                                    </li>
                                </ul>
                            <?php else : ?>
                                <a href="javascript:void(0);" class="bg clear login">
                                    <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> 
                                    </span><i class=" icon-user-follow i-lg"></i> Login</b> 
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </header>
            <section>
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside class="bg-black dk nav-xs aside hidden-print" id="nav">
                        <section class="vbox">
                            <section class="w-f-md scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">
                                        <ul class="nav bg clearfix" id="left-menu">
                                            <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">Discover</li>

                                            <li>
                                                <a id="genre" href="javascript:void(null)" class="auto"> 
                                                    <span class="pull-right text-muted"> 
                                                        <i class="fa fa-angle-left text"></i>
                                                        <i class="fa fa-angle-down text-active"></i> 
                                                    </span> 
                                                    <i class="icon-music-tone-alt icon text-info"> </i> 
                                                    <span>Genres</span>
                                                </a>
                                                <ul class="nav dk text-sm"> 
                                                    <?php
                                                    $query = $this->db->get_where('genre', array('parent' => 0,'type'=>1));
                                                    foreach ($query->result() as $row) {
                                                    ?>
                                                        <li> 
                                                            <a href="javascript:void()" class="auto genre" id="<?php echo $row->id; ?>"> 
                                                                <span class="pull-right text-muted"> 
                                                                    <i class="fa fa-angle-right text"></i>
                                                                    <i class="fa fa-angle-down text-active"></i> </span> 
                                                                <i class="fa fa-angle-right text-xs"></i>
                                                                <span><?php echo $row->name; ?></span>
                                                            </a> 
                                                            <?php
                                                            $query_child = $this->db->get_where('genre', array('parent' => $row->id));
                                                            if (!empty($query_child->result())) {
                                                                ?>
                                                                <ul class="nav dker"> 
                                                                    <?php
                                                                    foreach ($query_child->result() as $row) {
                                                                        ?>
                                                                        <li> <a href="javascript:void()" class="subgenre" id="<?php echo $row->id; ?>"> <i class="fa fa-angle-right"></i> <span><?php echo $row->name; ?></span> </a> </li>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </ul> 
                                                                <?php
                                                            }
                                                            ?>
                                                        </li> 
                                                        <?php
                                                    }
                                                    ?>
                                                </ul> 
                                            </li>
                                         
                                            <li>
                                                <a id="video" href="javascript:void(null)">
                                                    <i class="icon-social-youtube icon text-primary"></i> 
                                                    <span class="font-bold">Video</span> 
                                                </a>
                                                  <ul class="nav dk text-sm"> 
                                                    <?php
                                                    $query = $this->db->get_where('genre', array('parent' => 0,'type'=>2));
                                                    foreach ($query->result() as $row) {
                                                        ?>
                                                        <li> 
                                                            <a href="javascript:void()" class="auto video_genre" id="<?php echo $row->id; ?>"> 
                                                                <span class="pull-right text-muted"> 
                                                                    <i class="fa fa-angle-right text"></i>
                                                                    <i class="fa fa-angle-down text-active"></i> </span> 
                                                                <i class="fa fa-angle-right text-xs"></i>
                                                                <span><?php echo $row->name; ?></span>
                                                            </a> 
                                                            <?php
                                                            $query_child = $this->db->get_where('genre', array('parent' => $row->id));
                                                            if (!empty($query_child->result())) {
                                                                ?>
                                                                <ul class="nav dker"> 
                                                                    <?php
                                                                    foreach ($query_child->result() as $row) {
                                                                        ?>
                                                                        <li> <a href="javascript:void()" class="video_subgenre" id="<?php echo $row->id; ?>"> <i class="fa fa-angle-right"></i> <span><?php echo $row->name; ?></span> </a> </li>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </ul> 
                                                                <?php
                                                            }
                                                            ?>
                                                        </li> 
                                                        <?php
                                                    }
                                                    ?>
                                                </ul> 
                                            </li>
                                            <li id="mycrate">
                                                <a href="javascript:void(null)" > 
                                                    <i class="icon-drawer icon text-primary-lter"></i> 
                                                    <?php //$this->session->sess_destroy();  ?>
                                                  
                                                    <b id="crate_count" class="badge bg-primary pull-right"><?php echo (!empty($this->session->userdata('crate')))? count($this->session->userdata('crate')):'0'; ?></b>
                                                    <span class="font-bold">crate</span> 
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="bg hidden-xs ">
                                            <ul class="dropdown-menu animated fadeInRight aside text-left">
                                                <li> <span class="arrow bottom hidden-nav-xs"></span>  <a href="#">Settings</a> 
                                                </li>
                                                <li> <a href="profile.html">Profile</a> 
                                                </li>


                                                <li class="divider"></li>
                                                <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> 
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                </footer>
                            </section>
                    </aside>
                    <!-- /.aside -->
                    <section id="content">
                        <section class="hbox stretch">
                            <section>
                                <section class="vbox">
                                    <section id="bjax-target">