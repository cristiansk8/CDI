<?php

$texto_contacto = get_field('texto_contacto');
 ?>
<section id="formulario">
<div class="container formulario">
  <div class="tittle-contact">
    <hr>
    <h1>CONTACTO</h1>
    <p><?php echo $texto_contacto; ?> </p>
  </div>
  <div class="form-cf7">
    <?php echo do_shortcode('[contact-form-7 id="24" title="from"]'); ?>
  </div>
</div>

</section>
