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
                        <table id="dataTable">
                            <thead>
                                <tr>
                                    <td>Nama Indikator Capaian</td>
                                    <td>Status Capaian</td>
                                    <td>Keterangan</td>
                                </tr>
                            </thead>
                            <tbody>        
                                @if($hasCapaian->isEmpty())
                                @foreach($Datacapaian as $index => $D)
                                <form method="POST" action="{{ route('capaian.store') }}">
                                    @csrf
                                    <tr>
                                        <td>
                                            <input 
                                                type="hidden" 
                                                name="data[{{ $index }}][nama_indikator]" 
                                                value="{{ $D->nama }}">
                                            <input 
                                                placeholder="Nama Indikator" 
                                                class="input-form" 
                                                value="{{ $D->nama }}" 
                                                disabled>
                                        </td>
                                        <td>
                                            <select 
                                                name="data[{{ $index }}][status]" 
                                                onchange="updateSelectColor(this)">
                                                <option value="">..</option>
                                                <option class="status-hadir" value="Tercapai">Tercapai</option>
                                                <option class="status-ga-hadir" value="Tidak">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <textarea 
                                                name="data[{{ $index }}][keterangan]" 
                                                id="coolTextarea" 
                                                class="form-control custom-textarea" 
                                                rows="4"></textarea>
                                        </td>
                                    </tr>
                                @endforeach
                                <td><input type="hidden" value="{{$Murid->id}}" name="id_murid"></td>
                                <td><input type="hidden" value="{{$Akun->id}}" name="id_guru"></td>
                                <td colspan="3">
                                    
                                        <button type="submit" class="btn btn-primary button-five">Simpan</button>
                                       
                                </td>
                                
                                @else
                                <div class="cardHeader">
                                    <h2>Indikator Pencapaian / {{$Murid->nama}}</h2>   
                                    <div>
                                        <a class="btn btn-primary" onclick="printPage(event)">
                                            <ion-icon name="download-outline" class="BigIcon-one"></ion-icon>
                                            <span style="vertical-align: top;">Download Dokumen</span>
                                        </a>
                                    
                                        <button type="button" class="btn btn-primary" onclick="confirmThis()">
                                            <ion-icon name="trash-outline" class="BigIcon-two"></ion-icon>
                                            <span style="vertical-align: top;">Hapus Data Dokumen</span>
                                        </button>
                                    
                                        <form id="deleteForm" method="POST" action="{{ route('hapus.capaian.murid', $Murid->id) }}">
                                            @csrf
                                            <button type="submit" id="hiddenButton-one" class="btn btn-primary button-five hidden">Simpan</button>
                                        </form>
            
                                    </div>
                                </div> 
                                <tr>
                                    @foreach($hasCapaian as $item)
                                    <tr>
                                        <td><input class="input-from form-control" value="{{ $item->nama_indikator }}" disabled></td>
                                        <td><input class="input-form" value="{{ $item->status }}" disabled></td>
                                        <td><textarea class="form-control custom-textarea" rows="4" disabled>{{ $item->keterangan }}</textarea></td>
                                    </tr>
                                    @endforeach
                                </tr>
                                @endif
                            </tbody>
                        </table>  
                    </form>
                    
                    
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('Js/main.js')}}"></script>
    <script>
</body>

</html>