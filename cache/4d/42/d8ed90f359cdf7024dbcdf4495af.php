<?php

/* blocks/header.html */
class __TwigTemplate_4d42d8ed90f359cdf7024dbcdf4495af extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />
    <meta http-equiv=\"Pragma\" content=\"no-cache\" />
    <meta http-equiv=\"Expires\" content=\"0\" />
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\" rel=\"stylesheet\" />
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\" />
    <!-- MDB -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css\" rel=\"stylesheet\" />

    <base href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/\">
    <link rel=\"stylesheet\" href=\"static/css/style.css\">

    <link rel=\"stylesheet\" href=\"static/css/spinner.css\">
    <link rel=\"stylesheet\" href=\"static/css/todo.css\">

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "blocks/header.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
