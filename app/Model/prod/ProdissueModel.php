<?php

namespace App\Model\prod;


use App\Model\prod\ProduksiModel;
use Illuminate\Database\Eloquent\Model;

class ProdissueModel extends Model
{
    protected $table = 'production_issue';
    protected $primaryKey = 'id';
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';

    protected $fillable = [
        'lap_id',
        'date',
        'Nomer',
        'Start_time',
        'End_time',
        'Plan',
        'Act',
        'Diff',
        'Eff'
    ];

    /**
     * Relasi ke model LaporanProduksi (jika ada)
     */
    public function laporan()
    {
        return $this->belongsTo(ProduksiModel::class, 'lap_id');
    }
}
