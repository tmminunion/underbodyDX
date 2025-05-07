@extends("layout.paperlayout")
  
  <div class="headerke"><h1>DAILY PRODUCTION REPORT</h1></div>
    <div class="subheader">
      <div>
        <div>Date: 16-04-2025</div>
        <div>Line: UB ENCOPA</div>
      </div>
      <div>
        <div>Shift: RED</div>
        <div>PIC: SLAMET.H</div>
      </div>
    </div>

 <nu-table-produksi></nu-table-produksi>

    <br>
<table class="outer">
  <tr>
       <td style="width: 40%;">
  <nu-table-promod></nu-table-promod>
  <br>
    <nu-table-prodckd></nu-table-prodckd>
  <br>
  <nu-table-absen></nu-table-absen>
    </td>
    <td>&nbsp;</td>
    <td style="width: 50%;">
<nu-table-nobo></nu-table-nobo>
    </td>
  </tr>
</table>




    <br>


<!-- Selesai -->