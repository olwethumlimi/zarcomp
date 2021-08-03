<?php

/* index.html */
class __TwigTemplate_f1891d0fc991bc126181b34bc856fa29 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->env->loadTemplate("blocks/header.html")->display($context);
        // line 6
        echo "</head>

<body>



    ";
        // line 12
        $this->env->loadTemplate("blocks/nav.html")->display($context);
        // line 13
        echo "    <!--backgroud image -->
    <div class=\"intro\" style='background-image: url(\"static/img/bg1.jpg\");'>
        <div class=\"intro-body\">
            <div class=\"intro-overlay\"></div>
            <div class=\"intro-items\">
                <h3>
                    With little as R1 - R10 , you can earn 2K + or
                    <span class=\"badge rounded-pill bg-primary\">useful goods</span>
                    .buy more tickets and secure cash.
                    <strong class=\"text-primary\">Deposit start from R10</strong>
                </h3>
                <div class=\"payment-method\">
                    <img src=\"static/img/mastercard_colour.svg\" alt=\"\">
                    <img src=\"static/img/visa_colour.svg\" alt=\"\">
                    <img src=\"static/img/yoco_colour.svg\" alt=\"\">
                </div>
            </div>


        </div>
    </div>
    <!-- end backgroud image -->

    <!-- side bar -->
    ";
        // line 37
        $this->env->loadTemplate("blocks/sidebar.html")->display($context);
        // line 38
        echo "    <!-- end sidebar -->

    <!--  ticket -->
    ";
        // line 41
        $this->env->loadTemplate("blocks/ticket.html")->display($context);
        // line 42
        echo "    <!-- end ticket -->


    <!--  register -->
    ";
        // line 46
        $this->env->loadTemplate("blocks/register.html")->display($context);
        // line 47
        echo "    <!-- end register -->

    <!--  login -->
    ";
        // line 50
        $this->env->loadTemplate("blocks/login.html")->display($context);
        // line 51
        echo "    <!-- end login -->


    <!-- cards-->
    <div class=\"container\">
        <h1 class=\"text-center my-3\">Games</h1>
        <div class=\"row\">
            ";
        // line 58
        $this->env->loadTemplate("blocks/item-card.html")->display($context);
        // line 59
        echo "        </div>
    </div>


    

    <!-- end card -->
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <!-- MDB -->

    <!--  footer -->
    ";
        // line 73
        $this->env->loadTemplate("blocks/footer.html")->display($context);
        // line 74
        echo "    <!-- end footer -->



   
  


</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
