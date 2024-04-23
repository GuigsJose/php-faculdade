<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>


  <?php
  if (isset($_GET['selec-color'])) {
    $cor = $_GET['selec-color'];
  }

  echo "<body class={$cor}>";
  echo '  <form class="container p-3">';
  echo '    <div class="mb-3">';
  echo '      <select class="form-select" aria-label="Default select example" name="selec-color">';
  echo '        <option selected>Selecione uma classe de cor</option>';
  echo '        <option value="bg-primary">primary</option>';
  echo '        <option value="bg-secondary">secondary</option>';
  echo '        <option value="bg-success">success</option>';
  echo '        <option value="bg-info">info</option>';
  echo '        <option value="bg-warning">warning</option>';
  echo '        <option value="bg-danger">danger</option>';
  echo '        <option value="bg-light">light</option>';
  echo '        <option value="bg-dark">dark</option>';
  echo '      </select>';
  echo '    </div>';
  echo '    <div class="col-auto">';
  echo '      <button type="submit" class="btn bg-black text-white mb-3">Confirmar</button>';
  echo '    </div>';
  echo '  </form>';
  echo '</body>';



  ?>
</body>

</html>s