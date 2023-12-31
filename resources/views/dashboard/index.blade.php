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
        <nav class="navbar fixed-top bg-body-tertiary px-3">
            <div class="container-fluid d-flex-between">
                <a class="navbar-brand" href="{{ route('landingpage') }}">
                    <img class="rounded-pill" src="{{ asset('assets/logo/logo.png') }}" width="35em" alt="">
                    <span>BatakSanskriti</span>
                </a>
                <ul></ul>
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-pill border border-2 border-danger profil" src="{{ asset('assets/users/1.jpg') }}" width="35em" alt=""> 
                </a>
            </div>
          </nav>
    </header>
    <main>
        <div class="d-flex top">
          <div class="fixed width-10 p-2">
            <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
              <a class="p-1 rounded" href="#simple-list-item-1">Item 1</a>
              <a class="p-1 rounded" href="#simple-list-item-2">Item 2</a>
              <a class="p-1 rounded" href="#simple-list-item-3">Item 3</a>
              <a class="p-1 rounded" href="#simple-list-item-4">Item 4</a>
              <a class="p-1 rounded" href="#simple-list-item-5">Item 5</a>
            </div>
          </div>
          <div class="flex-fill margin-left-500 bg-light ps-2">
            <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              <h4 id="simple-list-item-1">Item 1</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nostrum quae similique, sapiente, eligendi quas autem magnam tempora quia in voluptatem numquam alias voluptates sunt voluptas adipisci sit perferendis?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nostrum quae similique, sapiente, eligendi quas autem magnam tempora quia in voluptatem numquam alias voluptates sunt voluptas adipisci sit perferendis?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nostrum quae similique, sapiente, eligendi quas autem magnam tempora quia in voluptatem numquam alias voluptates sunt voluptas adipisci sit perferendis?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magni nostrum quae similique, sapiente, eligendi quas autem magnam tempora quia in voluptatem numquam alias voluptates sunt voluptas adipisci sit perferendis?</p>
              <h4 id="simple-list-item-2">Item 2</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quisquam beatae sequi, sapiente, tenetur praesentium sint aut minus recusandae enim molestias eum, tempora autem suscipit in sed doloremque soluta placeat.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quisquam beatae sequi, sapiente, tenetur praesentium sint aut minus recusandae enim molestias eum, tempora autem suscipit in sed doloremque soluta placeat.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quisquam beatae sequi, sapiente, tenetur praesentium sint aut minus recusandae enim molestias eum, tempora autem suscipit in sed doloremque soluta placeat.</p>
              <h4 id="simple-list-item-3">Item 3</h4>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, reprehenderit dolor. Aperiam, nemo, expedita nam minus voluptatem tempora architecto, magni omnis repudiandae labore explicabo minima et deserunt quod error. Eligendi!</p>
              <h4 id="simple-list-item-4">Item 4</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia maxime iusto quidem esse odit. Dolor animi dolore voluptatibus velit molestias minus! Aut architecto assumenda voluptatibus nemo nisi officiis vitae laboriosam?</p>
              <h4 id="simple-list-item-5">Item 5</h4>
              <p>lorem</p>
            </div>
          </div>
        </div>
    </main>
</body>
</html>