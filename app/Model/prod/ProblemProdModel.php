<?php

namespace App\Model\prod;


use App\Model\prod\ProdissueModel;
use Illuminate\Database\Eloquent\Model;

class ProblemProdModel extends Model
{
    protected $table = 'production_problem';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'issue_id',
        'lap_id',
        'Nomer',
        'line',
        'problem',
        'Delay',
        'delayminute',
        'Takttime',
        'countermeasure',
        'created_at',
        'update_at',
    ];

    /**
     * Relasi ke ProductionIssue (Many to One)
     */
    public function issue()
    {
        return $this->belongsTo(ProdissueModel::class, 'issue_id');
    }
}
