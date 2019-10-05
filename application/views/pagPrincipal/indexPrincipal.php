<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url()?>index.php/welcome/index">Panda<span>   Cotizador</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url()?>index.php/welcome/vehicular">Vehicular</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/hogar">Hogar</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/vida">Vida</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/viaje">Viajes</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/mascotas">Mascotas</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/bicicleta">Bicicletas</a></li>
          <li><a href="<?= base_url()?>index.php/welcome/corporativo">Corporativo</a></li>
        </ul>
      </div>
    </div>
</nav>
  <!--/ Navigation bar-->

  <!--Banner-->

  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
          <div class="text-border">
              <h2 class="text-dec">Quiero cotizar un seguro de</h2>
            </div>
            <div class="col-md-offset-1"></div>
            <div class="col-md-offset-4">
                <div class=" text-center form-group">
                <br>
                    <label for="sel1"></label>
                    <select class=" form-control" id="sel1">
                        <option>Vehicular</option>
                        <option>Hogar</option>
                        <option>Vida</option>
                        <option>Viajes</option>
                        <option>Mascotas</option>
                        <option>Bicicletas</option>
                        <option>Corporativo</option>
                    </select>
                </div>
            </div>
            
          </div>
        </div>
        <div class="intro-para text-center quote">
              <a href="#" class="btn get-quote">C O T I Z A R</a>
            </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-5">
            <button  class=" btn-lg text-center cta-2-form-submit-btn "> Asegurate en línea </button>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="feature-info">
            <div>
                <br>
                <br>
                <h4 class="sm-txt text-center">Encuentra el mejor seguro para ti</h4>
                <br><br>
            </div>


           
        
        </div>
    </div>
    
  </section>
  <!--/ feature-->

  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
      <div class="col-md-1"></div>
        <div class=" col-md-3">
            <img src="<?= base_url()?>template/Mentor/img/23003.jpg" alt="Cotiza tu seguro" style="width:300px; height:200px;">
            <br>
            <h4 class="sm-txt text-center">Cotiza tu seguro</h4>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <img src="<?= base_url()?>template/Mentor/img/23003.jpg" alt="Cotiza tu seguro" style="width:300px; height:200px;">
            <br>
            <h4 class="sm-txt text-center">Cotiza tu seguro</h4>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <img src="<?= base_url()?>template/Mentor/img/23003.jpg" alt="Cotiza tu seguro" style="width:300px; height:200px;">
            <br>
            <h4 class="sm-txt text-center">Cotiza tu seguro</h4>
        </div>
        <div class="col-md-1"></div>


      </div>
    </div>
  </section>
  <!--/ work-shop-->

  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contactanos</h2>
          <p>Seguros Panda es una compañía especializada en la Gerencia de Riesgos, Asesoría en Seguros, Contratación de Pólizas y Atención en Indemnizaciones.</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Tu mensaje se ha enviado. Gracias!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
                <br>
              <input type="text" name="name" class="form-control form" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese más de 4 digitos" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Tu  Email" data-rule="email" data-msg="Por favor ingrese un email valido" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="Mensaje" rows="5" data-rule="required" data-msg="Por favor escriba su mensaje" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Enviar</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->