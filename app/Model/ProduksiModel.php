<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProduksiModel extends Model
{
    protected $table = 'laporan_produksi';
    protected $primaryKey = 'id';
    public $timestamps = false; // karena kita tidak pakai updated_at, created_at default dari SQL

    protected $fillable = [
        'divisi_id',
        'kode_unik',
        'tanggal',
        'nama_produk',
        'jumlah',
        'created_at',
    ];

    // Optional: Scope untuk filter by tanggal
    public function scopeTanggal($query, $tanggal)
    {
        return $query->where('tanggal', $tanggal);
    }

    // Optional: Scope untuk filter by tahun dan bulan
    public function scopeTahunBulan($query, $tahun, $bulan)
    {
        return $query->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan);
    }

    // Optional: Scope untuk filter by divisi
    public function scopeDivisi($query, $divisi)
    {
        return $query->where('divisi_id', $divisi);
    }
}
