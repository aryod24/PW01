<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi Dosen</title>
<style>
  table {
    border-collapse: collapse;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #4CAF50;
    color: white;
  }

  tr:hover {background-color: #f5f5f5;}

  tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<?php
$Dosen = [
  'nama' => 'Elok Nur Hamdana',
  'domisili' => 'Malang',
  'jenis_kelamin' => 'Perempuan'
];
?>
<h2>Informasi Dosen</h2>
<table>
  <tr>
    <th>Detail</th>
    <th>Informasi</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $Dosen['nama']; ?></td>
  </tr>
  <tr>
    <td>Domisili</td>
    <td><?php echo $Dosen['domisili']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
  </tr>
</table>
</body>
</html>
