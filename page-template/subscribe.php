<?php

/**
 * Template Name: subscribe
 */

get_header(); ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

   <section class="py-9" style="background-color: black">
       <div class="row m-0 p-0">
           <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center px-9">
               <img src="http://localhost:8888/wp_binch/wp-content/uploads/2020/12/SubscribeSVG.png" alt="binch - SVG Subscribe">
           </div>
           <div class="col-lg-6 px-2 px-lg-9">
               <div class="card-binch px-5 py-6 shadow rounded-lg bg-white position-relative">
                   <form>

                       <?php get_template_part('template-parts/subscribe/step', 'one'); ?>

                       <?php get_template_part('template-parts/subscribe/step', 'two'); ?>

                       <?php get_template_part('template-parts/subscribe/step', 'three'); ?>

                       <?php get_template_part('template-parts/subscribe/step', 'four'); ?>

                        <?php get_template_part('template-parts/subscribe/step', 'validate'); ?>

                   </form>
               </div>
           </div>
       </div>
   </section>

</main>

<?php get_footer(); ?>
