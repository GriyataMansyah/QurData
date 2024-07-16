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
                        <button class="btn btn-primary">Simpan</button>   
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <form action="{{ route('guru/absensi') }}" method="GET">
                                    <td colspan="4">
                                        Bulan 
                                        <select name="bulan">
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
                                        <button type="submit">Filter</button>
                                    </td>
                                </form>
                                    
                                </td>
                            </tr>
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
                            <form method="post" action="{{route('simpanAbsensi')}}">    
                            @csrf
                            <input type="hidden" value="{{$tahun}}" name="tahun"></input>     
                            <input type="hidden" value="{{$bulan}}" name="bulan"></input>               
                            <tr>
                                @foreach ($muridAll as $A)
                                <td>{{ $A->nama }}</td>
                                <input type="hidden" value="{{$A->id}}" name="id_murid[]"></input>
                                <input type="hidden" value="{{$Gurume->id}}" name="id_guru[]"></input>
                            
                                <td class="middle_two">                        
                                    @if($tampilkanAbsensi->has($A->id))
                                        <?php $absensiMurid = $tampilkanAbsensi[$A->id]->first(); ?>
                                        @if(in_array($absensiMurid->minggu1, ['Hadir', 'Tidak Hadir', 'Izin']))
                                            <input type="text" value="{{ $absensiMurid->minggu1 }}">
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
                                @if($minggu2Kosong)
                                    <select id="minggu2" name="minggu2[]" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadir">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                    @else
                                        @if(minggu2kosong == 'Hadir')
                                        <input class="status-hadir" value="Hadir">Hadir</input>
                                        @elseif(minggu2kosong == 'izin')
                                        <input class="status-izin" value="izin">Izin</input>
                                        @else
                                        <input class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</input>
                                        @endif
                                    </select>
                                    @endif
                                </td>

                            <td>
                                @if($minggu3Kosong)
                                    <select id="minggu3" name="minggu3[]" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadir">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                    @else
                                        @if(minggu3kosong == 'Hadir')
                                        <input class="status-hadir" value="Hadir">Hadir</input>
                                        @elseif(minggu3kosong == 'izin')
                                        <input class="status-izin" value="izin">Izin</input>
                                        @else
                                        <input class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</input>
                                        @endif
                                    </select>
                                    @endif
                                </td>

                            <td>
                                @if($minggu4Kosong)
                                <select id="minggu4" name="minggu4[]" onchange="updateSelectColor(this)">
                                    <option>..</option>
                                    <option class="status-hadir" value="Hadir">Hadir</option>
                                    <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                    <option class="status-izin" value="izin">Izin</option>
                                </select>
                                @else
                                    @if(minggu4kosong == 'Hadir')
                                    <input class="status-hadir" value="Hadir">Hadir</input>
                                    @elseif(minggu4kosong == 'izin')
                                    <input class="status-izin" value="izin">Izin</input>
                                    @else
                                    <input class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</input>
                                    @endif
                                </select>
                                @endif
                            </td>

                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit">SUBMIT</button>
                </form>
                </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>

    <!-- ====== Menampilkan Alert Tidak Punya Akses ======= -->
</body>

</html>