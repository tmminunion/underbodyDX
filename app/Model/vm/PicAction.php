<?php

namespace App\Model\vm;

use App\Model\vm\checksheet;
use Illuminate\Database\Eloquent\Model;

class PicAction extends Model
{
    protected $table = 'vm_pic_actions';
    protected $fillable = ['checksheet_id', 'ilustrasi_penanggulangan', 'pic', 'sched', 'tgl_aplikasi', 'comment', 'signer', 'role'];

    public function checksheet()
    {
        return $this->belongsTo(checksheet::class);
    }
}
