<?php  
 $sumber = 'http://papaside.com/data.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Prakiraan cuaca hari ini di ".count($data)." Daerah</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
 <table border="1">
  <tr>
   <th>No</th>
   <th>Kota</th>
   <th>Siang</th>
   <th>Malam</th>
   <th>Dinihari</th>
   <th>Suhu</th>
   <th>Kelembapan</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['Kota']."</td>";
    print "<td>".$data[$a]['siang']."</td>";
    print "<td>".$data[$a]['malam']."</td>";
    print "<td>".$data[$a]['dini_hari']."</td>";
    print "<td>".$data[$a]['suhu']."</td>";
    print "<td>".$data[$a]['Kelembapan']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>