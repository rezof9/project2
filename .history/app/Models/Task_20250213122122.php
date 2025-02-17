<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $primaryKey = 'id_task';  // Menambahkan primary key

    protected $fillable = [
        'id_proyek','nama_task', 'tanggal_start', 'tanggal_deadline', 'status', 'keterangan'
    ];

    /**
     * Relasi One to Many (HasMany) dengan MessageTask
     */



     
    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'id_proyek');
    }

    public function messageTasks()
    {
        return $this->hasMany(MessageTask::class, 'id_task');
    }



    /**
     * Relasi One to Many (HasMany) dengan AssignmentTask
     */
    public function assignmentTasks()
    {
        return $this->hasMany(AssignmentTask::class, 'id_task');
    }

    /**
     * Relasi One to Many (HasMany) dengan FileTask
     */
    public function fileTasks()
    {
        return $this->hasMany(FileTask::class, 'id_task');
    }
}
