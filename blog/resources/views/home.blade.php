@extends('layouts.app')

@section('title-block')
Главная страница
@endsection

@section('content')

<style media="screen">
  body {
    height: 100vh;
  }

  .menu-bar {
    width: 100wh;
    height: 50px;
    padding-left: 30%;
  }

  .menu-bar ul li {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
  }

  a {
    text-decoration: none;
    color: white;
  }
</style>

<div class="menu-bar bg-primary text-white">
  <ul>
    <li><a class="navbar-brand" href="#">Home</a></li>
    <li><a class="navbar-brand" href="#">Home</a></li>
    <li><a class="navbar-brand" href="#">Home</a></li>
  </ul>
</div>

@endsection
