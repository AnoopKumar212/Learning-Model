<html>
<head>
<style>
    body
    {
      margin:0px;
      padding:0px;
    }
    table
    {
      border-collapse: collapse;
      width: 100%;
    }
    th, td
    {
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even)
    {
      background-color: #f2f2f2
    }
    th
    {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <table border='1'>
    <tr>
      <th><b>File Name</b></th>
      <th><b>Size</b></th>
    </tr>
<?php
foreach (glob("*.apk") as $filename) {
    echo "<tr><td><a href='$filename'>$filename</a></td><td>".filesize($filename)."</td></tr>";
}
?>
</body>
