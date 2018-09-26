<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,'right'); ?></title>
  <?php  wp_head(); ?>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".boton_menu").click(function(){
        $("#nav_responsive").slideToggle();
    });
  });
  </script>



    <header class="Header">
      <div class="headerCenter">
        <div class="Logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">  <img src="http://chocolatepublicidad.com/logo.png" alt=""> </a>
        </div>

        <?php
          if(has_nav_menu('main_menu')):
            wp_nav_menu(array(
              'theme_location' => 'main_menu',
              'container'=>'nav',
              'container_class'=>'menu'
            ));
          else: ?>
          <nav class="menu menu2">
            <ul>
              <?php wp_list_pages('title_li'); ?>
            </ul>
          </nav>
        <?php endif; ?>

        <div id="nav_responsive">

          <a href="http://localhost/wordpress/cabildo/"><li  class="li_responsive">Cabildo</li></a>
          <a href="http://localhost/wordpress/propuestas/"><li class="li_responsive">Propuestas</li></a>
          <a href="http://localhost/wordpress/contacto/"><li class="li_responsive">Contacto</li></a>

      </div>


          <div class="boton_menu">
            <img src="http://magdaperaza.mx/boton_menu.png" alt="">
          </div>



      </div>

    </header>


    <div class="banner">
      <img id="oculto" src="http://chocolatepublicidad.com/banner.png" alt="">
    </div>


      <section id="containerMaster">
        <section class="containerCenter">


      <?php if(have_posts()): while(have_posts()): the_post();?>
        <article class="entrada">
          <br>
          <br>
          <br>
          <h6 class="link"><?php the_category(', '); ?></h6>
          <a href="<?php the_permalink(); ?>" class="link"> <h1><?php the_title(); ?></h1></a>
          <h6 class="date"><?php the_time(get_option('date_format')); ?></h6>

          <div class="imagen">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
          </div>

          <p class="infoText"><?php the_content(); ?></p>
          <?php comments_template(); ?>
          <br>
          <br>
          <br>
          <hr>
        </article>

        <?php endwhile; else: ?>
        <p>El contenido solicidado no existe</p>
        <?php endif; ?>

        </section>

        <section class="pagination">
          <?php echo paginate_links(); ?>
        </section>
        <br>
        <br>




        <footer class="footer">
          <div class="footerCenter">
            <div class="item">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar del Pie Principal')) : endif; ?>
            </div>
            <div class="item" id="end1">
              <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=366958490451217&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-page" data-href="https://www.facebook.com/MagdalenaPerazaG/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MagdalenaPerazaG/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MagdalenaPerazaG/">Magda Peraza</a></blockquote></div>

            </div>
            <div class="item" id="end2">
              <p>REDES SOCIALES</p>
              <br>
              <a href="https://www.facebook.com/MagdalenaPerazaG/" target="_blank"><p class="facebook">Facebook</p></a>
              <br>
              <a href="https://twitter.com/hashtag/MagdaPeraza" target="_blank"><p class="twitter">Twitter</p></a>
            </div>
          </div>
          <div class="pie">
            <div class="pieCenter">
              <p>@ 2018 Magdalena Peraza Copyright</p>
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>

      </section>
  </body>
</html>
