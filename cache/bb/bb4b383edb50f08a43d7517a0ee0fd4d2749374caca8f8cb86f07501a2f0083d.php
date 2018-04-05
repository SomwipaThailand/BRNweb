<?php

/* _base_home.html */
class __TwigTemplate_1bb730ae105a07a51a0b5d8e24a65c3a1104930411216c631a5e441b5f8c536d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'css' => array($this, 'block_css'),
            'jscript' => array($this, 'block_jscript'),
            'extra_header' => array($this, 'block_extra_header'),
            'content_head' => array($this, 'block_content_head'),
            'content' => array($this, 'block_content'),
            'content_last' => array($this, 'block_content_last'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
";
        // line 10
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "<!---css-
-->

";
        // line 24
        $this->displayBlock('jscript', $context, $blocks);
        // line 36
        $this->displayBlock('extra_header', $context, $blocks);
        // line 53
        echo "</head>
<body>
";
        // line 55
        $this->displayBlock('content_head', $context, $blocks);
        // line 101
        echo "<!---banner-->
\t\t";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "\t\t";
        $this->displayBlock('content_last', $context, $blocks);
        // line 383
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 399
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_meta($context, array $blocks = array())
    {
        // line 11
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"ปัตตานี pattani\" />
";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "<!---css-
-->
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "css/bootstrap.css\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "css/style.css\" rel='stylesheet' type='text/css' />
";
    }

    // line 24
    public function block_jscript($context, array $blocks = array())
    {
        // line 25
        echo "
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js-
-->
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "js/jquery-1.12.0.min.js\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "js/bootstrap.js\"></script>
<!---js-
-->
<!--JS for animate
-->
";
    }

    // line 36
    public function block_extra_header($context, array $blocks = array())
    {
        // line 37
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "css/animate.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "js/wow.min.js\"></script>
\t\t<script>
\t\t\tnew WOW().init();
\t\t</script>
\t<!--end-animate
\t-->

<!---webfont
-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---webfont---->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "css/style_common.css\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "css/style9.css\" />      
";
    }

    // line 55
    public function block_content_head($context, array $blocks = array())
    {
        // line 56
        echo "\t<!---header---->
\t\t<div class=\"header-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"head-bottom\">
\t\t\t\t\t<div class=\"logo  wow fadeInDownBig animated animated\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t<h1><a href=\"index.html\">Agrox<span>Farming company</span></a></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!---header--->
\t\t<!---banner--->
\t\t<div class=\"banner\">
\t\t\t<div class=\"container\">
\t\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"index.html\" class=\"wow fadeInDownBig\" data-wow-delay=\".1s\">Home <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"p/about/\" class=\"wow fadeInDownBig\" data-wow-delay=\".2s\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"p/services/\" class=\"wow fadeInDownBig\" data-wow-delay=\".4s\">Services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"p/gallery/\" class=\"wow fadeInDownBig\" data-wow-delay=\".6s\">Gallery</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"p/codes/\" class=\"wow fadeInDownBig\" data-wow-delay=\".7s\">Codes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"p/contact/\" class=\"wow fadeInDownBig\" data-wow-delay=\".9s\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<div class=\"banner-center\">
\t\t\t\t\t<marquee><h3>โครงการส่งน้ำและบำรุงรักษาปัตนี</h3></marquee>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        echo "\t\t";
    }

    // line 104
    public function block_content_last($context, array $blocks = array())
    {
        // line 105
        echo "\t<!---welcome-->
\t<div class=\"content\">
\t\t<div class=\"welcome-section\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"banner-bottom\">
\t\t\t\t\t<div class=\"banner-grids\">
\t\t\t\t\t\t<div class=\"col-md-4 banner-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t<h4>Premium Products</h4>
\t\t\t\t\t\t\t<div class=\"ban1\">
\t\t\t\t\t\t\t\t<div class=\"ban-images  view fourth-effect\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/b1.jpg\" class=\"img-responsive\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div class=\"mask\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"button hvr-wobble-bottom\">more info</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 banner-grid wow fadeInDownBig\" data-wow-delay=\".4s\">
\t\t\t\t\t\t\t<h4>Agricultural Seeds </h4>
\t\t\t\t\t\t\t\t<div class=\"ban1\">
\t\t\t\t\t\t\t\t\t<div class=\"ban-images  view fourth-effect\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/b2.jpg\" class=\"img-responsive\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t<div class=\"mask\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>
\t\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"button hvr-wobble-bottom\">more info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 banner-grid wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t<h4>Our Technologies</h4>
\t\t\t\t\t\t\t\t<div class=\"ban1\">
\t\t\t\t\t\t\t\t\t<div class=\"ban-images  view fourth-effect\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/b1.jpg\" class=\"img-responsive\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t<div class=\"mask\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>
\t\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"button hvr-wobble-bottom\">more info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<h2>welcome</h2>
\t\t\t\t<div class=\"welcome-grids\">
\t\t\t\t\t<div class=\"col-md-3 welcome-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"welcome-text\">
\t\t\t\t\t\t\t<h4>Duis ultricies</h4>
\t\t\t\t\t\t\t<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"welcome-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/i1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 welcome-grid wow fadeInDownBig animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"welcome-text\">
\t\t\t\t\t\t\t<h4>Morbi nunc </h4>
\t\t\t\t\t\t\t<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"welcome-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/i2.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 welcome-grid wow fadeInUpBig animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"welcome-text\">
\t\t\t\t\t\t\t<h4>Lorem ipsum</h4>
\t\t\t\t\t\t\t<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"welcome-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/i3.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 welcome-grid wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"welcome-text\">
\t\t\t\t\t\t\t<h4>Fusce suscip</h4>
\t\t\t\t\t\t\t<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"welcome-icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/i4.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!---welcome-->
\t\t<!---product-->
\t\t<div class=\"product-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h3>Popular Products</h3>
\t\t\t\t<div class=\"product-grids\">
\t\t\t\t\t<div class=\"col-md-6 product-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"product-left\">
\t\t\t\t\t\t<img src=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/p.jpg\" class=\"img-responsive\" alt=\"\"/>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-right\">
\t\t\t\t\t\t\t<h4>Dolor Sit</h4>
\t\t\t\t\t\t\t<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
\t\t\t\t\t\t\t<a href=\"gallery.html\"><i class=\"glyphicon glyphicon-circle-arrow-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 product-grid wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"product-left\">
\t\t\t\t\t\t<img src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/p1.jpg\" class=\"img-responsive\" alt=\"\"/>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-right\">
\t\t\t\t\t\t\t<h4>Consequat</h4>
\t\t\t\t\t\t\t<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
\t\t\t\t\t\t\t<a href=\"gallery.html\"><i class=\"glyphicon glyphicon-circle-arrow-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-grids\">
\t\t\t\t\t<div class=\"col-md-6 product-grid1 wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"product1-left\">
\t\t\t\t\t\t\t<h4>Dolores Btrs</h4>
\t\t\t\t\t\t\t<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
\t\t\t\t\t\t\t<a href=\"gallery.html\"><i class=\"glyphicon glyphicon-circle-arrow-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product1-right\">
\t\t\t\t\t\t\t<img src=\"";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/p2.jpg\" class=\"img-responsive\" alt=\"\"/>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 product-grid1 wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"product1-left\">
\t\t\t\t\t\t\t<h4>Nam aliquam</h4>
\t\t\t\t\t\t\t<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
\t\t\t\t\t\t\t<a href=\"gallery.html\"><i class=\"glyphicon glyphicon-circle-arrow-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product1-right\">
\t\t\t\t\t\t\t<img src=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/p3.jpg\" class=\"img-responsive\" alt=\"\"/>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--product-->
\t\t<!---news-->
\t\t<div class=\"news-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h3>latest news</h3>
\t\t\t\t<div class=\"news-grids wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"col-md-4 new-grid\">
\t\t\t\t\t\t<div id=\"box\" class=\"burst-circle teal\">
\t\t\t\t\t\t\t<div class=\"caption\"></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/n1.jpg\" class=\"img-responsive\" />
\t\t\t\t\t\t\t<h4>Agrox</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 new-grid1 hvr-bounce-to-right\">
\t\t\t\t\t\t<h5><i class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></i> 25 November 2015 </h5>
\t\t\t\t\t\t<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>
\t\t\t\t\t\t<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-grids wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"col-md-4 new-grid\">
\t\t\t\t\t\t<div id=\"box\" class=\"burst-circle teal\">
\t\t\t\t\t\t\t<div class=\"caption\"></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/n2.jpg\" class=\"img-responsive\" />
\t\t\t\t\t\t\t<h4>Agrox</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 new-grid1 hvr-bounce-to-right\">
\t\t\t\t\t\t<h5><i class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></i> 25 November 2015 </h5>
\t\t\t\t\t\t<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>
\t\t\t\t\t\t<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-grids wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"col-md-4 new-grid\">
\t\t\t\t\t\t<div id=\"box\" class=\"burst-circle teal\">
\t\t\t\t\t\t\t<div class=\"caption\"></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/n3.jpg\" class=\"img-responsive\" />
\t\t\t\t\t\t\t<h4>Agrox</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 new-grid1 hvr-bounce-to-right\">
\t\t\t\t\t\t<h5><i class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></i> 25 November 2015 </h5>
\t\t\t\t\t\t<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>
\t\t\t\t\t\t<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-grids wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"col-md-4 new-grid\">
\t\t\t\t\t\t<div id=\"box\" class=\"burst-circle teal\">
\t\t\t\t\t\t\t<div class=\"caption\"></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/n4.jpg\" class=\"img-responsive\" />
\t\t\t\t\t\t\t<h4>Agrox</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 new-grid1 hvr-bounce-to-right\">
\t\t\t\t\t\t<h5><i class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></i> 25 November 2015 </h5>
\t\t\t\t\t\t<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>
\t\t\t\t\t\t<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!---news-->
\t\t<!---Testimonials-->
\t\t<div class=\"testimonials-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h3>Testimonial</h3>
\t\t\t\t<div class=\"testimonials-grids\">
\t\t\t\t\t<div class=\"col-md-2 testimonials-grid1 wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<img src=\"";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["static_template_path"]) ? $context["static_template_path"] : null), "html", null, true);
        echo "images/t1.png\" class=\"img-responsive\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10 testimonials-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium.</p>
\t\t\t\t\t\t<h5>Antonio Brightman</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!---Testimonials-->
\t</div>
\t<!---footer-->
\t\t<div class=\"footer-section\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"footer-grids\">
\t\t\t\t<div class=\"col-md-3 footer-grid wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<h4>About</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Customer focus</li>\t\t\t\t\t\t
\t\t\t\t\t\t<li>Sed laoreet aliqu</li>
\t\t\t\t\t\t<li>Dapibus eget elem</li>
\t\t\t\t\t\t<li>Performance</li>
\t\t\t\t\t\t<li>Innovation</li>
\t\t\t\t\t\t<li>Responsibility</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 footer-grid wow fadeInDownBig animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<h4>Solutions</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Contact Center</li>
\t\t\t\t\t\t<li>Customer Support</li>
\t\t\t\t\t\t<li>Dapibus eget elem</li>
\t\t\t\t\t\t<li>Help Desk</li>
\t\t\t\t\t\t<li>Web Self-Service</li>
\t\t\t\t\t\t<li>Performance Metrics</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 footer-grid wow fadeInUpBig animated\" data-wow-delay=\".5s\">
\t\t\t\t<h4>Work</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Customer Support</li>
\t\t\t\t\t\t<li>Platinum Support</li>
\t\t\t\t\t\t<li>Gold Support</li>
\t\t\t\t\t\t<li>Training</li>
\t\t\t\t\t\t<li>Workshops</li>
\t\t\t\t\t\t<li>Online Training</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 footer-grid wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t<h4>Contact</h4>
\t\t\t\t\t<p>9801 Marmora Road</p>
\t\t\t\t\t<p>Glasgow, DO4 98GR.</p>
\t\t\t\t\t<p>Freephone: +1 900 448 9990</p>
\t\t\t\t\t<p>Telephone: +1 459 503 7035</p>
\t\t\t\t\t<p>FAX: + 1 304 789 7898</p>
\t\t\t\t\t<a href=\"mailto:example@mail.com\"> example@mail.com</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t";
    }

    // line 383
    public function block_footer($context, array $blocks = array())
    {
        // line 384
        echo "\t<!--footer-->
\t<!--copy-->
\t<div class=\"copy-section wow fadeInRight animated\" data-wow-delay=\".5s\"\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t<a href=\"#\"><i class=\"icon\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon1\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon2\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"icon3\"></i></a>
\t\t\t\t</div>
\t\t\t<p>&copy; 2016 Agrox. All rights reserved | Design by <a href=\"http://w3layouts.com\">W3layouts</a></p>
\t\t</div>
\t</div>
\t<!--copy-->
\t";
    }

    public function getTemplateName()
    {
        return "_base_home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 384,  551 => 383,  484 => 320,  461 => 300,  443 => 285,  425 => 270,  407 => 255,  387 => 238,  373 => 227,  351 => 208,  337 => 197,  319 => 182,  307 => 173,  295 => 164,  283 => 155,  262 => 137,  248 => 126,  234 => 115,  222 => 105,  219 => 104,  215 => 103,  212 => 102,  164 => 56,  161 => 55,  155 => 51,  151 => 50,  136 => 38,  131 => 37,  128 => 36,  118 => 30,  114 => 29,  108 => 25,  105 => 24,  99 => 19,  95 => 18,  91 => 16,  88 => 15,  81 => 11,  78 => 10,  71 => 399,  68 => 383,  65 => 104,  63 => 102,  60 => 101,  58 => 55,  54 => 53,  52 => 36,  50 => 24,  45 => 21,  43 => 15,  41 => 10,  37 => 9,  27 => 1,);
    }
}
/* <!--Author: W3layouts*/
/* Author URL: http://w3layouts.com*/
/* License: Creative Commons Attribution 3.0 Unported*/
/* License URL: http://creativecommons.org/licenses/by/3.0/*/
/* -->*/
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/* <title>{{title}}</title>*/
/* {%block meta%}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="ปัตตานี pattani" />*/
/* {%endblock%}*/
/* {%block css%}*/
/* <!---css-*/
/* -->*/
/* <link href="{{static_template_path}}css/bootstrap.css" rel='stylesheet' type='text/css' />*/
/* <link href="{{static_template_path}}css/style.css" rel='stylesheet' type='text/css' />*/
/* {%endblock%}*/
/* <!---css-*/
/* -->*/
/* */
/* {%block jscript%}*/
/* */
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* <!---js-*/
/* -->*/
/* <script src="{{static_template_path}}js/jquery-1.12.0.min.js"></script>*/
/* <script src="{{static_template_path}}js/bootstrap.js"></script>*/
/* <!---js-*/
/* -->*/
/* <!--JS for animate*/
/* -->*/
/* {%endblock%}*/
/* {%block extra_header%}*/
/* 	<link href="{{static_template_path}}css/animate.css" rel="stylesheet" type="text/css" media="all">*/
/* 	<script src="{{static_template_path}}js/wow.min.js"></script>*/
/* 		<script>*/
/* 			new WOW().init();*/
/* 		</script>*/
/* 	<!--end-animate*/
/* 	-->*/
/* */
/* <!---webfont*/
/* -->*/
/* <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>*/
/* <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>*/
/* <!---webfont---->*/
/* <link rel="stylesheet" type="text/css" href="{{static_template_path}}css/style_common.css" />*/
/*  <link rel="stylesheet" type="text/css" href="{{static_template_path}}css/style9.css" />      */
/* {%endblock%}*/
/* </head>*/
/* <body>*/
/* {%block content_head%}*/
/* 	<!---header---->*/
/* 		<div class="header-section">*/
/* 			<div class="container">*/
/* 				<div class="head-bottom">*/
/* 					<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">*/
/* 						<h1><a href="index.html">Agrox<span>Farming company</span></a></h1>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!---header--->*/
/* 		<!---banner--->*/
/* 		<div class="banner">*/
/* 			<div class="container">*/
/* 				<nav class="navbar navbar-default">*/
/* 					<div class="container-fluid">*/
/* 					<!-- Brand and toggle get grouped for better mobile display -->*/
/* 						<div class="navbar-header">*/
/* 							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 								<span class="sr-only">Toggle navigation</span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 							</button>*/
/* 						</div>*/
/* 			<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 							<ul class="nav navbar-nav">*/
/* 								<li class="active"><a href="index.html" class="wow fadeInDownBig" data-wow-delay=".1s">Home <span class="sr-only">(current)</span></a></li>*/
/* 								<li><a href="p/about/" class="wow fadeInDownBig" data-wow-delay=".2s">About</a></li>*/
/* 								<li><a href="p/services/" class="wow fadeInDownBig" data-wow-delay=".4s">Services</a></li>*/
/* 								<li><a href="p/gallery/" class="wow fadeInDownBig" data-wow-delay=".6s">Gallery</a></li>*/
/* 								<li><a href="p/codes/" class="wow fadeInDownBig" data-wow-delay=".7s">Codes</a></li>*/
/* 								<li><a href="p/contact/" class="wow fadeInDownBig" data-wow-delay=".9s">Contact</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</nav>*/
/* 				<div class="banner-center">*/
/* 					<marquee><h3>โครงการส่งน้ำและบำรุงรักษาปัตนี</h3></marquee>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		{%endblock%}*/
/* <!---banner-->*/
/* 		{%block content%}*/
/* 		{%endblock%}*/
/* 		{%block content_last%}*/
/* 	<!---welcome-->*/
/* 	<div class="content">*/
/* 		<div class="welcome-section">*/
/* 			<div class="container">*/
/* 			<div class="banner-bottom">*/
/* 					<div class="banner-grids">*/
/* 						<div class="col-md-4 banner-grid wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 							<h4>Premium Products</h4>*/
/* 							<div class="ban1">*/
/* 								<div class="ban-images  view fourth-effect">*/
/* 									<img src="{{static_template_path}}images/b1.jpg" class="img-responsive" alt=""/>*/
/* 								<div class="mask"></div>*/
/* 								</div>*/
/* 								<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>*/
/* 								<a href="about.html" class="button hvr-wobble-bottom">more info</a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-4 banner-grid wow fadeInDownBig" data-wow-delay=".4s">*/
/* 							<h4>Agricultural Seeds </h4>*/
/* 								<div class="ban1">*/
/* 									<div class="ban-images  view fourth-effect">*/
/* 										<img src="{{static_template_path}}images/b2.jpg" class="img-responsive" alt=""/>*/
/* 									<div class="mask"></div>*/
/* 									</div>*/
/* 									<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>*/
/* 									<a href="about.html" class="button hvr-wobble-bottom">more info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">*/
/* 							<h4>Our Technologies</h4>*/
/* 								<div class="ban1">*/
/* 									<div class="ban-images  view fourth-effect">*/
/* 										<img src="{{static_template_path}}images/b1.jpg" class="img-responsive" alt=""/>*/
/* 										<div class="mask"></div>*/
/* 									</div>*/
/* 									<p>Lorem ipsum dolor sit amet, lorem  Consec tetuer adipicing it. Praesebul lorem ipsum.S natoque penatibus et gnis dent monteiculu.</p>*/
/* 									<a href="about.html" class="button hvr-wobble-bottom">more info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<h2>welcome</h2>*/
/* 				<div class="welcome-grids">*/
/* 					<div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 						<div class="welcome-text">*/
/* 							<h4>Duis ultricies</h4>*/
/* 							<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>*/
/* 						</div>*/
/* 						<div class="welcome-icon">*/
/* 							<img src="{{static_template_path}}images/i1.png">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">*/
/* 						<div class="welcome-text">*/
/* 							<h4>Morbi nunc </h4>*/
/* 							<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>*/
/* 						</div>*/
/* 						<div class="welcome-icon">*/
/* 							<img src="{{static_template_path}}images/i2.png">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">*/
/* 						<div class="welcome-text">*/
/* 							<h4>Lorem ipsum</h4>*/
/* 							<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>*/
/* 						</div>*/
/* 						<div class="welcome-icon">*/
/* 							<img src="{{static_template_path}}images/i3.png">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">*/
/* 						<div class="welcome-text">*/
/* 							<h4>Fusce suscip</h4>*/
/* 							<p>Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremqueexplicabo.</p>*/
/* 						</div>*/
/* 						<div class="welcome-icon">*/
/* 							<img src="{{static_template_path}}images/i4.png">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!---welcome-->*/
/* 		<!---product-->*/
/* 		<div class="product-section">*/
/* 			<div class="container">*/
/* 				<h3>Popular Products</h3>*/
/* 				<div class="product-grids">*/
/* 					<div class="col-md-6 product-grid wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 						<div class="product-left">*/
/* 						<img src="{{static_template_path}}images/p.jpg" class="img-responsive" alt=""/>	*/
/* 						</div>*/
/* 						<div class="product-right">*/
/* 							<h4>Dolor Sit</h4>*/
/* 							<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>*/
/* 							<a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 					<div class="col-md-6 product-grid wow fadeInRight animated" data-wow-delay=".5s">*/
/* 						<div class="product-left">*/
/* 						<img src="{{static_template_path}}images/p1.jpg" class="img-responsive" alt=""/>	*/
/* 						</div>*/
/* 						<div class="product-right">*/
/* 							<h4>Consequat</h4>*/
/* 							<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>*/
/* 							<a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 				<div class="product-grids">*/
/* 					<div class="col-md-6 product-grid1 wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 						<div class="product1-left">*/
/* 							<h4>Dolores Btrs</h4>*/
/* 							<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>*/
/* 							<a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div class="product1-right">*/
/* 							<img src="{{static_template_path}}images/p2.jpg" class="img-responsive" alt=""/>	*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 					<div class="col-md-6 product-grid1 wow fadeInRight animated" data-wow-delay=".5s">*/
/* 						<div class="product1-left">*/
/* 							<h4>Nam aliquam</h4>*/
/* 							<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>*/
/* 							<a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div class="product1-right">*/
/* 							<img src="{{static_template_path}}images/p3.jpg" class="img-responsive" alt=""/>	*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--product-->*/
/* 		<!---news-->*/
/* 		<div class="news-section">*/
/* 			<div class="container">*/
/* 				<h3>latest news</h3>*/
/* 				<div class="news-grids wow fadeInRight animated" data-wow-delay=".5s">*/
/* 					<div class="col-md-4 new-grid">*/
/* 						<div id="box" class="burst-circle teal">*/
/* 							<div class="caption"></div>*/
/* 							<img src="{{static_template_path}}images/n1.jpg" class="img-responsive" />*/
/* 							<h4>Agrox</h4>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-8 new-grid1 hvr-bounce-to-right">*/
/* 						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> 25 November 2015 </h5>*/
/* 						<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>*/
/* 						<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 				<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 					<div class="col-md-4 new-grid">*/
/* 						<div id="box" class="burst-circle teal">*/
/* 							<div class="caption"></div>*/
/* 							<img src="{{static_template_path}}images/n2.jpg" class="img-responsive" />*/
/* 							<h4>Agrox</h4>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-8 new-grid1 hvr-bounce-to-right">*/
/* 						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> 25 November 2015 </h5>*/
/* 						<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>*/
/* 						<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 				<div class="news-grids wow fadeInRight animated" data-wow-delay=".5s">*/
/* 					<div class="col-md-4 new-grid">*/
/* 						<div id="box" class="burst-circle teal">*/
/* 							<div class="caption"></div>*/
/* 							<img src="{{static_template_path}}images/n3.jpg" class="img-responsive" />*/
/* 							<h4>Agrox</h4>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-8 new-grid1 hvr-bounce-to-right">*/
/* 						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> 25 November 2015 </h5>*/
/* 						<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>*/
/* 						<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>*/
/* 					</div>*/
/* 				<div class="clearfix"></div>*/
/* 				</div>*/
/* 				<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 					<div class="col-md-4 new-grid">*/
/* 						<div id="box" class="burst-circle teal">*/
/* 							<div class="caption"></div>*/
/* 							<img src="{{static_template_path}}images/n4.jpg" class="img-responsive" />*/
/* 							<h4>Agrox</h4>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-8 new-grid1 hvr-bounce-to-right">*/
/* 						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> 25 November 2015 </h5>*/
/* 						<h4>Fusce euismod consequat ante Lorem ipsum dolor sit amet</h4>*/
/* 						<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>*/
/* 					</div>*/
/* 				<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 			<!---news-->*/
/* 		<!---Testimonials-->*/
/* 		<div class="testimonials-section">*/
/* 			<div class="container">*/
/* 				<h3>Testimonial</h3>*/
/* 				<div class="testimonials-grids">*/
/* 					<div class="col-md-2 testimonials-grid1 wow fadeInRight animated" data-wow-delay=".5s">*/
/* 						<img src="{{static_template_path}}images/t1.png" class="img-responsive" alt=""/>*/
/* 					</div>*/
/* 					<div class="col-md-10 testimonials-grid wow fadeInLeft animated" data-wow-delay=".5s">*/
/* 						<p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium.</p>*/
/* 						<h5>Antonio Brightman</h5>*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!---Testimonials-->*/
/* 	</div>*/
/* 	<!---footer-->*/
/* 		<div class="footer-section">*/
/* 			<div class="container">*/
/* 			<div class="footer-grids">*/
/* 				<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">*/
/* 					<h4>About</h4>*/
/* 					<ul>*/
/* 						<li>Customer focus</li>						*/
/* 						<li>Sed laoreet aliqu</li>*/
/* 						<li>Dapibus eget elem</li>*/
/* 						<li>Performance</li>*/
/* 						<li>Innovation</li>*/
/* 						<li>Responsibility</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">*/
/* 					<h4>Solutions</h4>*/
/* 					<ul>*/
/* 						<li>Contact Center</li>*/
/* 						<li>Customer Support</li>*/
/* 						<li>Dapibus eget elem</li>*/
/* 						<li>Help Desk</li>*/
/* 						<li>Web Self-Service</li>*/
/* 						<li>Performance Metrics</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">*/
/* 				<h4>Work</h4>*/
/* 					<ul>*/
/* 						<li>Customer Support</li>*/
/* 						<li>Platinum Support</li>*/
/* 						<li>Gold Support</li>*/
/* 						<li>Training</li>*/
/* 						<li>Workshops</li>*/
/* 						<li>Online Training</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">*/
/* 					<h4>Contact</h4>*/
/* 					<p>9801 Marmora Road</p>*/
/* 					<p>Glasgow, DO4 98GR.</p>*/
/* 					<p>Freephone: +1 900 448 9990</p>*/
/* 					<p>Telephone: +1 459 503 7035</p>*/
/* 					<p>FAX: + 1 304 789 7898</p>*/
/* 					<a href="mailto:example@mail.com"> example@mail.com</a>*/
/* 				</div>*/
/* 				<div class="clearfix"></div>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 	{%endblock%}*/
/* 	{%block footer%}*/
/* 	<!--footer-->*/
/* 	<!--copy-->*/
/* 	<div class="copy-section wow fadeInRight animated" data-wow-delay=".5s"">*/
/* 		<div class="container">*/
/* 				<div class="social-icons">*/
/* 					<a href="#"><i class="icon"></i></a>*/
/* 					<a href="#"><i class="icon1"></i></a>*/
/* 					<a href="#"><i class="icon2"></i></a>*/
/* 					<a href="#"><i class="icon3"></i></a>*/
/* 				</div>*/
/* 			<p>&copy; 2016 Agrox. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--copy-->*/
/* 	{%endblock%}*/
/* */
/* </body>*/
/* </html>*/
/* */
