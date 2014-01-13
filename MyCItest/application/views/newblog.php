
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>AbZone</title>

    <!-- Bootstrap core CSS -->
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../resources/css/offcanvas.css" rel="stylesheet">

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
            <div class="col-8 col-sm-8 col-lg-6" style="color:#fff">
              <h2></h2>
              <form role="form">
                <div class="row">
                  <label for="exampleInputEmail1">标题</label>
                </div>
                <div class="row">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入标题">
                </div>
                <div class="row">
                  <label for="exampleInputPassword1">内容</label>
                </div>
                <div class="row">
                  <textarea   class="form-control" id="exampleInputPassword1" rows="5" placeholder="请输入内容"></textarea>
                </div>
                <div class="row">             
                  <button type="submit" class="btn btn-default">Submit</button>
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
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../resources/js/bootstrap.min.js"></script>
    <script src="../../resources/js/offcanvas.js"></script>
  </body>
</html>
