<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>image/menu/wheel.ico"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
    </head>
    <div id="wrape">
        <div class="header">
            <body>
                <script>
                    $(document).ready(function(){
                        $(".header").css({
                            
                            "-webkit-transition":"all 1s ease",
                            "-moz-transition":"all 1s ease"
                            
                        });
                        $(".header").mouseover(function(){
                            $(this).css({
                                "background-image":" url('<?php echo base_url();?>image/menu/autotransmission_logo.jpg')",
                                "background-position":"10px -500px",
                                "text-shadow":" 0 0 5px rgba(0,0,0,0.5)"
                            });
                            $(".header").mouseout(function(){
                                $(this).css({
                                    "background":"none",
                                    "background-position":"100px -500px",
                                    "font-size":"16px"
                    
                                });
                            });
                        });
                    });
                
                </script>
                <h1>Bengkel 522</h1>
                <div>
                    <div class="navlist">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>index.php/user/C_home">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/user/C_content_job">job</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/user/C_content_discussion">Discussion</a></li>
<!--                            <li><a href="<?php echo base_url(); ?>index.php/user/C_content_discussion"></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/user/C_content_contact"></a></li>-->
                        </ul>
                    </div>
                </div>
        </div>