<table class="inner">
  <thead>
    <tr>
      <th colspan="4" style="text-align: center; font-weight: bold; font-size: 1.2em;">ABSENSI</th>
    </tr>
    <tr>
      <th style="width:10%">No</th>
      <th>Nama</th>
      <th style="width:35%">Note</th>
      <th style="width:10%"></th>
    </tr>
  </thead>
  <tbody>
    <?php $count = count($absensi); ?>

    <?php foreach ($absensi as $i => $a): ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= htmlspecialchars($a['Name']) ?></td>
        <td class="editable" data-id="<?= $a['id'] ?>"><?= htmlspecialchars($a['Note']) ?></td>
        <td></td>
      </tr>
    <?php endforeach; ?>

    <!-- Baris input selalu ditampilkan di bawah -->
    <tr>
      <td><?= $count + 1 ?></td>
      <td>
        <div id="newName" contenteditable="true" style=" padding:4px;z-index:10;position:relative">&nbsp;</div>
      </td>
      <td>
        <div id="newNote" contenteditable="true" style="padding:4px;z-index:10;position:relative" onblur="submitNewAbsen()">&nbsp;</div>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>


<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.editable').forEach(cell => {
      cell.addEventListener('click', () => {
        if (cell.querySelector('input')) return;

        const currentText = cell.innerText;
        const input = document.createElement('input');
        input.type = 'text';
        input.value = currentText;
        cell.innerHTML = '';
        cell.appendChild(input);
        input.focus();

        input.addEventListener('blur', () => {
          const newValue = input.value;
          const id = cell.dataset.id;

          fetch('/absensi/update-note', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                id,
                note: newValue
              })
            })
            .then(res => res.json())
            .then(data => {
              if (data.success) {
                cell.innerText = newValue;
              } else {
                cell.innerText = currentText;
                alert('Gagal menyimpan');
              }
            });
        });
      });
    });
  });

  function submitNewAbsen() {
    const name = document.getElementById('newName').innerText.trim();
    const note = document.getElementById('newNote').innerText.trim();

    if (!name || !note) return;

    fetch('/absensi/create', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          Name: name,
          Note: note
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          location.reload();
        } else {
          alert('Gagal menambah data');
        }
      });
  }
</script>