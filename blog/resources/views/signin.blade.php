@extends('layouts.app')

@section('title-block')
Авторизация
@endsection

@section('content')

  <style >

    .html, body {
      height: 100vh;
    }

    body {
      display: flex;
      align-items: center;
    }

    .text-center {
      text-align: center!important;
      margin: auto;
    }

    .form-signup {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      text-align: center!important;
    }

    .form-group {
      margin: 0;
      height: 50px;
    }
  </style>


  <div class="text-center">
    <form class="form-signup" action="/signup" method="post">

      <div class="form-group">
        <label for="name"></label>
        <input type="text" name="name" placeholder="Nickname" class="form-control">
      </div>

      <div class="form-group">
        <label for="password"></label>
        <input type="text" name="password" placeholder="Password" class="form-control">
      </div>

      <button class="btn btn-lg btn-primary btn-block" style="margin-top:30px;" type="submit">Войти</button>

    </form>
  </div>

@endsection
