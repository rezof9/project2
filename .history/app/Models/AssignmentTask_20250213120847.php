<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentTask extends Model
{
    use HasFactory;

    protected $table = 'assignment_tasks';

    protected $primaryKey = 'id_assigment_task';  // Menambahkan primary key

    protected $fillable = [
        'id_task', 'id_pegawai', 'type'
    ];

    /**
     * Relasi BelongsTo ke Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class, 'id_task');
    }
}
