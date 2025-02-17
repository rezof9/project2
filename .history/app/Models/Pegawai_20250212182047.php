<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak menggunakan penamaan default
    protected $table = 'pegawais';

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama',
        'nomor',
        'email',
        'password',
        'jenis_kelamin',
        'jabatan',
        'foto',
        'id_perusahaan',
    ];

    // Tentukan kolom yang tidak bisa diisi (untuk keamanan)
    protected $guarded = [
        'id_pegawai', // Kolom ID harus diabaikan dalam mass assignment
    ];

    // Tentukan relasi ke model Perusahaan
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    // Optionally: jika Anda ingin hashing password sebelum disimpan
    // protected static function booted()
    // {
    //     static::creating(function ($pegawai) {
    //         $pegawai->password = bcrypt($pegawai->password);
    //     });
    // }

    // Optionally: jika Anda ingin aksesors atau mutators untuk properti lainnya
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
