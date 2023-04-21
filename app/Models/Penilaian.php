<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    Survei,
    Cluster
};

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';
    protected $guarded = ['id'];

    //penilaian dimiliki survei
    public function survei()
    {
        return $this->belongsTo(Survei::class, 'survei_id', 'id');
    }

    public function cluster()
    {
        return $this->belongsTo(Cluster::class, 'cluster_id', 'id');
    }
}