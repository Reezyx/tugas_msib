<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <style>
 body {
    font-family: Arial, sans-serif;
    display: grid;
    justify-content: center;
    align-items: center;
}

h1 {
  text-align: center;
}

form {
  border: 1px solid #ddd ;
  border-radius: 6px;
  padding: 50px;
  width: 500px;
  box-shadow: black;
}
label {
  display: block;
  margin-bottom: 5px;
}
input {
 width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}
.button-submit{
    text-align: center;
}
button {
  background-color: #008080;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 6px; 
}
button:hover {
  background-color: #006666;
}
    </style>


</head>

<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Data Diri</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Formulir Data Diri</h1>
  <form action="tugas2_post.php" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama  Anda">

    <label for="username">uername:</label>
    <input type="username" id="uername" name="username" placeholder="Masukkan Uername">

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" placeholder="Masukkan nomor nim Anda">

    <label for="Nilai">Nilai:</label>
    <input  id="nilai" name="nilai" placeholder="Masukkan nilai"></input>
    <div class="button-submit">
    <button type="submit">Kirim Data</button>
    </div>
</form>
</body>
</html>

</body>

</html>