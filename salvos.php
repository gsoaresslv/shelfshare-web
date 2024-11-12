<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/salvos.css">
    <title>Salvos</title>
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <h1>Salvos</h1>
    <!--as imagens da lista de salvos da pessoa-->
    <section class="tamanhosection">
        <div>
          <img src="img/acaba.jpg" alt="acaba" class="imagens">
          <a href="dados.html"><figcaption>É Assim que Acaba</figcaption></a>
        </div>
        <div>
          <img src="img/cinco_passos.jpg" alt="cinco_passos" class="imagens">
          <figcaption>A Cinco Passos de Você</figcaption>
        </div>
        <div>
          <img src="img/coraline.jpg" alt="coraline" class="imagens">
          <figcaption>Coraline</figcaption>
        </div>
        <div>
          <img src="img/estilhaca-me.jpg" alt="estilhaca-me" class="imagens">
          <figcaption>Estilhaça-me</figcaption>
        </div>    
    </section>
    <?php require_once('footer.php'); ?>
</body>
</html>
