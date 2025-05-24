<?php

use Carbon\Carbon;
use App\Core\Controller;
use App\Models\prod\AddLaporan;
use App\Model\prod\ProduksiModel;
use App\Model\prod\ProdAbsensiModel;
use App\Model\prod\ProdissueModel;

class voice extends Controller
{
  public function index()
  {
    // Redirect ke halaman harian dengan tanggal hari ini
    $today = Carbon::now();
    $this->redirectToDaily($today->year, $today->month, $today->day);
  }


  public function member()
  {




    $data = [];

    return View("checksheet/voicemember", $data);
  }


  private function redirectToDaily($year, $month, $day)
  {
    // Format bulan dan hari dengan leading zero
    $month = str_pad($month, 2, '0', STR_PAD_LEFT);
    $day = str_pad($day, 2, '0', STR_PAD_LEFT);

    // Redirect ke URL harian
    header("Location: " . getBaseUrl() . "checksheet/produksi/harian/{$year}/{$month}/{$day}");
    exit();
  }
}
