<?php
// scanner.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QR Code Scanner</title>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
  <style>
    body {
      background-color: #0a3d2f;
      font-family: Arial, sans-serif;
      color: white;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    #reader {
      width: 300px;
      margin: 0 auto;
    }

    #result-box {
      margin-top: 30px;
      background-color: #fff;
      color: #000;
      padding: 20px;
      border-radius: 10px;
      display: none;
    }

    table {
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 6px;
    }
  </style>
</head>
<body>

  <h1>Scan Visitor QR Code</h1>

  <div id="reader"></div>

  <div id="result-box">
    <h3>Visitor Info</h3>
    <div id="visitor-info">Loading...</div>
  </div>

  <script>
    function fetchVisitorInfo(code) {
      fetch("fetch_visitor.php?id=" + encodeURIComponent(code))
        .then(response => response.text())
        .then(data => {
          document.getElementById("visitor-info").innerHTML = data;
          document.getElementById("result-box").style.display = 'block';
        })
        .catch(err => {
          document.getElementById("visitor-info").innerHTML = "Error fetching data.";
        });
    }

    const scanner = new Html5QrcodeScanner(
      "reader",
      { fps: 10, qrbox: 250 }
    );

    scanner.render((qrCodeMessage) => {
      scanner.clear(); // stop scanning
      fetchVisitorInfo(qrCodeMessage); // e.g. VISIT-20250726-1234
    });
  </script>

</body>
</html>
