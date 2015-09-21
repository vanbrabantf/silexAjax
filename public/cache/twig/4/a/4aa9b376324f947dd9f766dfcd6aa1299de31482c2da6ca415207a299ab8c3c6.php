<?php

/* layout.html */
class __TwigTemplate_208cd9f1dbd9f0ccbd0964e480967d759ae4ac9321715182f26cfee6db467006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Frederick Vanbrabant\">

    <title>Office finder</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<div class=\"container\">
    <div class=\"col-md-7 col-md-offset-2\">
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js\"></script>
<script src=\"/../public/js/app.js\"></script>
</body>
</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  46 => 24,  44 => 23,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="Frederick Vanbrabant">*/
/* */
/*     <title>Office finder</title>*/
/* */
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <div class="container">*/
/*     <div class="col-md-7 col-md-offset-2">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/* */
/* </div><!-- /.container -->*/
/* */
/* */
/* <!-- Bootstrap core JavaScript -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js"></script>*/
/* <script src="/../public/js/app.js"></script>*/
/* </body>*/
/* </html>*/
/* */
