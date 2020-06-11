<?php

use App\Models\Job;

if (!empty($_POST)) {
  $job = new Job();
  $job->title = $_POST['title'];
  $job->description = $_POST['description'];
  $job->save();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
    integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <title>Formulario</title>
</head>

<body>
  <form action="addJob.php" method="post">
    <h1>Add Job</h1>
    <label for="title">Title:
      <input type="text" name="title" />
    </label>
    <label for="description">Descripción:
      <input type="text" name="description" />
    </label>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>