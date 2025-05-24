@extends("layout.paperlayout")

<?php
$this->block('title', 'Voice Member');

?>


<nu-voice-tbhead></nu-voice-tbhead>
<br>
<nu-voice-title>PIC : OPERATOR</nu-voice-title>
<nu-voice-main></nu-voice-main>
<br>
<nu-voice-title>PIC LINE HEAD / GROUP HEAD</nu-voice-title>
<nu-voice-countermeasure></nu-voice-countermeasure>

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