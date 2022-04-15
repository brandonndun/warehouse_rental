<?php
if(!isset($_GET["action"])){
echo "
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Input Data</h2>
    <form id='formMhs' method='post' action='handling.php?action=cek'>
        ID <input type='text' name='id'><br>
        Password <input type='password' name='pass'><br>
        <input type='submit' value='cek'>
    </form>
</body>
</html>
";
}
else {
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    if($id == "123" && $pass == "456"){
        echo "
        <h2>Selamat Datang</h2>
        ";
    }
    else{
        echo"
        <script>
            alert('Username atau password anda salah!');
            window.location.href = 'handling.php';
        </script>
        ";
    }
}
?>