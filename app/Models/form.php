<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $table = "Form";

    protected $fillable = [
        'nomor',
        'kantor_pabean_muat_asal',
        'pelabuhan_muat_ekspor',
        'kantor_pabean_muat_ekspor',
        'jenis_ekspor',
        'kategori',
        'cara_dagang',
        'cara_bayar',
        'komoditi',
        'curah',
        'nama_eksportir',
        'alamat_eksportir',
        'nama_penerima',
        'alamat_penerima',
        'nama_pembeli',
        'alamat_pembeli',
        'seri_kemasan',
        'jumlah_kemasan',
        'jenis_kemasan',
        'merek_kemasan',
        'ukuran_peti_kemas',
        'jenis_peti_kemas',
        'type_peti_kemas',
        'valuta',
        'ndpmb',
        'cara_penyerahan',
        'nilai_ekspor',
        'freight',
        'asuransi',
        'nilai_maklan',
        'nilai_bea_keluar',
        'hs',
        'lartas',
        'kode',
        'uraian',
        'mark',
        'tipe',
        'negara_asal_barang',
        'harga_fob',
        'volume_barang',
        'berat_bersih',
        'berat_kotor',
        'harga_satuan_fob',
        'tempat_penerima',
        'tanggal',
        'nama',
        'jabatan',
        'id_guru'
    ];
    
}
