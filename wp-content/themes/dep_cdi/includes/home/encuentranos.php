<?php
/*
Campos encuentranos

*/

  $encuentranos = get_field('encuentranos');

 ?>

<section id="encuentranos">
  <div class="container text-center">
    <div class="encuentranos">

      <?php
       if($encuentranos):
         while(have_rows('encuentranos')): the_row();
           $logo = get_sub_field('logo');
            $link = get_sub_field('link');

         ?>
      <div class="encuentranos-item">
        <a href="<?php echo $link; ?>"><img src="<?php echo $logo; ?>" alt="" width="150px" height="auto"></a> 
      </div>
      <?php
      endwhile;
    endif;
    ?>
    </div>
  </div>
</section>
