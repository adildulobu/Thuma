@extends('layouts.app')
@section('navegacao')
 <link rel="stylesheet" href="../css/home_style.css">
@endsection
@section('conteudo')
<!-- NavBar1-->
<nav class="nav" id="nav1">
  <h6 class="nav-link">Bem vindo</h6>
  <a class="nav-link" href="#" id="top"><i class="fas fa-user-plus fa-1x"></i>criar conta</a>
  <a class="nav-link" href="#" id="top"><i class="fas fa-user"></i>Entrar</a>
</nav>

<!-- NavBar2-->
<div class="menu1">
    <nav class="navbar navbar-expand-md navbar-light">
        <img src="../img/logo.png" alt="" class="logo" class="d-inline-block align-top" alt="">

        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                    <form class="form-inline my-2 my-lg-0" id="search">
    <input class="form-control" type="search" placeholder="Procurar produto..." aria-label="Search" id="search1">
    <button class="btn" type="submit" id="bt_search1"><i class="fas fa-search fa-1x" id="fa1"></i></button>
  </form>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link" id="a1"><img src="../img/user.png" alt="" width="35px"></i>Minha conta</a>
                <a href="#" class="nav-item nav-link" id="a1"><img src="../img/buy.png" alt="" width="35px">Meu carinho</a>
            </div>
        </div>
      </nav>
</div>

<!-- NavBar-3-->
<nav class="navbar navbar-expand-lg navbar-light" id="menu2">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      <a class="nav-item nav-link" href="#" id="a2">Home</a>
    </div>
  </div>
</nav>

<!-- Slide-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/img1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/img5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <button id="bt_slide1">Comprar Já!<i class="fas fa-arrow-right"></i></button>
        
      </div>
    </div>
    <div class="carousel-item">
    <img src="../img/img4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <button id="bt_slide1">Comprar Já!<i class="fas fa-arrow-right"></i></button>
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


@endsection


@section('rodape')

      </div>
      <nav class="navbar navbar-expand-md navbar-dark fixed-bottom" id="rodape">
          <h6 id="header1">Othuma &copy;2020. Todos direitos reservados</h6>

</nav>
@endsection
