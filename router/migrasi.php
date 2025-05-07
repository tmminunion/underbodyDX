<?php

use App\Core\Controller;
use App\Model\ProduksiModel;

class migrasi extends Controller
{
    public function index()
    {
        ProduksiModel::create([
            'divisi_id'   => 'DIVISI1 via adreses',
            'kode_unik'   => 'DIVISI1_' . date('Ymd_His') . '_' . uniqid(),
            'tanggal'     => date('Y-m-d'),
            'nama_produk' => 'Produk A',
            'jumlah'      => 100,
        ]);
    }
}
