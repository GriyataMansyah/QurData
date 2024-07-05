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
                                <td colspan="4">
                                    Bulan 
                                    <select>
                                        <option>...</option>
                                        <option value="">Januari</option>
                                        <option value="">Februari</option>
                                        <option value="">Maret</option>
                                        <option value="">April</option>
                                        <option value="">Mei</option>
                                        <option value="">Juni</option>
                                        <option value="">July</option>
                                        <option value="">Agustus</option>
                                        <option value="">September</option>
                                        <option value="">Oktober</option>
                                        <option value="">November</option>
                                        <option value="">Desember</option>
                                    </select>
                                    Tahun
                                    <select>
                                        <option>...</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                    </select>    
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
                            <tr>
                                @foreach ($Muridall as $A)
                                <td>{{ $A->nama }}</td>
                                <td class="middle_two">    
                                    <select id="attendance" name="attendance" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadri">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="attendance" name="attendance" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadri">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="attendance" name="attendance" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadri">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                </td>
                                <td>
                                 <select id="attendance" name="attendance" onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Hadri">Hadir</option>
                                        <option class="status-ga-hadir" value="Tidak Hadir">Tidak Hadir</option>
                                        <option class="status-izin" value="izin">Izin</option>
                                    </select>
                                </td>
                                <td><span class="status delivered">AKTIF</span></td>
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