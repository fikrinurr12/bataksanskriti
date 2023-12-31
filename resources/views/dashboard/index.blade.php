<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
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
            @includeWhen(Request::is('event'), 'dashboard.contents.event.index')
            @includeWhen(Request::is('dashboard'), 'dashboard.contents.dashboardpage')
          </div>
        </div>
    </main>
</body>
</html>