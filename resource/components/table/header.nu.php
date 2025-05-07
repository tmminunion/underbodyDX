<table>
    <tr>
        <td class="text-center">
            <h1>DAILY PRODUCTION REPORT</h1>
        </td>
        <td style="width: 25%;">
            <table>
                <tbody>
                    <tr>
                        <td style="width: 25%;">Line</td>
                        <td>UB Assy</td>
                    </tr>
                    <tr>
                        <td>P.I.C</td>
                        <td>NUNU F</td>
                    </tr>

                    <tr>
                        <td>Shift</td>
                        <td>White</td>
                    </tr>

                </tbody>
            </table>
        </td>
    </tr>
</table>


<table class="mt-1">
    <tr>
        <th style="width: 6%;">Day</th>
        <td style="width: 10%; height: 100%;  align-items: center; justify-content: center;" id="hari-display">
            <h5 style="margin: 0;"><?= $namahari; ?></h5>
        </td>
        <td style="width: 1%;"></td>
        <th style="width: 10%;">Tanggal</th>
        <td style="width: 20%;" id="tanggal-display">
            <input value="<?= $tanggal; ?>" type="text" class="form-control datepicker butonup" name="tgl_akhir" style="width: 100%; padding: 0.25rem 0.5rem; border: 0px solid #ced4da;">
        </td>
        <td style="width: 2%;">
            <i class="fa fa-calendar" style="cursor:pointer;"></i>

        </td>
        <td style="width: 1%;"></td>
        <th style="width: 10%;">Workday</th>
        <td style="width: 8%;">
            <select class="form-select form-select-sm" id="shift-select" style="width: 100%; padding: 0.25rem 0.5rem; border: 0px solid #ced4da;z-index:10;position:relative">
                <option value="DAY" selected>Day</option>
                <option value="Night">Night</option>
            </select>
        </td>
        <td style="width: 1%;"></td>
        <td>


        </td>
        <td style="width: 1%;"></td>
        <th style="width: 10%;">Takt Time</th>
        <td style="width: 7%;">1,6</td>
    </tr>
</table>