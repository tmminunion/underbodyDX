<table border="1" cellpadding="5" cellspacing="0" style="width:100%; border-collapse:collapse;">
<thead>
    <tr>
        <th style="width:3%">No</th>
        <th style="width:12%">Day Shift</th>
        <th style="width:6%">Plan</th>
        <th style="width:6%">Act</th>
        <th style="width:6%">Diff</th>
        <th style="width:12%">Line</th>
        <th>Problem</th>
        <th style="width:20%">Countermeasure / Temp. Act</th>
    </tr>
</thead>
<tbody>
<?php 
$i = 0;
$planCumulative = 0;
$actCumulative = 0;
$diffCumulative = 0;

foreach ($issues as $nomer => $rows): 
    $row1 = $rows[0] ?? null;
    $row2 = $rows[1] ?? null;

    // Komulatif
    $planCumulative += $row1->Plan ?? 0;
    $actCumulative += $row2->Act ?? 0;
    $diffCumulative += $row2->Diff ?? 0;

    $i++;
?>
<tr>
    <td rowspan="2"><?= $nomer ?></td>
    <td rowspan="2"><?= date('H:i', strtotime($row1->Start_time)) ?> - <?= date('H:i', strtotime($row1->End_time)) ?></td>
    <td class="text-left"><?= $row1->Plan ?></td>
    <td class="text-left"><?= $row1->Act ?></td>
    <td class="text-left"><?= $row1->Diff ?></td>
    <td rowspan="2">MST</td>
    <td rowspan="2"><?= $row1->Problem ?? '' ?></td>
    <td rowspan="2"><?= $row1->Countermeasure ?? '' ?></td>
</tr>
<tr>
    <td style="text-align: right;"><?= $planCumulative ?></td>
    <td style="text-align: right;"><?= $actCumulative ?></td>
    <td style="text-align: right;"><?= $diffCumulative ?></td>
</tr>

<?php if ($i === 4): ?>
<tr>
    <td></td>
    <td>11:45 - 12:30</td>
    <td colspan="6">ISTIRAHAT</td>
</tr>
<?php endif; ?>
<?php endforeach; ?>
</tbody>
</table>
   
   
   <p>
