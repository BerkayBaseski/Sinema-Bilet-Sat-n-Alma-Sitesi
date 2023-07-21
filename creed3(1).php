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
        *{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
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
    <div class="tanitim-kapsayici">
        <div class="tanitim-alt">
            <img src="resimler/creed3.jpg">
            <a target="_blank" class="oynat" href="https://www.youtube.com/watch?v=6P2rTMrVoaQ"><i class="bi bi-play-circle oynat"></i></a>
            <div class="tanitim-text">
                <h1>CREED III : Efsane Devam Ediyor</h1>
                <br>
                <p>3 Mart 2023 Sinemada / 1s 57dk / Dram</p>
                <p>Yönetmen: <a target="_blank" href="https://en.wikipedia.org/wiki/Michael_B._Jordan">Michael B. Jordan</a></p>
                <p>Senarist: <a target="_blank" href="https://en.wikipedia.org/wiki/Zach_Baylin">Zach Baylin,</a> <a href="">Keenan Coogler</a></p>
                <p>Oyuncular: <a target="_blank" href="https://tr.wikipedia.org/wiki/Michael_B._Jordan">Michael B. Jordan,</a> <a target="_blank" href="https://tr.wikipedia.org/wiki/Tessa_Thompson">Tessa Thompson, </a><a href="">Jonathan Majors</a></p>
                <p>Orijinal adı: <a target="_blank" href="https://www.youtube.com/watch?v=6P2rTMrVoaQ">Creed III</a></p>
            </div>
            <div class="tanitim-buton">
                <button style="width: 120px; cursor: pointer;"><a href="https://www.youtube.com/watch?v=6P2rTMrVoaQ" target="_blank">FRAGMANI İZLE</a></button>
                <button style="width: 100px; cursor: pointer;"><a href="creed3.php">BİLET AL </a></button>
                <button style="width: 100px; cursor: pointer;"><a href="biletiptal.php">BİLET İPTAL</a></button>
                
            </div>

        </div>
    </div>
    <div class="tanitim-ozet-kapsayici">
            <h2>Özet</h2>
            <p>CREED III : Efsane Devam Ediyor, kaybedecek hiçbir şeyi olmayan bir dövüşçü olan Damian ile yüzleşmek zorunda kalan boksun idolü olan Adonis Creed'in hikayesini konu ediyor. Adonis Creed, sonunda Ivan Drago'nun oğlu Viktor'u yenerek boksun zirvesindeki yerini sağlamlaştırdı. Kariyerinin yanı sıra kız arkadaşı Bianca ile de mutlu bir yaşam süren Adonis’in hayatında her şey yolundadır. Ta ki eski çocukluk arkadaşı Damian'ın yıllar sonra aniden ortaya çıkana kadar. Hapisten yeni çıkan Damian, ringe çıkmak ve Adonis'e karşı kendini kanıtlamak için hazırdır. Ancak her ikisi için de bu düello, sadece sportif bir hesaplaşmadan daha fazlasıdır.</p>
    </div>
       <!--content-->
       <footer>
        <div class="footer">
            <div class="sosyal">
                <p>Logo'yu Takipte Kalın</p>
                <br>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
            <div class="adres">
                <p>Adres: Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem, ipsum dolor.</p>
            </div>
            <div class="alt-menü">
                <li><a href="index.html">Anasayfa</a></li>
                <li><a href="hakkımızda.html">Hakkımızda</a></li>
                <li><a href="iletisim.html">İletişim</a></li>
            </div>
            <div class="yukari-kapsayici">
                <a class="yukari"><i class="bi bi-chevron-up"></i></a>
            </div>
           
        </div>
    </footer>
    <script src="sayfa.js"></script>
</body>
</html>