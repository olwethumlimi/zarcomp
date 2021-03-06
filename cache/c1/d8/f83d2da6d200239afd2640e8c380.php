<?php

/* blocks/ticket.html */
class __TwigTemplate_c1d8f83d2da6d200239afd2640e8c380 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"buy-ticket-modal\" data-mdb-backdrop=\"static\" data-mdb-keyboard=\"false\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-scrollable   \">
        <div class=\"modal-content \">
            <div class=\"modal-header py-3\">
                <h6 class=\"modal-title\">Awesome Laptop Worth R4000</h6>
                <button type=\"button\" class=\"btn-close\" data-mdb-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body \">
                <style>
                    .nav-tabs {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding: 0 !important;

                    }

                    .nav-tabs li {
                        flex: auto !important;
                        text-align: center;
                        width: calc(100% / 3);
                        padding: 0 !important;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .nav-tabs li a {
                        font-size: 13px !important;
                    }
                </style>
                <!-- Tabs navs -->
                <ul class=\"nav nav-tabs mb-1 \" id=\"ex1\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link active\" id=\"ex2-tab-1\" data-mdb-toggle=\"tab\" href=\"#ex2-tabs-1\" role=\"tab\"
                            aria-controls=\"ex2-tabs-1\" aria-selected=\"true\">Manual</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" id=\"ex2-tab-2\" data-mdb-toggle=\"tab\" href=\"#ex2-tabs-2\" role=\"tab\"
                            aria-controls=\"ex2-tabs-2\" aria-selected=\"false\">Random </a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" id=\"ex2-tab-3\" data-mdb-toggle=\"tab\" href=\"#ex2-tabs-3\" role=\"tab\"
                            aria-controls=\"ex2-tabs-3\" aria-selected=\"false\">Sequential</a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class=\"tab-content\" id=\"ex2-content\">
                    <div class=\"tab-pane fade show active\" id=\"ex2-tabs-1\" role=\"tabpanel\" aria-labelledby=\"ex2-tab-1\">
                        <div class=\"container todo-block\">
                            <h6 class=\"mb-1\">Add your favorate numbers 0 - 1000.</h6>
                            
                            <form name=\"toDoList\">

                                <div class=\"form-outline   col-sm-8 mb-1\">
                                    <input type=\"text\" id=\"ListItem\" name=\"ListItem\" class=\"form-control\"
                                        data-mdb-showcounter=\"true\" maxlength=\"20\" />
                                    <label class=\"form-label\" for=\"ListItem\">Enter Your Number</label>
                                    <div class=\"form-helper\"></div>
                                    <div class=\"form-helper error \"></div>
                                </div>

                                <div id=\"button\" class=\"btn btn-primary\">Add </div>
                               

                            </form>
                            <h6 class=\"todo-total\">Total 0</h6>


                            <br />
                            <ol></ol>

                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"ex2-tabs-2\" role=\"tabpanel\" aria-labelledby=\"ex2-tab-2\">
                        <h6>Select your Random order Ticket(s)</h6>
                        <div class=\"btn select-btn btn-rounded my-2\">
                            <select class=\"random-select-option\">
                                <!-- range box -->
                            </select>
                        </div>
                        <div class=\"fixed-button sticky-top\">
                            <div class=\"btn btn-primary btn-rounded\"
                            data-mdb-toggle=\"modal\" data-mdb-target=\"#random-ticket-modal\"
                            >VIEW/PLACE</div>
                        </div>
                        <div class=\"num-block row\">

                        </div>
                        <div class=\"btn btn-primary btn-rounded\">Buy</div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"ex2-tabs-3\" role=\"tabpanel\" aria-labelledby=\"ex2-tab-3\">
                        <h6>Select your Sequential order Ticket(s)</h6>
                        <div class=\"btn select-btn btn-rounded my-2\">
                            <select>
                                <option value=\"2\">R2 - 1 Ticket</option>
                                <option value=\"4\">R4 - 2 Tickets</option>
                                <option value=\"6\">R6 - 6 Tickets</option>
                                <option value=\"8\">R8 - 9 Tickets</option>
                                <option value=\"10\">R10 - 11 Tickets</option>
                            </select>
                        </div>

                        <div class=\"btn btn-primary btn-rounded\">Buy</div>
                    </div>
                </div>
                <!-- Tabs content -->



                <div class=\"payment-method  text-center mt-3\">
                    <img src=\"static/img/mastercard_colour.svg\" alt=\"\">
                    <img src=\"static/img/visa_colour.svg\" alt=\"\">
                    <img src=\"static/img/yoco_colour.svg\" alt=\"\">
                </div>
                <div class=\"text-center\">
                    <small> Secured By <b style=\"color: #62b9db;font-weight: bolder;\">YOCO</b></small>
                </div>
            </div>
            <!-- <div class=\"modal-footer py-1\" sty>
                <button type=\"button\" class=\"btn btn-outline-primary btn-rounded\">Buy</button>
            </div> -->
        </div>
    </div>
</div>




<!-- ramdom ticket list modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<style>
    #random-ticket-modal{
        background: rgba(24, 24, 24, 0.575) !important;
    }
    .ticket-block{
        display:  flex;
        justify-content: space-between;
        align-items: center;
        /* background: red; */
        cursor: pointer;
        box-shadow:  0 0 4px rgba(0, 0, 0, 0.26);
        margin-bottom: 2px;
        border-radius: 5px;
    }
</style>
<div class=\"modal fade\" id=\"random-ticket-modal\"   data-mdb-backdrop=\"static\" tabindex=\"-1\"  aria-hidden=\"true\">
    <div class=\"modal-dialog  modal-dialog-scrollable \">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Total <b class=\"ticket-amount\">0</b></h5>
                <button type=\"button\" class=\"btn-close\" data-mdb-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"ticket-block-list\">
                    <!-- add the tickets -->
                </div>
               
            </div>
            <div class=\"modal-footer\">
                  
                <div class=\"btn btn-primary btn-rounded\">Buy</div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blocks/ticket.html";
    }

}
