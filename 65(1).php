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
            <img src="resimler/65.jpg">
            <a target="_blank" class="oynat" href="https://www.youtube.com/watch?v=0XxQZXMHbdc"><i class="bi bi-play-circle oynat"></i></a>
            <div class="tanitim-text">
                <h1>65</h1>
                <br>
                <p>10 Mart 2023 Sinemada / 1s 33dk / Bilimkurgu, Gerilim, Aksiyon</p>
                <p>Yönetmen: <a target="_blank" href="https://www.beyazperde.com/sanatcilar/sanatci-723911/"> Scott Beck,</a><a target="_blank" href="https://www.beyazperde.com/sanatcilar/sanatci-723403/">Bryan Woods</a></p>
                <p>Senarist: <a target="_blank" href="https://www.beyazperde.com/sanatcilar/sanatci-723911/">Scott Beck,</a> <a target="_blank" href="https://www.beyazperde.com/sanatcilar/sanatci-723403/">Bryan Woods</a></p>
                <p>Oyuncular: <a target="_blank" href="https://tr.wikipedia.org/wiki/Adam_Driver">Adam Driver,</a> <a target="_blank" href="https://www.beyazperde.com/sanatcilar/sanatci-772264/">Ariana Greenblatt</a></p>
            </div>
            <div class="tanitim-buton">
                <button style="width: 120px; cursor: pointer;"><a href="https://www.youtube.com/watch?v=0XxQZXMHbdc" target="_blank">FRAGMANI İZLE</a></button>
                <button style="width: 100px; cursor: pointer;"><a href="65.php">BİLET AL</a></button>
                <button style="width: 100px; cursor: pointer;"><a href="biletiptal.php">BİLET İPTAL</a></button>
                
            </div>

        </div>
    </div>
    <div class="tanitim-ozet-kapsayici">
            <h2 style="position: relative; bottom: 80px;">Özet</h2>
            <p>65, 65 milyon yıl önceki dünyada kızı ile hayatta kalabilmek için destansı bir maceraya atılan Mills’in hikayesini konu ediyor. Pilot Mills, küçük kızı Koa ile uzay gemisindeyken korkunç bir kaza meydana gelir. Bilinmeyen bir gezegene iniş yapmak zorunda kalan Mills, çok geçmeden aslında 65 milyon önceki önceki dünyaya iniş yaptığını fark eder. Hayattaki tek insanlar olan Mills ve kızı Koa, içine düştükleri durumdan kurtulabilmek için, tarih öncesinde yaşayan tehlikeli yaratıklarla dolu bu topraklarda savaşmak zorunda kalır.</p>
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