<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
      :root {
        --primary: #dc3545;
        --secondary: #212529;
        --second-ligth: #d6d6d6;
      }

      .top{
          margin-top: 100px;
      }

      .width-10{
          width: 300px;
      }

      .max-height-5{
          max-height: 500px;
      }

      .margin-left-300{
          margin-left: 300px;
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

      @media screen and (max-width: 670px){
        .sidebar{
          display: none
        }

        .margin-left-300{
          margin-left: 0;
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
    <header>
        @include('dashboard.components.navbar')
    </header>
    <main>
        <div class="d-flex top">
          <div class="fixed width-10 p-2 sidebar">    
            @include('dashboard.components.sidebar')
          </div>
          <div class="flex-fill margin-left-300 bg-light ps-2">
            @includeWhen(Request::is('kuis'), 'dashboard.contents.kuis.index')
            @includeWhen(Request::is('modul'), 'dashboard.contents.modul.index')
            @includeWhen(Request::is('modul/create'), 'dashboard.contents.modul.create')
            @if($data)
              @includeWhen(Request::is('modul/'.$data->id.'/edit'), 'dashboard.contents.modul.edit')
            @endif            
            @includeWhen(Request::is('event'), 'dashboard.contents.event.index')
            @includeWhen(Request::is('dashboard'), 'dashboard.contents.dashboardpage')
          </div>
        </div>
    </main>
</body>
</html>