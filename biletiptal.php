<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinema Salonu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            height: 100vh;
        }

        .form {
            border: 1px solid;
            border-radius: 20px;
            width: 600px;
            height: 360px;
            display: flex;
            margin-top: 20px;
            margin-left: 260px;
        }

        .form-text {
            margin-left: 65px;
            margin-top: 60px;
            font-size: 20px;
        }

        .form-text li {
            list-style-type: none;
        }

        .seans {
            margin: 20px;
            bottom: 122px;
            position: relative;
            left: 96px;
        }

        .seans select {
            font-size: 16px;
            margin: 5px;
            width: 100px;
            height: 25px;
            padding: 3px;
            display: inline-block;
            justify-content: center;
            cursor: pointer;
            color: black;
        }
    </style>

<body>
    <?php

    // Veritabanı bilgilerini girin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sinemasalon";

// Veritabanına bağlanın
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı hatasını kontrol edin
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
    
    ?>
    <!--navbar-->
    <div class="navbar">
        <div class="navbar-kapsayici">
            <div class="logo-kapsayici">
                <h1 class="logo">LOGO</h1>
            </div>
            <div class="menu-kapsayici">
                <ul class="menu-liste">
                    <li class="list-item active"><a href="index.php">Anasayfa</a></li>
                    <li class="list-item"><a href="#filmler">Filmler</a>
                        <ul class="menu-liste2">
                            <li class="alt-list-item"><a href="aksiyon.php">Aksiyon</a></li>
                            <li class="alt-list-item"><a href="dram.php">Dram</a></li>
                            <li class="alt-list-item"><a href="korku.php">Korku</a></li>
                            <li class="alt-list-item"><a href="gerilim.php">Gerilim</a></li>
                            <li class="alt-list-item"><a href="komedi.php">Komedi</a></li>
                            <li class="alt-list-item"><a href="bilim-kurgu.php">Bilim Kurgu</a></li>
                            <li class="alt-list-item"><a href="romantik.php">Romantik</a></li>
                            <li class="alt-list-item"><a href="animasyon.php">Animasyon</a></li>
                        </ul>
                    </li>
                    <li class="list-item"><a href="hakkimizda.html">Hakkımızda</a></li>
                    <li class="list-item"><a href="iletisim.html">İletişim</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!--navbar-->
    <!--sidebar-->
    <div class="sidebar">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
    </div>
    <!--sidebar-->
    <!--content-->
    <div class="form" id="form">
        <form action="biletiptal.php" method="POST">
            <div class="form-text">
                <p style="position: relative; bottom: 20px;">Film Adı:</p>
                <select name="film_adi" type="text" id="movshazam"
                    style="position: relative; cursor: pointer; font-size: 15px; font-weight: bold;background-color: white; color: black;width: 300px; height: 30px; left: 120px; bottom: 45px;">
                    <optgroup label="Aksiyon">
                        <option value="John Wick 4">John Wick 4</option>
                        <option value="Shazam Tanrıların Öfkesi">Shazam Tanrıların Öfkesi</option>
                        <option value="Asi">Asi</option>
                        <option value="65">65</option>
                    </optgroup>
                    <optgroup label="Dram">
                        <option value="CREED III : Efsane Devam Ediyor">CREED III : Efsane Devam Ediyor</option>
                        <option value="Hayata Röveşata Çeken Adam">Hayata Röveşata Çeken Adam</option>
                        <option value="Yaşamak">Yaşamak</option>
                        <option value="Sessiz Kız">Sessiz Kız</option>
                        <option value="Çaykovski'nin Karısı">Çaykovski'nin Karısı</option>
                    </optgroup>
                    <optgroup label="Korku">
                        <option value="Çığlık 6">Çığlık 6</option>
                        <option value="Haris">Haris</option>
                        <option value="Bed Rest">Bed Rest</option>
                        <option value="Öldüren Oyun">Öldüren Oyun</option>
                    </optgroup>
                    <optgroup label="Gerilim">
                        <option value="65">65</option>
                        <option value="Çıldırmış Ayı">Çıldırmış Ayı</option>
                        <option value="Kayıp">Kayıp</option>
                        <option value="Öldüren Oyun">Öldüren Oyun</option>
                    </optgroup>
                    <optgroup label="Komedi">
                        <option value="Ne Olacak Halim?">Ne Olacak Halim?</option>
                        <option value="Ulan Salih">Ulan Salih</option>
                        <option value="Özel Bir Hediye">Özel Bir Hediye</option>
                        <option value="Belki Evet, Belki Hayır">Belki Evet, Belki Hayır</option>
                    </optgroup>
                    <optgroup label="Bilim Kurgu">
                        <option value="65">65</option>
                        <option value="Öldüren Oyun">Öldüren Oyun</option>
                    </optgroup>
                    <optgroup label="Romantik">
                        <option value="Ne Olacak Halim?">Ne Olacak Halim?</option>
                        <option value="Belki Evet, Belki Hayır">Belki Evet, Belki Hayır</option>
                        <option value="Daha İyi Bir Yarın">Daha İyi Bir Yarın</option>
                    </optgroup>
                    <optgroup label="Animasyon">
                        <option value="Kaptan Porsuk Kayıp Hazinenin Peşinde">Kaptan Porsuk Kayıp Hazinenin Peşinde
                        </option>
                        <option value="Fındıkkıran ve Sihirli Flüt">Fındıkkıran ve Sihirli Flüt</option>
                        <option value="Hayaller Ülkesi: Gizemli Macera">Hayaller Ülkesi: Gizemli Macera</option>
                        <option value="Kahraman Kuyruklar">Kahraman Kuyruklar</option>
                    </optgroup>
                </select>
                <br>
                <br>
                <p style="position: relative; bottom: 45px;">Tarih Seç:</p>
                <input name="tarih"
                    style="width: 300px; font-size: 16px; height: 25px;position: relative; left: 120px; bottom: 70px;"
                    id="mydate" name="tarih" value="2023-04-14" type="date">
                <br>
                <br>

                <div>
                    <span style="position: relative; bottom: 75px; font-size: 19px;">Seans:</span>
                    <div class="seans">
                        <select name="seans" id="seans">
                            <option value="10.00">10.00</option>
                            <option value="13.00">13.00</option>
                            <option value="16.00">16.00</option>
                            <option value="19.00">19.00</option>
                            <option value="22.00">22.00</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <p style="position: relative; bottom: 170px;">Koltuk No:</p>
                <input type="text" onfocus="bilgi()" name = "koltuk_no"
                    style="width: 100px; height: 20px; position: relative; bottom: 195px; left: 120px; font-weight: bold;">
                <p id="bilgi"
                    style="position: relative; bottom: 180px; font-size: 16px; left: 120px; visibility: hidden; opacity: 0.7;">
                    *Biletinizdeki Koltuk No veya Koltuk No 'ları giriniz</p>
                <input type="submit" value="Bileti İptal Et" name = "buton"
                    style="width: 100px; height: 40px; background-color: darkslategrey; cursor: pointer; position: relative;bottom: 160px; left: 120px; font-size: 15px; font-weight: bold;">
                <!--content-->
                <script>
                    function bilgi() {
                        document.getElementById("bilgi").style.visibility = "visible";
                    }
                </script>
</body>
<?php
if(isset($_POST["buton"])){
    $sql = "DELETE FROM bilet_tablosu WHERE Filmadi = '{$_POST['film_adi']}' AND Seans = '{$_POST['seans']}' AND Tarih = '{$_POST['tarih']}' AND Koltukno = '{$_POST['koltuk_no']}'";
    $sonuc = mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>