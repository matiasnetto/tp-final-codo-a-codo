<?php
    require_once 'db.php';

    $TITLE = "Conf BSAS - Cronograma";
    $ACTIVE_INDEX = 2;
    include_once 'components/navbar.php';

    $charlas_query = $db->query("
        SELECT charlas.name, charlas.description, charlas.start_time, charlas.end_time, CONCAT(oradores.name, ' ', oradores.surename) AS orador, topics.name as topic, topics.color_hex as topic_color_hex, TIMEDIFF(end_time, start_time) AS duration
        FROM charlas
        JOIN oradores ON orador_id = oradores.id
        JOIN topics ON topic_id = topics.id;
    ");

    $charlas = $charlas_query->fetch_all(MYSQLI_ASSOC);
?>
<link rel="stylesheet" href="css/charlas.css" />

<div class="my-4">
    <h4 class="text-center fs-5 mb-0 text-secondary">Conoce a nuestro</h4>
    <h3 class="text-center fs-1">Cronograma de charlas</h3>
</div>

<table class="table table-striped mx-auto charlas_table">
  <thead>
    <tr class="table-success">
      <th scope="col">#</th>
      <th scope="col">Presentacion</th>
      <!-- <th scope="col">Descripcion</th> -->
      <th scope="col">Presentador</th>
      <th scope="col">Inicio</th>
      <th scope="col">Duracion</th>
      <th scope="col">Fin</th>
    </tr>
  </thead>
  <tbody>

   <?php foreach ($charlas as $index=>$charla){ ?>

    <tr>
        <th scope="row"><?php echo $index ?></th>
        <td><?php echo $charla['name'] ?></td>
        <!-- <th><?php echo $charla['description'] ?></th> -->
        <td><?php echo $charla['orador'] ?></td>
        <td><?php echo str_split($charla['start_time'],5)[0] ?></td>
        <td><?php echo str_split($charla['duration'], 5)[0] ?></td>
        <td><?php echo str_split($charla['end_time'], 5)[0] ?></td>
    </tr>

    <?php } ?>
  </tbody>
</table>


<?php
    include_once 'components/navbar.php'
?>