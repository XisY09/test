
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
            width: 300px;
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
</head>
<body>
            <header style="margin:10px 0 0 20px";>
            <div style="flex:15">    
                <h2>Hi,...</h2>
                <p>jabatan</p>
            </div>
            <div>
                <button type="button" style="font-size:15px; margin-right:10px" >Logout</button>
            </div>
            </header>
    <div class="menu-container">
        <h2>Test</h2>
        <ul style="padding:0px 30px 0px 30px">
            <li class="menu-item"><a href="p1.php" class="menu-link">Psychology Test</a></li>
            <li class="menu-item"><a href="menu2.php" class="menu-link">Fluid Intelligence Test</a></li>
            <li class="menu-item"><a href="menu3.php" class="menu-link">Menu 3</a></li>
            <li class="menu-item"><a href="menu4.php" class="menu-link">Menu 4</a></li>
        </ul>
    </div>
</body>
</html>
