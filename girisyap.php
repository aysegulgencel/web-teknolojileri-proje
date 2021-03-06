<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- fonta ait kütphane -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

    <!--girisyap.php nin css ye ulaşması için -->
    <link rel="stylesheet" href="css/style.css">


    <!-- ikon kodu -->
    <script src="https://kit.fontawesome.com/009ac2992e.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--menu kısmı başlangıç-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <a class="navbar-brand" href="#">B201210053| Ayşegül GENÇEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.html">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="havadurumu.html">Hava Durumu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="girisyap.php">Giriş Yap</a>
                </li>


            </ul>
        </div>

    </nav>
    <!--menu kısmı bitiş-->

    <?php
    
 if(isset($_GET['kuladi']))
 {
   $kuladi=$_GET['kuladi'];
 }
 
 else
 {
  $kuladi="";
  
 }
 
  ?>

    <div class="girisyap">

        <h2>GİRİŞ YAP</h2>

        <form id="form" action="dogrulama.php" method="POST">
            <div class="pc">

                <input type="text" value="<?php echo $kuladi;?>" name="kuladi" pattern=".+@sakarya.edu.tr" required="required">
                <span>KULLANICI ADI</span>
            </div>

            <div class="pc">

                <input type="password" name="sifre" required="required">
                <span>ŞİFRENİZ</span>
            </div>

            <div class="pc">
                <input type="submit" value="GÖNDER">
            </div>

        </form>
    </div>


    <br><br>




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>
