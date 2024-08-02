<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="{{ asset('Css/style.css')}}" rel="stylesheet">
    <title>Login MeTrade</title>
</head>
<body class="body-one">
  @if(Session::has('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil Mendaftar!',
          text: '{{ Session::get("success") }}',
          showConfirmButton: true, 
          timer: 2000 
          z-index:50;
      });  
  </script>
  @endif
    {{-- <section class="d-flex justify-content-center align-items-center full-height">
        <div class="text-center div-middle row">
            <div class="span_one col-12">
                <img src="{{ asset('Images/bg-01.jpg') }}" alt="Image">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="barlow">LOG IN TO QURDATA</p>
                    </div>
                </div>
            </div>
            
            <div class="span_two col-12 ">
                <br>
                <br>
                 <!-- INI UNTUK USERNAME -->
            <form method="POST" action="{{route('auth')}}">
                @csrf
              <div class="input-group has-validation inputa1">
                  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                  </svg></span>
                  <div class="form-floating">
                    <input type="text" class="form-control input1" name="username" id="floatingInputGroup2" placeholder="Username" required>
                    <label for="floatingInputGroup2">Username</label>
                  </div>
                </div>
                <br>
              <!-- INI UNTUK PASSWORD -->
                <div class="input-group has-validation inputa">
                  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg></span>
                  <div class="form-floating">
                    <input type="password" class="form-control input1" name="password" id="floatingInputGroup2" placeholder="Password" required>
                    <label for="floatingInputGroup2">Password</label>
                  </div>
                </div>
                <br>
                <!-- INI TOMBOL KIRIM DAN PENDAFTARAN BARU-->          
                <input class="btn btn-primary button_one" type="submit" value="Log In">
    
                
              </form>
            </div>
        </div>
    </section> --}}


    <div class="wrap-log">
      <img src="{{ asset('Images/Back.jpg') }}" alt="Background" class="Background">
      <div class="overlay"></div>
      <div class="row wrap-log-v2">         
          <img src="{{ asset('Images/TA.jpg') }}" alt="Gedung TA" class="TA">
          <div class="col-8 visible whites" id="visibleCol">
              <img src="{{ asset('Images/GU.jpg') }}" alt="Gedung GU" class="GU">
          </div>
          
          <div class="col-4 white Main" id="centerCol">
              {{-- LOGIN FORM --}}  
              <nav id="Span-new" class="visible">
                      <div class="span_one col-12">
                          <img src="{{ asset('Images/logo2.png') }}" alt="Logo" class="Logo">
                          <br>
                          <div class="overlay">
                              <div class="overlay-text">
                                  <p class="barlow">LOG IN TO METRADE</p>
                              </div>
                          </div>
                      </div><p class="kanit-thin Sizer">MeTrade - Dummy Aplikasi CEISA 4.0 Pada Dokumen BC 3.0</p>

                      
                      <sidebar class="span_two col-12 ">
                          <br>
                          <br>
                           <!-- INI UNTUK USERNAME -->
                      <form method="POST" action="">
                          @csrf
                        <div class="input-group has-validation inputa1 inputstyle">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg></span>
                            <div class="form-floating ">
                              <input type="text" class="form-control input1 " name="username" id="floatingInputGroup2" placeholder="Username" required>
                              <label for="floatingInputGroup2">Username</label>
                            </div>
                          </div>
                          <br>
                        <!-- INI UNTUK PASSWORD -->
                          <div class="input-group has-validation inputa inputstyle">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                              <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                              <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg></span>
                            <div class="form-floating">
                              <input type="password" class="form-control input1" name="password" id="floatingInputGroup2" placeholder="Password" required>
                              <label for="floatingInputGroup2">Password</label>
                            </div>
                          </div>
                          <br>
                          <!-- INI TOMBOL KIRIM DAN PENDAFTARAN BARU-->     
                          <p class="geser">Belum Memiliki Akun ? <button id="toggleButton-palsu" class="polos"> Daftar Disini !!</button></p><br><br>     
                          <input class="btn btn-primary button_one" type="submit" value="Log In">
              
                          
                        </form>
                      </sidebar>
              </nav>
              
              <button id="toggleButton" class="hidden">Tersembunyi</button>

                      <nav id="Span-old"  class="hidden">
                          <div class="span_one_one col-12">
                              <img src="{{ asset('Images/logo2.png') }}" alt="Logo" class="Logo">
                              <br>
                              <div class="overlay">
                                  <div class="overlay-text">
                                      <p class="barlow">REGISTRASI TO METRADE</p>
                                  </div>
                              </div>
                          </div><p class="kanit-thin Sizer">MeTrade - Dummy Aplikasi CEISA 4.0 Pada Dokumen BC 3.0</p>

                          
                               <!-- INI UNTUK NOMOR IDENTITAS/NPWP -->
          <form method="post" action="{{route('nambah')}}">
              @csrf
            <div class="input-group has-validation inputa1 inputstyle-2">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                  <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                </svg></span>
                <div class="form-floating">
                  <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nomor Identitas (NPWP)" name="npwp" onkeypress="return hanyaAngka(event)" required>
                  <label for="floatingInputGroup2">Nomor Identitas (NPWP)</label>
                </div>
              </div>

            <!-- INI UNTUK NAMA LENGKAP -->
              <div class="input-group has-validation inputa1 inputstyle-2">
                <span class="input-group-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg></span>
                <div class="form-floating">
                  <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nama Lengkap" name="nama" required>
                  <label for="floatingInputGroup2">Nama Lengkap</label>
                </div>
              </div>
    
                <!-- INI UNTUK No Telepon -->
                  <div class="input-group has-validation inputa1 inputstyle-2">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="No Telepon" name="no_hp" onkeypress="return hanyaAngka(event)" >
                      <label for="floatingInputGroup2">No Telepon</label>
                    </div>
                  </div>
                  {{-- <!-- INI UNTUK E-mail -->
            
                <div class="input-group has-validation inputa1 inputstyle-2">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="email" class="form-control input1" id="floatingInputGroup2" placeholder="E-mail" name="email" required>
                      <label for="floatingInputGroup2">E-mail</label>
                    </div>
                  </div>
     --}}
                <!-- INI UNTUK Nama Pengguna -->
                  <div class="input-group has-validation inputa1 inputstyle-2">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nama Pengguna" name="username" required>
                      <label for="floatingInputGroup2">Nama Pengguna</label>
                    </div>
                  </div>

                <div class="rowpass">
                  <!-- INI UNTUK Password -->
                  <div class="input-group has-validation inputa123 inputstyle-2">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                      <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                      <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="password" class="form-control input1" id="floatingInputGroup2" placeholder="Password" name="password" required>
                      <label for="floatingInputGroup2">Password</label>
                    </div>
                  </div>

                   <!-- INI UNTUK Verif Password -->
                   <div class="input-group has-validation inputa12 inputstyle-2">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                      <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                      <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg></span>
                    <div class="form-floating p">
                      <input type="password" class="form-control input1" id="floatingInputGroup2" placeholder="Konfirmasi Password" name="confirmedPassword" required>
                      <label for="floatingInputGroup2">Konfirmasi Password</label>
                    </div>
                  </div>
                 </div>
                 <hr>

              <!-- INI TOMBOL KIRIM-->
              <div class="tombol2">
              <button class="polos" id="toggleButton-2">
              <input class="btn btn-danger kirim buttonhey" type="button" value="Batal">
              </button>
              <input class="btn btn-primary batal buttonhey" type="submit" value="Masuk">
              </div>
              
            </form>
                          </nav>
                        
                  </div>
      
      
  </div>


       <!-- =========== Scripts =========  -->
   <script src="{{ asset('Js/main.js')}}"></script>
   <script>
    
document.getElementById('toggleButton').addEventListener('click', function() {
  var visibleCol = document.getElementById('visibleCol');
  var centerCol = document.getElementById('centerCol');
  var newVisibleCol = document.getElementById('newVisibleCol');
  var uwuw = document.getElementById('Uwuw');
  var owow = document.getElementById('Owow');
  var spanNew = document.getElementById('Span-New');
  var spanOld = document.getElementById('Span-old');

  if (visibleCol.classList.contains('visible')) {
      // Menyembunyikan elemen visibleCol dan centerCol, menampilkan newVisibleCol
      visibleCol.classList.remove('visible');
      visibleCol.classList.add('moving-left');
      centerCol.classList.add('moving-left');

      newVisibleCol.classList.remove('hidden');
      newVisibleCol.classList.add('show');

      // Menyembunyikan uwuw, menampilkan owow
      uwuw.classList.add('hidden');
      uwuw.classList.remove('visible');
      owow.classList.add('visible');
      owow.classList.remove('hidden');

      // Mengganti visibilitas Span-New dan Span-old
      spanNew.classList.remove('visible');
      spanNew.classList.add('hidden');
      spanOld.classList.remove('hidden');
      spanOld.classList.add('visible');
  } else {
      // Menampilkan elemen visibleCol dan centerCol, menyembunyikan newVisibleCol
      visibleCol.classList.remove('moving-left');
      visibleCol.classList.add('visible');
      centerCol.classList.remove('moving-left');
      centerCol.classList.add('visible');

      newVisibleCol.classList.remove('show');
      newVisibleCol.classList.add('hide');

      // Menampilkan uwuw, menyembunyikan owow
      uwuw.classList.remove('hidden');
      uwuw.classList.add('visible');
      owow.classList.remove('visible');
      owow.classList.add('hidden');

      // Mengganti visibilitas Span-New dan Span-old
      spanNew.classList.remove('hidden');
      spanNew.classList.add('visible');
      spanOld.classList.remove('visible');
      spanOld.classList.add('hidden');
  }
});


document.getElementById('toggleButton').addEventListener('click', function() {
  var spanNew = document.getElementById('Span-new');
  var spanOld = document.getElementById('Span-old');

  if (spanNew.classList.contains('visible')) {
      spanNew.classList.remove('visible');
      spanNew.classList.add('hidden');
      spanOld.classList.remove('hidden');
      spanOld.classList.add('visible');
  } else {
      spanNew.classList.remove('hidden');
      spanNew.classList.add('visible');
      spanOld.classList.remove('visible');
      spanOld.classList.add('hidden');
  }
});

document.getElementById('toggleButton-palsu').addEventListener('click', function() {
  // Memicu event click pada tombol sebenarnya
  document.getElementById('toggleButton').click();
});

document.getElementById('toggleButton-2').addEventListener('click', function() {
  // Memicu event click pada tombol sebenarnya
  document.getElementById('toggleButton').click();
});

  </script>
  <!-- ... -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Mendaftar!',
            text: '{{ Session::get("success") }}',
            showConfirmButton: true,
            timer: 3500
        });
    });
</script>
@endif
</body>
</html>


</body>
</html>