<?php
/*
Template Name: home
*/?>
<?php get_header();?>
  <section class="services">
    <div class="container">
      <h2 class="title"> <?php the_field("service_title");?></h2>
      <div class="services__inner">
        <div class="services__content">
          <div class="services__content-box">
           
            <?php the_field("service_text");?>
            <a class="button button--decor" href="#"><?php the_field("header_button");?></a>
          </div>
        </div>
        <?php the_field("service_item");?>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php bloginfo('template_url')?>/assets/images/car.png" alt="car">
        <div class="benefits__content">
          <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
          <?php the_field("about_item");?>
        </div>
      </div>
    </div>
  </section>


  <section class="carousel">
    <div class="container">
      <h2 class="title">
        ПРИГНАННЫЕ НАМИ АВТО
      </h2>
      <div class="carousel__inner">

      <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => 5,

]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
 <div class="carousel__item">
          <div class="carousel__item-box">

         
            <img <?php the_post_thumbnail(
                array(380,250),
                array('class'=>'carousel__item-img')
            ); ?>>
            <h4 class="carousel__item-title"><?php the_title();?></h4>
            <p class="carousel__item-text"><?php the_content();?></p>
          </div>
        </div>
		<?php 
	}
}

wp_reset_postdata(); // Сбрасываем $post
?>
      </div>
    </div>
  </section>



  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">
            КОНТАКТЫ
          </h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">  <?php the_field("contact_title");?></p>
              <?php the_field("contact_adres");?>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title"> <?php the_field("contact_title2");?></p>
              <?php the_field("contact_time-hour");?>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title"><?php the_field("contact_title3");?></p>
              <p class="contacts__item-text">
              <?php the_field("tel");?>
              </p>
            </li>
          </ul>
        </div>
        <form id="form-contact" class="contacts__form" method="POST" class="contact-form" autocomplete="off" enctype="multipart/form-data">
          <h2 class="title contacts__title">Оставить заявку</h2>
          <?echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]');?>
        </form>
      </div>
    </div>
  </section>
<?php get_footer();?>
 
