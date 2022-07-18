<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,
    initial-scale=1.0"
    />
    <title>Contacto</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="assets/styles/styles.css" />
  </head>

  <body>
    <div class="container">
      <header>

        <div class="navbar">
          <nav>
            <ul>
              <li class="interaction"><a href="contact.php">Contacto</a></li>
              <li style="border-style: none; padding: 0; margin: 0">
                <a href="index.html">
                  <img
                    src="assets/images/loop.gif"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
                </a>
              </li>
              <li class="interaction">
                <a href="aboutme.html">Saber más</a>
              </li>
            </ul>
          </nav>
        </div>

      </header>

      <div class="content">
      <div class="calltoaction">
      <h1> ¡Hola mundo!</h1>
      <p>   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
            laoreet laoreet quam in hendrerit.
      </p>
      </div>
      <div class="socialmedia">
      <a href="#">
                  <img
                    src="assets/images/sample.png"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
      </a>
      <a href="#">
                  <img
                    src="assets/images/sample.png"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
      </a>
      <a href="#">
                  <img
                    src="assets/images/sample.png"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
      </a>
      <a href="#">
                  <img
                    src="assets/images/sample.png"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
      </a>
      <a href="#">
                  <img
                    src="assets/images/sample.png"
                    alt="isotipo"
                    style="
                      width: 60px;
                      display: inline-block;
                      vertical-align: middle;
                      margin: 0;
                      padding-top: 0;
                    "
                  />
      </a>
      </div>

      <div class="form">
      <form method="post">
        <input type="text" placeholder="Nombre" maxlength="10" name="name" required="" id="nombre"/>
        </br>
        <input type="email" placeholder="Correo" maxlength="25" name="email" required="" id="email"/>
        </br>
        <input type="text" placeholder="Mensaje" maxlength="400" name="message" required="" id="message"/>
        <label class="message"></label>
        </br> 
       <input style="border: none; color: var(--white-3); font-family: var(--font-2); font-size: var(--subheader);" type="submit" name="send" value="Enviar"/> 
        </form>
        <?php
        include("form.php");
        ?>
        </div>

        <div class="privacypolicy">
        <p>
          <a href="privacypolicy.html">Políticas de Privacidad</a>
        </p>
        </div>

      </div>
      </div>
      <footer>
        <p>
          <a href="privacypolicy.html">Políticas de Privacidad</a>
        </p>
        <hr color="#fdfdfd" size="1vh" width="80%" />
        <p>&#64; PSICALEXA.COM Desarrollado por <a href="https://omarbramirez.com/">Omar Ramírez</a></p>
      </footer>
    </body>
  </html>
  