@extends('layouts.app')

@section('title-block')
Регистрация
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

    .alert {

      text-align: left;
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

    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="form-signup" action="/signup/createAccount" method="post">
      @csrf

      <div class="form-group">
        <label for="name"></label>
        <input type="text" name="nickname" placeholder="Nickname" class="form-control">
      </div>

      <div class="form-group">
        <label for="FirstName"></label>
        <input type="text" name="FirstName" placeholder="Имя" class="form-control">
      </div>

      <div class="form-group">
        <label for="LastName"></label>
        <input type="text" name="LastName" placeholder="Фамилия" class="form-control">
      </div>

      <div class="form-group">
        <label for="password"></label>
        <input type="text" name="password" placeholder="Password" class="form-control">
      </div>

      <div class="form-group">
        <label for="confirm-password"></label>
        <input type="text" name="password_confirmation" placeholder="Confirm password" class="form-control">
      </div>

      <button class="btn btn-lg btn-primary btn-block" style="margin-top:30px;" type="submit">Создать аккаунт</button>

    </form>
  </div>


@endsection
