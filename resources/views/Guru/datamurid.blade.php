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
    <title>Data Murid (Guru)</title>
</head>

<body>
    @if(Session::has('berhasil'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Menambah Murid!',
            text: '{{ Session::get("success") }}',
            showConfirmButton: true, 
            timer: 2000 
        });
    </script>
    @endif
     <!-- ========================= SideBar ==================== -->
     @include('Layout/Guru/sidebar')
     <!-- ========================= Main ==================== -->
     @include('Layout/Guru/main')

            <!-- ================ Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Data Murid</h2>   
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Murid</button>   
                    </div>

                    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Murid</h5>
                             </div>
                             <div class="modal-body">
                              <form method="Post" action="{{route('Addmurid')}}" onsubmit="return validateForm()">
                               @csrf
                                <div class="form-group custom-form-group">
                                    <label for="nik" class="custom-label">NIK :</label>
                                    <input type="text" class="form-control custom-input" id="nik" placeholder="Masukkan NIK Murid" name="nik"  pattern="[0-9]" title="NIK harus terdiri dari 12 angka" oninput="allowNumbersOnly(event)">
                                    <p class="RandText">NIK Boleh dikosongkan</p>
                                </div>
                                <div class="form-group custom-form-group">
                                    <label for="nama" class="custom-label">Nama :</label>
                                    <input type="text" class="form-control custom-input" id="nama" placeholder="Masukkan Nama Murid" name="nama" required>
                                </div>
                                <div class="form-group custom-form-group">
                                    <label for="tanggal_Lahir" class="custom-label">Tanggal Lahir :</label>
                                    <input type="date" class="form-control custom-input" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Murid" name="tanggal_lahir">
                                    <p class="RandText">Tanggal lahir Boleh dikosongkan</p>
                                </div>
                                <div class="form-group custom-form-group">
                                    <label for="gender" class="custom-label">Gender</label>
                                    <select class="form-control custom-select" id="gender" name="jenis_kelamin" required>
                                        <option selected disabled>Pilih Gender Murid</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group custom-form-group">
                                    <label for="no_hp" class="custom-label">No Handphone :</label>
                                    <input type="text" class="form-control custom-input" oninput="allowNumbersOnly(event)" id="no_hp" placeholder="Masukkan Nomor Handphone Murid" name="no_hp" pattern="[0-9]{12}" title="Masukkan Nomor Hp Yang Valid">
                                    <p class="RandText">No Handphone Boleh dikosongkan</p>
                                </div>
                                <input type="hidden" name="id_guru" value="{{$Gurume->id}}">
                            </div>
                             <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                         </div>
                        </form>
                     </div>
                 </div>
             </div>

             @if($Muridall->where('id_guru', $Gurume->id)->isEmpty())
             <div class="middle">
                 <div class="no-data-container">
                     <ion-icon name="thumbs-down-outline" class="icon-nodata"></ion-icon>
                     <h4> Tidak Ada Data </h4>
                 </div>
             </div>
             @else
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>Gender</td>
                                <td>Tanggal Daftar</td>
                                <td>Status</td>
                                <td><td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($Muridall->where('id_guru', $Gurume->id) as $A)
                            
                            <tr>
                                <td>{{ $A->nama }}</td>
                                <td>{{ $A->nik }}</td>
                                <td>{{ $A->jenis_kelamin }}</td>
                                <td>{{ $A->created_at }}</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td>
                                    <form method="POST" action="{{ route('Removemurid') }}" data-id="{{ $A->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="murid_id" value="{{ $A->id }}">
                                        <div type="button" class="delete-icon" data-id="{{ $A->id }}"><ion-icon name="trash-outline"></ion-icon></div>
                                        <button type="submit" class="btn-hapus" style="display: none;">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach 
                        
                        </tbody>
                    </table>
                </div>
                @endif
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>

     <!-- jQuery, Popper.js, and Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>