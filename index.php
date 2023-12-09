<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>
 
<html>
<head>    
    <link rel="stylesheet" href="template/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Admin</title>
</head>
 
<body>
    <?php require 'template/navbar.php'; ?>

    <div class="container">
        <a class="tambah" href="add.php">Tambah Data</a><br/><br/>
    
        <table width='80%' border=1>
    
        <tr>
            <th>No.</th>
            <th>Nama</th> 
            <th>Alamat</th> 
            <th>Pekerjaan</th> 
            <th></th>
        </tr>
        <?php  
        $id = 1;
        while($data = mysqli_fetch_array($result)) {         
            echo "<tr><td>".$id++."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['pekerjaan']."</td>";    
            echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";        
        }
        ?>
        </table>
    </div>
</body>
</html>