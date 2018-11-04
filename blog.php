<?php include 'server.php'?>

<!DOCTYPE html>


<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="CCBUL" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="CCBUL" />

<!-- Page Title -->
<title>Blog</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue-gary.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="https://www.jobsforher.com/css/candidate/jobs.css">
<link type="text/css" rel="stylesheet" href="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.css"/>
<link type="text/css" rel="stylesheet" href="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/components-font-awesome/css/font-awesome.min.css"/>

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
    <script src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
    <script src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.js"></script>
	<script src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/handlebars/handlebars.runtime.min.js"></script>
	<script src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!--<script src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script>-->
    <script>

          $('#textareablog').wysihtml5();

    </script>
    <script src='https://www.google.com/recaptcha/api.js?render=6Lca-ncUAAAAAOJLHcET-H78a_yYvs4bRvd8euc5'></script>
    <script>
grecaptcha.ready(function() {
grecaptcha.execute('6Lca-ncUAAAAAOJLHcET-H78a_yYvs4bRvd8euc5', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});
    </script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
.btnSubmit {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: tomato;
  border: none;
  color:#fff;
  border-radius: 5px;
}

input[type=submit] {
    /* background-color: #4CAF50; */
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    /* background-color: #45a049; */
}

.container {
    border-radius: 5px;
    /* background-color: #f2f2f2; */
    padding: 20px;
}
</style>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

   <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand pull-left flip" href="index.php"><img src="images/logo-wide.png" alt=""></a>
          <ul class="menuzord-menu">
              <li class="active"><a  href="#" data-toggle="modal" data-target="#myModal">Join</a></li>
              <li class=""><a>Login</a></li>
             </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Start main-content -->
   <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider layer-overlay overlay-dark-7" data-bg-img="http://res.cloudinary.com/dafjd2pd0/image/upload/v1494635883/o-HAPPY-WOMAN-COMPUTER-facebook_mvo0y6.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
          <h1 class="text-white text-uppercase font-75 font-weight-300 mb-0">Write a Blog<span class="text-theme-color-2"></span></h1>

          </div>
        </div>
      </div>
    </section>


  <div class="container" style="width:50%">
    <form method="post" action="blog.php">
	<?php include('errors.php')?>
      <label for="blog-type">Blog Type</label>
        <select id="btype" name="btype">
            <option value="text">Text</option>
            <option value="video">Video</option>
            <option value="images">Images</option>
        </select>

      <label for="topic">Topic</label>
        <select id="topic" name="topic">
            <option value="education">Eductaion</option>
            <option value="entertainment">Entertainment</option>
            <option value="fashion">Fashion</option>
            <option vallue="health&hygine">Health &Aacute; Hygine</option>
            <option value="food">Food</option>
            <option value="Travel">Travel</option>
            <option value="Business">Business</option>

        </select>

      <label for="lname">Title</label>
      <input type="text" id="title" name="title" placeholder="Your Title..">

        <ul class="wysihtml5-toolbar" style="">
            <li class="dropdown">
                <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">

                    <span class="fa fa-font"></span>

                    <span class="current-font">Normal text</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
                </ul>
            </li>
            <li>
                <div class="btn-group">
                    <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                    <a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
                    <a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>

                    <a class="btn btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>

                </div>
            </li>
            <li>
                <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">

                    <span class="fa fa-quote-left"></span>

                </a>
            </li>
            <li>
                <div class="btn-group">
                    <a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">

                        <span class="fa fa-list-ul"></span>

                    </a>
                    <a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">

                        <span class="fa fa-list-ol"></span>

                    </a>
                    <a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">

                        <span class="fa fa-outdent"></span>

                    </a>
                    <a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">

                        <span class="fa fa-indent"></span>

                    </a>
                </div>
            </li>
            <li>
                <div class="bootstrap-wysihtml5-insert-link-modal modal fade">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Insert link</h3>
                            </div>
                            <div class="modal-body">
                                <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control">
                                <label class="checkbox"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window</label>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">

                    <span class="fa fa-share-square-o"></span>

                </a>
            </li>
            <li>
                <div class="bootstrap-wysihtml5-insert-image-modal modal fade">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Insert image</h3>
                            </div>
                            <div class="modal-body">
                                <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control">
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                                <a class="btn btn-primary" data-dismiss="modal">Insert image</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">

                    <span class="fa fa-file-image-o"></span>

                </a>
            </li>
        </ul>
        <textarea id="textareablog" name="textareablog" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;" placeholder="Enter text ..."></textarea>  
       


        <label style="margin:12px">Upload Photo</label>
        <input type="file" class="form-control" id="exampleInputFile" name="exampleInputFile" aria-describedby="fileHelp">
        <label for="tags">Tags</label>
        <input type="text" id="tag" name="tag" placeholder="Your tags..">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="mailid">Mail Id </label>
        <input type="text" id="email" name="email" placeholder="Your Email Id..">
      <label for="mobileno">Mobile No.</label>
      <input type="text" id="mbn" name="mbn" placeholder="Your mobile number..">


      <label for="city">City</label>
      <select id="city" name="city">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="country">State</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>




      <button class="btnSubmit" type="submit" name="save">Submit</button>
    </form>
  </div>




  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>
