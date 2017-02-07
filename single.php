<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage My theme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="breadcrumbs-section">
  <div class="content container-flex">
    <ul class="breadcrumb">
      <li>
        <a href="#">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/home-icon.png" alt="" class="breadcrumb-home-icon">
          www.chileayuda.cl
        </a>
      </li>
      <li><a href="#">noticias</a></li>
    </ul>
  </div>
</div>

<section>
  <div class="container-flex">
    <div class="news">
      
      <article>
        <?php
          /* Start the Loop */
          while ( have_posts() ) : the_post(); 
        ?>
          <h2 class="news-title"><?php the_title(); ?></h2>
          <time><?php the_date(); ?></time>
          <p>
            <?php the_content(); ?>
          </p>

          <div class="more-info">
            <h2>Más información</h2>
            <div class="container-flex">
              <div class="more-info-map">
                <!-- <img src="http://www.elmostrador.cl/media/2017/01/incendios-forestales1_816x544.jpg" alt=""> -->
              </div>
              <div class="more-info-details">
                <ul>
                  <li>
                    <h3>Ubicación:</h3>
                    <h3>IV Región</h3>
                  </li>
                  <li>
                    <h3>Fuente</h3>
                    <a href="#">http://www.reddeemergencia.cl/resumen-nacional-de-incendios-forestales-36/</a>
                  </li>
                  <li>
                    <h3>Publicado por:</h3>
                    <p><?php the_author(); ?></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>        
        <?php 
          endwhile; // End of the loop.
        ?>

        <!-- <div class="article-images">
          <figure>
            <img src="http://www.elmostrador.cl/media/2017/01/incendios-forestales1_816x544.jpg" alt="">
          </figure>
          <figure>
            <img src="http://www.elmostrador.cl/media/2017/01/incendios-forestales1_816x544.jpg" alt="">
          </figure>
          <figure>
            <img src="http://www.elmostrador.cl/media/2017/01/incendios-forestales1_816x544.jpg" alt="">
          </figure>
        </div> -->
      </article>

    </div>
    
    <div class="aside-news">
      <div class="other-news">
        <h2>Otras noticias</h2>
        <ul>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
          <li>
            <a href="#">
              <time>Jueve 2 febrero 20:00:26</time>
              <h3>Tres bomberos lesionados deja volcamiento de carro en Illico</h3>
            </a>
          </li>
        </ul>
      </div>

      <div class="onemi-news-container">
				<span></span>
				<h2>Alertas ONEMI</h2>
				<p>Información oficial desde www.onemi.cl</p>
				<div class="onemi-news">
					<ul class="onemi-alerts">
            <li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li>
            <li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li>
            <li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li>
            <li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li><li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li><li>
							<a href="#" target="blank_">
								<img src="http://www.onemi.cl//wp-content/themes/onemi-bootstrap-master/library/img/alerta/rojo/incendio-forestal.png"/>
								<strong><span class="place">Biobío</span>  - Monitoreo Alerta Roja para la Región de Biobío por incendios forestales - 28/01/2017 15:49</strong>
							</a>
						</li>
					</ul>
				</div>
			</div>
    </div>
  </div>
</section>

<?php // get_sidebar(); ?>

<?php get_footer();
