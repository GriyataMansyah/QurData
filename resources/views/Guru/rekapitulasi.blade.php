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
                        <h2>Rekapitulasi Absensi Mahasiswa </h2>   
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <form method="GET" action="{{route('guru/rekap')}}">
                                <td colspan="30">Tahun :
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
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="4">Januari</td>
                                <td colspan="4">Februari</td>
                                <td colspan="4">Maret</td>
                                <td colspan="4">April</td>
                                <td colspan="4">Mei</td>
                                <td colspan="4">Juni</td>
                                <td colspan="4">July</td>
                                <td colspan="4">Agustus</td>
                                <td colspan="4">September</td>
                                <td colspan="4">Oktober</td>
                                <td colspan="4">November</td>
                                <td colspan="4">Desember</td>
                                <td rowspan="2">Persentasi Kehadiran</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($muridAll->where('id_guru', $Gurume->id) as $murid)
                                @php
                                    $absensiJanuari = $Januari->has($murid->id) ? $Januari->get($murid->id)->first() : null;
                                    $absensiFebruari = $Februari->has($murid->id) ? $Februari->get($murid->id)->first() : null;
                                    $absensiMaret = $Maret->has($murid->id) ? $Maret->get($murid->id)->first() : null;
                                    $absensiApril = $April->has($murid->id) ? $April->get($murid->id)->first() : null;
                                    $absensiMei = $Mei->has($murid->id) ? $Mei->get($murid->id)->first() : null;
                                    $absensiJuni = $Juni->has($murid->id) ? $Juni->get($murid->id)->first() : null;
                                    $absensiJuli = $Juli->has($murid->id) ? $Juli->get($murid->id)->first() : null;
                                    $absensiAgustus = $Agustus->has($murid->id) ? $Agustus->get($murid->id)->first() : null;
                                    $absensiSeptember = $September->has($murid->id) ? $September->get($murid->id)->first() : null;
                                    $absensiOktober = $Oktober->has($murid->id) ? $Oktober->get($murid->id)->first() : null;
                                    $absensiNovember = $November->has($murid->id) ? $November->get($murid->id)->first() : null;
                                    $absensiDesember = $Desember->has($murid->id) ? $Desember->get($murid->id)->first() : null;
                                @endphp
                                <tr>
                                    <td>{{ $murid->nama }}</td>
                                
                                    <!-- Januari -->
                                    <td>{{ $absensiJanuari ? ($absensiJanuari->minggu1 === 'Hadir' ? 'H' : ($absensiJanuari->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiJanuari->minggu1 === 'Izin' ? 'I' : $absensiJanuari->minggu1))) : '' }}</td>
                                    <td>{{ $absensiJanuari ? ($absensiJanuari->minggu2 === 'Hadir' ? 'H' : ($absensiJanuari->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiJanuari->minggu2 === 'Izin' ? 'I' : $absensiJanuari->minggu2))) : '' }}</td>
                                    <td>{{ $absensiJanuari ? ($absensiJanuari->minggu3 === 'Hadir' ? 'H' : ($absensiJanuari->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiJanuari->minggu3 === 'Izin' ? 'I' : $absensiJanuari->minggu3))) : '' }}</td>
                                    <td>{{ $absensiJanuari ? ($absensiJanuari->minggu4 === 'Hadir' ? 'H' : ($absensiJanuari->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiJanuari->minggu4 === 'Izin' ? 'I' : $absensiJanuari->minggu4))) : '' }}</td>
                                
                                    <!-- Februari -->
                                    <td>{{ $absensiFebruari ? ($absensiFebruari->minggu1 === 'Hadir' ? 'H' : ($absensiFebruari->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiFebruari->minggu1 === 'Izin' ? 'I' : $absensiFebruari->minggu1))) : '' }}</td>
                                    <td>{{ $absensiFebruari ? ($absensiFebruari->minggu2 === 'Hadir' ? 'H' : ($absensiFebruari->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiFebruari->minggu2 === 'Izin' ? 'I' : $absensiFebruari->minggu2))) : '' }}</td>
                                    <td>{{ $absensiFebruari ? ($absensiFebruari->minggu3 === 'Hadir' ? 'H' : ($absensiFebruari->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiFebruari->minggu3 === 'Izin' ? 'I' : $absensiFebruari->minggu3))) : '' }}</td>
                                    <td>{{ $absensiFebruari ? ($absensiFebruari->minggu4 === 'Hadir' ? 'H' : ($absensiFebruari->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiFebruari->minggu4 === 'Izin' ? 'I' : $absensiFebruari->minggu4))) : '' }}</td>
                                
                                    <!-- Maret -->
                                    <td>{{ $absensiMaret ? ($absensiMaret->minggu1 === 'Hadir' ? 'H' : ($absensiMaret->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiMaret->minggu1 === 'Izin' ? 'I' : $absensiMaret->minggu1))) : '' }}</td>
                                    <td>{{ $absensiMaret ? ($absensiMaret->minggu2 === 'Hadir' ? 'H' : ($absensiMaret->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiMaret->minggu2 === 'Izin' ? 'I' : $absensiMaret->minggu2))) : '' }}</td>
                                    <td>{{ $absensiMaret ? ($absensiMaret->minggu3 === 'Hadir' ? 'H' : ($absensiMaret->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiMaret->minggu3 === 'Izin' ? 'I' : $absensiMaret->minggu3))) : '' }}</td>
                                    <td>{{ $absensiMaret ? ($absensiMaret->minggu4 === 'Hadir' ? 'H' : ($absensiMaret->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiMaret->minggu4 === 'Izin' ? 'I' : $absensiMaret->minggu4))) : '' }}</td>
                                
                                    <!-- April -->
                                    <td>{{ $absensiApril ? ($absensiApril->minggu1 === 'Hadir' ? 'H' : ($absensiApril->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiApril->minggu1 === 'Izin' ? 'I' : $absensiApril->minggu1))) : '' }}</td>
                                    <td>{{ $absensiApril ? ($absensiApril->minggu2 === 'Hadir' ? 'H' : ($absensiApril->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiApril->minggu2 === 'Izin' ? 'I' : $absensiApril->minggu2))) : '' }}</td>
                                    <td>{{ $absensiApril ? ($absensiApril->minggu3 === 'Hadir' ? 'H' : ($absensiApril->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiApril->minggu3 === 'Izin' ? 'I' : $absensiApril->minggu3))) : '' }}</td>
                                    <td>{{ $absensiApril ? ($absensiApril->minggu4 === 'Hadir' ? 'H' : ($absensiApril->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiApril->minggu4 === 'Izin' ? 'I' : $absensiApril->minggu4))) : '' }}</td>
                                
                                    <!-- Mei -->
                                    <td>{{ $absensiMei ? ($absensiMei->minggu1 === 'Hadir' ? 'H' : ($absensiMei->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiMei->minggu1 === 'Izin' ? 'I' : $absensiMei->minggu1))) : '' }}</td>
                                    <td>{{ $absensiMei ? ($absensiMei->minggu2 === 'Hadir' ? 'H' : ($absensiMei->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiMei->minggu2 === 'Izin' ? 'I' : $absensiMei->minggu2))) : '' }}</td>
                                    <td>{{ $absensiMei ? ($absensiMei->minggu3 === 'Hadir' ? 'H' : ($absensiMei->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiMei->minggu3 === 'Izin' ? 'I' : $absensiMei->minggu3))) : '' }}</td>
                                    <td>{{ $absensiMei ? ($absensiMei->minggu4 === 'Hadir' ? 'H' : ($absensiMei->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiMei->minggu4 === 'Izin' ? 'I' : $absensiMei->minggu4))) : '' }}</td>
                                
                                    <!-- Juni -->
                                    <td>{{ $absensiJuni ? ($absensiJuni->minggu1 === 'Hadir' ? 'H' : ($absensiJuni->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiJuni->minggu1 === 'Izin' ? 'I' : $absensiJuni->minggu1))) : '' }}</td>
                                    <td>{{ $absensiJuni ? ($absensiJuni->minggu2 === 'Hadir' ? 'H' : ($absensiJuni->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiJuni->minggu2 === 'Izin' ? 'I' : $absensiJuni->minggu2))) : '' }}</td>
                                    <td>{{ $absensiJuni ? ($absensiJuni->minggu3 === 'Hadir' ? 'H' : ($absensiJuni->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiJuni->minggu3 === 'Izin' ? 'I' : $absensiJuni->minggu3))) : '' }}</td>
                                    <td>{{ $absensiJuni ? ($absensiJuni->minggu4 === 'Hadir' ? 'H' : ($absensiJuni->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiJuni->minggu4 === 'Izin' ? 'I' : $absensiJuni->minggu4))) : '' }}</td>
                                
                                    <!-- Juli -->
                                    <td>{{ $absensiJuli ? ($absensiJuli->minggu1 === 'Hadir' ? 'H' : ($absensiJuli->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiJuli->minggu1 === 'Izin' ? 'I' : $absensiJuli->minggu1))) : '' }}</td>
                                    <td>{{ $absensiJuli ? ($absensiJuli->minggu2 === 'Hadir' ? 'H' : ($absensiJuli->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiJuli->minggu2 === 'Izin' ? 'I' : $absensiJuli->minggu2))) : '' }}</td>
                                    <td>{{ $absensiJuli ? ($absensiJuli->minggu3 === 'Hadir' ? 'H' : ($absensiJuli->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiJuli->minggu3 === 'Izin' ? 'I' : $absensiJuli->minggu3))) : '' }}</td>
                                    <td>{{ $absensiJuli ? ($absensiJuli->minggu4 === 'Hadir' ? 'H' : ($absensiJuli->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiJuli->minggu4 === 'Izin' ? 'I' : $absensiJuli->minggu4))) : '' }}</td>
                                
                                    <!-- Agustus -->
                                    <td>{{ $absensiAgustus ? ($absensiAgustus->minggu1 === 'Hadir' ? 'H' : ($absensiAgustus->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiAgustus->minggu1 === 'Izin' ? 'I' : $absensiAgustus->minggu1))) : '' }}</td>
                                    <td>{{ $absensiAgustus ? ($absensiAgustus->minggu2 === 'Hadir' ? 'H' : ($absensiAgustus->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiAgustus->minggu2 === 'Izin' ? 'I' : $absensiAgustus->minggu2))) : '' }}</td>
                                    <td>{{ $absensiAgustus ? ($absensiAgustus->minggu3 === 'Hadir' ? 'H' : ($absensiAgustus->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiAgustus->minggu3 === 'Izin' ? 'I' : $absensiAgustus->minggu3))) : '' }}</td>
                                    <td>{{ $absensiAgustus ? ($absensiAgustus->minggu4 === 'Hadir' ? 'H' : ($absensiAgustus->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiAgustus->minggu4 === 'Izin' ? 'I' : $absensiAgustus->minggu4))) : '' }}</td>
                                
                                    <!-- September -->
                                    <td>{{ $absensiSeptember ? ($absensiSeptember->minggu1 === 'Hadir' ? 'H' : ($absensiSeptember->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiSeptember->minggu1 === 'Izin' ? 'I' : $absensiSeptember->minggu1))) : '' }}</td>
                                    <td>{{ $absensiSeptember ? ($absensiSeptember->minggu2 === 'Hadir' ? 'H' : ($absensiSeptember->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiSeptember->minggu2 === 'Izin' ? 'I' : $absensiSeptember->minggu2))) : '' }}</td>
                                    <td>{{ $absensiSeptember ? ($absensiSeptember->minggu3 === 'Hadir' ? 'H' : ($absensiSeptember->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiSeptember->minggu3 === 'Izin' ? 'I' : $absensiSeptember->minggu3))) : '' }}</td>
                                    <td>{{ $absensiSeptember ? ($absensiSeptember->minggu4 === 'Hadir' ? 'H' : ($absensiSeptember->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiSeptember->minggu4 === 'Izin' ? 'I' : $absensiSeptember->minggu4))) : '' }}</td>
                                
                                    <!-- Oktober -->
                                    <td>{{ $absensiOktober ? ($absensiOktober->minggu1 === 'Hadir' ? 'H' : ($absensiOktober->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiOktober->minggu1 === 'Izin' ? 'I' : $absensiOktober->minggu1))) : '' }}</td>
                                    <td>{{ $absensiOktober ? ($absensiOktober->minggu2 === 'Hadir' ? 'H' : ($absensiOktober->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiOktober->minggu2 === 'Izin' ? 'I' : $absensiOktober->minggu2))) : '' }}</td>
                                    <td>{{ $absensiOktober ? ($absensiOktober->minggu3 === 'Hadir' ? 'H' : ($absensiOktober->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiOktober->minggu3 === 'Izin' ? 'I' : $absensiOktober->minggu3))) : '' }}</td>
                                    <td>{{ $absensiOktober ? ($absensiOktober->minggu4 === 'Hadir' ? 'H' : ($absensiOktober->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiOktober->minggu4 === 'Izin' ? 'I' : $absensiOktober->minggu4))) : '' }}</td>
                                
                                    <!-- November -->
                                    <td>{{ $absensiNovember ? ($absensiNovember->minggu1 === 'Hadir' ? 'H' : ($absensiNovember->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiNovember->minggu1 === 'Izin' ? 'I' : $absensiNovember->minggu1))) : '' }}</td>
                                    <td>{{ $absensiNovember ? ($absensiNovember->minggu2 === 'Hadir' ? 'H' : ($absensiNovember->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiNovember->minggu2 === 'Izin' ? 'I' : $absensiNovember->minggu2))) : '' }}</td>
                                    <td>{{ $absensiNovember ? ($absensiNovember->minggu3 === 'Hadir' ? 'H' : ($absensiNovember->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiNovember->minggu3 === 'Izin' ? 'I' : $absensiNovember->minggu3))) : '' }}</td>
                                    <td>{{ $absensiNovember ? ($absensiNovember->minggu4 === 'Hadir' ? 'H' : ($absensiNovember->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiNovember->minggu4 === 'Izin' ? 'I' : $absensiNovember->minggu4))) : '' }}</td>
                                
                                    <!-- Desember -->
                                    <td>{{ $absensiDesember ? ($absensiDesember->minggu1 === 'Hadir' ? 'H' : ($absensiDesember->minggu1 === 'Tidak Hadir' ? 'A' : ($absensiDesember->minggu1 === 'Izin' ? 'I' : $absensiDesember->minggu1))) : '' }}</td>
                                    <td>{{ $absensiDesember ? ($absensiDesember->minggu2 === 'Hadir' ? 'H' : ($absensiDesember->minggu2 === 'Tidak Hadir' ? 'A' : ($absensiDesember->minggu2 === 'Izin' ? 'I' : $absensiDesember->minggu2))) : '' }}</td>
                                    <td>{{ $absensiDesember ? ($absensiDesember->minggu3 === 'Hadir' ? 'H' : ($absensiDesember->minggu3 === 'Tidak Hadir' ? 'A' : ($absensiDesember->minggu3 === 'Izin' ? 'I' : $absensiDesember->minggu3))) : '' }}</td>
                                    <td>{{ $absensiDesember ? ($absensiDesember->minggu4 === 'Hadir' ? 'H' : ($absensiDesember->minggu4 === 'Tidak Hadir' ? 'A' : ($absensiDesember->minggu4 === 'Izin' ? 'I' : $absensiDesember->minggu4))) : '' }}</td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
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