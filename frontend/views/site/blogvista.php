<?php
/* @var $this yii\web\View */


$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
$posts = Yii::$app->db->createCommand('SELECT tituloNoticia, contenidoNoticia FROM blognoticia WHERE estado=\'1\'')->queryAll();
$longitud = count($posts);
?>

<div class="blog-index">
        <section id="about" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
            <div class="wrapsection">
                <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
                <div class="container">
                    <h1>Blog</h1>
                    <div class="row">
                        <?php
                        for ($i = 0; $i < $longitud; $i++) {
                            $fila = $posts[$i];
                            $titulo = $fila["tituloNoticia"];
                            $contenido = $fila["contenidoNoticia"];
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <h3><?php echo $titulo ?></h3>
                                    <p>
                                        <?php echo $contenido ?>
                                    </p>
                                    <button type="button" class="btn btn-info btn-md"><a href="#">Leer Más</a></button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>    
</div>
