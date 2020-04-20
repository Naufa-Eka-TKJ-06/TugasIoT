<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $ttl=$_POST['ttl'];
    $aktivitas=$_POST['aktivitas'];
    $notelp=$_POST['notelp'];

    $result = mysqli_query($mysqli, "UPDATE alumni SET nama='$nama',jurusan='$jurusan',ttl='$ttl',aktivitas='$aktivitas',notelp='$notelp' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $jurusan = $user_data['jurusan'];
    $ttl = $user_data['ttl'];
    $aktivitas = $user_data['aktivitas'];
    $notelp = $user_data['notelp'];

}
?>


<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
            Nama: <input type="text" name="nama" value=<?php echo $nama;?>><br>
            Jurusan:<input type="text" name="jurusan" value=<?php echo $jurusan;?>><br>
            ttl:<input type="text" name="no_ttl" value=<?php echo $ttl?>><br>
            aktivitas:<input type="text" name="aktivitas" value=<?php echo $aktivitas;?>><br>
            notlep:<input type="text" name="notelp" value=<?php echo $notelp;?>><br>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>><br>
            <input type="submit" name="update" value="Update"><br>
    </form>
</body>
</html>
