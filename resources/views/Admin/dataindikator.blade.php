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
    <title>Data Indikator (Admin)</title>
</head>

<body>
    @if(Session::has('berhasil'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ Session::get("berhasil") }}',
            showConfirmButton: true,
            timer: 2000
        });
    </script>
    @elseif(Session::has('gagal'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ Session::get("gagal") }}',
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
                        <h2>Data Indikator</h2>   
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <ion-icon name="add-circle-outline" class="BigIcon-one"></ion-icon>
                            <span style="vertical-align: top;"></span>
                        </button>
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
                                      <div id="inputContainer">
                                        <input type="hidden" name="id" value="{{$Admin->id}}"></input>
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
                    
                    @if($data->isEmpty())
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
                                <th>No</th>
                                <th>Nama Data Indikator</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $C)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><input class="input-from form-control input-style" value="{{ $C->nama }}" readonly></td>
                                    <td class="centered-buttons">
                                        
                                        <button id="visible-{{ $C->id }}" class="btn btn-primary prim" onclick="tambahInput({{ $C->id }})"> 
                                            <ion-icon name="create-outline" class="BigIcon-two"></ion-icon>
                                            <span style="vertical-align: top;">Ubah Data Indikator</span>
                                        </button>
                                
                                        <div id="change-{{ $C->id }}" class="ChangeVis">
                                            <form action="{{ route('editcapaian', ['id' => $C->id] )}}" method="GET">
                                                @csrf
                                                <input type="text" name="nama" class="form-control ChangeVisButton" placeholder="Masukkan Data Baru">
                                                <button type="submit" value="submit" class="btn btn-success prim ChangeVisButtonTwo">
                                                    <ion-icon name="save-outline" class="BigIcon-two"></ion-icon>
                                                    <span style="vertical-align: top;">Simpan</span>
                                                </button>
                                            </form>
                                        </div>

                                        <form action="{{ route('hapuscapaian', ['id' => $C->id]) }}" method="POST" class="delete-form ml-2">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <ion-icon name="trash-outline" class="BigIcon-two"></ion-icon>
                                            <span style="vertical-align: top;">Hapus Data Indikator {{$C->id}}</span>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>       
                    @endif
                    

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