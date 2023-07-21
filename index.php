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
<body style="height: 100vh;">
    
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
        <div class="içerik">
            <!--anasayfa-->
            <div class="alt-içerik">
                <div class="featured-class">
                    <img class="içerik-resim" src="resimler/tt.png">
                <p class="içerik-açıklama">
                    John Wick 4, büyük suç örgütünü yenmeye çalışırken yeni bir düşmanla yüzleşmek zorunda olan John Wick’in hikayesini konu ediyor. John Wick, High Table olarak bilinen suç örgütünü yenmenin bir yolunu keşfeder. Ancak özgürlüğünü kazanmadan önce, dünya çapında güçlü ittifaklar kuran ve John'un eski arkadaşlarını düşmana çeviren yeni düşmanı The Marquis'le yüzleşmesi gerekiyor. John, hayatta kalmak istiyorsa becerilerinin sınırlarını zorlamak zorundadır
                </p>
                <div class="içerik-buton">
                    <button class="play-buton">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=p7VF78wSfS8">Oynat</a>
                    </button>

                    <button class="info-buton">
                        <i class="bi bi-info-circle"></i>
                        <a href="johnwick.php">Daha Fazla Bilgi</a>
                    </button>
                </div>
                </div>
            </div>
        <!--anasayfa-->
        <!--content-->
        <div class="film-liste-kapsayıcı">
            <h1 style="margin-bottom: 50px;"></h1> 
            <h1 class="film-liste-title">Popüler</h1>
            <div class="film-liste-alt">
                <ul class="film-list">
                    <li class="film-item">
                        <a href="johnwick.php" target="_blank"><img class="film-item-img" src="resimler/john-wick-4-the-cast-of-the-action-sequel_ynfy (2).jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">John Wick 4</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="shazam1.php" target="_blank"><img class="film-item-img" src="resimler/shazam.jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">Shazam! Tanrıların Öfkesi</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="cıglık6(1).php" target="_blank"><img class="film-item-img" src="resimler/cıglık6.jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">Çığlık 6</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="creed3(1).php" target="_blank"><img class="film-item-img" src="resimler/creed3.avif"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">Creed III: Efsane Devam Ediyor</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="65(1).php" target="_blank"><img class="film-item-img" src="resimler/65.jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">65</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="otto1.php" target="_blank"><img class="film-item-img" src="resimler/otto.jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">Hayata Röveşata Çeken Adam</span>
                        </div>
                    </li>
                    <li class="film-item">
                        <a href="sessizkız1.php" target="_blank"><img class="film-item-img" src="resimler/Sessiz_Kiz-699x1024.jpg"></a>
                        <div class="film-item-info">
                            <span class="film-item-title">Sessiz Kız</span>
                        </div>
                    </li>
                </ul>
                <i class="bi bi-chevron-left ok2"></i>
                <i class="bi bi-chevron-right ok"></i>
            </div>
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
                <li><a href="index.php">Anasayfa</a></li>
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