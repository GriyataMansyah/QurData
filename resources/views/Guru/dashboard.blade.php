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
    <title>Dashboard Guru</title>
</head>

<body>
       <!-- ========================= SideBar ==================== -->
       @include('Layout/Guru/sidebar')
       <!-- ========================= Main ==================== -->
       @include('Layout/Guru/main')

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a class="card">
                    <div>
                        <div class="numbers">{{ $Superadmin }}</div>
                        <div class="cardName">Super Admin</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </a>

                <a class="card">
                    <div>
                        <div class="numbers">{{ $Admin }}</div>
                        <div class="cardName">Admin</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </a>

                <a class="card" id="notice-three">
                    <div>
                        <div class="numbers">{{ $Guru }}</div>
                        <div class="cardName">Guru</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </a>

                <a class="card" href="{{route("guru/datamurid")}}">
                    <div>
                        <div class="numbers">{{ $Murid }}</div>
                        <div class="cardName">Murid</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </a>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Semua Pengguna</h2>                   
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>Nomor HP</td>
                                <td>Tanggal Lahir</td>
                                <td>Gender</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($Superadminall as $a)
                            <tr>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->nik}}</td>
                                <td>{{$a->no_hp}}</td>
                                <td>{{$a->tanggal_lahir}}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach

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

                            @foreach($Guruall as $a)
                            <tr>
                                <td>{{$a->nama}}</td>
                                <td>{{$a->nik}}</td>
                                <td>{{$a->no_hp}}</td>
                                <td>{{$a->tanggal_lahir}}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td><span class="status delivered">AKTIF</span></td>
                            </tr>
                            @endforeach

                            @foreach($Muridall as $a)
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
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
</body>

</html>