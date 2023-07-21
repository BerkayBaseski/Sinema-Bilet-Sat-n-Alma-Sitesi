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
        * {
            scroll-behavior: smooth;
        }

        body {
            height: 0vh;
        }

        .form {
            border: 1px solid;
            border-radius: 20px;
            width: 600px;
            height: 420px;
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
            bottom: 218px;
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

        .koltuk-text {
            transition: 0.5s all ease-in;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }

        .koltuk-text:hover {
            transform: scale(1.1);
            color: red;
        }

        .koltuk {
            width: 500px;
            height: 420px;
            margin-top: 40px;
            border: 1px solid;
            position: relative;
            border-radius: 10px;
            bottom: 20px;
            right: 80px;
            visibility: hidden;
        }

        .koltuk1.selected {
            background-color: goldenrod;
        }

        .koltuk1.reserved {
            background-color: gray;
        }

        .koltuk1 {
            background-color: green;
            font-size: 16px;
            margin: 2px;
            width: 30px;
            height: 30px;
            cursor: pointer;
            position: relative;
            right: 6px;
            border-radius: 5px;
        }

        .koltuk1 p {
            position: relative;
            text-align: center;
            top: 3px;
        }

        .koltuklar {
            position: relative;
            left: 40px;
        }

        .sol {
            position: relative;
            right: 24px;
            font-size: 16px;
        }

        .sağ {
            position: relative;
            left: 10px;
            font-size: 16px;
        }

        .sonuc {
            width: 400px;
            height: 250px;
            border: 1px solid;
            position: relative;
            left: 550px;
            font-size: 16px;
            bottom: 250px;
            visibility: hidden;
        }

        .sonuc-text p {
            position: relative;
            left: 100px;
        }
    </style>
</head>

<body>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sinemasalon";

// MySQL veritabanıyla bağlantı oluşturma
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı kontrolü
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
        <form action="" method="GET">
            <div class="form-text">
                <h4 style="position: relative; bottom: 20px;">Film Adı:</h4>
                <input name="film" type="text" id="movshazam"
                    style="position: relative; font-size: 15px; font-weight: bold;background-color: white; color: black;width: 300px; height: 25px; left: 120px; bottom: 45px;"
                    type="text" value="Hayaller Ülkesi" readonly="readonly">
                <br>
                <br>
                <ul>
                    <li>
                        <h4 style="position: relative; bottom: 45px;">TAM</h4>
                        <span style="position: relative;
                        bottom: 70px; left: 120px;">
                            <span
                                style="z-index: 3; color:  black; position: relative; left: 10px; top: 2px; font-size: 18px;">155TL</span>
                            <div
                                style=" border: 1px solid; background-color: white; width: 300px; height: 25px;position: relative; bottom: 22px;">
                            </div>
                            <input value="0" name="tam" id="tam" type="number" max="10" min="0"
                                style="width: 30px; height: 25px; font-size: 18px; position: relative; bottom: 50px; left: 310px; "></input>
                        </span>
                    </li>
                    <li>
                        <h4 style="position: relative; bottom: 95px;">ÖĞRENCİ</h4>
                        <span style="position: relative;
                        bottom: 70px; left: 120px;">
                            <span
                                style="z-index: 3; color: black; position: relative; left: 10px; bottom: 48px; font-size: 18px;">105TL</span>
                            <div
                                style=" border: 1px solid; background-color: white; width: 300px; height: 25px;position: relative; bottom: 72px;">
                            </div>
                            <input value="0" name='ogrenci' id="ogrenci" type="number" max="10" min="0"
                                style="width: 30px; height: 25px; font-size: 18px; position: relative; bottom: 100px; left: 310px; "></input>
                        </span>

                    </li>
                </ul>
                <h4 style="position: relative; bottom: 147px;">Tarih Seç:</h4>
                <input name="tarih"
                    style="width: 300px; font-size: 16px; height: 25px;position: relative; left: 120px; bottom: 170px;"
                    id="mydate" name="tarih" value="2023-04-14" type="date">
                <br>
                <br>

                <div>
                    <span style="position: relative; bottom: 170px; font-size: 18px;">Seanslar</span>
                    <div class="seans">
                        <select name="seans" id="seans">
                            <option value="13.00">13.00</option>
                            <option value="16.00">16.00</option>
                        </select>
                    </div>
                </div>
                <div style="position: relative; bottom: 150px; left: 10px;" class="koltuk-text" onclick="goster()">
                    ----Koltuk seçimi için lütfen tıklayınız----</div>
                <h1 id="deneme"></h1>
                <h2 style="position: relative; visibility: hidden; right: 50px; bottom: 40px; border-bottom: 1px solid;"
                    id="goster2">Koltuk Seçimi</h2>
                <div class="koltuk" id="goster" onclick="secim()">
                    <h3 style="margin: 20px; font-size: 18px;">Koltuk Seçiniz</h3>
                    <table class="koltuklar">
                        <tr>
                            <th class="sol">E</th>

                            <td>
                                <div data-seat="E10" class="koltuk1">
                                    <p>10</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E09" class="koltuk1">
                                    <p>09</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E08" class="koltuk1">
                                    <p>08</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E07" class="koltuk1">
                                    <p>07</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E06" class="koltuk1">
                                    <p>06</p>
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>
                                <div data-seat="E05" class="koltuk1">
                                    <p>05</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E04" class="koltuk1">
                                    <p>04</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E03" class="koltuk1">
                                    <p>03</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E02" class="koltuk1">
                                    <p>02</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="E01" class="koltuk1">
                                    <p>01</p>
                                </div>
                            </td>
                            <th class="sağ">E</th>
                        </tr>
                        <tr>
                            <th class="sol">D</th>
                            <td>
                                <div data-seat="D10" class="koltuk1">
                                    <p>10</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D09" class="koltuk1">
                                    <p>09</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D08" class="koltuk1">
                                    <p>08</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D07" class="koltuk1">
                                    <p>07</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D06" class="koltuk1">
                                    <p>06</p>
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>
                                <div data-seat="D05" class="koltuk1">
                                    <p>05</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D04" class="koltuk1">
                                    <p>04</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D03" class="koltuk1">
                                    <p>03</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D02" class="koltuk1">
                                    <p>02</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="D01" class="koltuk1">
                                    <p>01</p>
                                </div>
                            </td>
                            <th class="sağ">D</th>
                        </tr>
                        <tr>
                            <th class="sol">C</th>
                            <td>
                                <div data-seat="C10" class="koltuk1">
                                    <p>10</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C09" class="koltuk1">
                                    <p>09</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C08" class="koltuk1">
                                    <p>08</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C07" class="koltuk1">
                                    <p>07</p>
                                </div>
                            </td>
                            <td>
                                <div id="C06" class="koltuk1">
                                    <p>06</p>
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>
                                <div data-seat="C05" class="koltuk1">
                                    <p>05</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C04" class="koltuk1">
                                    <p>04</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C03" class="koltuk1">
                                    <p>03</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C02" class="koltuk1">
                                    <p>02</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="C01" class="koltuk1">
                                    <p>01</p>
                                </div>
                            </td>
                            <th class="sağ">C</th>
                        </tr>
                        <tr>
                            <th class="sol">B</th>
                            <td>
                                <div data-seat="B10" class="koltuk1">
                                    <p>10</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B09" class="koltuk1">
                                    <p>09</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B08" class="koltuk1">
                                    <p>08</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B07" class="koltuk1">
                                    <p>07</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B06" class="koltuk1">
                                    <p>06</p>
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>
                                <div data-seat="B05" class="koltuk1">
                                    <p>05</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B04" class="koltuk1">
                                    <p>04</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B03" class="koltuk1">
                                    <p>03</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B02" class="koltuk1">
                                    <p>02</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="B01" class="koltuk1">
                                    <p>01</p>
                                </div>
                            </td>
                            <th class="sağ">B</th>
                        </tr>
                        <tr>
                            <th class="sol">A</th>
                            <td>
                                <div data-seat="A10" class="koltuk1">
                                    <p>10</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A09" class="koltuk1">
                                    <p>09</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A08" class="koltuk1">
                                    <p>08</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A07" class="koltuk1">
                                    <p>07</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A06" class="koltuk1">
                                    <p>06</p>
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>
                                <div data-seat="A05" class="koltuk1">
                                    <p>05</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A04" class="koltuk1">
                                    <p>04</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A03" class="koltuk1">
                                    <p>03</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A02" class="koltuk1">
                                    <p>02</p>
                                </div>
                            </td>
                            <td>
                                <div data-seat="A01" class="koltuk1">
                                    <p>01</p>
                                </div>
                            </td>
                            <th class="sağ">A</th>
                        </tr>
                    </table>

                    <div
                        style="border: 1px solid; background-color: red; width: 300px; height: 80px;position: relative; top: 20px; left: 110px;">
                        <h4 style="text-align: center; position: relative; top: 30px; cursor:default;">PERDE</h4>
                    </div>
                    <div id="select-seat-button" onclick="son()"
                        style="border: 1px solid; font-size: 20px; background-color: darkslategrey; width: 140px; position: relative; height: 25px; left: 180px; top: 45px; color: white; border-radius: 10px; cursor: pointer;">
                        <p style="font-size: 18px; margin-left: 12px; margin-top: 2px;">ÖZET GÖSTER</p>
                    </div>
                    <div class="sonuc" id="sonucgoster">
                        <div class="sonuc-text">
                            <h3 style="margin: 15px;">Özet</h3>
                            <div style="font-weight: bold; position: relative; left: 20px; top: 20px;">Film Adı:</div>
                            <p id="filmadi"></p>
                            <div style="font-weight: bold; position: relative; left: 20px; top: 20px;">Tarih:</div>
                            <p id="tarih"></p>
                            <div style="font-weight: bold; position: relative; left: 20px; top: 18px;">Seans:</div>
                            <p id="saat" style="position: relative; left: 145px;"></p>
                            <div style="font-weight: bold; position: relative; left: 20px; top: 20px;">Toplam Tutar:
                            </div>
                            <input type="text" value="" style="position: relative; left: 145px;" name="toplam" id="toplam"readonly="readonly">
                            <div style="font-weight: bold; position: relative; left: 20px; top: 20px;">Koltuk No:</div>
                            <input style="position: relative; left: 145px; font-weight: bolder; bottom: 5px; "
                                id="koltuk" name = "koltuk" value="" readonly="readonly">
                            <input type="submit" name="buton"
                                style="position: relative; font-size: 18px; background-color: cadetblue; top: 50px; width: 100px; height: 30px; cursor: pointer;"
                                value="BİLETİ AL">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--content-->
    <script>
        function goster() {
            document.getElementById("goster2").style.visibility = "visible";
            document.getElementById("goster").style.visibility = "visible";
            window.scrollTo(999, 900);

            const seats = document.querySelectorAll('.koltuk1');

            var a = document.getElementById("tam").value;
            var b = document.getElementById("ogrenci").value;

            const toplam = Number(Number(a) + Number(b));

            var sayac = 0;
            // Koltukların tıklanabilirliğini etkinleştir
            seats.forEach((seat) => {
                seat.addEventListener('click', () => {
                    // Koltuğun seçili durumunu kontrol et
                    sayac++;
                    if (sayac <= toplam) {
                        if (seat.classList.contains('selected')) {
                        } else {
                            seat.classList.add('selected');
                        }
                    }
                });
            });

            const selectSeatButton = document.getElementById('select-seat-button');
            selectSeatButton.addEventListener('click', () => {
                const selectedSeats = document.querySelectorAll('.selected');
                const seatCodes = [];
                // Seçili koltukların kodlarını bir diziye kaydet
                selectedSeats.forEach((seat) => {
                    seatCodes.push(seat.dataset.seat);

                });
                document.getElementById("koltuk").value = seatCodes;
            });

            var x = document.getElementById("seans").value;
            document.getElementById("saat").innerHTML = x;
        }

        function goster2() {

        }

        function son() {
            document.getElementById("sonucgoster").style.visibility = "visible";

            const filmadi = document.getElementById("movshazam").value;
            var x = document.getElementById("mydate").value;
            var a = document.getElementById("tam").value;
            var b = document.getElementById("ogrenci").value;

            document.getElementById("filmadi").innerHTML = filmadi;
            document.getElementById("tarih").innerHTML = x;
            document.getElementById("toplam").value = Number((a * 155) + (105 * b));




        }
        function biletal() {
            document.getElementById("form").style.visibility = "visible";
        }


    </script>
</body>
<?php
if(isset($_GET["buton"])){
    $sql = "insert into bilet_tablosu(Filmadi,Tarih,Seans,Koltukno,Toplam_tutar,Tam,Ogrenci) values('".$_GET["film"]."','".$_GET["tarih"]."','".$_GET["seans"]."','".$_GET["koltuk"]."','".$_GET["toplam"]."','".$_GET["tam"]."','".$_GET["ogrenci"]."')";
    $sonuc = mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>