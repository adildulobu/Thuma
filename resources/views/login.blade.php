@extends('layouts.app')
@section('navegacao')
 <link rel="stylesheet" href="../css/add_cliente.css">
@endsection
@section('conteudo')
<!-- NavBar1-->
<h2 class="desc">Aceder a Plataforma </h2>
<div class="container">
    <!-- Login Form -->
    <form>
      <div class="form-group">
        <label for="inputUser">Email</label>
      <input class="form-control" type="text" id="login" class="fadeIn second" name="login" placeholder="Insira email">
      </div>
      <div class="form-group">
        <label for="inputSenha">Senha</label>
        <input type="password" name="password" class="form-control" placeholder="insira password">
      </div>
      <div class="form-group">
        <a class="underlineHover" href="#">Esqueceu senha?</a>
      </div>
      <input type="submit" class="fadeIn fourth" value="Log In" id="btn-primary_student">
    </form>

    <!-- Remind Passowrd -->

  </div>


@endsection
