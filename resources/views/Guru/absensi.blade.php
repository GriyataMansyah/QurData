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
    <title>Data Absensi (Guru)</title>
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
                        <h2>Absensi Murid</h2>    
                    </div>

                    
                    @if($muridAll->isEmpty())
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
                                <form action="{{ route('guru/absensi') }}" method="GET">
                                    <td colspan="3">
                                        Bulan 
                                        <select name="bulan" class="margin">
                                            <option selected disabled>...</option>
                                            <option value="Januari" {{ request('bulan') == 'Januari' ? 'selected' : '' }}>Januari</option>
                                            <option value="Februari" {{ request('bulan') == 'Februari' ? 'selected' : '' }}>Februari</option>
                                            <option value="Maret" {{ request('bulan') == 'Maret' ? 'selected' : '' }}>Maret</option>
                                            <option value="April" {{ request('bulan') == 'April' ? 'selected' : '' }}>April</option>
                                            <option value="Mei" {{ request('bulan') == 'Mei' ? 'selected' : '' }}>Mei</option>
                                            <option value="Juni" {{ request('bulan') == 'Juni' ? 'selected' : '' }}>Juni</option>
                                            <option value="Juli" {{ request('bulan') == 'Juli' ? 'selected' : '' }}>Juli</option>
                                            <option value="Agustus" {{ request('bulan') == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                            <option value="September" {{ request('bulan') == 'September' ? 'selected' : '' }}>September</option>
                                            <option value="Oktober" {{ request('bulan') == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                            <option value="November" {{ request('bulan') == 'November' ? 'selected' : '' }}>November</option>
                                            <option value="Desember" {{ request('bulan') == 'Desember' ? 'selected' : '' }}>Desember</option>
                                        </select>
                                        Tahun
                                        <select name="tahun">
                                            <option selected disabled>...</option>
                                            @php
                                                $startYear = 2024;
                                                $currentYear = date('Y');
                                            @endphp
                                            @for ($year = $startYear; $year <= $currentYear + 1; $year++)
                                                <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                                                    {{ $year }}
                                                </option>
                                            @endfor
                                        </select>
                                        <button type="submit" class="btn btn-primary filterButton">Filter</button>
                                    </td>
                                </form>
                                    
                                </td>
                            </tr>

                            <form method="post" action="{{route('simpanAbsensi')}}" id="formSubmit"> 
                                @csrf
                              <input type="hidden" value="{{$tahun}}" name="tahun">
                              <input type="hidden" value="{{$bulan}}" name="bulan">
                               @if($tahun && $bulan)
                            <tr>
                                
                                <td>Nama</td>
                                <td class="offside"><p class="text-one">Minggu 1</p></td>
                                <td class="offside"><p class="text-one">Minggu 2</p></td>
                                <td class="offside"><p class="text-one">Minggu 3</p></td>
                                <td class="offside"><p class="text-one">Minggu 4</p></td>
                                <td>Status</td>
                            </tr>
                        </thead>
                           
                        <tbody>
                            
                             
                                @foreach ($muridAll->where('id_guru', $Gurume->id) as $A)
                                <tr>
                                    <td>{{ $A->nama }}</td>
                                    <input type="hidden" value="{{$A->id}}" name="id_murid[]">
                                    <input type="hidden" value="{{$Gurume->id}}" name="id_guru[]">
                                
                                    <td class="middle_two">                        
                                        @if($tampilkanAbsensi->has($A->id))
                                            <?php $absensiMurid = $tampilkanAbsensi[$A->id]->first(); ?>
                                            @if($absensiMurid->minggu1)
                                                <select id="minggu1" name="minggu1[]" onchange="updateSelectColor(this)">
                                                    <option value="{{ $absensiMurid->minggu1 }}"> {{ $absensiMurid->minggu1 }}</option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                                <input type="date" name="time1" class="hidden"></td>
                                            @else
                                                <select id="minggu1" name="minggu1[]" onchange="updateSelectColor(this)">
                                                    <option></option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @endif
                                        @else
                                            <select id="minggu1" name="minggu1[]" onchange="updateSelectColor(this)">
                                                <option></option>
                                                <option class="status-hadir" value="Hadir">Hadir</option>
                                                <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                <option class="status-izin" value="izin">Izin</option>
                                            </select>
                                        @endif
                                    </td>
                        
                                    <td>
                                        @if($tampilkanAbsensi->has($A->id))
                                            <?php $absensiMurid = $tampilkanAbsensi[$A->id]->first(); ?>
                                            @if($absensiMurid->minggu2)
                                                <select id="minggu2" name="minggu2[]" onchange="updateSelectColor(this)">
                                                    <option value="{{ $absensiMurid->minggu2 }}">{{ $absensiMurid->minggu2 }}</option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @else
                                                <select id="minggu2" name="minggu2[]" onchange="updateSelectColor(this)">
                                                    <option></option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @endif
                                        @else
                                            <select id="minggu2" name="minggu2[]" onchange="updateSelectColor(this)">
                                                <option></option>
                                                <option class="status-hadir" value="Hadir">Hadir</option>
                                                <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                <option class="status-izin" value="izin">Izin</option>
                                            </select>
                                        @endif
                                    </td>
                        
                                    <td>
                                        @if($tampilkanAbsensi->has($A->id))
                                            <?php $absensiMurid = $tampilkanAbsensi[$A->id]->first(); ?>
                                            @if($absensiMurid->minggu3)
                                                <select id="minggu3" name="minggu3[]" onchange="updateSelectColor(this)">
                                                    <option value="{{ $absensiMurid->minggu3 }}">{{ $absensiMurid->minggu3 }}</option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @else
                                                <select id="minggu3" name="minggu3[]" onchange="updateSelectColor(this)">
                                                    <option></option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @endif
                                        @else
                                            <select id="minggu3" name="minggu3[]" onchange="updateSelectColor(this)">
                                                <option></option>
                                                <option class="status-hadir" value="Hadir">Hadir</option>
                                                <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                <option class="status-izin" value="izin">Izin</option>
                                            </select>
                                        @endif
                                    </td>
                        
                                    <td>
                                        @if($tampilkanAbsensi->has($A->id))
                                            <?php $absensiMurid = $tampilkanAbsensi[$A->id]->first(); ?>
                                            @if($absensiMurid->minggu4)
                                                <select id="minggu4" name="minggu4[]" onchange="updateSelectColor(this)">
                                                    <option value="{{ $absensiMurid->minggu4 }}">{{ $absensiMurid->minggu4 }}</option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @else
                                                <select id="minggu4" name="minggu4[]" onchange="updateSelectColor(this)">
                                                    <option></option>
                                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                    <option class="status-izin" value="izin">Izin</option>
                                                </select>
                                            @endif
                                        @else
                                            <select id="minggu4" name="minggu4[]" onchange="updateSelectColor(this)">
                                                <option></option>
                                                <option class="status-hadir" value="Hadir">Hadir</option>
                                                <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                                <option class="status-izin" value="izin">Izin</option>
                                            </select>
                                        @endif
                                    </td>
                        
                                    <td><span class="status delivered">AKTIF</span></td>
                                </tr>
                                @endforeach
                                <button type="submit" id="Target" class="submitButton">KIRIM</button>
                             </form>
                           @else
                           <table>
                        <tr rowspan="6">
                    <div class="no-data-container">
                        <ion-icon name="search-outline" class="icon-nodata"></ion-icon>
                        <h4> Silahkan Pilih Bulan Dan Tahun </h4>
                    </div>
                </tr>
            </table>
                @endif 
                        </tbody>
                    </table>
                </div>
                @endif
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>


    <!-- ====== Menampilkan Alert Tidak Punya Akses ======= -->
</body>

</html>