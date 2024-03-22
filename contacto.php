<!doctype html>
<html lang="es">

<?php include 'cabecera.php'; ?>

<body>
    <?php include 'menu.php'; ?>

    <section class="parallax-container overlay-1" data-parallax-img="images/contacto.jpg">
        <div class="parallax-content contacto-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-triangle"><span
                                class="icon-xl linearicons-phone-incoming"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="tel:#">966 231 926</a></h4>
                            <p>Puedes llamarnos cuando quieras</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-map2"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Calle Jose Aldeguer, 7, Alicante/Alacant, 03016
                                </a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-rectangle"><span
                                class="icon-xl linearicons-paper-plane"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="mailto:#">informacion@jaquemate.es</a></h4>
                            <p>No dudes en enviarnos tus preguntas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us-->
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3>Consultas</h3>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Su nombre</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="text" name="phone"
                                data-constraints="@Numeric">
                            <label class="form-label" for="contact-phone">Teléfono</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message"> Mensaje</label>
                            <textarea class="form-input" id="contact-message" name="message"
                                data-constraints="@Required"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-7 col-lg-5">
                                <button class="button button-block button-lg button-primary"
                                    type="submit">Enviar</button>
                                <br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'pie_pagina.php'; ?>

</body>

</html>