<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'perusahaans';

    // Menentukan kolom primary key
    protected $primaryKey = 'id_perusahaan';

    // Menentukan apakah primary key adalah tipe integer atau bukan
    protected $keyType = 'int';

    // Menentukan bahwa primary key tidak otomatis di increment (jika diperlukan)
    public $incrementing = true;

    // Kolom yang dapat diisi massal (mass assignable)
    protected $fillable = [
        'nama_perusahaan',
        'logo',
        'url',
        'jenis',
        'status',
    ];

    // Jika Anda ingin menambahkan timestamp untuk created_at dan updated_at secara otomatis
    public $timestamps = true;

    // Menentukan jenis status perusahaan, ini bisa digunakan jika diperlukan konversi atau validasi status
    const STATUS_AKTIF = 'aktif';
    const STATUS_NON_AKTIF = 'non-aktif';

    // Anda bisa membuat method khusus di sini jika diperlukan
}
