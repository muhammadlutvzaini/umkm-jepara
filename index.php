<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="styles/global.css">
  <title>JeparaUMKM</title>
  <link rel="shortcut icon" href="src/layout/favicon.ico" type="image/x-icon">
</head>
<body>
  <?php
  require_once('pages/layout/Header/header.php');

  $redirect = $_SERVER['REQUEST_URI']; // You can also use $_SERVER['REDIRECT_URL'];

  switch ($redirect) {
    case '/':
    case '':
      require __DIR__ . '/pages/components/Beranda/beranda.php';
      break;
    case '/daftar-umkm':
      require __DIR__ . '/pages/components/DaftarUMKM/daftar-umkm.php';
      break;
    case '/komunitas':
      require __DIR__ . '/pages/components/Komunitas/komunitas.php';
      break;
    case '/berita':
      require __DIR__ . '/pages/components/Berita/berita.php';
      break;
    default:
      require __DIR__ . '/pages/components/404/404.php';
      break;
  }

  require_once('pages/layout/Footer/footer.php');
  ?>
</body>
</html>