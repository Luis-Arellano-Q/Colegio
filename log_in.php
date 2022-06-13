<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <title>I.E. NUEVO MUNDO</title>
</head>
<body>
<header class="header">
    <div>
      <img src="assets/world.png" alt="world">
      <h2><a href="index.php">I.E. NUEVO MUNDO</a></h2>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        
      </ul>
    </nav>
  </header>
  <main class="main">
    <div class="dark"></div>
    <form action="" method="post" class="form">
      <input type="email" name="email_reg" placeholder="Tu email" required>
      <input type="password" name="clave_reg" placeholder="Tu contraseña"required>
      <input type="submit" name="iniciar_sesion" value="Inicia sesión">
      <p><a href="">¿olvidasete tu contraseña?</a></p><br>
      <p>¿No tienes una cuenta? <a href="index.php">Registrate ahora</a></p>
    </form>
  </main>
  <?php
    include("logear.php");
  ?>
  <footer class="footer container">
    <div class="container">
      <h3>copyright &copy; <a href="">Luis Arellano</a></h3>
      <div class="footer-redes">
        <ul>
          <li>Siguenos en:</li>
          <li><a href=""><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M258.8,507.2C120.4,507.8,6.6,392.6,9.9,251.9C13,117.9,124,7.2,262,8.7C398.7,10.2,511.8,124,508.1,264.9   C504.6,398.3,394.5,507.9,258.8,507.2z M40.2,258.3C41.3,383.6,142.9,480.1,262.9,478c116.2-2.1,214.7-96.8,214.7-220   c0-125.3-102.4-222.2-222.8-219.9C138.6,40.2,41,135.2,40.2,258.3z"/><path d="M206.8,433.4c0-58.9,0-117.3,0-176.3c-13,0-25.6,0-38.5,0c0-20,0-39.4,0-59.4c1.7-0.1,3.4-0.3,5.2-0.3   c9.3,0,18.7-0.2,28,0.1c4.1,0.1,5.5-1,5.4-5.2c-0.2-15.2-0.2-30.3-0.1-45.5c0.1-17.1,4.9-32.6,17.1-45c11.8-12,26.9-18.5,43.3-19.5   c26.4-1.5,52.9-1.3,79.4-1.8c0.3,0,0.6,0.3,1.2,0.6c0,20.1,0,40.3,0,61c-1.9,0.1-3.7,0.2-5.4,0.2c-12,0-24,0-36,0   c-12.1,0.1-19.2,7.3-19.2,19.2c0,11.3,0,22.7,0.1,34c0,0.3,0.2,0.6,0.5,1.7c19.8,0,39.8,0,60.8,0c-2.6,20.3-5,39.7-7.6,59.8   c-18.1,0-35.8,0-54,0c0,59.2,0,117.8,0,176.6C260.1,433.4,233.9,433.4,206.8,433.4z"/></g></svg></a></li>
  
          <li><a href=""><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M505,257c0,34.8-0.7,69.7,0.2,104.5c1.5,61.6-37.2,109.2-86.5,130.4c-19.8,8.5-40.6,13-62.1,13c-67.3,0.1-134.7,1-202-0.3   c-50.7-1-92.4-22.2-122.3-64c-15.7-22-23.2-47-23.2-74.1c0-71.7,0-143.3,0-215c0-58.5,28.5-99.4,79.1-126C110.2,14,134.1,9.1,159,9   c65.3,0,130.7-0.4,196,0.2c50.7,0.4,93,19.8,124.2,60.6c17.4,22.8,25.8,49,25.8,77.8C505,184,505,220.5,505,257z M46,257   c0,36.7,0,73.3,0,110c0,16.4,3.8,31.8,12.3,45.7c22.3,36.5,56,54.3,97.8,55c67.1,1,134.3,0.4,201.5,0.2c16.5,0,32.5-3.4,47.4-10.5   c40.6-19.4,63.3-50.3,63.1-96.7c-0.4-71-0.1-142-0.1-213c0-20.1-5.7-38.5-17.6-54.7c-23-31.1-54.8-46.4-92.8-46.8   c-67-0.8-134-0.3-201-0.2c-14.3,0-28.1,2.9-41.5,7.9c-36.8,13.7-71,48.4-69.4,99.5C46.9,188,46,222.5,46,257z"/><path d="M257.6,363c-64.5,0-116.5-51.4-116.6-115.4c-0.1-63,52.3-114.6,116.4-114.6c64.3-0.1,116.5,51.4,116.6,114.9   C374,311.3,321.9,362.9,257.6,363z M257.6,326c43.9,0,79.5-35.1,79.4-78.3c-0.1-42.8-35.7-77.8-79.4-77.8   c-43.9,0-79.7,34.9-79.7,78C178,291.1,213.7,326.1,257.6,326z"/><path d="M387.5,98c13.5,0,24.5,11.5,24.5,25.6c-0.1,14.1-11.2,25.5-24.7,25.4c-13.3-0.1-24.2-11.5-24.2-25.3   C363,109.6,374,98,387.5,98z"/></g></svg></a></li>
  
          <li><a href=""><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M4,440.5c55.6,5,105.7-9,151.3-43.2c-47.7-4.2-79.6-28-97.4-72.6c15.6,1.9,30.2,2.4,45.7-1.8   c-51.4-16-78.8-49.6-82.5-103.8c15.4,7.2,29.9,12.4,47,12.6c-30.5-22.9-46.1-52.6-45.5-90c0.3-17.2,4.9-33.4,14-48.7   C93.1,159.1,164,195.7,251.3,201.8c-0.5-3.8-0.8-6.8-1.2-9.9c-7.2-55.4,28.8-105.8,83.8-116.3c34.5-6.6,65,2.5,90.8,26.3   c4,3.6,7.4,4.4,12.4,3.1c20.1-5.1,39.2-12.5,57.7-22.5c-7.1,23.4-21.7,41-41.5,55.8c4.5-0.8,9.1-1.4,13.6-2.3   c4.7-1,9.4-2.1,14.1-3.4c4.5-1.2,8.9-2.6,13.3-4.1c4.5-1.5,9-3.2,14.3-4.1c-2.6,3.6-5.1,7.4-7.9,10.9c-11.6,14.7-25,27.6-39.7,39.1   c-1.5,1.2-2.8,3.8-2.7,5.6c0.8,35.5-4.2,70.1-15.7,103.7c-22.6,66.2-62,119.8-121.1,158.1c-29.2,18.9-61.1,31.3-95.2,38.5   c-33.8,7.1-67.8,8.4-101.9,4.4c-34.2-4-66.7-14.1-97.3-29.9c-8.1-4.1-15.9-8.7-23.8-13.1C3.6,441.3,3.8,440.9,4,440.5z"/></g></svg></a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>