<?php 
/*
	Template Name: Contact
*/
get_header(); ?>
<section class = "contact-item">
	<div class="contact-bg">
    <div class="container text-center">
      <div class="row">

        <div class="col-md-8 info-socia">
                  

        </div>


        <div class="col-md-4">
           <i class="fa fa-headphones fa-5x"></i>
            <h1>تواصل معنا</h1>
            <?php echo do_shortcode('[contact-form-7 id="198" title="contacte nous"]');?>

        </div>

      </div>
    </div>
	</div>
</section>

<?php get_footer(); ?>