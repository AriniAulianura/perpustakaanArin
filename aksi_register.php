<?php
include 'koneksi.php';

     if(isset($_POST['register'])){

         $nama = $_POST['nama'];
         $email = $_POST['email'];
         $no_telepon = $_POST['no_telepon'];
         $alamat = $_POST['alamat'];
         $username = $_POST['username'];
         $password = $_POST['password'];
         $level = $_POST['level'];
         
         $insert = mysqli_query($koneksi, "INSERT INTO user (nama,email,no_telepon,alamat,username,password,level) VALUES ('$nama','$email','$no_telepon','$alamat','$username','$password','$level')");

         if($insert){
             echo 
             '<script>
                 alert("Registrasi Berhasil");
                 location.href="login.php";
             </script>';
        }else{
             echo 
             '<script>
                 alert("Registrasi Gagal");
             </script>';
     }
 }
?>