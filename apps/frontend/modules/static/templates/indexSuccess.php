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
        <p>Eventos Infantiles Mundo Cantaclaro les da la bienvenida a nuestro sitio donde podrán conocer los servicios que ofrecemos y que necesitan para la celebración del cumpleaños de sus hijos/as.</p>
      </div>
      <div id="text2-index-wrapper" class="alpha60 rounded-corners">
        <p>Nuestra Misión es producir cumpleaños infantiles a través de un servicio integral desde la organización hasta el final del evento, haciendo que los niños pasen un día inolvidable y divertido otorgándole también comodidad a los papás.</p>
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
        <p>Con la idea de satisfacer las necesidades de los papás, ofrecemos la organización de cumpleaños a domicilio o en nuestras dependencias; para que ese día tan especial de sus pequeños, se preocupen sólo de llegar a disfrutar con ellos. Es por esto que destinamos los siguientes servicios: </p>
        <ul>
          <li class="list-services">Animación Tony Panqueque<br/>
              Divierte con muchos concursos<br/>
              Música,
              Pintacaritas,
              cuenta cuentos,
              Cama elástica
          </li>
          <li class="list-services">Decoración<br/>
              Globos,
              Mesas,
              Platos,
              Fuente de chocolate,
          </li>
          <li class="list-services">...Próximamente disfraces y un Salón de eventos más grande<br/>
              ...Próximamente Disco peques<br/>
          </li>
          <li class="list-services">Servicio de confites y torta</li>
<!--          <li class="list-services">Servicio personalizado para organizar según preferencias y necesidades, el cumpleaños de los pequeños y pequeñas que quieran tener un día inolvidable, ya sea en el jardín o a domicilio.</li>-->
        </ul>
        
      </div>
      <?php echo image_tag('services-img.png','id=services'); ?>
      <div id="text2-services-wrapper" class="alpha60 rounded-corners">
        <p>Servicio personalizado para organizar según preferencias y necesidades, el cumpleaños de los pequeños y pequeñas que quieran tener un día inolvidable, ya sea en el jardín o a domicilio.</p>
      </div>
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
      <!-- END Form Contact -->
      <div class="alpha60 rounded-corners map-padd">
        <div id="map_canvas"></div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact -->
