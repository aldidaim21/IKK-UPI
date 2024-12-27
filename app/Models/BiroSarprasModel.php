<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiroSarprasModel extends Model
{
    /** @use HasFactory<\Database\Factories\BiroSarprasModelFactory> */
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi penamaan
    protected $table = 'biro_sarpras'; // Gantilah dengan nama tabel yang sesuai jika berbeda

    // Tentukan kolom-kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'indikator',   // Kolom untuk indikator
        'target',      // Kolom untuk target
        'satuan',      // Kolom untuk satuan
        'tw1',         // Kolom untuk tw1
        'tw2',         // Kolom untuk tw2
        'tw3',         // Kolom untuk tw3
        'tw4',         // Kolom untuk tw4
        'deskripsi',   // Kolom untuk deskripsi
        'file',        // Kolom untuk file
    ];

    // Tentukan kolom yang harus disertakan dalam format tanggal
    protected $dates = ['created_at', 'updated_at'];
}
