<?php
$user = auth()->user();
?>
@if(!$user)
  <div class="container">
    <button class="btn btn-danger"><a href="{{ route('login') }}">Login Terlebih Dahulu!</a></button>
  </div>
@elseif($user->role == 'admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
      :root {
        --primary: #dc3545;
        --secondary: #212529;
        --second-ligth: #d6d6d6;
      }

      .top{
          margin-top: 25px;
      }

      .width-10{
          width: 300px;
      }

      .max-height-5{
          max-height: 500px;
      }

      .margin-left-300{
          margin-left: 315px;
      }

      .bg-main{
          background-color: var(--primary);
      }

      .text-main{
          color: var(--primary);
      }

      .bg-second-light{
          background-color: var(--second-ligth);
      }

      .padding-x{
          padding-left: 80px;
          padding-right: 80px;
      }

      .max-height-200{
        max-height: 150px;
        object-fit: cover;
      }

      .grid-button{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
        gap: 5px;
      }

      .sidebar{
        display: block;
      }

      .navbar-responsive{
        display: none
      }

      .title-responsive{
        display: block;
      }

      .bg-test{
        background-color: #e9e9e9;
      }

      .max-height-fill{
        min-height: 83vh;
      }

      .transform{
        transform: translateX(-120px)
      }

      @media screen and (max-width: 670px){
        .sidebar{
          display: none
        }

        .margin-left-300{
          margin-left: 15px;
        }

        .navbar-responsive{
          display: block;
        }

        .title-responsive{
          display: none;
        }        
      }
    </style>
    <title>Title</title>
</head>
<body>
    @include('dashboard.components.navbar')
    <main>
        <div class="max-height-fill">
          <div class="position-fixed width-10 p-2 sidebar h-100 bg-dark text-white">    
            @include('dashboard.components.sidebar')
          </div>
          <div class="flex-fill margin-left-300 bg-light mb-3">
            <div class="container pt-3">
              @includeWhen(Request::is('modul'), 'dashboard.contents.modul.index')
              @includeWhen(Request::is('modul/create'), 'dashboard.contents.modul.create')
              @if($data_modul)            
                @includeWhen(Request::is('modul/'.$data_modul->id.'/edit'), 'dashboard.contents.modul.edit')
              @endif
              @includeWhen(Request::is('kuis'), 'dashboard.contents.kuis.index')
              @includeWhen(Request::is('kuis/create*'), 'dashboard.contents.kuis.create')
              @includeWhen(Request::is('kuis/lists*'), 'dashboard.contents.kuis.lists')            
              @includeWhen(Request::is('kuis/edit*'), 'dashboard.contents.kuis.edit')
              @includeWhen(Request::is('event'), 'dashboard.contents.event.index')
              @includeWhen(Request::is('event/create'), 'dashboard.contents.event.create')
              @if($data_event)
                @includeWhen(Request::is('event/'.$data_event->id.'/edit'), 'dashboard.contents.event.edit')
              @endif
              @includeWhen(Request::is('dashboard'), 'dashboard.contents.modul.index')
            </div>
          </div>
        </div>
    </main>
</body>
</html>
@else
<div class="container">
  <button class="btn btn-danger"><a href="{{ route('landingpage') }}">Kembali Ke Halaman Utama!</a></button>
</div>
@endif