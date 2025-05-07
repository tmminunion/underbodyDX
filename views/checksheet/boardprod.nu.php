@extends("layout.paperlayout")

<nu-table-header></nu-table-header>
<hr>
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

@section('scriptsfooter')
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
  $(function() {
    // Inisialisasi datepicker
    $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
    }).on('changeDate', function(e) {
      // Redirect ketika tanggal dipilih
      redirectToDate(e.date);
    });

    // Trigger untuk ikon kalender
    $('#calendar-icon').click(function() {
      $('.datepicker').datepicker('show');
    });

    // Fungsi untuk redirect ke URL dengan format yang diinginkan
    function redirectToDate(date) {
      const year = date.getFullYear();
      const month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
      const day = String(date.getDate()).padStart(2, '0');

      // Membangun URL
      const newUrl = `/checksheet/produksi/harian/${year}/${month}/${day}`;

      // Redirect ke URL baru
      window.location.href = newUrl;
    }

    // Set hari awal berdasarkan tanggal default (12-05-2025)
    const defaultDate = new Date(2025, 4, 12); // Note: Bulan dimulai dari 0 (Jan=0)
    // updateHariDisplay(defaultDate);

    // Fungsi untuk mengupdate tampilan hari (opsional)
    function updateHariDisplay(date) {
      const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      const dayIndex = date.getDay();
      $('#hari-display').text(days[dayIndex]);
    }
  });
</script>

@endsection


@section('scriptsheader')

<link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
@endsection