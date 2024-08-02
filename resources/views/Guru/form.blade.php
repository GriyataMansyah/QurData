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
                                    <select name="kantor_pabean_muat_asal" class="form-control custom-textarea">
                                        <option selected disabled>Pilih Kantor Pabean Muat Ekspor</option>
                                        @foreach ($Kantor as $kantor)
                                            <option value="{{ $kantor->id }}">{{ $kantor->nama }}</option>
                                        @endforeach
                                    </select>   
                                </td>
                            </tr>
                            <tr>
                                <td><p>Pelabuhan Muat Ekspor</p></td>
                                <td>
                                        <select 
                                            name="pelabuhan_muat_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled> Pilih Pelabuhan Muat Ekspor ...</option>
                                        @foreach ($Kantor as $kantor)
                                            <option value="{{ $kantor->id }}">{{ $kantor->nama }}</option>
                                        @endforeach
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kantor Pabean Muat Ekspor</p></td>
                                <td>
                                        <select 
                                            name="kantor_pabean_muat_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Kantor Paeban Muat Ekspor ...</option>
                                            @foreach ($Kantor as $kantor)
                                                <option value="{{ $kantor->id }}">{{ $kantor->nama }}</option>
                                            @endforeach
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Ekspor</p></td>
                                <td>
                                        <select 
                                            name="jenis_ekspor" class="form-control custom-textarea" >

                                                <option selected disabled>Pilih jenis Ekspor ...</option>
                                                <option value="Langsung">Ekspor Langsung</option>
                                                <option value="Tidak Langsung">Ekspor Tidak Langsung</option>
                                                <option value="Konsinyasi">Ekspor Konsinyasi</option>
                                                <option value="Modal">Ekspor Modal</option>
                                                <option value="Konsumsi">Ekspor Barang Konsumsi</option>
                                                <option value="Sumber Daya">Ekspor Sumber Daya Alam</option>
                                                <option value="Produk Olahan">Ekspor Produk Olahan</option>
                                                <option value="Jasa">Ekspor Jasa</option>
                                                <option value="Kontrak">Ekspor Dengan Kontrak</option>
                                                <option value="Leased Goods">Ekspor Leased Goods</option>
                                            </select>
   
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kategori Ekspor</p></td>
                                <td>
                                        <select 
                                            name="kategori" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Kategori Ekspor ...</option>
                                            <option value="Barang Konsumsi">Barang Konsumsi</option>
                                            <option value="Barang Modal">Barang Modal</option>
                                            <option value="Bahan Mentah">Bahan Mentah</option>
                                            <option value="Produk Olahan">Produk Olahan</option>
                                            <option value="Jasa">Jasa</option>
                                            <option value="Produk Semi Kelautan">Produk Semi-Kelautan</option>
                                            <option value="Produk Farmasi">Produk Farmasi</option>
                                            <option value="Produk Tekstil">Produk Tekstil</option>
                                            <option value="Produk Kimia">Produk Kimia</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Cara Dagang</p></td>
                                <td>
                                        <select 
                                            name="cara_dagang" class="form-control custom-textarea" >
                                           
                                            
                                                <option selected disabled>Pilih cara dagang ...</option>
                                                <option value="Langsung">Ekspor Langsung</option>
                                                <option value="Tidak Langsung">Ekspor Tidak Langsung</option>
                                                <option value="Konsinyasi">Ekspor Konsinyasi</option>
                                                <option value="Modal">Ekspor Modal</option>
                                                <option value="Leased Goods">Ekspor Leased Goods</option>
                                            </select>
  
                                </td>
                            </tr>
                            <tr>
                                <td><p>Cara Bayar</p></td>
                                <td>
                                        <select 
                                            name="cara_bayar" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Cara Bayar ...</option>
                                            <option value="Prepaid">Pembayaran di Muka</option>
                                            <option value="Lc">Letter of Credit (L/C)</option>
                                            <option value="Be">Bill of Exchange (B/E)</option>
                                            <option value="Deferred Payment">Cek Tertunda (Deferred Payment)</option>
                                            <option value="Cash">Pembayaran Tunai</option>
                                            <option value="Open Account">Pembayaran Terbuka (Open Account)</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Komoditi</p></td>
                                <td>
                                        <select 
                                            name="komoditi" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Komoditi ...</option>
                                            <option value="Pertanian">Pertanian</option>
                                            <option value="Perikanan">Perikanan</option>
                                            <option value="Mineral">Mineral</option>
                                            <option value="Energi">Energi</option>
                                            <option value="Manufaktur">Manufaktur</option>
                                            <option value="Tekstil">Tekstil</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Logam">Logam</option>
                                            <option value="Produk Olahan">Produk Olahan</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Curah</p></td>
                                <td>
                                        <select 
                                            name="curah" class="form-control custom-textarea" >
                                            <option selected disabled class="blackm">Pilih Curah ...</option>
                                            <option class="" value="Curah">Curah</option>
                                            <option class="" value="Non Curah">Non Curah</option>
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
                                <td><input class="form-control custom-textarea" name="nama_eksportir" placeholder="Masukkan Nama Eksportir ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Eksportir</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_eksportir" placeholder="Masukkan Alamat Eksportir ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama Penerima</p></td>
                                <td><input class="form-control custom-textarea" name="nama_penerima" placeholder="Masukkan Nama Penerima ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Penerima</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_penerima" placeholder="Masukkan Alamat Penerima ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama Pembeli</p></td>
                                <td><input class="form-control custom-textarea" name="nama_pembeli" placeholder="Masukkan Nama Pembeli ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Alamat Pembeli</p></td>
                                <td><input class="form-control custom-textarea" name="alamat_pembeli" placeholder="Masukkan Alamat Pembeli ..."></input></td>
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
                                <td><input class="form-control custom-textarea" name="seri_kemasan" placeholder="Masukkan Seri Kemasan ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Jumlah Kemasan</p></td>
                                <td>
                                        <select 
                                            name="jumlah_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Jumlah Kemasan ...</option>
                                            <option class="" value="2">2</option>
                                            <option class="" value="3">3</option>
                                            <option class="" value="4">4</option>
                                            <option class="" value="5">5</option>
                                            <option class="" value="6">6</option>
                                            <option class="" value="7">7</option>
                                            <option class="" value="8">8</option>
                                            <option class="" value="9">9</option>
                                            <option class="" value="10+">10+</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Kemasan</p></td>
                                <td>
                                        <select 
                                            name="jenis_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Jenis Kemasan ...</option>
                                            <option value="Karton">Karton</option>
                                            <option value="Plastik">Plastik</option>
                                            <option value="Kaca">Kaca</option>
                                            <option value="Logam">Logam</option>
                                            <option value="Paperboard">Paperboard</option>
                                            <option value="Wood">Kayu</option>
                                            <option value="Fiber">Serat</option>
                                            <option value="Custom">Kustom</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Merek Kemasan</p></td>
                                <td>
                                        <select 
                                            name="merek_kemasan" class="form-control custom-textarea" >
                                            <option selected disabled>Pilihlah Merk Kemasan ...</option>
                                            <option value="abc_packaging">ABC Packaging</option>
                                            <option value="def_packaging">DEF Packaging</option>
                                            <option value="ghi_packaging">GHI Packaging</option>
                                            <option value="jkl_packaging">JKL Packaging</option>
                                            <option value="mno_packaging">MNO Packaging</option>
                                            <option value="pqr_packaging">PQR Packaging</option>
                                            <option value="stu_packaging">STU Packaging</option>
                                            <option value="vwx_packaging">VWX Packaging</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Ukuran Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="ukuran_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Ukuran Peti Kemas </option>
                                            <option value="20ft">20 Feet</option>
                                            <option value="40ft">40 Feet</option>
                                            <option value="40hc">40 Feet High Cube</option>
                                            <option value="45ft">45 Feet</option>
                                            <option value="48ft">48 Feet</option>
                                            <option value="53ft">53 Feet</option>
                                            <option value="10ft">10 Feet (Small)</option>
                                            <option value="30ft">30 Feet</option>
                                            <option value="50ft">50 Feet</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Jenis Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="jenis_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Jenis Peti Kemas ...</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Refrigerated">Refrigerated (Reefer)</option>
                                            <option value="Open Top">Open Top</option>
                                            <option value="Flat Rack">Flat Rack</option>
                                            <option value="High Cube">High Cube</option>
                                            <option value="Tank">Tank</option>
                                            <option value="Half Height">Half Height</option>
                                            <option value="Platform">Platform</option>
                                            <option value="Insulated">Insulated</option>
                                            <option value="Ventilated">Ventilated</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Type Peti Kemas</p></td>
                                <td>
                                        <select 
                                            name="type_peti_kemas" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Type Peti Kemas ...</option>
                                            <option value="Standard">Standard Container</option>
                                            <option value="Refrigerated">Refrigerated Container (Reefer)</option>
                                            <option value="Open Top">Open Top Container</option>
                                            <option value="Flat Rack">Flat Rack Container</option>
                                            <option value="High Cube">High Cube Container</option>
                                            <option value="Tank">Tank Container</option>
                                            <option value="Half Height">Half Height Container</option>
                                            <option value="Platform">Platform Container</option>
                                            <option value="Insulated">Insulated Container</option>
                                            <option value="Ventilated">Ventilated Container</option>
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
                                            <option selected disabled>Pilih Valuta ...</option>
                                            <option value="USD">USD - Dollar Amerika Serikat</option>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="JPY">JPY - Yen Jepang</option>
                                            <option value="GBP">GBP - Pound Sterling Inggris</option>
                                            <option value="AUD">AUD - Dolar Australia</option>
                                            <option value="CAD">CAD - Dolar Kanada</option>
                                            <option value="CHF">CHF - Franc Swiss</option>
                                            <option value="CNY">CNY - Yuan China</option>
                                            <option value="INR">INR - Rupee India</option>
                                            <option value="IDR">IDR - Rupiah Indonesia</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>NDPMB</p></td>
                                <td><input name ="ndpmb" class="form-control custom-textarea" placeholder="Masukkan NDPMB ..." ></input></td>
                            </tr>
                            <tr>
                                <td><p>Cara Penyerahan</p></td>
                                <td>
                                        <select 
                                            name="cara_penyerahan" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Cara Penyerahan ...</option>
                                            <option value="Door To Door">Door to Door</option>
                                            <option value="Port To Port">Port to Port</option>
                                            <option value="Port To Door">Port to Door</option>
                                            <option value="Door To Port">Door to Port</option>
                                            <option value="CIF">CIF (Cost, Insurance, and Freight)</option>
                                            <option value="FOB">FOB (Free On Board)</option>
                                            <option value="EXW">EXW (Ex Works)</option>
                                            <option value="DAP">DAP (Delivered At Place)</option>
                                            <option value="DDP">DDP (Delivered Duty Paid)</option>
                                            <option value="DPU">DPU (Delivered at Place Unloaded)</option>
                                        </select>      
                                </td>
                            </tr>
                            {{-- <tr>
                                <td><p>Nilai Ekspor</p></td>
                                <td>
                                        <select 
                                            name="nilai_ekspor" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Nilai Ekpor ...</option>
                                            <option value="fob">FOB (Free On Board)</option>
                                            <option value="cif">CIF (Cost, Insurance, and Freight)</option>
                                            <option value="cfr">CFR (Cost and Freight)</option>
                                            <option value="exw">EXW (Ex Works)</option>
                                            <option value="dap">DAP (Delivered At Place)</option>
                                            <option value="ddp">DDP (Delivered Duty Paid)</option>
                                            <option value="dpu">DPU (Delivered at Place Unloaded)</option>
                                            <option value="fca">FCA (Free Carrier)</option>
                                            <option value="cip">CIP (Carriage and Insurance Paid to)</option>
                                            <option value="dat">DAT (Delivered At Terminal)</option>
                                        </select>      
                                </td>
                            </tr> --}}
                            <tr>
                                <td><p>Nilai Ekspor</p></td>
                                <td><input class="form-control custom-textarea" name="nilai_ekspor" placeholder="Masukkan Nilai Ekspor ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Freigh</p></td>
                                <td>
                                        <select 
                                            name="freight" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Freigh ...</option>
                                            <option value="Air Freight">Air Freight</option>
                                            <option value="Sea Freight">Sea Freight</option>
                                            <option value="Land Freight">Land Freight</option>
                                            <option value="Rail Freight">Rail Freight</option>
                                            <option value="Courier">Courier</option>
                                            <option value="Express">Express</option>
                                            <option value="Intermodal">Intermodal</option>
                                            <option value="Bulk">Bulk Freight</option>
                                            <option value="Container">Container Freight</option>
                                            <option value="Parcel">Parcel Delivery</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Asuransi</p></td>
                                <td>
                                        <select 
                                            name="asuransi" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Asuransi</option>
                                            <option value="Cargo">Cargo Insurance</option>
                                            <option value="Marine">Marine Insurance</option>
                                            <option value="Air">Air Insurance</option>
                                            <option value="Land">Land Transport Insurance</option>
                                            <option value="Comprehensive">Comprehensive Insurance</option>
                                            <option value="Liability">Liability Insurance</option>
                                            <option value="Goods_in_transit">Goods In Transit Insurance</option>
                                            <option value="Property">Property Insurance</option>
                                            <option value="General">General Insurance</option>
                                        </select>      
                                </td>
                            </tr>
                            {{-- <tr>
                                <td><p>Nilai Maklan</p></td>
                                <td>
                                        <select 
                                            name="nilai_maklan" class="form-control custom-textarea" >
                                            <option value="free_on_board">Free On Board (FOB)</option>
                                            <option value="cost_insurance_freight">Cost, Insurance, and Freight (CIF)</option>
                                            <option value="cost_and_freight">Cost and Freight (CFR)</option>
                                            <option value="ex_works">Ex Works (EXW)</option>
                                            <option value="delivered_at_place">Delivered At Place (DAP)</option>
                                            <option value="delivered_duty_paid">Delivered Duty Paid (DDP)</option>
                                            <option value="delivered_at_terminal">Delivered At Terminal (DAT)</option>
                                            <option value="carriage_and_insurance_paid">Carriage and Insurance Paid (CIP)</option>
                                            <option value="free_carrier">Free Carrier (FCA)</option>
                                            <option value="delivered_duty_paid">Delivered Duty Paid (DDP)</option>
                                        </select>      
                                </td>
                            </tr> --}}
                            <tr>
                                <td><p>Nilai Maklan</p></td>
                                <td><input class="form-control custom-textarea" name="nilai_maklan" placeholder="Masukkan Nilai Maklan ..."></input></td>
                            </tr>
                            {{-- <tr>
                                <td><p>Nilai Bea Keluar Dokumen</p></td>
                                <td>
                                        <select 
                                            name="nilai_bea_keluar" class="form-control custom-textarea" >
                                            <option selected disabled></option>
                                            <option class="" value="Tercapai">Batu merah</option>
                                            <option class="" value="Tidak">Batu Ampar</option>
                                        </select>      
                                </td>
                            </tr> --}}
                            <tr>
                                <td><p>Nilai Bea Keluar Dokumen BC</p></td>
                                <td><input class="form-control custom-textarea" name="nilai_bea_keluar" placeholder="Masukkan Nilai Bea Keluar ..."></input></td>
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
                                            <option selected disabled>Pilih HS Code ...</option>
                                            <option value="0101">0101 - Cattle</option>
                                            <option value="0102">0102 - Live Sheep and Goats</option>
                                            <option value="0201">0201 - Meat of Bovine Animals</option>
                                            <option value="0202">0202 - Meat of Sheep or Goats</option>
                                            <option value="0301">0301 - Fish, Live</option>
                                            <option value="0302">0302 - Fish, Fresh or Chilled</option>
                                            <option value="0401">0401 - Milk and Cream, Fresh</option>
                                            <option value="0402">0402 - Milk and Cream, Not Concentrated</option>
                                            <option value="0501">0501 - Human Hair</option>
                                            <option value="0502">0502 - Animal Hair</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Lartas</p></td>
                                <td>
                                        <select 
                                            name="lartas" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Lartas ...</option>
                                            <option value="Dilarang">Dilarang</option>
                                            <option value="Pembatasan">Pembatasan</option>
                                            <option value="Izin">Memerlukan Izin</option>
                                            <option value="Standar">Standar</option>
                                            <option value="Dokumen">Dokumen Khusus</option>
                                            <option value="Karantina">Karantina</option>
                                            <option value="Pajak">Pajak Ekspor/Impor</option>
                                            <option value="Bebas">Bebas</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Kode</p></td>
                                <td>
                                        <select 
                                            name="kode" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Kode ...</option>
                                            <option value="A001">A001 - Elektronik</option>
                                            <option value="A002">A002 - Perabot Rumah Tangga</option>
                                            <option value="A003">A003 - Pakaian</option>
                                            <option value="B001">B001 - Makanan dan Minuman</option>
                                            <option value="B002">B002 - Kosmetik</option>
                                            <option value="C001">C001 - Alat Kesehatan</option>
                                            <option value="C002">C002 - Obat-obatan</option>
                                            <option value="D001">D001 - Peralatan Olahraga</option>
                                            <option value="D002">D002 - Perlengkapan Mobil</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Uraian</p></td>
                                <td><input name="uraian" class="form-control custom-textarea" placeholder="Masukkan Uraian ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Mark</p></td>
                                <td><input name="mark" class="form-control custom-textarea" placeholder="Masukkan Mark ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Tipe</p></td>
                                <td><input name="tipe" class="form-control custom-textarea" placeholder="Masukkan Type ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Ukuran</p></td>
                                <td><input name="ukuran" class="form-control custom-textarea" placeholder="Masukkan Ukuran ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Negara Asal Barang</p></td>
                                <td>
                                        <select 
                                            name="negara_asal_barang" class="form-control custom-textarea" >
                                            <option selected disabled>Pilih Negara Asal Barang ...</option>
                                            <option class="" value="Indonesia">Indonesia</option>
                                        </select>      
                                </td>
                            </tr>
                            <tr>
                                <td><p>Harga FOB</p></td>
                                <td><input name="harga_fob" class="form-control custom-textarea" placeholder="Masukkan Harga FOB ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Volume Barang Ekspor 3.0</p></td>
                                <td><input name="volume_barang" class="form-control custom-textarea" placeholder="Masukkan Volume Barang Ekspor ..." ></input></td>
                            </tr>
                            <tr>
                                <td><p>Berat Bersih</p></td>
                                <td><input name="berat_bersih" class="form-control custom-textarea" placeholder="Masukkan Berat Bersih ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Berat Kotor</p></td>
                                <td><input name="berat_kotor" class="form-control custom-textarea" placeholder="Masukkan Berat Kotor ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Harga Satuan FOB</p></td>
                                <td><input name="harga_satuan_fob" class="form-control custom-textarea" placeholder="Masukkan Harga Satuan FOB ..."></input></td>
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
                                <td><input name="tempat_penerima" class="form-control custom-textarea" placeholder="Masukkan Tmepat Penerima Barang ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Tanggal</p></td>
                                <td><input type="date" class="form-control custom-textarea" name="tanggal" placeholder="Masukkan Tanggal Penerimaan ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Nama</p></td>
                                <td><input class="form-control custom-textarea" name="nama" placeholder="Masukkan Nama Penerima Barang ..."></input></td>
                            </tr>
                            <tr>
                                <td><p>Jabatan</p></td>
                                <td><input class="form-control custom-textarea" name="jabatan" placeholder="Masukkan Jabatan Penerima ..."></input></td>
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