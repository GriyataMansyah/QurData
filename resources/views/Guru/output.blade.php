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
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <style>
          @media print {
            body {
                -webkit-print-color-adjust: exact; 
                color-adjust: exact;
                margin: 0;
                font-size: 7pt;
                padding: 0;
            }
            /* Atur margin untuk cetakan */
            @page {
                margin-top: 10mm;
                margin-left: 10mm;
                margin-bottom: -10mm;
                size: A4; 
                height: 11in;

            }
        }
    </style>
    <title>Capaian (Guru)</title>
</head>

<body class="Body-One" onload="printPage()">

    <h3 class="mid">Catatan Pencapaian Murid</h3><br><br>
    <p class="capital">Nama : {{$Murid->nama}}</p>
    <p class="capital up-p">NIK : {{ $Murid->nik }}</p>
    {{-- <p class="capital up-p">Persentase Kehadiran :</p> --}}
    <br>

    <table class="capital-table">
        <thead>
            <tr>
                <td class="offside border number"><p class="text-one">No</p></td>
                <td class="offside border"><p class="text-one">Nama Capaian</p></td>
                <td class="offside border status-capaian"><p class="text-one">Status</p></td>
                <td class="offside border"><p class="text-one">Catatan</p></td>
            </tr>
        </thead>     
        <tbody>
            @php
            $no = 1; 
            @endphp
            @foreach($Capaian as $capaian)
                <tr>
                  
                    <td class="border">                        
                        <p class="text-one">{{ $no++ }}</p>
                    </td>
                    
                    
                     <td class="border">
                        <p class="text-two">{{ $capaian->nama_indikator }}</p>
                     </td>
                  
                    <td class="border">
                        <p class="text-one">{{ $capaian->status }}</p>
                    </td>
        
                    <td class="border">
                        <p class="text-one">{{ $capaian->keterangan }}</p>
                    </td>

                </tr>
        </tbody> 
        @endforeach
       
    </table>
        <!-- Tempat tanda tangan -->
        <div class="signature-section">
            <div class="signature">
                {{-- <p class="capital">Guru Kelas</p>
                <span class="capital">Tanda Tangan</span> --}}
            </div>
            <div class="signature">
                <p class="capital">Guru Kelas</p>
                <span class="capital">{{ $Guru->nama }}</span>
            </div>
        </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
   
</body>

</html>
