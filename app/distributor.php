<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $table = 'distributor';
    protected $fillable = [
        'Nama_Suplier', 'alamat', 'Kota_Suplier', 'Provinsi_Suplier', 'Kode_POS_Suplier', 'Email_Suplier', 'No_HP_Suplier',
        'NPWP_Suplier', 'petugas'
    ];
}
