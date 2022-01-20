<?php
    include "proses.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        $simpan = "INSERT INTO daftar(name,email,password,repassword) 
        VALUES('$name','$email','$password','$repassword')";


    $result = mysqli_query($koneksi,$simpan);

    if($result){
        echo "<script>alert('Data Telah Berhasil Disimpan');window.location='daftar.php'</script>";
    }
    }
?>