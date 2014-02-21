<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AbZone</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>css/offcanvas.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="background-color: #222;">
        <!--navbar start-->
        <?php echo $navbar; ?>
        <!--navbar end-->

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">
                <!--SidebarList start-->
                <?php echo $sidebar;?>
                <!--SidebarList end-->

                <!--content start-->
                <div class="col-xs-12 col-sm-10">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>

                    <?php
                        foreach ($bloglists as $blog) 
                        {
                    ?>
                            <div  class="row">
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <h3 style="color:#7B7B7B"><a href='show_blog?id=<?php echo $blog->Id; ?>'><?php echo $blog->title; ?></a></h3>
                                    <p style="color:#7B7B7B">
                                    <?php
                                      echo CHsubstr($blog->content,0,300);
                                    ?>
                                    </p>                
                                </div><!--/span-->
                            </div>
                            <div style="background-color:#262626;" class="row">
                                <div class="col-5 col-sm-5 col-lg-9" >
                                    <p style="color:#7B7B7B">xxx 发布于<?php echo date("Y-m-d H:i:s",$blog->createdTime); ?></p>
                                </div><!--/span-->

                            </div><!--/row-->
                    <?php
                        }
                    ?>
                </div><!--/span-->
                <!--content end-->
            </div><!--/row-->

            <hr>
            <!--footer start-->
            <?php echo $footer; ?>
            <!--footer end-->

        </div><!--/.container-->



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/offcanvas.js"></script>
    </body>
</html>
