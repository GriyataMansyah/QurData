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
    <title>Daftar Dokumen BC 3.0</title>
    <script>
         function printKucing() {
            // Muat konten halaman kucing menggunakan AJAX
            fetch('{{ route('output2') }}')
                .then(response => response.text())
                .then(data => {
                    // Buat iframe tersembunyi
                    const iframe = document.createElement('iframe');
                    iframe.style.position = 'absolute';
                    iframe.style.width = '0';
                    iframe.style.height = '0';
                    iframe.style.border = 'none';
                    document.body.appendChild(iframe);

                    // Masukkan konten ke dalam iframe
                    iframe.contentDocument.open();
                    iframe.contentDocument.write(data);
                    iframe.contentDocument.close();

                    // Cetak konten dalam iframe
                    iframe.contentWindow.print();

                    // Hapus iframe setelah pencetakan selesai
                    iframe.contentWindow.onafterprint = function() {
                        document.body.removeChild(iframe);
                    };
                });
        }
    </script>
</head>

<body>
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
       <!-- ========================= SideBar ==================== -->
       @include('Layout/Guru/sidebar')
       <!-- ========================= Main ==================== -->
       @include('Layout/Guru/main')
        <!-- ================ Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Daftar Dokumen BC 3.0</h2>   
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>   
                </div>

                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                <div class="modal-content">
                     <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen</h5>
                         </div>
                         <div class="modal-body">
                          <form method="Post" action="" onsubmit="return validateForm()">
                           @csrf
                            <div class="form-group custom-form-group">
                                <label for="nik" class="custom-label">Enttias :</label>
                                <input type="text" class="form-control custom-input" id="nik" placeholder="Masukkan NIK Murid" name="entitas" value="EKSPORTIR" disabled>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="nama" class="custom-label">Jenis Pemberitahuan :</label>
                                <input type="text" class="form-control custom-input" id="nama" placeholder="Masukkan Nama Murid" name="jenis_pemberitahuan" value="Jenis Pemberitahuan" disabled>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="tanggal_Lahir" class="custom-label">Asal Barang :</label>
                                <input type="date" class="form-control custom-input" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Murid" name="asal_barang" value="Kawasan Pabean" disabled>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="gender" class="custom-label">Tujuan Barang :</label>
                                <select class="form-control custom-select" id="gender" name="tujuan_barang" value="Luar Daerah Pabean" disabled>
                                    <option selected disabled>Pilih Gender Murid</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="no_hp" class="custom-label">Jenis Dokumen :</label>
                                <input type="text" class="form-control custom-input" value="BC 3.0" name="jenis_dokumen" disabled>
                            </div>
                            <input type="hidden" name="id_guru" value="">
                        </div>
                         <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <a href="{{route('guru/form')}}" class="btn btn-primary">Simpan</a>
                     </div>
                    </form>
                 </div>
             </div>
         </div>

         @if($Form->isEmpty())
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
                     <td>Seri</td>
                     <td>Dokumen</td>
                     <td>Nomor Pengajuan</td>
                     <td>Nama Responden</td>
                     <td>Kantor Pabean</td>
                     <td>Tujuan Pabean</td>
                     <td>Status</td>
                     <td></td>
                 </tr>
             </thead>
     
             <tbody>
                 @foreach($Form as $a)
                     <tr>
                         <td>{{ $a->id }}</td>
                         <td>BC 3.0</td> <!-- Menggunakan data dari model -->
                         <td>
                            <div type='submit' onclick="printKucing()">{{ $a->nomor}}</form></div></td> <!-- Menggunakan data dari model -->
                         <td>EKSPORTIR</td> <!-- Menggunakan data dari model -->
                         <td>{{ $a->kantor_pabean_muat_asal }}</td> <!-- Menggunakan data dari model -->
                         <td>{{ $a->kantor_pabean_muat_ekspor }}</td> <!-- Menggunakan data dari model -->
                         <td><span class="status {{ $form->status ?? 'pending' }}">{{ $form->status_text ?? 'Antrian' }}</span></td> <!-- Menggunakan data dari model -->
                         <td>
                             <form method="POST" action="{{route('hapusdafdok',['id' => $a->id])}}" data-id="{{ $a->id }}">
                                 @csrf
                                 @method('DELETE')
                                 <input type="hidden" name="murid_id" value="{{ $a->id }}">
                                 <div type="button" class="delete-icons" data-id="{{ $a->id }}"><ion-icon name="trash-outline"></ion-icon></div>
                                 <button type="submit" class="btn-hapus" style="display: none;">Hapus</button>
                             </form>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     @endif
     

          

    <!-- =========== Scripts =========  -->
<!-- jQuery (termasuk dalam Bootstrap bundle) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>