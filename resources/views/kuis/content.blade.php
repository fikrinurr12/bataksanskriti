@extends('../layout/landingpage')
@section('title', 'Kuis')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('kuis') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Kuis 1</h2><hr>
                @auth    
            <!--- batas -->
                <form action="{{ route('hasil_kuis') }}">
                    <div class="row kuis mb-5">
                        <p>1. Dari mana bika ambon berasal?</p>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio1" class="form-check-input mt-0" type="radio" value="Ambon" name="answer1" aria-label="Radio button for following text input">
                                <label for="radio1" class="ms-2"> Ambon</label>
                            </div>
                        </div> 
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio2" class="form-check-input mt-0" type="radio" value="Bika" name="answer1" aria-label="Radio button for following text input">
                                <label for="radio2" class="ms-2"> Bika</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio3" class="form-check-input mt-0" type="radio" value="Sulawesi" name="answer1" aria-label="Radio button for following text input">
                                <label for="radio3" class="ms-2"> Sulawesi</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio4" class="form-check-input mt-0" type="radio" value="Batak" name="answer1" aria-label="Radio button for following text input">
                                <label for="radio4" class="ms-2"> Batak</label>
                            </div>
                        </div>
                    </div>

                    <div class="row kuis mb-5">
                        <p>2. Apa kepanjangan SGIE?</p>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio5" class="form-check-input mt-0" type="radio" value="Sego Gelondong Iwak Endok" name="answer2" aria-label="Radio button for following text input">
                                <label for="radio5" class="ms-2"> Sego Gelondong Iwak Endok</label>
                            </div>
                        </div> 
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio6" class="form-check-input mt-0" type="radio" value="Satria Gondrong Ikal Esempe" name="answer2" aria-label="Radio button for following text input">
                                <label for="radio6" class="ms-2"> Satria Gondrong Ikal Esempe</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio7" class="form-check-input mt-0" type="radio" value="Sunat Gratis Ikatan Emas" name="answer2" aria-label="Radio button for following text input">
                                <label for="radio7" class="ms-2"> Sunat Gratis Ikatan Emas</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio8" class="form-check-input mt-0" type="radio" value="Sumpah Gat Ingat Eblas" name="answer2" aria-label="Radio button for following text input">
                                <label for="radio8" class="ms-2"> Sumpah Gat Ingat Eblas</label>
                            </div>
                        </div>
                    </div>

                    <div class="row kuis mb-5">
                        <p>3. Siapa Capres yang bakal jadi Presiden dan Wakil Presiden?</p>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio9" class="form-check-input mt-0" type="radio" value="Anies - Amien" name="answer3" aria-label="Radio button for following text input">
                                <label for="radio9" class="ms-2"> Anies - Amien</label>
                            </div>
                        </div> 
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio10" class="form-check-input mt-0" type="radio" value="Prabowo - Gibran" name="answer3" aria-label="Radio button for following text input">
                                <label for="radio10" class="ms-2"> Prabowo - Gibran</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio11" class="form-check-input mt-0" type="radio" value="Ganjar - Mahfud" name="answer3" aria-label="Radio button for following text input">
                                <label for="radio11" class="ms-2"> Ganjar - Mahfud</label>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-text form-control">
                                <input id="radio12" class="form-check-input mt-0" type="radio" value="Tronjal Tronjol Maha Asyiq" name="answer3" aria-label="Radio button for following text input">
                                <label for="radio12" class="ms-2"> Tronjal Tronjol Maha Asyiq</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger">Submit Jawaban</button>
                </form>
                <!--- batas -->
                @endauth
                
                @guest
                <div class="row mt-5 mb-5">
                  <h1 class="text-center">Login Terlebih Dahulu!</h1>
                </div>
                @endguest
        </div>
    </div>
</div>

@endsection
