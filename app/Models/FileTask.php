<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTask extends Model
{
    use HasFactory;

    protected $table = 'file_tasks';

    protected $primaryKey = 'id_file_task';  // Menambahkan primary key

    protected $fillable = [
        'id_task', 'type'
    ];

    /**
     * Relasi BelongsTo ke Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class, 'id_task');
    }
}
