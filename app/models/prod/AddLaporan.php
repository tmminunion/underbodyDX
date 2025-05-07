<?php

namespace  App\Models\prod;

use App\Model\prod\ProduksiModel;
use App\Model\prod\ProduksiSetting;

class AddLaporan
{
    public static function addnew($kode_unik, $tanggal)
    {
        $laporan = ProduksiModel::create([
            'Unique' => $kode_unik,
            'Tanggal' => $tanggal,
            'Line' => ProduksiSetting::getValue('line'),         // default placeholder
            'Pic' => ProduksiSetting::getValue('pic'),           // default placeholder
            'Shift' => 1,              // default
            'Takttime' => ProduksiSetting::getValue('takttime'),     // default
            'Workday' => 1,            // default
            'Start_time' => '00:00',   // default
            'Total_Produksi' => 0,
            'Plan_Produksi' => 0,
            'Stop_Produksi' => '00:00',
            'Overtime' => 0,
            'NB_Start' => '00000',
            'NB_Finish' => '00000',
            'NS_Start' => '000',
            'NS_Finish' => '000',
            'Plan_Eff' => 0,
            'Act_Eff' => 0,
            'Eff_in' => 0,
            'Eff_ex' => 0,
        ]);
    }
}
