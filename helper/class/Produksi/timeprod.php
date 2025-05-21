<?php

namespace App\Helper\Produksi;

use App\Model\prod\ProdissueModel;

class timeprod
{
    protected static array $templates = [
    'pagi' => [
        ['Nomer' => 1, 'start_time' => '07:20', 'end_time' => '08:20', 'Plan' => 35],
        ['Nomer' => 2, 'start_time' => '08:20', 'end_time' => '09:30', 'Plan' => 41],
        ['Nomer' => 3, 'start_time' => '09:40', 'end_time' => '10:40', 'Plan' => 36],
        ['Nomer' => 4, 'start_time' => '10:40', 'end_time' => '11:45', 'Plan' => 38],
        ['Nomer' => 5, 'start_time' => '12:30', 'end_time' => '13:30', 'Plan' => 35],
        ['Nomer' => 6, 'start_time' => '13:30', 'end_time' => '14:30', 'Plan' => 35],
        ['Nomer' => 7, 'start_time' => '14:40', 'end_time' => '15:40', 'Plan' => 35],
        ['Nomer' => 8, 'start_time' => '15:40', 'end_time' => '16:00', 'Plan' => 15],
        ['Nomer' => 9, 'start_time' => '16:15', 'end_time' => '17:15', 'Plan' => 35],
        ['Nomer' => 10, 'start_time' => '17:15', 'end_time' => '18:15', 'Plan' => 35],
        ['Nomer' => 11, 'start_time' => '18:30', 'end_time' => '19:30', 'Plan' => 35],
    ],
     'jumat' => [
        ['Nomer' => 1, 'start_time' => '07:20', 'end_time' => '08:20', 'Plan' => 35],
        ['Nomer' => 2, 'start_time' => '08:20', 'end_time' => '09:30', 'Plan' => 41],
        ['Nomer' => 3, 'start_time' => '09:40', 'end_time' => '10:40', 'Plan' => 36],
        ['Nomer' => 4, 'start_time' => '10:40', 'end_time' => '11:45', 'Plan' => 38],
        ['Nomer' => 5, 'start_time' => '13:00', 'end_time' => '14:00', 'Plan' => 35],
        ['Nomer' => 6, 'start_time' => '14:00', 'end_time' => '14:30', 'Plan' => 17],
        ['Nomer' => 7, 'start_time' => '14:40', 'end_time' => '15:40', 'Plan' => 35],
        ['Nomer' => 8, 'start_time' => '15:40', 'end_time' => '16:30', 'Plan' => 29],
        ['Nomer' => 9, 'start_time' => '16:15', 'end_time' => '17:15', 'Plan' => 35],
        ['Nomer' => 10, 'start_time' => '17:15', 'end_time' => '18:15', 'Plan' => 35],
        ['Nomer' => 11, 'start_time' => '18:30', 'end_time' => '19:30', 'Plan' => 35],
    ],
    'malam' => [
        ['Nomer' => 1, 'start_time' => '20:05', 'end_time' => '21:00', 'Plan' => 32],
        ['Nomer' => 2, 'start_time' => '21:00', 'end_time' => '22:00', 'Plan' => 35],
        ['Nomer' => 3, 'start_time' => '22:10', 'end_time' => '23:00', 'Plan' => 30],
        ['Nomer' => 4, 'start_time' => '23:00', 'end_time' => '00:00', 'Plan' => 35],
        ['Nomer' => 5, 'start_time' => '00:30', 'end_time' => '01:30', 'Plan' => 35],
        ['Nomer' => 6, 'start_time' => '01:30', 'end_time' => '02:30', 'Plan' => 36],
        ['Nomer' => 7, 'start_time' => '02:40', 'end_time' => '03:40', 'Plan' => 35],
        ['Nomer' => 8, 'start_time' => '03:40', 'end_time' => '04:45', 'Plan' => 38],
        ['Nomer' => 9, 'start_time' => '04:45', 'end_time' => '05:45', 'Plan' => 35],
        ['Nomer' => 10, 'start_time' => '05:45', 'end_time' => '06:45', 'Plan' => 35],
        ['Nomer' => 11, 'start_time' => '06:45', 'end_time' => '07:45', 'Plan' => 35],
    ],
];



    public static function insertShift(string $shift, string $date, int $lapId): void
    {
        if (!isset(self::$templates[$shift])) {
            throw new \InvalidArgumentException("Shift $shift tidak tersedia.");
        }

        foreach (self::$templates[$shift] as $row) {
            ProdissueModel::create([
                'lap_id'     => $lapId,
                'date'       => $date,
                'Nomer'      => $row['Nomer'],
                'Start_time' => $row['start_time'],
                'End_time'   => $row['end_time'],
                'Plan'       => $row['Plan'],
                'Act'        => 0,
                'Diff'       => 0,
                'Eff'        => 0,
            ]);
        }
    }
}