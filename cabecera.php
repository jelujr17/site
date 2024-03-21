<head>
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);

  $titulo_pagina = '';

  switch ($current_page) {
    case 'contacto.php':
      $titulo_pagina = 'Contacto';
      break;
    case 'otro_archivo.php':
      $titulo_pagina = 'Título para otro archivo';
      break;
    case 'otro_mas.php':
      $titulo_pagina = 'Título para otro más';
      break;
    default:
      $titulo_pagina = 'Título por defecto';
      break;
  }
  ?>

  <title>
    <?php echo $titulo_pagina; ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css"> <!--iconos-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>