<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    User,
    Cluster,
    Penilaian
};

class Survei extends Model
{
    use HasFactory;

    protected $table = 'survei';
    protected $guarded  = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function cluster()
    {
        return $this->hasOne(Cluster::class);
    }

    //Survei memiliki satu penilaian
    public function penilaian()
    {
        return $this->hasOne(Penilaian::class);
    }

}