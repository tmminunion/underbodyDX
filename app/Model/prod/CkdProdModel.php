<?php

namespace App\Model\prod;


use App\Model\prod\ProduksiModel;
use Illuminate\Database\Eloquent\Model;

class CkdProdModel extends Model
{
    protected $table = 'prod_ckd';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'lap_id',
        'product_name',
        'type',
        'quantity',
        'date',
        'created_at',
        'update_at'
    ];

    public function laporan()
    {
        return $this->belongsTo(ProduksiModel::class, 'lap_id');
    }
}
