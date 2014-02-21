
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico">

    <title>AbZone</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap3-wysihtml5.css" rel="stylesheet">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

         <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group" >
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#262626;color:#ff7f00" class="list-group-item ">首页</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">Link</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">Link</a>
            <a href="#" style="border-top-color: #080808;border-width:1px 0 0 0;background-color:#222" class="list-group-item">Link</a>
            
          </div>
        </div><!--/span-->

        <div class="col-xs-12 col-sm-10">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="row">
            <div style="color:#fff">
              <h2></h2>
              <form role="form" action="newblog" method="post">
                <div class="row" >
                  <div class="col-1 col-sm-1 col-lg-1">
                    <label for="exampleInputEmail1">标题</label>
                  </div>
                  <div class="col-offset-4 col-sm-offset-4 col-lg-offset-4 col-1 col-sm-1 col-lg-1">
                    <label >(0/49)</label>
                  </div>
                </div>
                <div class="row" style="margin-bottom:15px">
                  <div class="col-8 col-sm-8 col-lg-6">
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入标题">
                    <?php echo form_error('title'); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-1 col-sm-1 col-lg-1">
                    <label for="exampleInputPassword1">内容</label>
                  </div>
                  <div class="col-offset-6 col-sm-offset-6 col-lg-offset-6col-1 col-sm-1 col-lg-1">
                    <label >(0/5000)</label>
                  </div>
                </div>
                <div class="row" style="margin-bottom:15px">
                  <div class="col-11 col-sm-11 col-lg-9">
                    <!--<textarea  name="content" class="form-control" id="exampleInputPassword1" rows="15" placeholder="请输入内容"></textarea>-->
                    <textarea id="some-textarea" name="content" class="form-control" rows="15" placeholder="Enter text ..."></textarea>
                    <?php echo form_error('content'); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-offset-9 col-sm-offset-9 col-lg-offset-7 col-1 col-sm-1 col-lg-1">             
                    <button type="submit" class="btn btn-default" onclick="submit_blog();">提交</button>
                  </div>
                </div>
              </form>
            </div><!--/span-->
            
          </div><!--/row-->
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
    <script src="<?php echo base_url();?>js//jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
     <script src="<?php echo base_url();?>js/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap3-wysihtml5.min.js"></script>

   
       
    <script src="<?php echo base_url();?>js/offcanvas.js"></script>
    <script type="text/javascript">
      $('#some-textarea').wysihtml5();
      function submit_blog()
      {
        alert($('#some-textarea').val());
        $('#some-textarea').html($('#some-textarea').val());
      }
    </script>
  </body>
</html>
