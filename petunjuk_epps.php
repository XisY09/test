<html>
<head>
    <title>Test</title>    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
tr:hover {background-color: coral;}
</style>
<body>

<form action="" method="POST" name="form1">
    <div class="menu-container">
    <b>FORM</b>
    <td><h3>PEDOMAN</h3></td>
    <td><p>Pada halaman-halaman berikut, Saudara akan membaca sejumlah pertanyaan- pertanyaan dalam pasangan tentang pelbagai
    hal yang mungkin saudara suka lakukan atau tidak suka lakukan(inginkan atau tidak diinginkan).
    </td></P>
    </tr>
    <tr>
    <td>Perhatikan Contoh Di Bawah Ini :</td>
    <p>A. Saya suka berbicara tentang diri saya dengan orang lain</p>   
    <p>B. Saya suka bekerja untuk suatu tujuan yang telah saya tentukan bagi diri saya.</p>
    <p>Yang manakah dari dua pernyataan tersebut., lebih menggambarkan diri saudara ?<p>
    </tr>
    <tr>
    <td>
    <p>Bila saudara lebih suka"berbicara tentang diri Saudara dengan orang lain, 'dari pada' bekerja untuk suatu tujuan yang telah
        saudara tentukan bagi diri Saudara"; maka Saudara hendaknya memilih 'A'.
    <p>Tetapi, bila Saudara lebih suka "bekerja untuk suatu tujuan yang telah Saudara tentukan bagi diri Saudara, 'dari pada'
         berbicara tentang diri Saudara dengan orang-orang lain": maka Saudara hendaknya memilih 'B'.
    </p>
    <p>Mungkin Saudara suka 'A' dan 'B' kedua-duanya. Dalam hal ini Saudara tetap diharapkan akan memilih. Dan hendaknya Saudara memilih
            yang 'lebih' Saudara suka.
    </p>
   <p>
        Sekiranya Saudara tidak suka kedua-duanya, hendaknya Saudara memilih yang Saudara tidak 'terlalu' tidak suka.
   </p>
   <p>
        Beberapa pasangan pernyataan adalah mengenai hal-hal yang Saudara suka seperti 'A' dan 'B' di atas. Pasangan-pasangan lain adalah
        mengenai bagaimana perasaan Saudara.
   </p>
    </tr>
    </div>
    <div>
        <button type="button" style="font-size:20px;" onclick="window.location.href='p2.php'";>Mulai</button>
    </div>  
</form>