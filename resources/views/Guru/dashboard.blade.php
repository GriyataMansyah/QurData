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
                        <div class="numbers">...</div>
                        <div class="cardName">Berkas Di Terima</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="checkmark-outline"></ion-icon>
                    </div>
                </a>

                <a class="card">
                    <div>
                        <div class="numbers">...</div>
                        <div class="cardName">Berkas Di Tahan</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="pause-outline"></ion-icon>
                    </div>
                </a>

                <a class="card" id="notice-three">
                    <div>
                        <div class="numbers">...</div>
                        <div class="cardName">Berkas Di Proses</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alarm-outline"></ion-icon>
                    </div>
                </a>

                <a class="card">
                    <div>
                        <div class="numbers">...</div>
                        <div class="cardName">Berkas Di Buat</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="document-outline"></ion-icon>
                    </div>
                </a>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Pengumuman</h2>                   
                    </div>

        
                </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
</body>

</html>