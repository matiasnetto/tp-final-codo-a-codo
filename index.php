  <?php
  $TITLE = "Conf BSAS";
  include_once 'components/navbar.php'
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
        <div class="col text-center justify-content-center">
          <!-- CARD 1 -->
          <div class="card orador-card mx-auto mx-md-0  mb-3 mb-md-0">

            <img class="card-img-top" src="images/steve.jpg">
            <div class="card-body">
              <div class="d-flex  mb-2">
                <div class="bg-warning p-1 rounded-2 me-2">Javascript</div>
                <div class="bg-primary text-light  p-1 rounded-2">React</div>
              </div>
              <h5 class="card-title text-start">Steve Jobs</h5>
              <p class="card-text text-start">Some quick example text to build on the card title and make up the bulk of
                the card's
                content.</p>
            </div>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="col">
          <div class="card orador-card mx-auto mx-md-0  mb-3 mb-md-0">
            <img class="card-img-top" src="images/bill.jpg">
            <div class="card-body">
              <div class="d-flex  mb-2">
                <div class="bg-warning p-1 rounded-2 me-2">Javascript</div>
                <div class="bg-primary text-light  p-1 rounded-2">React</div>
              </div>
              <h5 class="card-title text-start">Bill Gates</h5>
              <p class="card-text text-start">Some quick example text to build on the card title and make up the bulk
                of the card's
                content.</p>
            </div>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="col text-center">

          <div class="card orador-card mx-auto mx-md-0">
            <img class="card-img-top" src="images/ada.jpeg">
            <div class="card-body">
              <div class="d-flex mb-2">
                <div class="bg-secondary text-light p-1 rounded-2 me-2">Negocios</div>
                <div class="bg-danger text-light p-1 rounded-2">Startup</div>
              </div>
              <h5 class="card-title text-start">Ada Lovelace</h5>
              <p class="card-text text-start">Some quick example text to build on the card title and make up the bulk
                of the card's
                content.</p>
            </div>
          </div>
        </div>


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
  <section class="mt-3">
    <h4 class="text-center fs-5 mb-0 text-secondary">Convertite en un</h4>
    <h3 class="text-center fs-1 mb-3">Orador</h3>

    <p class="text-center">Anotate como orador para dar una <a href="">charla ignite</a>. Cuentanos de que quieres
      hablar!</p>

    <form class="w-100 w-md-50 mx-auto px-3 px-md-0">
      <div class="mb-3 d-flex">
        <input type="email" class="form-control fs-5" id="name" placeholder="Nombre">
        <input type="email" class="form-control fs-5" id="surname" placeholder="Apellido">
      </div>
      <div class="mb-3">

        <textarea class="form-control fs-5" placeholder="Sobre que quieres hablar?" id="description"
          style="height: 100px"></textarea>
      </div>
      <div class="form-text">Recuerda incluir un titulo para tu charla</div>
      <button type="submit" class="btn btn-success w-100 fs-5 mt-3">Enviar</button>
    </form>
  </section>

  <?php
  include_once 'components/footer.php'
  ?>
