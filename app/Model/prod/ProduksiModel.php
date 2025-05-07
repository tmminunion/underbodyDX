<?php

namespace App\Model\prod;

use App\Model\prod\CkdProdModel;
use App\Model\prod\UnitProdModel;
use Illuminate\Database\Eloquent\Model;

class ProduksiModel extends Model
{
    protected $table = 'laporan_produksi';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'Unique',
        'Line',
        'Pic',
        'Shift',
        'Tanggal',
        'Takttime',
        'Workday',
        'Start_time',
        'Total_Produksi',
        'Plan_Produksi',
        'Stop_Produksi',
        'Overtime',
        'NB_Start',
        'NB_Finish',
        'NS_Start',
        'NS_Finish',
        'Plan_Eff',
        'Act_Eff',
        'Eff_in',
        'Eff_ex'
    ];

    // Optional: Scope untuk filter by tanggal
    public function scopeTanggal($query, $tanggal)
    {
        return $query->where('tanggal', $tanggal);
    }

    // Optional: Scope untuk filter by tahun dan bulan
    public function scopeTahunBulan($query, $tahun, $bulan)
    {
        return $query->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan);
    }

    public function issues()
    {
        return $this->hasMany(ProdissueModel::class, 'lap_id');
    }
    public function problems()
    {
        return $this->hasMany(ProblemProdModel::class, 'lap_id');
    }
    public function ckd()
    {
        return $this->hasMany(CkdProdModel::class, 'lap_id');
    }
    public function unitprod()
    {
        return $this->hasMany(UnitProdModel::class, 'lap_id');
    }
}
