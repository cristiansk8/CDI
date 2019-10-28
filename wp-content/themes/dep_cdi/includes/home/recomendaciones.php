<?php
/*
Campos recomendaciones

*/

  $recomendaciones_item = get_field('recomendaciones_item');
  $texto_recomendaciones = get_field('texto_recomendaciones');
 ?>

<section id="recomendaciones">
  <div class="container">
    <div class="tittle-recomnedaciones">
      <hr>
      <h1>recomendaciones</h1>
      <p><?php echo $texto_recomendaciones; ?></p>
    </div>

    <div class="recomendaciones-items text-center">

      <?php
      $cont =0;
       if($recomendaciones_item):
         while(have_rows('recomendaciones_item')): the_row();
           $icono = get_sub_field('icono');
           $texto =get_sub_field ('texto');

           $cont++;
         ?>
      <div class="recomendaciones-item">
        <img src="<?php echo $icono; ?>" alt="" width="150px" height="auto">
        <div class="info-icon">
          <span><?php echo $cont ?>.</span>
          <p><?php echo $texto; ?></p>
        </div>

      </div>
      <?php
      endwhile;
    endif;
    ?>
    </div>
  </div>
</section>
