<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><span class="text-warning h1">L</span>ibrary</a>
            <div class="collapse navbar-collapse justify" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-4 mb-lg-0 nav-underline">
            
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="  btn btn-warning" href="/Type-employe">Login</a>
                </li>
                
            </ul>
            </div>
    </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="{{ asset('images/bibl2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
					<h5>Emprunter des livres</h5>
					<p>En empruntant des livres à la bibliothèque, les règles suivantes doivent être respectées  <br>
            click ici</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/bibl3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
					<h5>Emprunter des livres</h5>
					<p>En empruntant des livres à la bibliothèque, les règles suivantes doivent être respectées <br>
            click ici</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/bibl1.jpg') }}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-md-block">
					<h5>Emprunter des livres</h5>
					<p>En empruntant des livres à la bibliothèque, les règles suivantes doivent être respectées <br>
            click ici</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>