<?php
/*
Campos slider
Slider (field_repeater)
  img_slider
*/
  $slider = get_field('slider');

 ?>


<section id="slider-form">
<div class="slider-form container">
  <?php
   if($slider):
     while(have_rows('slider')): the_row();
       $img_slider = get_sub_field('img_slider');

     ?>
  <div class="">
    <img src="<?php echo $img_slider; ?>" alt="" width="100%" height="auto">

  </div>
  <?php
  endwhile;
endif;
?>
</div>




</section>
