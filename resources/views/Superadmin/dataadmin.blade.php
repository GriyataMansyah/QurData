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
    <title>Data Admin (Super Admin)</title>
</head>

<body>
       <!-- ========================= SideBar ==================== -->
       @include('Layout/Superadmin/sidebar')
       <!-- ========================= Main ==================== -->
       @include('Layout/Superadmin/main')

            <!-- ================ Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Data Admin</h2>   
                        <button class="btn btn-primary">Tambah Admin</button>                
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
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($Adminall as $a)
                            <tr>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->nik}}</td>
                                <td>{{$a->no_hp}}</td>
                                <td>{{$a->tanggal_lahir}}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('Js/main.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>