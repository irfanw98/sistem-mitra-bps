<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    Survei,
    Penilaian
};

class Cluster extends Model
{
    use HasFactory;

    protected $table = 'cluster';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function survei()
    {
        return $this->belongsTo(Survei::class, 'survei_id', 'id');
    }

    public function penilaian()
    {
        return $this->hasOne(Penilaian::class);
    }

}