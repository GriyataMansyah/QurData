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
    <title>Capaian (Guru)</title>
</head>

<body>
    @if(Session::has('berhasil'))
    <script>
        console.log('SweetAlert akan muncul.');
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ Session::get("berhasil") }}',
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
                        <h2>Indikator Pencapaian</h2>   
                      
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <ion-icon name="add-circle-outline" class="BigIcon-one"></ion-icon>
                                <span style="vertical-align: top;"></span>
                            </button>
                        {{-- BUATLAH INI 2 TOMBOL JADI MENYALA ABANGKYUUUUU --}}
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalOne">
                                <ion-icon name="trash-outline" class="BigIcon-one"></ion-icon>
                                <span style="vertical-align: top;"></span>
                            </button>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Capaian</h5>
                                    </div>
                                    <div class="modal-body">
                                     <form method="Post" action="{{route('Addcapaian')}}">
                                      @csrf
                                      <button type="button" class="btn btn-primary button-two" id="addDataButton">Tambah Data</button>
                                      <input type="hidden" name="id" value="{{$Gurume->id}}">
                                      <div id="inputContainer">
                                        @foreach($capaians as $capaian)
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control custom-input-two" value="{{ $capaian->nama }}" disabled>
                                        </div>
                                        @endforeach
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
                    <div class="modal fade" id="exampleModalOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Hapus Capaian</h5>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($capaians as $capaian)
                                        <div class="d-flex align-items-center mb-2">
                                            <input type="text" class="form-control custom-input-two" value="{{ $capaian->nama }}" disabled>
                                            <form action="{{ route('capaian.hapus', ['id' => $capaian->id]) }}" method="POST" class="delete-form ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger delete-icon-two" data-id="{{ $capaian->id }}">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </button>
                                            </form>
                                        </div>
                                        @endforeach
                                    </div>
                                    <form id="hapusSemuaForm" action="{{ route('hapus.semua.capaian') }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-danger button-six" onclick="confirmDelete()">HAPUS SEMUA DATA</button>
                                    </form>
                                    <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                    <div class="cardHeader">
                        <h5>Hasil capaian, dan catatan khusus untuk murid</h5>  
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Indikator Capaian</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($Muridall as $A)
                            <tr>
                                <td>{{ $A->nama }}</td>
                                <td><a class="btn btn-primary" href="{{ route('guru/catatancapaian', $A->id) }}">Buka Catatan</a></td>
                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach                            
                        </tbody>




       <!-- =========== Scripts =========  -->
       

       <!-- ====== ionicons ======= -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       <script src="{{ asset('Js/main.js')}}"></script>
   
        <!-- jQuery, Popper.js, and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>

</html>