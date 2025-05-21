<?php

namespace App\Models\prod;

use App\Model\prod\ProduksiModel;
use App\Model\prod\ProduksiSetting;
use App\Helper\Produksi\timeprod;

class AddLaporan
{
    public static function addnew($kode_unik, $tanggal)
    {
        $laporan = ProduksiModel::create([
            'Unique'          => $kode_unik,
            'Tanggal'         => $tanggal,
            'Line'            => ProduksiSetting::getValue('line'),
            'Pic'             => ProduksiSetting::getValue('pic'),
            'Shift'           => 1,
            'Takttime'        => ProduksiSetting::getValue('takttime'),
            'Workday'         => 1,
            'Start_time'      => '00:00',
            'Total_Produksi'  => 0,
            'Plan_Produksi'   => 0,
            'Stop_Produksi'   => '00:00',
            'Overtime'        => 0,
            'NB_Start'        => '00000',
            'NB_Finish'       => '00000',
            'NS_Start'        => '000',
            'NS_Finish'       => '000',
            'Plan_Eff'        => 0,
            'Act_Eff'         => 0,
            'Eff_in'          => 0,
            'Eff_ex'          => 0,
        ]);

        // Gunakan ID dari laporan yang baru saja dibuat
        timeprod::insertShift('pagi', $tanggal, $laporan->id);
    }
}