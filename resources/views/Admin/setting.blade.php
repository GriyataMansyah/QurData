<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="{{ asset('Css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('Images/logo.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Setelan Umum (Admin)</title>
</head>

<body>
  @if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Mengganti Data Akun!',
            text: '{{ Session::get("success") }}',
            showConfirmButton: true,  // Menampilkan tombol OK
            timer: 2000  // Menampilkan alert selama 2 detik
        });
    </script>
  @endif
        <!-- ========================= SideBar ==================== -->
        @include('Layout/Admin/sidebar')
        <!-- ========================= Main ==================== -->
        @include('Layout/Admin/main')

            <!-- ================ Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Setelan Umum Akun</h2> 
                        <p>Pusat Data Akun</p>
                    </div>
                    <div class="div-two">
                        <div class="row">
                          <div class="col-lg-4 div-four label_one">
                            {{-- <img id="preview" src="{{asset('Images/Default.png')}}" alt="Pratinjau Foto Profil"> --}}
                              <img src="{{ asset('Images/default.png') }}" alt="Pratinjau Foto Profil">
                              <form action="" method="POST">
                                  @csrf
                                  <label for="profile_picture" class="btn btn-secondary">
                                      <input type="file" name="profile_picture" id="profile_picture" accept="image/*" style="display: none;" onchange="previewImage(event)">
                                      Ganti Foto Profil
                                  </label>
                              </form>
                          </div>

                            <div class="col-lg-8 div-three">
                              <form method="POST" action="{{route('gantiidentitasadmin')}}">
                                @csrf
                                <ul class="untype">
                                    <li>  
                                        <input type="hidden" name="id" value="{{ $Akun->id }}">
                                        <label class="CustomText-One">Nama Akunmu</label>
                                        <div class="input-group has-validation inputa">
                                        <span class="input-group-text"><ion-icon name="happy-outline"></ion-icon></span>
                                        <div class="form-floating">
                                          <input type="text" class="form-control CustomInput_One" name="nama" id="floatingInputGroup2" value="{{$Gurume->nama}}"required>
                                          <label for="floatingInputGroup2">Nama</label>
                                        </div>
                                      </div>
                                    </li>
                                    <br>
                                    <li>  
                                      <label class="CustomText-One">Tangal Lahir</label>
                                      <div class="input-group has-validation inputa">
                                      <span class="input-group-text"><ion-icon name="person-circle-outline"></ion-icon></span>
                                      <div class="form-floating">
                                        <input type="Date" class="form-control CustomInput_One" name="tgl_lahir" id="floatingInputGroup2" value = "{{$Gurume->tanggal_lahir}}" required>
                                        <label for="floatingInputGroup2">Tanggal Lahir</label>
                                      </div>
                                    </div>
                                  </li> 
                                    <br>
                                    <li>  
                                        <label class="CustomText-One">Nama Pengguna</label>
                                        <div class="input-group has-validation inputa">
                                        <span class="input-group-text"><ion-icon name="person-circle-outline"></ion-icon></span>
                                        <div class="form-floating">
                                          <input type="text" class="form-control CustomInput_One" name="username" id="floatingInputGroup2" value="{{$Akun->username}}" required>
                                          <label for="floatingInputGroup2">Nama Pengguna</label>
                                        </div>
                                      </div>
                                    </li>     
                                    <br>
                                    <li>
                                      <li id="passwordSection">
                                        <label class="CustomText-One" id="passwordLabel">Kata Sandi</label>
                                        <div class="input-group has-validation inputa" style="position: relative;">
                                            <span class="input-group-text"><ion-icon name="key-outline"></ion-icon></span>
                                            <div class="form-floating">
                                                <input type="password" class="form-control CustomInput_One" name="password" id="floatingInputGroup2" value="{{$Akun->password}}" disabled>
                                                <label for="floatingInputGroup2">Password</label>
                                            </div>
                                            <ion-icon name="create-outline" class="edit-icon" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" onclick="showPasswordFields()"></ion-icon>
                                        </div>
                                    </li>
                                    <div id="newPasswordFields"></div>                                    
                                    <br>
                                    <li><h5>PERUBAHAN AKUN<h2></li>
                                    <li>
                                        <p class="Grey">Segala perubahan di datamu akan tersimpan ke database secara permanen,tidak ada backup data<br> harap periksa setiap data dengan benar !!</p>
                                    </li>
                                    <li>
                                        <button type="submit" value="submit" class="btn btn-primary">Simpan Data</button>
                                    </li>
                                </ul>
                              </form>
                                
                              
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
</body>

</html>