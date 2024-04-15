<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
      <a class="navbar-brand" href="#"><span class="text-warning h1">L</span>ibrary</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle mx-auto" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>nom de user</strong>
          </span>
          <span class="user-role">role de user</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      
     
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li >
            <a href="#">
              <span>Accueil</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <span> Prêts</span>
              
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Emprunteur">Emprunteurs</a>
                </li>
                <li>
                  <a href="#"> Prêts par Emprunteur</a>
                </li>
                <li>
                  <a href="#">Mes location</a>
                </li>
                <li>
                  <a href="#"> Prêts en cours</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <span>liste ouvrages</span>
              
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/ouvrage">Fiche</a>
                </li>
                <li>
                  <a href="#">rechercher</a>
                </li>
                <li>
                  <a href="#">Dernières acquisitions</a>
                </li>
                <li>
                  <a href="#">proposer une ressource</a>
                </li>
                <li>
                  <a href="#">liste propositions</a>
                </li>
              </ul>
            </div>
          </li>
          <li >
            <a href="#">
              <span>Filières</span>
            </a>
            
          </li>
          <li >
            <a href="#">
              <span>Etats-statistiques</span>
            </a>
          </li>
          
          <li>
            <a href="#">
              <span>log out</span>
              
            </a>
          </li>
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
    <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          </div>
        
        

        </div>
      </div>
      <span><h5>les livres </h5></span>
      <hr>
      <div class="row">
        
      @include('layouts.bady')
      </div>
      
      <hr>

      <footer class="text-center">
        <div class="mb-2">
          <small>
          @include('layouts.footer')
          </small>
        </div>
        <div>
          
        </div>
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>




        <script>
          jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});
        </script>
    
</body>

</html>