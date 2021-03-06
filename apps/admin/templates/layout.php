<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

      <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

          <h1 id="sidebar-title"><a href="#">Galer&iacute;a</a></h1>

          <!-- Logo (221px wide) -->

          <br/><br/><br/><br/><br/>

          <!-- Sidebar Profile links -->
          <?php if ($sf_user->isAuthenticated()): ?>
          <div id="profile-links">
				Bienvenido, <a href="#" title="Editar Perfil"><?php echo $sf_user->getGuardUser()->getName(); ?></a><br />
            <br />
            <a href="http://www.mundocantaclaro.cl/eventos" title="Ver el sitio" target="_blank">Ver el sitio</a> | <a href="<?php echo url_for('@sf_guard_signout'); ?>" title="Logout">Logout</a>
          </div>
          <!-- END-Sidebar Profile links -->

          <ul id="main-nav">  <!-- Accordion Menu -->

            <li>
              <a href="http://www.mundocantaclaro.cl/eventos/admin.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
		Galer&iacute;a
              </a>
            </li>

          </ul> <!-- End #main-nav -->
          <?php endif; ?>

        </div></div> <!-- End #sidebar -->

      <div id="main-content"> <!-- Main Content Section with everything -->

        <noscript> <!-- Show a notification if the user has disabled javascript -->
          <div class="notification error png_bg">
            <div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
          </div>
        </noscript>

        <div class="clear"></div> <!-- End .clear -->
        <?php echo $sf_content; ?>


        <div class="clear"></div>

        <div id="footer">
          <small> <!-- Remove this notice or replace it with whatever you want -->
            &#169; Copyright 2011 | Powered by <a href="http://www.webdevel.cl">WebDevel.cl</a>
          </small>
        </div><!-- End #footer -->

      </div> <!-- End #main-content -->

    </div>
  </body>
</html>
