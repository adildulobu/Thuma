@extends('layouts.app')
@section('navegacao')
 <link rel="stylesheet" href="../css/add_cliente.css">
@endsection
@section('conteudo')
<!-- NavBar1-->
<h2 class="desc">Criar Conta</h2>
<!-- Formulario  -->
<div class="container">
       <form>
        <div class="form-group">
          <label for="inputTitulo" id="label2">Titulo</label>
          <select class="form-control" id="exampleFormControlSelect1">
          <option>Por favor Escolha</option>
      <option>Senhor</option>    
      <option>Senhora</option>
    </select>
        </div>
            <div class="form-group">
             <label for="inputNome" id="label2">Nome</label>
           <input type="text" class="form-control" id="InputNome" placeholder="Insira o primeiro nome">
         </div>
            <div class="form-group">
             <label for="inputNome" id="label2">Apelido</label>
           <input type="text" class="form-control" id="InputNome"  placeholder="Insira o apelido">       
         </div>        
            <div class="form-group">
             <label for="inputNome" id="label2">Email</label>
           <input type="text" class="form-control" id="InputNome" placeholder="Insira email">
         </div>
         <div class="form-group">
             <label for="inputNome" id="label2">Senha</label>
           <input type="password" class="form-control" id="InputNome" placeholder="Insira a Classe">
         </div>
                  <div class="form-group">
             <label for="inputNome" id="label2">Confirmar Senha</label>
           <input type="password" class="form-control" id="InputNome" placeholder="Confirme o password do email introduzido">
         </div>
                  <div class="form-group">
             <label for="inputNome" id="label2">Telefone</label>
           <input type="number" class="form-control" id="InputNome" placeholder="Numero de Telefone"> 
         </div>
         <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo em receber comunicações de Marketing</label>
          </div>
         </div>
         
              <div class="form-group">    
    <button type="submit" class="btn btn-lg btn-primary" id="btn-primary_student">Gravar</button>
    </div>
       </form>
     </div>


@endsection
