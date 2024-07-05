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
    <title>Capaian (Guru)</title>
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
                        <h2>Indikator Pencapaian / Muhammad Mabrur</h2>   
                    </div>
                    
                            <button class="btn btn-primary" onclick="addRow()">Tambah Indikator</button>
                    <table id="dataTable">
                        <thead>
                            <tr>
                                <td>Nama Indikator Capaian</td>
                                <td>Status Capaian</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input placeholder="Nama Indikator" class="input-form"></input></td>
                                <td>
                                    <select onchange="updateSelectColor(this)">
                                        <option>..</option>
                                        <option class="status-hadir" value="Tercapai">Tercapai</option>
                                        <option class="status-ga-hadir" value="Tidak">Tidak</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea id="coolTextarea" class="form-control custom-textarea" rows="4"></textarea>
                                </td>

                                <td>
                                    <button class="btn btn-danger" onclick="deleteRow(this)">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
    <script>

    <!-- ====== Menampilkan Alert Tidak Punya Akses ======= -->
</body>

</html>