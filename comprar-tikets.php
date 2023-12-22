<?php include_once 'components/navbar.php' ?>

<?php 
    require_once('db.php');
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $bornDate = $_POST["born_date"];
    $sex = $_POST["sex"];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($name == "" or $surname == "" or !isset($bornDate) or !isset($sex)) {
            echo "
            <div class='alert alert-danger' role='alert'>
                Debes completar todos los campos.
            </div> 
            ";
        } else {
            $sql = "INSERT INTO tikets (name, surename, born_date, sex) VALUES (?, ?, ?, ?);";

            $post_stmt = $db->prepare($sql);

            $post_stmt->bind_param("ssss", $name, $surname, $bornDate, $sex);

            if ($post_stmt->execute()) {
              echo "
              <div class='alert alert-success' role='alert'>
                Tiket comprado con exito!
              </div> 
            ";
            }
            // $post_stmt->close();

            // mysqli_stmt_bind_param($post_stmt,'ssss',$name, $surename, $bornDate, $sex);

            
            // $result = $post_stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        }

    }

?>








<link rel="stylesheet" href="css/conviertete-en-orador-form.css" />

<section class="mt-3">
    <h4 class="text-center fs-5 mb-0 text-secondary">Toma la desicion y</h4>
    <h3 class="text-center fs-1 mb-3">Compra tus tikets!</h3>

    <p class="text-center">Saca tus tikets y asegurate un lugar en la conferencia!</p>

    <form class="conviertete-en-orador mx-auto" method="POST" action="comprar-tikets.php">
      <div class="mb-3 d-flex">
        <input type="name" class="form-control fs-5" id="name" name="name" placeholder="Nombre">
        <input type="name" class="form-control fs-5" id="surname" name="surname" placeholder="Apellido">
      </div>
      <div class="mb-3">
        <input type="date" class="form-control fs-5" id="born_date" name="born_date" placeholder="14/11/2002">
      </div>
      <div class="mb-3">
        <label for="sex">Genero</label>
        <select class="form-control" name="sex" id="sex">
            <option value="0">Hombre</option>
            <option value="1">Mujer</option>
            <option value="2" selected>prefiero no decirlo</option>
        </select>

      </div>
      <div class="form-text">Puedes omitir este dato si no te sientes comodo</div>
      <button type="submit" class="btn btn-success w-100 fs-5 mt-3">Comprar tikets</button>
    </form>
  </section>


<?php include_once 'components/footer.php ' ?>