<?php

namespace App\Model\prod;


use App\Model\prod\ProduksiModel;
use Illuminate\Database\Eloquent\Model;


class ProdAbsensi extends Model
{
    protected $table = 'prod_absensi';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'lap_id',
        'Name',
        'Noreg',
        'Note',
        'date',
        'created_at',
        'update_at'
    ];

    public function laporan()
    {
        return $this->belongsTo(ProduksiModel::class, 'lap_id');
    }
}
