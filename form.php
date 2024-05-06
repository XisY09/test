<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        /* CSS untuk styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .menu-container {
            display:flex;
            justify-content: center;
            width: 700px;
            margin: 50px auto 0px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px 0px 20px 0px;
            flex-direction: column;
        }
        .menu-item {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .menu-item:last-child {
            border-bottom: none;
        }
        .menu-link {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }
        .menu-link:hover {
            color: #0066cc;
        }
        .tombol {
            margin: 30px auto 0px auto;
        }
    </style>
</head>
<body>
        <form action="form.php" class="menu-container" method="POST">
            <table style="margin:auto;" >
                <tr class="menu-item">
                    <td>NO WA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="60"></td>
                </tr>
                <tr class="menu-item">
                    <td>TANGGAL</td>
                    <td>:</td>
                    <td><input type="text" name="nim" size="60"></td>
                </tr>  
                <tr class="menu-item">
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" size="60"></td>
                </tr>
                <tr class="menu-item">
                    <td>JABATAN</td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" size="60"></td>
                </tr>
            </table>
            <div class="tombol">
                <input type="submit" name="form" value="Login">
            <div>
        </form>
</body>
</html>

<?php
if(isset($_POST['form'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
}
?>