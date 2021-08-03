<?php

/* blocks/login.html */
class __TwigTemplate_07a731eb629eb9057c1e13c8461871af extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"login-modal\" data-mdb-backdrop=\"static\" data-mdb-keyboard=\"false\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-scrollable \">
        <div class=\"modal-content\">
            <div class=\"modal-header py-3\">
                <h6 class=\"modal-title\">login</h6>
                <button type=\"button\" class=\"btn-close\" data-mdb-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body \">
                <div class=\"form-outline mb-4\">
                    <input type=\"text\" id=\"login-email\" class=\"form-control\" data-mdb-showcounter=\"true\"
                        maxlength=\"20\" />
                    <label class=\"form-label\" for=\"login-email\">Email</label>
                    <div class=\"form-helper\"></div>
                    <div class=\"form-helper error login-email-error\"></div>
                </div>

                <div class=\"form-outline  mb-4\">
                    <input type=\"text\" id=\"login-password\" class=\"form-control\" data-mdb-showcounter=\"true\"
                        maxlength=\"20\" />
                    <label class=\"form-label\" for=\"login-password\">Password</label>
                    <div class=\"form-helper\"></div>
                    <div class=\"form-helper error login-password-error\"></div>
                </div>
                <div class=\" mb-2\">
                    <div class=\" error login-program-error\"></div>
                </div>
            </div>
            <div class=\"modal-footer py-1\">
                <button type=\"button\" class=\"btn btn-outline-primary btn-rounded\">Forgot Password</button>
                <button type=\"button\" class=\"btn btn-outline-primary btn-rounded\" id=\"login-button\">Login</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blocks/login.html";
    }

}
