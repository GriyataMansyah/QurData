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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Data Master Petugas</title>
</head>

<body>
    @if (session('berhasil'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('berhasil') }}',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
       <!-- ========================= SideBar ==================== -->
       @include('Layout/Admin/sidebar')
       <!-- ========================= Main ==================== -->
       @include('Layout/Admin/main')

           

           <!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Daftar Data Master</h2>                   
        </div>
        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <a class="card card2" id="header1">
                <div>
                    <div class="numbers">9</div>
                    <div class="cardName">Data Header</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>
            <!-- Tambahkan ID yang sesuai untuk setiap card -->
            <div class="card" id="alert2">
                <div>
                    <div class="numbers">9</div>
                    <div class="cardName">Data Entitas</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="finger-print-outline"></ion-icon>
                </div>
            </div>
            <div class="card" id="alert3">
                <div>
                    <div class="numbers">7</div>
                    <div class="cardName">Data Kemasan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="folder-open-outline"></ion-icon>
                </div>
            </div>
            <div class="card" id="alert4">
                <div>
                    <div class="numbers">7</div>
                    <div class="cardName">Data Peti Kemas</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="albums-outline"></ion-icon>
                </div>
            </div>
            <div class="card" id="alert5">
                <div>
                    <div class="numbers">8</div>
                    <div class="cardName">Transaksi</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="file-tray-full-outline"></ion-icon>
                </div>
            </div>
            <a class="card" id="alert6">
                <div>
                    <div class="numbers">13</div>
                    <div class="cardName">Barang</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="podium-outline"></ion-icon>
                </div>
            </a>
            <div class="card" id="alert7">
                <div>
                    <div class="numbers">0</div>
                    <div class="cardName">Pernyataan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="clipboard-outline"></ion-icon>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================ Header ================= -->
<div class="details hidden" id="header1-header">
    <button class="back-btn">Kembali</button>
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Data Master - Header</h2>      
        </div>

        <div class="cardBox">
            <a class="cards" data-toggle="modal" data-target="#exampleModal">
                <div>
                    <div class="numbers">1</div>
                    <div class="cardName">Kantor Pabean Muat Asal</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>
            

            <a class="cards" data-toggle="modal" data-target="#exampleModal">
                <div>
                    <div class="numbers">2</div>
                    <div class="cardName">Pelabuhan Muat Ekspor</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" data-toggle="modal" data-target="#exampleModal">
                <div>
                    <div class="numbers">3</div>
                    <div class="cardName">Kantor Pabean Muat Ekspor</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert13">
                <div>
                    <div class="numbers">4</div>
                    <div class="cardName">Jenis Ekspor</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert14">
                <div>
                    <div class="numbers">5</div>
                    <div class="cardName">Kategori Ekspor</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert11">
                <div>
                    <div class="numbers">6</div>
                    <div class="cardName">Cara Dagang</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert10">
                <div>
                    <div class="numbers">7</div>
                    <div class="cardName">Cara Bayar</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert9">
                <div>
                    <div class="numbers">8</div>
                    <div class="cardName">Komoditi</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>

            <a class="cards" id="alert8">
                <div>
                    <div class="numbers">9</div>
                    <div class="cardName">Curah</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
            </a>
        </div>

        

    </div>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Capaian</h5>
            </div>
            <div class="modal-body">
                <!-- Form Utama -->
                <form method="POST" action="{{ route('kantorpabeanmuatasal') }}">
                    @csrf
                    <button type="button" class="btn btn-primary button-two" id="addDataButton">Tambah Data</button>
                    <br>
                    @foreach ($Kantor as $A)
                        <div class="input-group awh">
                            <input type="text" class="form-control custom-input" name="existing_data[{{$A->id}}]" value="{{$A->nama}}">
                            <button type="button" class="btn btn-danger delete-icon" data-id="{{$A->id}}" data-name="{{$A->nama}}">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    @endforeach

                    <div id="inputContainer"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

                <!-- Form Penghapusan -->
                <form id="deleteForm" method="POST" action="" style="display: none;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="deleteId" name="delete_id">
                </form>
            </div>
        </div>
    </div>
</div>





 
    <!-- =========== Scripts =========  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="{{ asset('Js/main.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>