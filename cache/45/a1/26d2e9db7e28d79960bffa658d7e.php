<?php

/* blocks/item-card.html */
class __TwigTemplate_45a126d2e9db7e28d79960bffa658d7e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<div class=\"col-sm-12 col-md-6 col-lg-4 my-4\">
    <div class=\"card my-card h-100 text-center\">
        <img src=\"static/img/bg.jpg\">
        <div class=\"tickets-left\">5000 Tickets Left</div>
        <div class=\"card-body\">
            <div class=\"heading\">awesome laptop worth 4000</div>
            <div class=\"price\">R2 Per ticket</div>
            <div class=\"spinner-box\">
                <!-- <h6>Awesome supper computer</h6> -->
                <div class=\"spinner\">
                    <div class=\"curve\" id=\"number\">
                        500
                    </div>
                </div>
                <div class=\"time my-1\">
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">dys</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">hrs</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">min</div>
                    </div>
        
                </div>
                <div>Winner: <b>pending</b> </div>
            </div>
            <button class=\"btn btn-primary btn-rounded\" data-mdb-toggle=\"modal\"
                data-mdb-target=\"#buy-ticket-modal\"> <i class=\"fas fa-ticket-alt\"></i> Buy Ticket</button>
        </div>
    </div>
</div>




<div class=\"col-sm-12 col-md-6 col-lg-4 my-4\">
    <div class=\"card my-card h-100 text-center\">
        <img src=\"static/img/bg.jpg\">
        <div class=\"tickets-left\">5000 Tickets Left</div>
        <div class=\"card-body\">
            <div class=\"heading\">awesome laptop worth 4000</div>
            <div class=\"price\">R2 Per ticket</div>
            <div class=\"spinner-box\">
                <!-- <h6>Awesome supper computer</h6> -->
                <div class=\"spinner\">
                    <div class=\"curve\" id=\"number\">
                        500
                    </div>
                </div>
                <div class=\"time my-1\">
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">dys</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">hrs</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">min</div>
                    </div>
        
                </div>
                <div>Winner: <b>pending</b> </div>
            </div>
            <button class=\"btn btn-primary btn-rounded\" data-mdb-toggle=\"modal\"
                data-mdb-target=\"#buy-ticket-modal\"> <i class=\"fas fa-ticket-alt\"></i> Buy Ticket</button>
        </div>
    </div>
</div>





<div class=\"col-sm-12 col-md-6 col-lg-4 my-4\">
    <div class=\"card my-card h-100 text-center\">
        <img src=\"static/img/bg.jpg\">
        <div class=\"tickets-left\">5000 Tickets Left</div>
        <div class=\"card-body\">

            
            <div class=\"heading\">awesome laptop worth 4000</div>
            <div class=\"price\">R2 Per ticket</div>
            <div class=\"spinner-box\">
                <!-- <h6>Awesome supper computer</h6> -->
                <div class=\"spinner\">
                    <div class=\"curve\" id=\"number\">
                        500
                    </div>
                </div>
                <div class=\"time my-1\">
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">dys</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">hrs</div>
                    </div>
        
                    <div class=\"time-item\">
                        <div class=\"time-block\">00</div>
                        <div class=\"time-text\">min</div>
                    </div>
        
                </div>
                <div>Winner: <b>pending</b> </div>
            </div>
            <button class=\"btn btn-primary btn-rounded\" data-mdb-toggle=\"modal\"
                data-mdb-target=\"#buy-ticket-modal\"> <i class=\"fas fa-ticket-alt\"></i> Buy Ticket</button>
        </div>
    </div>
</div>









<script>


setInterval(() => {
            document.getElementById(\"number\").innerHTML = Math.floor(Math.random() * 3000);
        }, 2300);
</script>
";
    }

    public function getTemplateName()
    {
        return "blocks/item-card.html";
    }

}
