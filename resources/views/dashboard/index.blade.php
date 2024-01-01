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

      .margin-left-500{
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
        max-height: 200px;
        object-fit: cover;
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
          <div class="fixed width-10 p-2">    
            @include('dashboard.components.sidebar')
          </div>
          <div class="flex-fill margin-left-500 bg-light ps-2">
            @includeWhen(Request::is('kuis'), 'dashboard.contents.kuis.index')
            @includeWhen(Request::is('modul'), 'dashboard.contents.modul.index')
            @includeWhen(Request::is('modul/create'), 'dashboard.contents.modul.create')
            @includeWhen(Request::is('event'), 'dashboard.contents.event.index')
            @includeWhen(Request::is('dashboard'), 'dashboard.contents.dashboardpage')
          </div>
        </div>
    </main>
</body>
</html>