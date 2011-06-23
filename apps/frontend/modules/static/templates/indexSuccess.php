<?php use_javascript('http://maps.google.com/maps/api/js?sensor=true') ?>
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
        <p>Eventos Infantiles mundo Cantaclaro les da la bienvenida a nuestro sitio donde podrán conocer los servicios que ofrecemos y que necesitan para la celebración del cumpleaños de sus hijos/as.</p>
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
        <p id="text1-services">Con la idea de satisfacer las necesidades de los papás, ofrecemos la organización de cumpleaños a domicilio o en nuestras dependencias; para que ese día tan especial de sus pequeños, se preocupen sólo de llegar a disfrutar con ellos. Es por esto que destinamos los siguientes servicios: </p>
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
      <div class="alpha60 rounded-corners map-padd">
        <div id="map_canvas"></div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact -->