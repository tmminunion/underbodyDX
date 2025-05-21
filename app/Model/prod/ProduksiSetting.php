<?php

namespace App\Model\prod;

use Illuminate\Database\Eloquent\Model;

class ProduksiSetting extends Model
{
    protected $table = 'produksi_setting';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'key',
        'value',
        'user_id',
        'description'
    ];

    // Static function untuk mendapatkan nilai default berdasarkan key
    public static function getValue($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    // Bisa juga ambil semua sebagai associative array
    public static function allAsArray()
    {
        return self::pluck('value', 'key')->toArray();
    }
}
