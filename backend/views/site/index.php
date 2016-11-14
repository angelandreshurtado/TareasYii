<?php
echo yii\bootstrap\Carousel::widget([
    'items' => [
        ['content' => yii\helpers\Html::img('/yii-application/frontend/web/images/imagen4.jpg'),
            'caption' => '<h4>Nuevas Técnicas de Programación</h4>',
            'options' => ['interval' => '3000'],
        ],
        ['content' => yii\helpers\Html::img('/yii-application/frontend/web/images/imagen2.jpg'),
            'caption' => '<h4>PHP</h4>',
            'options' => ['interval' => '3000'],
        ],
        ['content' => yii\helpers\Html::img('/yii-application/frontend/web/images/imagen3.jpg'),
            'caption' => '<h4>¡Yii es Ahora!</h4>',
            'options' => ['interval' => '3000'],
        ],
        ['content' => yii\helpers\Html::img('/yii-application/frontend/web/images/default.jpg'),
            'caption' => '<h4>Tu Sitio Web</h4>',
            'options' => ['interval' => '3000'],
        ],
    ],
    'options' => [
        'style' => '',
        'class' => 'slide' // set the width of the container if you like
    ]
]);
?>
<div class="site-index">
    <div id="two" class="container">
        <div class="maintitle">
            <br><h2 class="section-title">Artículos</h2>
            <p class="lead">
                ¡Esta página está hecha con Yii2!
            </p>
        </div>

        <div class="body-content">

            <div class="row">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img class="img-rounded" src="<?php echo Yii::$app->request->baseUrl; ?>/images/Testing.jpg" alt="Testing">
                        <div class="caption">
                            <h2>Testing<a class="pull-right btn btn-primary" href="http://www.ssrangelandres.com/yii2/web/pdf/Testing.pdf" target="_blank">Artículo &raquo;</a></h2>
                            <p>
                                <b>Título:</b><br> Method and Apparatus for Testing Web Sites<br>
                                <b>Autor:</b> Peter J. Welter - John R. Meierbr<br>
                                <b>Publicación:</b> Oct. 24, 2000
                            </p>
                        </div>
                    </div>             
                </div>

                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img class="img-rounded" src="<?php echo Yii::$app->request->baseUrl; ?>/images/MVC.jpg" alt="Modelo Vista Controlador">
                        <div class="caption">
                            <h2>MVC<a class="pull-right btn btn-primary" href="http://www.ssrangelandres.com/yii2/web/pdf/MVC.pdf" target="_blank">Artículo &raquo;</a></h2>
                            <p>
                                <b>Título:</b><br> How to use Model-View-Controller<br>
                                <b>Autor:</b> Steve Burbeck, Ph.D.<br>
                                <b>Publicación:</b> Sep. 09, 2012
                            </p>
                        </div>
                    </div>             
                </div>

                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img class="img-rounded" src="<?php echo Yii::$app->request->baseUrl; ?>/images/selenium.jpg" alt="Selenium">
                        <div class="caption">
                            <h2>Selenium<a class="pull-right btn btn-primary" href="http://www.ssrangelandres.com/yii2/web/pdf/Selenium.pdf" target="_blank">Artículo &raquo;</a></h2>
                            <p>
                                <b>Título:</b><br> Creación de un mashup con Selenium<br>
                                <b>Autor:</b> Miguel Javier de la Rosa Escolante<br>
                                <b>Publicación:</b> Mayo 2011
                            </p>
                        </div>
                    </div>             
                </div>
            </div>
            <div class="row">		
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="img-rounded" src="<?php echo Yii::$app->request->baseUrl; ?>/images/qa.jpg" alt="Software QA">
                        <div class="caption">
                            <h2>Software QA<a class="pull-right btn btn-primary" href="http://www.ssrangelandres.com/yii2/web/pdf/Software-QA.pdf" target="_blank">Artículo &raquo;</a></h2>
                            <p>
                                <b>Título:</b> Metrics In Software Quality Assurance<br>
                                <b>Autor:</b> J. E. Gaffney, Jr.<br>
                                <b>Publicación:</b> Nov. 11, 1981
                            </p>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="img-rounded" src="<?php echo Yii::$app->request->baseUrl; ?>/images/html5.jpg" alt="HTML5">
                        <div class="caption">
                            <h2>HTML5<a class="pull-right btn btn-primary" href="http://www.ssrangelandres.com/yii2/web/pdf/HTML5.pdf" target="_blank">Artículo &raquo;</a></h2>
                            <p>
                                <b>Título:</b> HTML5: A New Standard for the Web<br>
                                <b>Autor:</b> MATTHEW B. HOY<br>
                                <b>Publicación:</b> 2011
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contactarea" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/map.png);">
        <div class="wrapsection">
            <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.95;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="maintitle">
                            <br><h3 class="section-title">Contáctenos</h3>
                            <p class="lead">
                                Si tiene alguna pegunta por favor no dude en consultarnos, Gracias!
                            </p>
                        </div>
                        <form id="contact" name="contact" method="post" class="text-left">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
                                        <label for="name">Nombre<span class="required">*</span></label>
                                        <input type="text" name="name" id="name" size="30" value="" required/>
                                    </div>
                                    <div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
                                        <label for="email">Correo Electrónico<span class="required">*</span></label>
                                        <input type="text" name="email" id="email" size="30" value="" required/>
                                    </div>
                                    <div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
                                        <label for="phone">N. Celular</label>
                                        <input type="text" name="phone" id="phone" size="30" value=""/>
                                    </div>
                                </div>
                                <div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
                                    <label for="message">Mensaje<span class="required">*</span></label>
                                    <textarea name="message" id="message" required></textarea>
                                </div>
                                <div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
                                    <input id="submit" type="submit" name="submit" value="Enviar"/>
                                </div>
                            </fieldset>
                        </form>
                        <div id="success">		
                            <p class="contactalert">
                                Su mensaje fue enviado con exito. Gracias por comunicarse con nosotros.
                            </p>			
                        </div>
                        <div id="error">			
                            <p class="contactalert">
                                Algo estuvo mal, trate recargando la página nuevamente y envie de nuevo su mensaje.
                            </p>			
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

