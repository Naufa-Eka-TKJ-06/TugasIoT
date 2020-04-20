<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM alumni ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<a href="tambah.php">Add New User</a><br><br>
    <table width='80%' border=1>
    <tr>
        <th>Nama</th> <th>Jurusan</th> <th>TTL</th> <th>Aktivitas</th> <th>NoTlp</th>  <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";
        echo "<td>".$user_data['ttl']."</td>";    
        echo "<td>".$user_data['aktivitas']."</td>"; 
        echo "<td>".$user_data['notelp']."</td>";       
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    <h2><a href="index.html">Go Back</a><h2>
    </table>
</body>
</html>
