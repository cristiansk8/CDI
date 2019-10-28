<?php
/*
Campos productos
*/

$producto_item = get_field('producto_item');
$texto_productos = get_field('texto_productos');
 ?>


<section id="productos">

  <div class="tittle-products container">
    <hr>
    <h1>PRODUCTOS</h1>
    <p><?php echo $texto_productos; ?></p>
  </div>
  <div class="slider-prod container">

    <?php
     if($producto_item):
       while(have_rows('producto_item')): the_row();
         $img_producto = get_sub_field('img_producto');
         $texto =get_sub_field ('texto');
       ?>
    <div class="product-item">
      <img src="<?php echo $img_producto; ?>" alt="" width="100%" height="auto">
      <p><?php echo $texto; ?></p>
    </div>
    <?php
    endwhile;
  endif;
  ?>
  </div>

</section>
