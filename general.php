<?php 
$init_paragraph = $_POST["paragraph"];
$censored_paragraph = str_replace("ipsum","***",$init_paragraph );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
      defer></script>

    <title>PHP Badwords,php</title>
  </head>

  <body>
    <h3>Questo è il tuo paragrafo</h3>
    <p>
      <?php echo $init_paragraph;?>    
    </p>
    <h4>Il tuo paragrafo è lungo <?php echo strlen($init_paragraph); ?> caratteri</h4>

    <h3>Questo è il tuo paragrafo censurato</h3>
    <p>
      <?php echo $censored_paragraph;?>
    </p>
      <h4>Il tuo paragrafo censurato è lungo <?php echo strlen($censored_paragraph); ?> caratteri</h4>

  </body>
  </html>

