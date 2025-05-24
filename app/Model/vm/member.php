<?php

namespace App\Model\vm;

use App\Model\vm\checksheet;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'vm_members';
    protected $fillable = ['checksheet_id', 'lh', 'gh', 'member'];

    public function checksheet()
    {
        return $this->belongsTo(checksheet::class);
    }
}
