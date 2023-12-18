  <?php
  $TITLE = "Conf BSAS";
  $ACTIVE_INDEX = 1;
  include_once 'components/navbar.php';
  require_once 'db.php';


  $oradores_query = $db->query("SELECT * FROM oradores;");

  $oradores = $oradores_query->fetch_all(MYSQLI_ASSOC);


  function get_tipics_by_orador_id($db, $oradorId) {
    $topics_stmt = $db->prepare("
      SELECT topics.name, topics.color_hex
      FROM oradores_topics
      JOIN topics ON topics.id = oradores_topics.topic_id
      WHERE oradores_topics.orador_id = ? ;");

    $topics_stmt->bind_param("i", $oradorId);
    $topics_stmt->execute();
    return $topics_stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  }
  ?> 

  



  <!-- SECCION CARROUSEL -->
  <section>
    <div id="carousel" class="carousel slide carousel-fade overflow-hidden" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- SLIDE 1 -->
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="images/ba1.jpg" class="d-block w-100 bg-image" style="height: 85vh" alt="..." />
          <div class="carousel-caption h-75 mb-5 container">
            <div class="row h-100 mb-5 align-items-center">
              <div class="col-md d-md-flex"></div>
              <div class="col d-flex flex-column align-items-start align-items-md-end">
                <h2 class="w-100 text-start text-md-end fs-1 text">Conf Bs As</h2>
                <p class="text-start text-md-end fs-5 text pe-5">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nisi saepe aliquid unde
                  explicabo atque ipsam, esse ab quibusdam recusandae! Dolorem ratione minima quae nulla placeat
                  sapiente mollitia perspiciatis? Necessitatibus.
                </p>
                <div>
                  <button type="button" class="btn btn-outline-light fs-5">Quiero ser orador</button>
                  <button type="button" class="btn btn-success fs-5">Comprar tikets</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SLIDE 2 -->
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="images/ba2.jpg" class="d-block w-100 bg-image" style="height: 85vh" alt="..." />
          <div class="carousel-caption h-75 mb-5 container">
            <div class="row h-100 mb-5 align-items-center">
              <div class="col-md d-md-flex"></div>
              <div class="col d-flex flex-column align-items-start align-items-md-end">
                <h2 class="w-100 text-start text-md-end fs-1 text">Conf Bs As</h2>
                <p class="text-start text-md-end fs-5 text pe-5">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nisi saepe aliquid unde
                  explicabo atque ipsam, esse ab quibusdam recusandae! Dolorem ratione minima quae nulla placeat
                  sapiente mollitia perspiciatis? Necessitatibus.
                </p>
                <div>
                  <button type="button" class="btn btn-outline-light fs-5">Quiero ser orador</button>
                  <button type="button" class="btn btn-success fs-5">Comprar tikets</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="images/ba3.jpg" class="d-block w-100 bg-image" style="height: 85vh" alt="..." />
          <div class="carousel-caption h-75 mb-5 container">
            <div class="row h-100 mb-5 align-items-center">
              <div class="col-md d-md-flex"></div>
              <div class="col d-flex flex-column align-items-start align-items-md-end">
                <h2 class="w-100 text-start text-md-end fs-1 text">Conf Bs As</h2>
                <p class="text-start text-md-end fs-5 text pe-5">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nisi saepe aliquid unde
                  explicabo atque ipsam, esse ab quibusdam recusandae! Dolorem ratione minima quae nulla placeat
                  sapiente mollitia perspiciatis? Necessitatibus.
                </p>
                <div>
                  <button type="button" class="btn btn-outline-light fs-5">Quiero ser orador</button>
                  <button type="button" class="btn btn-success fs-5">Comprar tikets</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

      </div>
  </section>

  <!-- SECTIONS CARDS -->
  <section>
    <div class="mt-3">

      <h4 class="text-center fs-5 mb-0 text-secondary">Conoce a los</h4>
      <h3 class="text-center fs-1 mb-3">Oradores</h3>
    </div>

    <div class="container">
      <div class="row ">
        <?php foreach ($oradores as $orador){ ?>
          <div class="col text-center justify-content-center">
          <!-- CARD 1 -->
          <div class="card orador-card mx-auto mx-md-0  mb-3 mb-md-0">

            <img class="card-img-top" src="<?php echo $orador["image_url"]; ?>">
            <div class="card-body">
              <div class="d-flex  mb-2">
                <?php 
                  $topics = get_tipics_by_orador_id($db, $orador["id"]);

                  foreach ($topics as $topic) {
                    echo "<div class='p-1 rounded-2 me-2' style='background-color: #" . $topic["color_hex"] . "'>" . $topic["name"] . "</div>";
                  }
                ?>
              </div>
              <h5 class="card-title text-start"><?php echo $orador["name"] . $orador["surename"] ?></h5>
              <p class="card-text text-start""><?php echo $orador["description"]; ?></p>
            </div>
          </div>
        </div>

        <?php }?>

      </div>
    </div>
  </section>


  <!-- BsAs INFO -->
  <section class="d-flex flex-column flex-md-row mt-5 bs-as-info-container" >
    <div class="w-100 w-md-50 h-100">
      <img src="images/honolulu.jpg" alt="" class="h-100 w-100 object-fit-cover">
    </div>
    <div class="w-100 w-md-50 h-100  bg-dark p-3 pb-5  ">
      <h3 class="text-white">Bs As - Ocutbre</h3>
      <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. In laudantium, cumque aut,
        provident similique quos
        aperiam iste officiis quibusdam praesentium est porro nulla ratione commodi, voluptatum aspernatur quas quasi
        rerum.</p>
      <button type="button" class="btn btn-outline-light fs-5">Contame mas</button>

    </div>
  </section>

  <!-- CONVERTITE EN ORADOR FORM -->
 <?php include_once "components/conviertete-en-orador-form.php" ?>

  <?php
  include_once 'components/footer.php'
  ?>
