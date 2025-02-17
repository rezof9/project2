<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'proyeks';

    // Menentukan kolom primary key
    protected $primaryKey = 'id_proyek';

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'id_perusahaan',
        'nama_proyek',
        'status',
    ];

    // Menentukan bahwa kita akan menggunakan timestamps Laravel untuk created_at dan updated_at
    public $timestamps = true;

    /**
     * Relasi dengan model Perusahaan (belongsTo)
     *
     * Menunjukkan bahwa Proyek ini dimiliki oleh satu Perusahaan
     */
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }
}
