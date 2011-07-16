<?php use_javascript('http://maps.google.com/maps/api/js?sensor=true') ?>
<?php use_javascript('sendmail.js') ?>
<!-- Home -->
<div id="home" class="page">
  <div class="content-wrapper">
    <div id="header-wrapper">
      <ul class="nav">
        <li><a href="javascript:$.scrollTo('#home',750);" class="super button green">Inicio</a></li>
        <li><a href="javascript:$.scrollTo('#services',750);" class="super button yellow">Servicios</a></li>
        <li><a href="javascript:$.scrollTo('#galleria',750);" class="super button blue">Galer&iacute;a Fotogr&aacute;fica</a></li>
        <li><a href="javascript:$.scrollTo('#contact',750);"  class="super button pink">Cont&aacute;ctanos</a></li>
      </ul>
    </div>
    <div id="home-content" class="body-wrapper">
      <div id="text1-index-wrapper" class="alpha60 rounded-corners">
      <div> 
       <p>Con la idea de satisfacer las necesidades de los papás, ofrecemos la organización de cumpleaños a domicilio o en nuestras dependencias; para que ese día tan especial de sus pequeños, se preocupen sólo de llegar a disfrutar con ellos...  Puedes enviarnos un correo y te enviaremos una cotización acorde a tus necesidades y las de tu hijo...</p>
      </div>
      </div>
      <?php echo image_tag('services-img.png','id=imgservices'); ?>
      <div id="text2-index-wrapper" class="alpha60 rounded-corners">
      <div> 
       <p>Nuestra Misión es producir cumpleaños infantiles a través de un servicio integral desde la organización hasta el final del evento, haciendo que los niños pasen un día inolvidable y divertido otorgándole también comodidad a los papás.</p>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Home -->

<!-- Servicios -->
<div id="services" class="page">
  <div class="content-wrapper">
    <div id="header-wrapper">
      <ul class="nav">
        <li><a href="javascript:$.scrollTo('#home',750);" class="super button green">Inicio</a></li>
        <li><a href="javascript:$.scrollTo('#services',750);" class="super button yellow">Servicios</a></li>
        <li><a href="javascript:$.scrollTo('#galleria',750);" class="super button blue">Galer&iacute;a Fotogr&aacute;fica</a></li>
        <li><a href="javascript:$.scrollTo('#contact',750);"  class="super button pink">Cont&aacute;ctanos</a></li>
      </ul>
    </div>
    <div id="services-content" class="body-wrapper">
      <div id="text1-services-wrapper" class="alpha60 rounded-corners">
      <div>
        <p>Contamos con los siguientes servicios:</p>
        <ul>
          <li class="list-services">
            Animaci&oacute;n de Tony Panqueque (concursos, m&uacute;sica, premios, pintacaritas, cuentacuentos y otros)
          </li>
          <li class="list-services">
            Cama el&aacute;stica
          </li>
          <li class="list-services">
            Fuente de Chocolate
          </li>
          <li class="list-services">
            Servicio de Decoraci&oacute;n (globos, mesas, platos, vasos, entorno)
          </li>
          <li class="list-services">
            Servicio de confiter&iacute;a (dulces, picadillos salados y dulces, bebidas, torta, etc)
          </li>
        </ul>

       </div>
      </div>
      <div id="text2-services-wrapper" class="alpha60 rounded-corners">
      <div>
        <p>
          Pr&oacute;ximamente...<br/>Disfraces<br/>Patio de eventos m&aacute;s amplio y<br/>Disco peques para los m&aacute;s lolos que cumplen m&aacute;s añitos.
        </p>
      </div>
      </div>
      <?php echo image_tag('servicios.png','id=photoservices'); ?>
    </div>
  </div>
</div>
<!-- End Servicios -->

<!-- Galleria -->
<div id="galleria" class="page">
  <div class="content-wrapper">
    <div id="header-wrapper">
      <ul class="nav">
        <li><a href="javascript:$.scrollTo('#home',750);" class="super button green">Inicio</a></li>
        <li><a href="javascript:$.scrollTo('#services',750);" class="super button yellow">Servicios</a></li>
        <li><a href="javascript:$.scrollTo('#galleria',750);" class="super button blue">Galer&iacute;a Fotogr&aacute;fica</a></li>
        <li><a href="javascript:$.scrollTo('#contact',750);"  class="super button pink">Cont&aacute;ctanos</a></li>
      </ul>
    </div>
    <div class="body-wrapper">
      <div id="galleries">
          <?php include_partial('portfolio/list', array('galleries' => $galleries)) ; ?>
      </div>
    </div>
  </div>
</div>
<!-- End Galleria -->

<!-- Contact -->
<div id="contact" class="page">
  <div class="content-wrapper">
    <div id="header-wrapper">
      <ul class="nav">
        <li><a href="javascript:$.scrollTo('#home',750);" class="super button green">Inicio</a></li>
        <li><a href="javascript:$.scrollTo('#services',750);" class="super button yellow">Servicios</a></li>
        <li><a href="javascript:$.scrollTo('#galleria',750);" class="super button blue">Galer&iacute;a Fotogr&aacute;fica</a></li>
        <li><a href="javascript:$.scrollTo('#contact',750);"  class="super button pink">Cont&aacute;ctanos</a></li>
      </ul>
    </div>
    <div id="contact-content" class="body-wrapper">
      <!-- Form Contact -->
      <div id="sendmail"></div>
      <div id="contact-form" class="alpha60 rounded-corners">
      <div>
        <form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST" autocomplete="off">
          <p><?php echo $form['name']->renderLabel('Tu Nombre',array('class'=>'contact-form-label')); ?></p>
          <p><?php echo $form['name']->render(); ?></p>
          <p><?php echo $form['email']->renderLabel('Tu email',array('class'=>'contact-form-label')); ?></p>
          <p><?php echo $form['email']->render(); ?></p>
          <p><?php echo $form['subject']->renderLabel('Asunto',array('class'=>'contact-form-label')); ?></p>
          <p><?php echo $form['subject']->render(); ?></p>
          <p><?php echo $form['message']->renderLabel('Mensaje',array('class'=>'contact-form-label')); ?></p>
          <p><?php echo $form['message']->render(); ?></p>
          <p><input type="submit" id="form-submit" value="Enviar"/></p>
          <?php echo $form->renderHiddenFields(); ?>
        </form>
      </div>
      </div>
      <!-- END Form Contact -->
      <div id="direccion" class="alpha60 rounded-corners">
        <div>
          Mundo Cantaclaro<br/>
          Cochrane #870<br/>
          Concepci&oacute;n<br/>
          Fonos: 99818065 &oacute; 79686423<br/>
          eventos@mundocantaclaro.cl <?php echo link_to(image_tag('facebook-icon-48x48.png',array('alt' => 'Encuentranos en Facebook', 'size' => '48x48', 'class' => 'facebook','border'=> '0')),'http://www.facebook.com/mundo.cantaclaro',array('target'=>'_blank')); ?>
        </div>
      </div>
      
      <div class="alpha60 rounded-corners map-padd">
        <div id="map_canvas"></div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact -->
