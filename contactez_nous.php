<?php
require_once './classes/template.php';
$temp = new template("master_contact.php");
$temp->render();
?>
<temp:templateContent xmlns:temp="http://templates"
                      xmlns="http://www.w3.org/1999/xhtml">
    <temp:contentPlaceHolder id="head">
        <link rel="stylesheet" type="text/css" href="contact-form/css/standard.css" /><!-- Contact form styles -->
        <script type="text/javascript" src="contact-form/js/plugins.js"></script>
        <script type="text/javascript" src="contact-form/js/iphorm.js"></script>
        <script type="text/javascript" src="contact-form/js/scripts.js"></script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="script">
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu ul li:eq(4)').addClass('selected');
            });
        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <div id="contactMapAndAdress">
                <h1 id="contactMapAndAdressTitle">Notre adresse</h1>
                <div class="separatorLine"></div>
                <div id="contactMap">
                    <iframe width="600" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="contactMap" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=162+galt+vaudreuil-dorion+j7v1l8+montreal+quebec&amp;aq=&amp;sll=45.387872,-74.016518&amp;sspn=0.011513,0.024397&amp;ie=UTF8&amp;hq=&amp;hnear=162+Rue+Galt,+Vaudreuil-Dorion,+Qu%C3%A9bec+J7V+1L6&amp;t=m&amp;ll=45.394774,-74.010773&amp;spn=0.018082,0.051413&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=162+galt+vaudreuil-dorion+j7v1l8+montreal+quebec&amp;aq=&amp;sll=45.387872,-74.016518&amp;sspn=0.011513,0.024397&amp;ie=UTF8&amp;hq=&amp;hnear=162+Rue+Galt,+Vaudreuil-Dorion,+Qu%C3%A9bec+J7V+1L6&amp;t=m&amp;ll=45.394774,-74.010773&amp;spn=0.018082,0.051413&amp;z=14&amp;iwloc=A" style="color:#008806;font-family: 'Oswald', sans-serif; font-size:13px;">Agrandir la carte</a></small>
                </div>
                <div id="contactAdress">
                    <img id="imgAdress" src="images/earth_small.png" alt=""/>
                    <p class="adress">162 Galt<br/>
                        Vaudreuil-Dorion, J7V 1L8<br/>
                        Québec, Canada</p>
                </div>
                <div id="contactPhone">
                    <img id="imgPhone" src="images/phone_small.png" alt=""/>
                    <p class="phone">514-455-9621</p>
                </div>
                <div id="contactEmail">
                    <img id="imgEmail" src="images/email_small.png" alt=""/>
                    <p class="email"><a href="mailto:info@webconcept.co">info@webconcept.co</a></p>
                </div>
                <div class="clear" style="float:none;"></div>
            </div>
            
            <div id="contactForm">
                <h1 id="contactMapAndAdressTitle">Formulaire</h1>
                <div class="separatorLine"></div>
                <div id="form">
                    <!-- ***************** - START Contact Form - ***************** -->
                    <div class="iphorm-outer">
                        <form class="iphorm" action="contact-form/process.php" method="post" enctype="multipart/form-data" id="contact-form" name="contact-form">
                            <div class="iphorm-wrapper">
                                <div class="iphorm-inner">
                                    <div class="iphorm-message"></div>
                                    <div class="iphorm-container clearfix">
                                        <!-- Begin Name element -->
                                        <div class="contact_gauche">	
                                            <div class="element-wrapper name-element-wrapper clearfix">
                                                <div class="formFloatLeft">
                                                    <label class="textCss" for="nom">Nom</label>
                                                </div>
                                                <div class="input-wrapper name-input-wrapper formFloatRight">
                                                    <input class="name-element" id="nom" type="text" name="nom" style="width:220px;"/>
                                                </div>
                                            </div>
                                            <div class="clear" style="float:none;"></div>
                                            <!-- Begin Phone element -->
                                            <div class="element-wrapper phone-element-wrapper clearfix">
                                                <div class="formFloatLeft">
                                                    <label class="textCss"  for="téléphone">Téléphone</label>
                                                </div>
                                                <div class="input-wrapper phone-input-wrapper formFloatRight">
                                                    <input class="phone-element" id="telephone" type="text" name="téléphone" style="width:220px;"/>
                                                </div>
                                            </div>
                                            <div class="clear" style="float:none;"></div>
                                            <!-- Begin Email element -->
                                            <div class="element-wrapper email-element-wrapper clearfix">
                                                <div class="formFloatLeft">
                                                    <label class="textCss"  for="email">Adresse courriel</label>
                                                </div>
                                                <div class="input-wrapper email-input-wrapper formFloatRight">
                                                    <input class="email-element" id="email" type="text" name="email" style="width:220px;"/>
                                                </div>
                                            </div>
                                            <div class="clear" style="float:none;"></div>
                                            <!-- End Email element -->
                                            <!-- Begin Message element -->
                                            <div class="element-wrapper message-element-wrapper clearfix" style="margin: -10px 0 10px 0px;">
                                                <p class="titre_contact"></p>
                                                <div class="input-wrapper message-input-wrapper clearfix">
                                                    <textarea style="width:421px; height:150px;" class="message-element" id="message" name="message" rows="7" cols="25"></textarea>
                                                </div>
                                            </div>
                                            <div class="clear" style="float:none;"></div>
                                            <!-- End Message element -->


                                            <!-- Begin Submit button -->
                                            <div class="button-wrapper submit-button-wrapper clearfix">
                                                <div class="loading-wrapper"><span class="loading">Patientez...</span></div>
                                                <div class="button-input-wrapper submit-button-input-wrapper">
                                                    <input class="btn_contact" type="submit" name="contact" value="Envoyer" />
                                                    <!--a class="button btn_contact" name="contact" href="javascript:document.forms['contact-form'].submit();">Envoyer</a-->
                                                </div>
                                            </div>


                                            <!-- End Submit button -->
                                        </div>
                                        <p class="clear"></p>



                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- ***************** - END Contact Form - ***************** -->
                </div>
            </div>
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>