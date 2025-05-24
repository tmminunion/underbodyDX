<?php

namespace App\Model\vm;

use App\Model\vm\checksheet;
use Illuminate\Database\Eloquent\Model;

class operatorlog extends Model
{
    protected $table = 'vm_operator_logs';
    protected $fillable = ['checksheet_id', 'tanggal', 'detail_problem', 'analisis_4m', 'ilustrasi_problem'];

    public function checksheet()
    {
        return $this->belongsTo(checksheet::class);
    }
}
