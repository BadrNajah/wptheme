<?php get_header(); 
  

                 $taxonomy_names = get_post_taxonomies( );


                if($taxonomy_names[0] == "category")
                  {
                    $cat  = get_the_category();
                    $link = get_category_link( $cat[0]->term_id);
                    $bred = '<li class="breadcrumb-item"><a href="'.esc_url($link).'"> '.esc_html($cat[0]->name).'</a></li>';
                  }
                elseif($taxonomy_names[0] == "Niveau")
                  {
                    $cat  = get_the_terms(get_the_id(),'Niveau');
                    $link = get_term_link($cat[0]->term_id);
                    $bred = '<li class="breadcrumb-item"><a href="'.esc_url($link).'"> '.esc_html($cat[0]->name).'</a></li>';
                  }
                  elseif($taxonomy_names[0] == "serie")
                  {
                    $bred = '<li class="breadcrumb-item"><a href="'.esc_url(home_url('/bac')).'"> bac</a></li>';
                  }

?>

<div class="breadcrumb-holder">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
      <?php echo $bred; ?>
      <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">الرئيسية</a></li>
    </ol>
  </div>
</div>


<section class = "single-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <?php 
          if (have_posts()) {
          while (have_posts()) { the_post();

          $cat  = get_the_category();
          $sepa = ', ';
          $outpot = '';

          if ($cat) {
          foreach ($cat as $categores ) {
            $outpots .= '<span><a href="'.get_category_link($categores->term_id).'"><i class="fa fa-folder-open"></i> '.$categores->name.'</a></span>'.$sepa;
          } }
          $outpot = trim($outpots,$sepa);
          
        ?>

        <div class="single-div">
          <h1><?php the_title(); ?></h1>
          <div class="info-div">
            <?php echo $outpot; ?>
            <span><?php the_time('M j Y');?> <i class = "fa fa-clock-o"></i> </span>
          </div>
          <div class="single-content">
            <?php the_content(); ?>
          <embed src="<?php echo get_field('annonces'); ?>" width="100%" height="600" type='application/pdf'>
          </div>
          <div class="item-navigation">
            <div class="row">
              <div class="col-md-6">
                <?php previous_post_link(); ?>              
              </div>
              <div class="col-md-6">
                <?php next_post_link(); ?>  
              </div>
            </div>
          </div>
        </div>
        <?php } wp_reset_postdata(); } ?>

      </div>
      <div class="col-md-3 blog-widget">

        <?php dynamic_sidebar('sidebar5'); ?>

        <div class="resau-socio">
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">اشترك معنا <i class = "fa fa-bell"></i></button>
        </div>          

        <?php get_template_part('last-article'); ?>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>