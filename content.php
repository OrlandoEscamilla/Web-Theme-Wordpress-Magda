
<div class="ancho">
  <video id="video" src="http://chocolatepublicidad.com/videomagdap.mp4"  autoplay loop muted>
   <source src="http://chocolatepublicidad.com/videomagdap.mp4" type='video/mp4; codecs="avc1,mp4a"' />
   <source src="http://chocolatepublicidad.com/videomagdap.mp4" type='video/webm; codecs="avc1,mp4a"' />
 </video>
</div>




  <section id="containerMaster">
    <section class="containerCenter">

<section class="containerEntradas">






  <?php if(have_posts()): while(have_posts()): the_post();?>
    <section class="entrada">
      <br>
      <br>
      <br>
      <h6 class="link"><?php the_category(', '); ?></h6>
      <a href="<?php the_permalink(); ?>" class="link"> <h1><?php the_title(); ?></h1></a>
      <h6 class="date"><?php the_time(get_option('date_format')); ?></h6>

      <div class="imagen">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
      </div>

      <p class="infoText"><?php the_excerpt(); ?></p>
      <br>
      <br>
      <br>
        <hr>
    </section>

  <?php endwhile; else: ?>
  <p>El contenido solicidado no existe</p>
  <?php endif; ?>

  </section>
  <section class="sidebarr">
    <br>
    <br>
    <br>
    <?php get_sidebar(); ?>

  </section>

    </section>
    <section class="pagination">
      <?php echo paginate_links(); ?>
    </section>
    <br><br>
