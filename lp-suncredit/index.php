<?php include("head.php"); ?>

<body>

  <main>
    <?php include("menu.php"); ?>

    <section class="hero-section" id="section_1">
      <div class="section-overlay"></div>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="row align-items-center">

          <div class="col-12 mb-5 text-center home-block">
            <h1 class="text-white mb-5"><img src="images/sun-credit.png" /></h1>

            <a class="btn custom-btn smoothscroll" href="https://devinsider.com.br/suncredit/admin/login/index.php" target="_blank">Sign In</a>
          </div>
        </div>
      </div>

      <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
          <source src="video/pexels-2022395.mp4" type="video/mp4">
          Seu navegador não suporta video.
        </video>
      </div>
    </section>


    <section class="about-section section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <h2 class="text-white mb-4">SunCredit</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
            <div class="services-info">
              <p class="text-white">
              SunCredit, an innovative startup aiming to revolutionize the solar energy market in Austria. Using blockchain technology, SunCredit aims to create a decentralized ecosystem where consumers can not only generate their own solar energy, but also sell the surplus directly to other consumers. This proposal is not only a sustainable solution for the future of energy, but also a highly profitable investment opportunity.              
            </p>

              <p class="text-white">Today's energy market is centralized, inefficient and often subject to geopolitical volatilities. Furthermore, Austria, like many other countries, is under pressure to achieve ambitious sustainability and energy independence targets.</p>

            </div>
          </div>

          <div class="col-lg-6 col-12 d-flex align-items-center">
            <div class="about-text-wrap">
              <img src="images/logo-roxo.png" class="about-image img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="artists-section section-padding" id="section_3">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center">
            <h2 class="mb-4">Team</h2>
          </div>

          <?php include("participantes.php"); ?>

        </div>
      </div>
    </section>

    <section class="contact-section section-padding" id="section_6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 mx-auto">
            <h2 class="text-center mb-4">Know more about the system!</h2>

            <div class="alert alert-primary d-flex justify-content-center botao-inscrevase">
              <a href="https://devinsider.com.br/suncredit/admin/login/index.php" target="_blank" class="btn custom-btn mx-auto">Sign In</a>
            </div>
          </div>
        </div>
    </section>
  </main>


  <?php include("footer.php"); ?>