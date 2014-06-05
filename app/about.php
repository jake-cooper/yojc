<!doctype html><?php $title = "Bout Nuffink!"; $name = "Jake Cooper"; ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php echo $name; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->

        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css(.tmp) styles/main.css -->
      <?php //  <link rel="stylesheet" href="styles/main.css">  ?>
        <link rel="stylesheet" href="http://localhost/yo_app/.tmp/styles/main.css"
        <!-- endbuild -->
        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="../bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
        
        <style>.none{display:none;}</style>
    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <h3 class="text-muted"><?php echo $name; ?></h3>
            </div>

            <div class="jumbotron">
                <h1><?php echo $title; ?></h1>
                <p class="lead">Always a pleasure scaffolding your apps.</p>
                <p><a class="btn btn-lg btn-success" href="#" id="splendid">Splendid! <span class="glyphicon glyphicon-ok"></span> Generators</a></p>
            </div>
            <div class="row marketing">
                <div id="splendid-view" class="none col-lg-6">
                    <h4>ANGULAR GENERATOR</h4>
                    <p>Angular JS <i>generator</i>. init using <pre>yo angular</pre> other calls can be made to generate or scaffold the <i>views / controllers / filters</i> and <i>directives</i><br/><pre><ul><li><a href="https://github.com/yeoman/generator-angular">ReadME on Github</a></li></ul></pre></p>

                    <h4>Wordpress</h4>
                    <p>Wordpress generator -> Skins up a clean wordpress install<pre>yo wordpress</pre></p>


                    <h4>Bootstrap</h4>
                    <p>Bootstrap geneartor -> Skins up a bootstrap environment<pre>yo bootstrap</pre></p>

                    <h4>Langular (Laravel + Angular js)</h4>
                    <p>Langular is a Laravel and Angular generator <pre>yo langular</pre></p>

                    <h4>jQuery</h4>
                    <p>jQuery generator <pre>yo jquery</pre></p>

                    <h4>Webapp</h4>
                    <p>Webapp is a boilerplate bootstrap generator <pre>yo webapp</pre></p>


                </div>
            </div>

            <div class="row marketing">
                <div class="col-lg-6">
                    <h4>HTML5 Boilerplate</h4>
                    <p>HTML5 Boilerplate is a professional front-end template for building fast, robust, and adaptable web apps or sites.</p>

                    <h4>Sass</h4>
                    <p>Sass is a mature, stable, and powerful professional grade CSS extension language.</p>


                    <h4>Bootstrap</h4>
                    <p>Sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.</p>

                    <h4>Modernizr</h4>
                    <p>Modernizr is an open-source JavaScript library that helps you build the next generation of HTML5 and CSS3-powered websites.</p>

                </div>
            </div>

            <div class="footer">
                <p><span class="glyphicon glyphicon-heart"></span> from the Yeoman team</p>
            </div>

        </div>


        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <!-- endbower -->
        <!-- endbuild -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <!-- build:js scripts/plugins.js -->
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/affix.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/alert.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/dropdown.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/tooltip.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/modal.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/transition.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/button.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/popover.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/carousel.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/scrollspy.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/collapse.js"></script>
        <script src="../bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/tab.js"></script>
        <!-- endbuild -->

        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
        <script type="text/JavaScript">
            $('document').ready(function(){
                $('#splendid').click(function(){
                    $('.none').toggle();
                });
            });
        </script>
</body>
</html>
