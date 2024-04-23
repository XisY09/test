<?php
// Mulai sesi
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "test";
$koneksi = mysqli_connect ($host_db,$user_db,$pass_db,$name_db);

$err = "";
$username = "";
$ingataku = "";

// Cek apakah pengguna sudah login atau belum
if(isset($_SESSION['username'])) {
    header("Location: menu.php");
    exit;
}

// Cek apakah ada data yang dikirimkan melalui form
if(isset($_POST['login'])) {
    // Simpan data form ke variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Contoh: Validasi username dan password
    if($username === 'user' && $password === 'password') {
        // Simpan username ke sesi
        $_SESSION['username'] = $username;
        
        // Redirect ke halaman selamat datang
        header("Location: menu.php");
        exit;
    } else {
        // Jika username atau password tidak cocok
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 300px;
        }
        
        h2 {
            text-align: center;
        }
        
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Form</h2>

    <?php if(isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form method="post" action="form.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>

</body>
</html>