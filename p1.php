<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $name_db = "project";
    $conn = mysqli_connect ($host_db,$user_db,$pass_db,$name_db);

// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT no_soal, GROUP_CONCAT(isi SEPARATOR ', ') AS soal_kumpulan FROM soal_psy GROUP BY no_soal";
    $result = $conn->query($sql);


?>
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
*{
    margin:0px;
    padding:0px
}

header {
    display:flex;
}
/* CSS untuk styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}
.menu-container {
    width: 1000px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
}
.menu-item {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
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
button{
    background-color: transparent;
background-repeat: no-repeat;
border: none;
cursor: pointer;
overflow: hidden;
outline: none;
}
</style>
<header style="margin:10px 0 0 20px";>
            <div style="flex:15">    
                <h2>Hi,...</h2>
                <p>jabatan</p>
            </div>
            <div>
                <img src="asset/logo.png" alt="" style="width:150px; margin-right:550px">
            </div>
            <div>
                <button type="button" style="font-size:15px; margin-right:10px" >Logout</button>
            </div>
            </header>
<form action="p1proses.php">
<div class="menu-container">
<p>Soal Test Psychology</p>
    <br>
    <?php
        if ($result->num_rows > 0) {
            $groupedSoal = array();

            // Memproses setiap baris data
            while ($row = $result->fetch_assoc()) {
                // echo "No Soal " . $noSoal . ": " . implode(', ', $soalKumpulan) . "<br>";
    ?>
                <div class="" style="margin-bottom:15px;">
                    <label for="ops"> <?php echo $row['no_soal'] . ". ";?>
                    <?php
                       $soal_kumpulan = explode(",", $row['soal_kumpulan']);

                        foreach($soal_kumpulan as $soal){
                            echo $soal;
                    ?>
                        <select id="ops">
                            <option>..</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                        </select>
                    <?php
                        }
                    ?>
                </div>
    <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
    <div class="tombol">
                <button>Submit</button>
            <div>
</form>
</body>
</html>