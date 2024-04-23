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
    <tr>
        <br>
        <td>PETUNJUK</td>
            <td><p>Pada halaman ini anda melihat ada 96 kata atau penyataan, masing-masing dalam kelompok terdiri
                dari 4 kata. Pilihlah satu kata atau pernyataan yang menurut anda PALING SESUAI dengan keadaan anda tulislah
                "M" pada kotak dibelakang kata atay pernyataan yang PALING TIDAK SESUAI dengan keadaan anda dan tulislah "L"
                pada kotak di belakang kata atau pernyataan tersebut.</p>
            </td>
    </tr>
    <tr>
        <td>PERLU DIINGAT BAHWA :</td>
        <P>1.   Analisis ini bukanlah suatu test. Tidak ada jawaban yang "benar" atau "salah".</p>
        <p>2.   Profile ini harus dikerjakan di tempat terpisah dan tanpa gangguan.</p>
        <p>3.   Pastikan Anda menyelesaikannya dengan berpikir bahwa Anda sedang dalam jabatan/tugas
            Anda saat ini. Bila anda sekarang tidak bekerja, anggaplah anda sedang berada di rumah.
    </tr>
    <br>
    <br>
    </div>
    <div>
        <button type="button" style="font-size:20px;" onclick="window.location.href='p1.php'";>Mulai</button>
    </div>  
</form>