<link rel="stylesheet" type="text/css" href="../style.css">
<head>
    <title>Data Undangan</title>
    <meta property="og:title" content="Adit & Gek Ari | Data Undangan Online">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://gusagung-gekari.TechnoBaseBali.com/images/gallery/gallery1.jpg">
        <meta property="og:url" content="https://gusagung-gekari.TechnoBaseBali.com/">
        <meta property="og:site_name" content="TechnoBase Bali">
        <meta property="og:description" content="Data Undangan">

</head>
<?php
error_log(0);
error_reporting(0);
ini_set('display_errors', 0);
$namatamu = ucwords($_GET['namatamu']);
$kehadiran = ucwords($_GET['kehadiran']);
$jumlah = ucwords($_GET['jumlah']);

$servername = "localhost:3306";
$username = "dev12345";
$password = "dev12345";
$dbname = "undangan";
	

//$servername = "localhost:3306";
//$username = "undangan_admin123";
//$password = "admin-168";
//$dbname = "undangan_undangan";


//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "tri-putri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO undangan (namatamu, kehadiran, jumlah)
VALUES ('$namatamu', '$kehadiran', $jumlah)";

if ($conn->query($sql) === TRUE) {
  echo "<CENTER><H2>DATA UNDANGAN</H2></CENTER>";
} else {
  echo "<CENTER><H2>DATA UNDANGAN</H2></CENTER>";
}

$i=1;
?>
 
 <?php 
$sql = "SELECT * FROM undangan order by datainput desc";
$result = $conn->query($sql);


 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Data Undangan</title>
  
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  
</head>
<body>


  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Status Kehadiran</th>
                <th>Jumlah Kehadiran</th>
                <th>Input Kehadiran</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Status Kehadiran</th>
                <th>Jumlah Kehadiran</th>
                <th>Input Kehadiran</th>
            </tr>
        </tfoot>
        <tbody>
<?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  ?><tr>
                <th><?php echo $i; ?></th>
                <td><?php echo $row["namatamu"];?></td>
                <td><?php echo $row["kehadiran"];?></td>
                <td><?php echo $row["jumlah"];?></td> 
			<td><?php echo $row["datainput"];?></td>
            </tr>
  <?php $i++;} 
} else {
  echo "0 results";
} $conn->close();?>

            
            
            
        </tbody>
    </table>
  
  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>

  
</body>
</html>