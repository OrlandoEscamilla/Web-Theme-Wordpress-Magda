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
