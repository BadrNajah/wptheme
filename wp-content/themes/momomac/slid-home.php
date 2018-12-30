<div class="containe">

<div id="myCarousel" class="carousel slide" data-ride="carousel">



  <div class="carousel-inner">

      <?php

            $rows = get_field('slide_items');
            $slidId = 0;

          if($rows)
          {
              foreach($rows as $row)
                { ?>
                    <div class="item <?php if($slidId == 0) { ?> active <?php } ?>">
                    <img src="<?php echo $row['images']; ?>" alt="" class = "img-responsive image-center">
                    <a href="<?php echo $row['button_']; ?>" class = "title-button"><?php echo $row['title']; ?></a>
                    </div>
                    <?php 

                    $slidId = $slidId + 1; 
                }
          }

      ?>



         
  </div>


<?php if($slidId > 1){ ?>

  <!-- Left and right controls -->
  <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

<?php } ?>

</div>
</div>