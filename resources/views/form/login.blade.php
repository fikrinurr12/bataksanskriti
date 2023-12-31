@extends('../layout/form')
@section('title','Login')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="text-center text-dark mt-5"><a href="{{ route('landingpage') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Login Form</h2>
      <div class="card my-5">

        <form class="card-body cardbody-color p-lg-5" method="post" action="/login">
          @csrf
          <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: Johndoe@gmail.com">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          {{-- <div class="mb-3">
              <select class="form-select" name="" id="">
                  <option value="">Admin</option>
                  <option value="">Guest</option>
              </select>
          </div> --}}
          <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button></div>
          <div id="emailHelp" class="form-text text-center mb-5 text-dark">Belum Registrasi? <a href="{{ route('register') }}" class="text-dark fw-bold"> Buat Akun</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

@endsection