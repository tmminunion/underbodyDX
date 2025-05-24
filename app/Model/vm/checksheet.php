<?php

namespace App\Model\vm;

use App\Model\vm\member;
use App\Model\vm\problem;
use App\Model\vm\PicAction;
use App\Model\vm\operatorlog;
use Illuminate\Database\Eloquent\Model;

class checksheet extends Model
{
    protected $table = 'vm_checksheets';
    protected $fillable = [
        'nama',
        'noreg',
        'pos_lokasi',
        'lama_bekerja_tahun',
        'status_enum',
        'pic_proses',
        'thema',
        'bulan'
    ];

    public function problems()
    {
        return $this->hasMany(problem::class);
    }

    public function operatorLogs()
    {
        return $this->hasMany(operatorlog::class);
    }

    public function picActions()
    {
        return $this->hasMany(PicAction::class);
    }

    public function members()
    {
        return $this->hasOne(member::class);
    }
}
