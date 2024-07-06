<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('Css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('Images/logo.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Data Guru (Admin)</title>
</head>

<body>
    @if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Menambah Guru!',
            text: '{{ Session::get("success") }}',
            showConfirmButton: true, 
            timer: 2000 
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
                        <h2>Data Data Guru</h2>   
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Guru</button>   
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                                    </div>
                                    <div class="modal-body">
                                     <form method="Post" action="{{route('Addguru')}}" onsubmit="return validateForm()">
                                      @csrf
                                        <div class="form-group custom-form-group">
                                           <label for="nik" class="custom-label">Username:</label>
                                           <input type="text" class="form-control custom-input" id="username" placeholder="Masukkan Username Guru" name="username" required>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="nik" class="custom-label">Password :</label>
                                           <input type="text" class="form-control custom-input" id="password" placeholder="Masukkan Password Guru" name="password" required>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="nik" class="custom-label">NIK :</label>
                                           <input type="text" class="form-control custom-input" id="nik" placeholder="Masukkan NIK Guru" name="nik"  pattern="[0-9]{12}" title="NIK harus terdiri dari 12 angka" oninput="allowNumbersOnly(event)" required>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="nama" class="custom-label">Nama :</label>
                                           <input type="text" class="form-control custom-input" id="nama" placeholder="Masukkan Nama Guru" name="nama" required>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="tanggal_Lahir" class="custom-label">Tanggal Lahir :</label>
                                           <input type="date" class="form-control custom-input" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Guru" name="tanggal_lahir" required>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="gender" class="custom-label">Gender</label>
                                           <select class="form-control custom-select" id="genderguru" name="jenis_kelamin" required>
                                               <option selected disabled>Pilih Gender Guru</option>
                                               <option value="Laki - Laki">Laki - Laki</option>
                                               <option value="Perempuan">Perempuan</option>
                                           </select>
                                       </div>
                                       <div class="form-group custom-form-group">
                                           <label for="no_hp" class="custom-label">No Handphone :</label>
                                           <input type="text" class="form-control custom-input" oninput="allowNumbersOnly(event)" id="no_hp" placeholder="Masukkan Nomor Handphone Guru" name="no_hp" pattern="[0-9]{11}" title="Masukkan Nomor Hp Yang Valid" required>
                                       </div>
                                   </div>
                                    <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                   <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>NIM</td>
                                <td>Gender</td>
                                <td>Tanggal Daftar</td>
                                <td>Status</td>
                                <td><td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($Guruall as $a)
                            <tr>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->nik}}</td>
                                <td>{{$a->no_hp}}</td>
                                <td>{{$a->tanggal_lahir}}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

     <!-- =========== Scripts =========  -->
     <script src="{{ asset('Js/main.js')}}"></script>

     <!-- ====== ionicons ======= -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
      <!-- jQuery, Popper.js, and Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>

</html>