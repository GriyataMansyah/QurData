?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOKUMEN</title>
    <style>
        .note {
            width: 300px;
            margin-left:700px;
            font-size: 12px;
        }
        .centered {
            text-align: center;
        }

        .centered {
            margin-left:50%;
        }
      body {
        width: 100px;
        height:50px;
      }
       /* Aturan CSS untuk tabel */
       table {
           width: 1000px; /* Tabel mengisi lebar konten */
           border-collapse: collapse; /* Meleburkan batas sel */
       }
       th, td {
            text-align: left;
           border: 1px solid black; /* Menambahkan batas pada sel */
           padding: 8px; /* Padding untuk sel */
       }

        .indent-kanan {
            display: flex; /* Mengaktifkan Flexbox */
            flex-direction: row; /* Mengatur arah baris */
            align-items: flex-start; /* Menjaga teks di bagian atas */
            justify-content: flex-start; /* Menjaga teks di bagian kiri */
            padding-left: 30rem; /* Menambahkan indent ke kiri */
            line-height: 0;
        }       
        .container-fluid{
            padding: 7rem;
        }
        @media print {
            body {
                    -webkit-print-color-adjust: exact; /* Untuk browser berbasis WebKit (Chrome, Safari) */
        color-adjust: exact; /* Untuk browser lainnya */
                margin: 0;
                font-size: 10pt;
                padding: 0;
            }
            
            /* Atur margin untuk cetakan */
            @page {
                margin-top: -25mm;
                margin-left: -10mm;
                margin-bottom: -10mm;
                size: A4; /* Atur ukuran kertas menjadi A4 */
                height: 11in; Atur tinggi kertas menjadi 11 inci

            }


        }
    </style>   
</head>
<body>

    
    <div class="container-fluid">
        <div class="note">
        {{-- <p>PERATURAN DIREKTUR JENDRAL BEA DAN CUKAI <br> NOMOR PER-07/BC/2020 <br> TENTANG <br> PERUBAHAN ATAS PERATURAN DIREKTUR JENDRAL BEA DAN <br> CUKAI NOMOR PER-21/BC/2028 TENTANG <br> PEMBERITAHUAN PABEAN EKSPOR</p> --}}
        </div>
    <table class="tables">
        <tr>
            <th rowspan="3" style="writing-mode: vertical-rl;" class="centered">HEADER</th>
            <th >BC 3.0</th>
            <th colspan="6" style="text-align: center;">PEMBERITAHUAN EKSPOR BARANG</th>
        </tr>

        <tr>
            <td colspan="7">
                <div style="display: flex; justify-content: space-between;">
                    <p>Nomor pengajuan :{{ $A->nomor }}</p>
                    <p style="text-align: right; border-left: none;">Halaman 1 dari 1</p>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3" style="line-height: 0.4;">
                <h5>A.  Kantor Pabean</h5>
                <p>1. Kantor Pabean Pemuatan    : {{ $A->kantor_pabean_muat_asal }}</p>
                <p>2. Kantor Pabean Ekspor  : {{ $A->kantor_pabean_muat_ekspor }} </p>
                <h5>B.  Jenis Ekspor    : {{ $A->jenis_ekspor }} </h5>
                <h5>C.  Kategori Ekspor   : {{ $A->kategori }} </h5>
                <h5>D.  Cara Perdagangan    :{{ $A->cara_dagang }} </h5>
                
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <h5>E.  Cara Pembayaran    :{{ $A->cara_bayar }} </h5>
                <h5>F. KOLOM KHUSUS BEA DAN CUKAI</h5>
                <p>1. Nomor Pendaftaran    : 25235 </p>
                <p>2. Nomor BC 3.0    : 29</p>
                <p>3. Pos/Sub Pos  : - </p>
            </td>
        </tr>

        <tr>
            <th rowspan="20" style="writing-mode: vertical-rl;" class="centered">F. DATA PENGAJUAN</th>
            <th colspan="2"style="background-color: rgb(174, 174, 174);">EKSPORTIR</th>
            <th colspan="2" style="background-color: rgb(174, 174, 174);">PEMILIK BARANG</th>
            <TH colspan="4" style="background-color: rgb(174, 174, 174);">PENERIMA</TH>
        </tr>

        <tr>
            <td colspan="2"style="line-height: 0.4;">
                <p>1. Nama  : {{ $A->nama_eksportir }} </p>
                <p>2. Alamat  : {{ $A->alamat_eksportir }}</p>
                <p>3. Status  : Aktif </p>
            </td>

            <td colspan="2" style="line-height: 0.4;">
                {{-- <p>5. Identitas    :</p> --}}
                <p>4. Nama  :{{ $A->nama_pembeli }} </p>
                <p>5. Alamat  : {{ $A->alamat_pembeli }}</p>
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <p>7. Nama    : {{ $A->nama_penerima }}</p>
                <p>8. Alamat  : {{ $A->alamat_penerima }}</p>
                <p>9. Negara  : SG - SINGAPURA </p>
            </td>
        </tr>

        <tr>
           <th colspan="3" style="background-color: rgb(174, 174, 174);">PPJK</th>
            <th  colspan="4"style="background-color: rgb(174, 174, 174);">PEMBELI</th>
        </tr>

        <tr>
            <td colspan="3" style="line-height: 0.4;">
                <p>8. NPWP    : {{$Gurume->nik}} </p>
                <p>9. Nama  : {{$Gurume->nama}}</p>
                <p>10. Alamat  : Jl.Duyung Melati Benggawan Solo </p>
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <p>14. Nama    : {{ $A->nama_penerima }} </p>
                <p>15. Alamat  : {{ $A->alamat_penerima }}</p>
                <p>16. Negara  : SG - SINGAPURA</p>
            </td>
        </tr>

        <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DATA PENGANGKUTAN</th>
             <th colspan="4" style="background-color: rgb(174, 174, 174);">DATA PELABUHAN/TEMPAT MUAT EKSPOR</th>
         </tr>
 
         <tr>
             <td colspan="3" style="line-height: 0.4;">
                 <p>17. Cara Pengangkutan    : Laut</p>
                 <p>18. Nama & Bendera Sarana Pengangkutan  : Indonesia  </p>
                 <p>19. No. Pengangkut (Voy/Flight/Nopol)  : JT203</p>
                 <p>20. Tanggal Perkiraan Ekspor  :  - </p>
             </td>
 
             <td colspan="4" style="line-height: 0.4;">
                 <p>21. Pelabuhan Muat Asal    : {{ $A->kantor_pabean_muat_asal }} </p>
                 <p>22. Pelabuhan / Tempat Muat Ekspor  :  {{ $A->kantor_pabean_muat_ekspor }} </p> 
                 <p>23. Tempat Penimbunan  : BATAM </p>
                 <p>24. Pelabuhan Bongkar  :{{ $A->pelabuhan_muat_eskpor }} </p>
                 <p>25. Pelabuhan Tujuan  :  {{ $A->pelabuhan_muat_ekspor }}</p>
                 <p>26. Negara Tujuan Ekspor  :  SG - SINGAPURA</p>
             </td>
         </tr>

         <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DOKUMEN PELENGKAP PABEDA</th>
             <th colspan="4"style="background-color: rgb(174, 174, 174);">DATA TEMPAT PEMERIKSAAN</th>
         </tr>
 
         <tr>
             <td colspan="3" rowspan="3" style="line-height: 0.4;">
                 <p>27. Nomor & Tgl Invoice    : - </p>
                 {{-- TODAY --}}
                 <p>28. Nomor & Tgl Packing List  : 15 Agustus 2024</p>
                 <p>29. Jenis, Nomor & Tgl Dokumen lainnya  : - </p>
                 <p>    Kantor Bea Cukai pendaftaran  : {{ $A->kantor_pabean_muat_asal }}</p>
             </td>
 
             <td colspan="4"style="line-height: 0.4;">
                 <p>30. Lokasi Pemeriksaan    :  Gudang </p>
                 <p>31. kantor Pabean Pemeriksaan  : {{ $A->kantor_pabean_muat_asal }}  </p>
                 <TR>
                    <TH colspan="4" style="background-color: rgb(174, 174, 174);">DATA PENYERAHAN</TH>
                </TR>   
                 <td colspan="4" style="line-height: 0.4;">   
                    <p>32. Cara Penyerahan Barang    :  Langsung</p>
                </td>
             </td>
         </tr>

         <tr>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA TRANSAKSI EKSPOR</th>
         </tr>

         <td colspan="3" style="line-height: 0.4;">
            <p>33. Bank Devisa Hasil Ekspor    :</p>
            <p>34. Jenis Valuta  : {{ $A->valuta }} </p>
            <p>35. Nilai Ekspor  : {{ $A->nilai_ekspor }}</p>
        </td>

        <td colspan="4" style="line-height: 0.4;">
            <p>36. Freight    : {{ $A->freight }} </p>
            <p>37. Asuransi   : {{ $A->asuransi }} </p>
            <p>38. Nilai Maklon (Jika ada)  : - </p>
        </td>

        <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DATA PETI KEMAS</th>
             <th colspan="4" style="background-color: rgb(174, 174, 174);">DATA KEMASAN</th>
         </tr>
 
         <tr>
             <td colspan="3" style="line-height: 0.4;">
                 <p>39. Jumlah Peti Kemas    :  1</p>
                 <p>40. Nomor, Ukuran, Status Peti Kemas  : 12, 44 X 44, Baru</p>
             </td>
 
             <td colspan="4" style="line-height: 0.4;">
                 <p>41. Jenis, Jumlah dan Merek Kemasan    : Dask-Com, 2, SNI </p>
             </td>
         </tr>

         <tr>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA BARANG EKSPOR</th>
         </tr>

         <td colspan="3" style="line-height: 0.4;">
            <p>42. Berat Kotor (kg)   : {{ $A->berat_kotor }} </p>
        </td>

        <td colspan="4" style="line-height: 0.4;">
            <p>43. Berat Bersih (kg)    : {{ $A->berat_bersih }}</p>
        </td>

        <tr>
            <td style="line-height: 0.4;">44.
                <p>No</p>
            </td>

            <td>45. Pos Tarif/HS, Uraian Jumlah dan jenis barang secara lengkap,
                merk, tipe, ukuran, spesifikasi lain dan kode barang
            </td>

            <td>46. Perizinan Ekspor </td>
            <td>47. HS barang dan tarif BK pada tanggal Pendaftaran </td>
            <td>48. Jumlah, jenis sat, berat bersih(kg), dan volume(m3)  </td>
            <td><p>49. Negara Asal Barang </p>
                <p>50. Daerah Asal Barang </p>
            </td>
            <td>51. Jumlah nilai FOB  </td>
        </tr>
        <td style="height: 30px;">1</td>
        <td style="height: 30px;">{{ $A->hs }},{{ $A->mark }} dan {{ $A->tipe }}, 44 X 44, - </td>
        <td style="height: 30px;">Perizinan Ekspo</td>
        <td style="height: 30px;">{{ $A->hs }}, dan 25%</td> 
        <td style="height: 30px;">1 , - , {{ $A->berat_bersih }}, dan - </td>
        <td style="height: 30px;">Indonesia<br><Br>Batam</td>
        <td style="height: 30px;">{{ $A->harga_fob }}</td>

        <tr>
            <td rowspan="2">52.</td>
            <td colspan="3" rowspan="2">Nilai Tukar Mata Uang :  Dollar SG</td>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA PENERIMAAN NEGARA</th>
                <tr>
                    <td colspan="3">
                    <p>53. Nilai Bea Keluar    :  {{$A->harga_fob}}</p>
                    <p>55. Pungutan Sawit  :  Rp 100.000,00</p>
                    </td>
               </tr>

        <tr>
            <td colspan="8" style="padding: 10px;">
                <h4>G. TANDA TANGAN EKSPORTIR / PPJK</h4>
                <p>Dengan ini saya menyatakan bertanggungjawan atas kebenaran hal-hal yang diberitahukan dalam Pemberitahuan Ekspor barang ini,
                    serta bersedia dikenakan sanksi sesuai dengan ketentuan di bidang kepabeanan apabila terdapat kesalahan.
                </p> <br>
                <p style="text-align: right; padding-right: 8rem;">
                    Batam,{{ \Carbon\Carbon::parse($A->created_at)->format('d F Y') }}
                    {{-- TODAY --}}
                </p><br>

                <p style="text-align: right; padding-right: 8rem;">
                    (...................................)
                </p>
            </td>
        </tr>

        <tr>
            <td colspan="8" style="padding: 10px; text-align: right;">
                Lembar ke-1/2/3 untuk Bea dan Cukai/BPS/BI
            </td>
    </table>
</div>  
</body>
</html>F