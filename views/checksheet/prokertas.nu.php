<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daily Production Report</title>
  <style>
    body {
      margin: 0;
      background: #ccc;
    }
    .a3 {
      width: 420mm;
      height: 297mm;
      background: white;
      margin: auto;
      padding: 10mm;
      box-sizing: border-box;
      font-family: sans-serif;
      font-size: 12px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 2px 4px;
      text-align: center;
      vertical-align: middle;
    }
    .header {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .subheader {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .istirahat {
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="a3">
    <div class="header">DAILY PRODUCTION REPORT</div>
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
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Day Shift</th>
          <th>Plan</th>
          <th>Act</th>
          <th>Diff</th>
          <th>Line</th>
          <th>Problem</th>
          <th>Countermeasure / Temp. Act</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>07:20 - 08:20</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td>ST-2 Body Fortuner not fix -3</td><td></td></tr>
        <tr><td>2</td><td>08:20 - 09:20</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td></td><td></td></tr>
        <tr><td>3</td><td>09:20 - 10:40</td><td>38</td><td>34</td><td>-4</td><td>MST</td><td>ST-3 Body Nangkring</td><td></td></tr>
        <tr><td>4</td><td>10:40 - 11:45</td><td>118</td><td>111</td><td>-7</td><td>MST</td>
          <td>
            ST-6 Robot FBR Error -2<br>
            FBR 3-6 CT tip kerapekan -2<br>
            ST-3 No car type<br>
            ST-1 Body Nangkring -2
          </td>
          <td></td>
        </tr>
        <tr><td colspan="8" class="istirahat">ISTIRAHAT</td></tr>
        <tr><td>5</td><td>12:30 - 13:30</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td></td><td></td></tr>
        <tr><td>6</td><td>13:30 - 14:30</td><td>37</td><td>24</td><td>-13</td><td>MST</td><td></td><td></td></tr>
        <tr><td>7</td><td>14:30 - 15:40</td><td>89</td><td>67</td><td>-22</td><td>MST</td><td>ST-6 Slitter macet no.7</td><td></td></tr>
        <tr><td>8</td><td>15:40 - 16:50</td><td>284</td><td>263</td><td>-21</td><td>MST</td><td>ST-1 Slitter no.1 macet<br>Body full</td><td></td></tr>
        <tr><td>9</td><td>16:15 - 17:15</td><td>37</td><td>21</td><td>-16</td><td>MST</td><td></td><td></td></tr>
        <tr><td>10</td><td>17:15 - 18:15</td><td>36</td><td>32</td><td>-4</td><td>BAT</td><td>ST-6 Sudah dig Slitter take out no.4 insert no.5</td><td></td></tr>
        <tr><td>11</td><td>18:15 - 19:15</td><td>37</td><td>32</td><td>-5</td><td>MST</td><td></td><td></td></tr>
      </tbody>
    </table>

    <br>

    <table>
      <tr>
        <td>Absensi<br>1: ___<br>2: ___</td>
        <td>Stop Produksi: 17:41</td>
        <td>Working Time Normal<br>Day: 455 min<br>Night: 455 min</td>
        <td>Total Work Time: Normal + OT</td>
        <td>Efficiency:<br>Prod Act x T.T / Work Time x L/S Ext</td>
      </tr>
    </table>

    <br>

    <table>
      <tr>
        <td>Man-Hour</td>
        <td>Start: 18,589</td>
        <td>Finish: 20,635</td>
      </tr>
      <tr>
        <td colspan="3">No. Body: 6263 - 6935</td>
      </tr>
    </table>

    <br>

    <table>
      <tr>
        <td colspan="4">UNIT PRODUKSI</td>
      </tr>
      <tr>
        <td>INNOVA</td><td>149</td>
        <td>FORTUNER</td><td>137</td>
      </tr>
      <tr>
        <td>ZENNIX</td><td>132</td>
        <td>TOTAL</td><td>312</td>
      </tr>
    </table>
  </div>
</body>
</html>