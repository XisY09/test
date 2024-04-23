<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Radio Button</title>
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
            width: 800px;
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
<div class="awal">
<tr>

<form>
  <div class="menu-container">
  <label for="option1.1">
    1.<input type="radio" id="option1.1" name="option" value="option1">
    Saya suka membaca buku
  </label><br>
  <label for="option1.2">
    <input type="radio" id="option1.2" name="option" value="option2">
    Saya sering bermain game
  </label><br>
  </div>
  <div class="menu-container">
  <label for="option2.1">
    2.<input type="radio" id="option2.1" name="option" value="option1">
    coba coba buku
  </label><br>
  <label for="option2.2">
    <input type="radio" id="option2.2" name="option" value="option2">
    ingin menuntut ilmu
  </div>
</form>

</body>
</html>
