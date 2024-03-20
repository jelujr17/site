<html>
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light"
                                    src="images/logo-default1-140x57.png" alt="" width="140" height="57"
                                    srcset="images/logo-default-280x113.png 2x" /></a></div>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <?php
                                $current_page = basename($_SERVER['PHP_SELF']);
                                ?>

                                <li
                                    class="rd-nav-item <?php echo ($current_page == 'potenciamos.php') ? 'active' : ''; ?>">
                                    <a class="rd-nav-link" href="potenciamos.php">Inicio</a>
                                </li>
                                <li class="rd-nav-item <?php echo ($current_page == 'ventas.php') ? 'active' : ''; ?>">
                                    <a class="rd-nav-link" href="ventas.php">Potenciamos tu marca</a>
                                </li>
                                <li
                                    class="rd-nav-item <?php echo ($current_page == 'realidad-virtual.php') ? 'active' : ''; ?>">
                                    <a class="rd-nav-link" href="realidad-virtual.php">Realidad Virtual</a>
                                </li>
                                <li
                                    class="rd-nav-item <?php echo ($current_page == 'soluciones.php') ? 'active' : ''; ?>">
                                    <a class="rd-nav-link" href="soluciones.php">Soluciones</a>
                                    <!-- Submenú de Soluciones -->
                                    <ul class="sub-menu">
                                        <li><a href="soluciones-web.php">Soluciones Web</a></li>
                                        <li><a href="soluciones-moviles.php">Soluciones Móviles</a></li>
                                        <!-- Agrega más elementos de submenú según sea necesario -->
                                    </ul>
                                </li>

                                <li
                                    class="rd-nav-item <?php echo ($current_page == 'contacto.php') ? 'active' : ''; ?>">
                                    <a class="rd-nav-link" href="contacto.php">Contacto</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
        </nav>
    </div>
</header>

</html>