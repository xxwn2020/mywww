
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
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #222;">
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AbZone</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">主页</a></li>
            <li><a href="#about">关于</a></li>
            <li><a href="">登陆</a></li>
            <li><a href="">注册</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

         <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group" >
            <a href="#" style="border-top-color: #983F2E;border-width:1px 0 0 0;background-color:#262626;color:#ff7f00" class="list-group-item ">我的博客</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">我的地盘</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">我的小说</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">我的图片</a>
            
          </div>
        </div><!--/span-->

        <div class="col-xs-12 col-sm-10">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12" >
              <h2 style="color:#7B7B7B;border-bottom-color: #983F2E;border-width:0 0 1px 0;border-style:solid;">
                <?php
                  echo $blog['title'];
                  //print_r($blog[0]);
                ?>
              </h2>
            </div>            
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12" style="color:#7B7B7B">
              <?php
                echo $blog['content'];
              ?>
            </div> 
          </div>
          

          
        </div><!--/span-->


      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/offcanvas.js"></script>
  </body>
</html>
