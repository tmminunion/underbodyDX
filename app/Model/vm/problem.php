<?php

namespace App\Model\vm;

use App\Model\vm\checksheet;
use Illuminate\Database\Eloquent\Model;

class problem extends Model
{
    protected $table = 'vm_problems';
    protected $fillable = ['checksheet_id', 'item_problem', 'efek_ditimbulkan', 'keterangan'];

    public function checksheet()
    {
        return $this->belongsTo(checksheet::class);
    }
}
