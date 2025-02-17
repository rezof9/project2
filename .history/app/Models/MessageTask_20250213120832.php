<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageTask extends Model
{
    use HasFactory;

    protected $table = 'message_tasks';

    protected $primaryKey = 'id_message_task';  // Menambahkan primary key

    protected $fillable = [
        'id_task', 'id_pegawai', 'message'
    ];

    /**
     * Relasi BelongsTo ke Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class, 'id_task');
    }
}
