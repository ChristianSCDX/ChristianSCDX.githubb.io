<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src='{{asset("plugins/jquery/jquery.min.js")}}'></script>
<script src='{{asset("plugins/qrcode/qrcode.js")}}'></script>

</head>

<body>
	

<nav class="navbar navbar-expand-xl bg-body-tertiary">

		

	<div class="container-fluid">
		
			<img width="250" height="100"   srcset="https://www.peruconciencia.pe/wp-content/uploads/29.-Universidad-Nacional-de-Moquegua-UNAM.png" >
		
		<a class="navbar-brand" href="/">SISTEMA DE AVERIAS </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="/empleado"> VER AVERIAS</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="/empleado/create">CREAR</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="https://unam.edu.pe/">UNAM</a>
			</li>
			
		</ul>
		</div>
	</div>
	</nav>


	<div class="container text-center text-lg-start bg-white text-muted">
		<input id="text" type="hidden" value="sistema de averias " style="width:80%" /><br></br>
			<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
				<div class="container text-center ">
					<section class="d-flex justify-content-center ">	
						<script type="text/javascript">
						var qrcode = new QRCode(document.getElementById("qrcode"), {
							width : 200,
							height : 200
						});

						function makeCode () {		
							var elText = document.getElementById("text");
							
							if (!elText.value) {
								alert("Input a text");
								elText.focus();
								return;
							}
							
							qrcode.makeCode(elText.value +'http://127.0.0.1:8000/');
						}

						makeCode();

						$("#text").
							on("blur", function () {
								makeCode();
							}).
							on("keydown", function (e) {
								if (e.keyCode == 13) {
									makeCode();
								}
							});
						</script>
					</section>
			</div>
	</div>


</body>
<!-- Footer -->
<br>

<footer class="text-center text-lg-start bg-white text-muted">
<br></br>
<br></br>

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
 
 <br></br>

    <div class="me-5 d-none d-lg-block">
      <span>Por favor scanear el QR para hacer el debido reclamo</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f">Facebook</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter">Twitter</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google">Google</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram">Instagram</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin">Linkedin</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github">Github</i>
      </a>
    </div>
    <!-- Right -->


  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>SISTEMA DE AVERIAS
          </h6>
          <p>
            Este espacio busca dar mejoras continuas atravez del feedback de 
			nuestros usuarios para ello les pedimos reportar cualquier averia 
			que se este sucitando.
							
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Servicios
          </h6>
          <p>
            <a href="#!" class="text-reset">Redes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Software</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Hadware</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Consultorias</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nosotros 
          </h6>
          <p>
            <a href="#!" class="text-reset">Soporte</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Configuaraciones</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ordenes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ayuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Universidad Nacional de Moquegua </p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            averias@unam.edu.pe
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 53 953 999 999 </p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 53 953 888 888</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">CHRIS_SOSA.COM</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->	