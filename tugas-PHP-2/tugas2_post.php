<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <style>
        .container-card{
            display:grid;
            justify-content: center;
         align-items: center;
         margin-top: 40px;
        }
        .card{
            width: 500px;
            border: solid 1px;
            padding: 30px;
        }
      .wrapper{
    display: flex;
    justify-content: space-between;
}
.info{
    text-align: center;
}
    .message-success {
         color: blue; 
        }
           .message-fail {
            color: red; 
        }
    </style>

</head>

<body>
    <?php

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $nama = $_POST["nama"];
       $username = $_POST["username"];
       $nim = $_POST["nim"];
       $nilai = $_POST["nilai"];
   
       $grade = "";
       if ($nilai >= 80) {
           $grade = "A";
       } elseif ($nilai >= 70) {
           $grade = "B";
       } elseif ($nilai >= 60) {
           $grade = "C";
       } elseif ($nilai >= 50) {
           $grade = "D";
       } else {
           $grade = "E";
       }
   
       $message = "";

    if ($grade === "A" || $grade === "B" || $grade === "C") {
        // Pesan lulus
        $message = "Selamat, Anda lulus Dengan Nilai  ";
        $message_class = "message-success";
    } else {
        // Pesan tidak lulus
        $message = "Maaf, Anda tidak lulus Dengan Nilai ";
        $message_class = "message-fail";    
    }
   }
    ?>
    <div class="container-card">
        <div class="card">
                <h2 style="text-align: center;">Data Mahasiswa</h3>
                  <div class="wrapper">
                <h4>Nama </h4>
                <h4><?php echo $nama;?></h4>
              </div>
              <div class="wrapper">
                <h4>Username</h4>
                <h4><?php echo $username;?></h4>
              </div>
              <div class="wrapper">
                <h4>NIM</h4>
                <h4><?php echo  $nim;?></h4>
              </div>
              <div class="wrapper">
                <h4>Score</h4>
                <h4><?php echo  $nilai;?></h4>
              </div>
              <div class="info">
                <h3 class="<?php echo $message_class; ?>"><?php echo $message , $grade;?></h3>          
              </div>
            </div>
    </div>
</body>

</html>