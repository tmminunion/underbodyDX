<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dokumen A3 Responsif</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        padding: 0;
        margin: 0;
        overflow-x: hidden;
        touch-action: manipulation;
        height: 100vh;
        display: flex;
        flex-direction: column;
        
        background: #6a3093;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #a044ff, #6a3093);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #a044ff, #6a3093); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        overscroll-behavior: none;
      }
      
.transparent-navbar {
  background: linear-gradient(to bottom, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.3));
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  padding: 12px 24px;
  border-radius: 0 0 16px 16px;
  color: #f8f9fa;
}

.navbar-brand {
  font-weight: 600;
  font-size: 18px;
  color: #f8f9fa;
  display: flex;
  align-items: center;
  gap: 8px;
}

.navbar-nav .nav-link {
  color: #f8f9fa !important;
  margin-left: 15px;
  transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #facc15 !important; /* kuning keemasan */
}

      footer {
        background-color: #070bfb;
        padding: 15px 0;
        text-align: center;
        flex-shrink: 0;
        color: white;
      }

      .main-content {
        flex-grow: 1;
        overflow: auto;
        display: flex;
        justify-content: center;
        padding: 5px; /* Margin 5px */background: #83a4d4;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b6fbff, #83a4d4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        
      }

      .a3-container {
        
        position: relative;
        width: calc(100% - 10px); /* 5px margin kiri + 5px kanan */
        max-width: 297mm; /* Lebar A3 */
        margin: 5px;
        
      }

      .a3-page {
        width: 100%;
        height: 420mm; /* Tinggi A3 */
        max-height: 420mm;
        background-color: white;
        box-shadow:
    0 4px 6px rgba(0, 0, 0, 0.1),
    0 8px 12px rgba(0, 0, 0, 0.05),
    0 12px 20px rgba(0, 0, 0, 0.03);
        transform-origin: center top;
        transition: transform 0.1s ease;
      }

      .a3-content {
        padding: 10px;
        box-sizing: border-box;
      font-family: sans-serif;
      font-size: 1vw;
        height: calc(100% - 40mm);
      }

      .zoom-controls {
        position: fixed;
        bottom: 80px;
        right: 20px;
        z-index: 100;
      }

      .pan-area {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: move;
        cursor: grab;
        cursor: -webkit-grab;
      }

      .pan-area:active {
        cursor: grabbing;
        cursor: -webkit-grabbing;
      }
      .space {
        padding: 20px;
        margin: 30px;
      }
      

      .icon {
        cursor: pointer;
        font-size: 1.2rem;
        display: inline-block;
        width: 24px;
        height: 24px;
        line-height: 24px;
      }
      td:first-child {
        text-align: left;
      }
      .table-responsive {
        overflow-x: auto;
      }
      @media screen {
  .a3-page {
    width: 100%;
    height: auto;
    aspect-ratio: 296 / 420;
  }
}

@media print {
  .a3-page {
    width: 297mm;
    height: 420mm;
  }
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
          thead th {
        background-color: #cce5ff;
        position: sticky;
        top: 0;
      }
    .headerke {
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
    .floating-footer {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  background: radial-gradient(circle at center, rgba(255, 140, 0, 0.6), rgba(255, 165, 0, 0.4), rgba(255, 200, 0, 0));
  backdrop-filter: blur(1px);
  color: #333;
  text-align: center;
  padding: 10px;
  font-size: 14px;
  z-index: 1000;
  box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  border-radius: 10px;
}

table.outer {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid black;
    }

    table.outer td {
      vertical-align: top;
      border: none; /* Tanpa garis luar */
      
    }

    table.inner {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid black;
    }

    table.inner th, table.inner td {
      border: 1px solid black;
      padding: 6px;
      text-align: center;
    }

    </style>
  </head>
  <body>