<?php

namespace App\Model\prod;


use App\Model\prod\ProduksiModel;
use Illuminate\Database\Eloquent\Model;

class UnitProdModel extends Model
{
    protected $table = 'prod_model';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'lap_id',
        'product_name',
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
