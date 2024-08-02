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
    <script src="{{ asset('Js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Daftar Dokumen BC 3.0</title>
</head>

<body>
       <!-- ========================= SideBar ==================== -->
       @include('Layout/Guru/sidebar')
       <!-- ========================= Main ==================== -->
       @include('Layout/Guru/main')
        <!-- ================ HEADER ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Header</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                        <form method="POST" action="{{route('addForm')}}">
                            @csrf
                            
                            <tr>
                                <td><p>Nomor Pengajuan</p></td>
                                <td><input class="form-control custom-textarea" name="nomor" id="nomor-input" readonly></input></td>
                            </tr>
                            <tr>
                                <td><p>Kantor Pabean Muat Asal</p></td>
                                <td>
                                        <select 
                                            name="kantor_pabean_muat_asal" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Pelabuhan Muat Ekspor</p></td>
                                <td>
                                        <select 
                                            name="pelabuhan_muat_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kantor Pabean Muat Ekspor</p></td>
                                <td>
                                        <select 
                                            name="kantor_pabean_muat_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Ekspor</p></td>
                                <td>
                                        <select 
                                            name="jenis_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kategori Ekspor</p></td>
                                <td>
                                        <select 
                                            name="kategori" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Cara Dagang</p></td>
                                <td>
                                        <select 
                                            name="cara_dagang" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Cara Bayar</p></td>
                                <td>
                                        <select 
                                            name="cara_bayar" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Komoditi</p></td>
                                <td>
                                        <select 
                                            name="komoditi" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Curah</p></td>
                                <td>
                                        <select 
                                            name="curah" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>

                        </td>
                    </table>
            </div>

             <!-- ================ ENTITAS ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Entitas</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                            <tr>
                                <td><p>Nama Eksportir Item Ekspor</p></td>
                                <td><input class="form-control custom-textarea" name="nama_eksportir"></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Eksportir</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_eksportir"></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama Penerima</p></td>
                                <td><input class="form-control custom-textarea" name="nama_penerima"></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Penerima</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_penerima"></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama Pembeli</p></td>
                                <td><input class="form-control custom-textarea" name="nama_pembeli"></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Pembeli</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_pembeli"></input></td>
                            </tr>
                    </table>
            </div>

               <!-- ================ KEMASAN DAN PETI KEMAS ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Kemasan Dan Peti Kemas</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                            <tr>
                                <td><p>Seri Kemasan & Peti Kemas</p></td>
                                <td><input class="form-control custom-textarea" name="seri_kemasan"></input></td>
                            </tr>
                            <tr>
                                <td><p>Jumlah Kemasan</p></td>
                                <td>
                                        <select 
                                            name="jumlah_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Kemasan</p></td>
                                <td>
                                        <select 
                                            name="jenis_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Merek Kemasan</p></td>
                                <td>
                                        <select 
                                            name="merek_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Ukuran Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="ukuran_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="jenis_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Type Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="type_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                    </table>
            </div>

            <!-- ================ TRANSAKSI ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Transaksi</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                            <tr>
                                <td><p>Valuta</p></td>
                                <td>
                                        <select 
                                            name="valuta" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>NDPMB</p></td>
                                <td><input name ="ndpmb" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Cara Penyerahan</p></td>
                                <td>
                                        <select 
                                            name="cara_penyerahan" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Nilai Ekspor</p></td>
                                <td>
                                        <select 
                                            name="nilai_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Freigh</p></td>
                                <td>
                                        <select 
                                            name="freight" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Asuransi</p></td>
                                <td>
                                        <select 
                                            name="asuransi" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Nilai Maklan</p></td>
                                <td>
                                        <select 
                                            name="nilai_maklan" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Nilai Bea Keluar Dokumen</p></td>
                                <td>
                                        <select 
                                            name="nilai_bea_keluar" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                    </table>
            </div>

             <!-- ================ BARANG ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Barang</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                            <tr>
                                <td><p>HS</p></td>
                                <td>
                                        <select 
                                            name="hs" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Lartas</p></td>
                                <td>
                                        <select 
                                            name="lartas" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kode</p></td>
                                <td>
                                        <select 
                                            name="kode" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Uraian</p></td>
                                <td><input name="uraian" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Mark</p></td>
                                <td><input name="mark" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Tipe</p></td>
                                <td><input name="tipe" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Ukuran</p></td>
                                <td><input name="ukuran" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Negara Asal Barang</p></td>
                                <td>
                                        <select 
                                            name="negara_asal_barang" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Harga FOB</p></td>
                                <td><input name="harga_fob" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Volume Barang Ekspor 3.0</p></td>
                                <td><input name="volume_barang" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Berat Bersih</p></td>
                                <td><input name="berat_bersih" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Berat Kotor</p></td>
                                <td><input name="berat_kotor" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Harga Satuan FOB</p></td>
                                <td><input name="harga_satuan_fob" class="form-control custom-textarea" ></input></td>
                            </tr>
                    </table>
            </div>

                  <!-- ================ Pernyataan ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Formulir Dokumen BC 3.0 - Pernyataan</h2>   
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Dokumen</button>    --}}
                </div>

                <table id="dataTable">
                    <tbody>        
                            <tr>
                                <td><p>Tempat Penerima Barang</p></td>
                                <td><input name="tempat_penerima" class="form-control custom-textarea" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Tanggal</p></td>
                                <td><input type="date" class="form-control custom-textarea" name="tanggal" ></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama</p></td>
                                <td><input class="form-control custom-textarea" name="nama"></input></td>
                            </tr>
                            <tr>
                                <td><p>Jabatan</p></td>
                                <td><input class="form-control custom-textarea" name="jabatan"></input></td>
                            </tr>
                    </table>

                    <input value="{{$Gurume->id}}" name="id_guru" type="hidden">
            </div>
            <a class="submitbesar btn btn-primary" id="tanyak">SUBMIT</a>
            <button value="submit" type="hidden" id="tanyak2" class="hidden">a</button>
          </form>

    <!-- =========== Scripts =========  -->
<!-- jQuery (termasuk dalam Bootstrap bundle) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
</body>

</html>