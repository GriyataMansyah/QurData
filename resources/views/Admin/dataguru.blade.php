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
    <title>Data Guru (Admin)</title>
</head>

<body>
        <!-- ========================= SideBar ==================== -->
        @include('Layout/Admin/sidebar')
        <!-- ========================= Main ==================== -->
        @include('Layout/Admin/main')

            <!-- ================ Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Data Guru</h2>   
                        <button class="btn btn-primary">Tambah Guru</button>   
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>NIM</td>
                                <td>Gender</td>
                                <td>Tanggal Daftar</td>
                                <td>Status</td>
                                <td><td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Ahmad Hambali</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Jufri Ramadhan</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>
                            
                            <tr>
                                <td>Cinta Maymunah</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Ahmadi Irmansyah</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Ahmad Hambali</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Jufri Ramadhan</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>
                            
                            <tr>
                                <td>Cinta Maymunah</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Ahmadi Irmansyah</td>
                                <td>Guru</td>
                                <td>4342301060</td>
                                <td>Laki - Laki</td>
                                <td>12 - 01 - 2024</td>
                                <td><span class="status delivered">AKTIF</span></td>
                                <td><ion-icon name="trash-outline"></ion-icon></td>
                            </tr>
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