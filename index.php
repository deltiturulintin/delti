<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<div class="container-2">
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=f4b3729a&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
</div>
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Search" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container23" style="background-image:url('99.jpg')"; >
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-white">
<h1>Anime Movie</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tokyo Ghoul </h5>
        <p class="card-text">Tokyo Ghoul (bahasa Jepang: 東京喰種トーキョーグール Hepburn: Tōkyō Gūru) adalah sebuah seri manga seinen Jepang bergenre fantasi gelap yang ditulis dan diilustrasikan oleh Sui Ishida. Manga ini mulai dimuat dalam majalah Weekly Young Jump terbitan Shueisha sejak bulan September 2011 hingga September 2014, dan telah dibundel menjadi empat belas volume tankōbon hingga bulan Agustus 2014..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Demon Slayer</h5>
        <p class="card-text">Kimetsu, yang diterbitkan di Indonesia dengan judul Demon Slayer: Kimetsu no Yaiba, adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Koyoharu Gotōge. Ceritanya mengisahkan tentang Tanjiro Kamado, seorang anak laki-laki yang menjadi pembasmi iblis setelah keluarganya dibantai oleh iblis dan adik perempuannya yang bernama Nezuko diubah menjadi iblis.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Wolk Girl Black Prince</h5>
        <p class="card-text">Merupakan serial animasi Jepang yang dapat disaksikan di Viu mulai 9 Juli 2022. Anime Wolf Girl and Black Prince diadaptasi dari sebuah serial manga berjudul sama yang ditulis oleh Ayuko Hatta. Anime bertema komedi romantis ini disutradarai Ken’ichi Kasa dan karakter suaranya diisi oleh Takahiro Sakurai, Kanae Ito, Ai Kayano, dan Yoshimasa Hosoya.
Artikel ini telah tayang di Kompas.com dengan judul "Sinopsis Wolf Girl and Black Prince, Kisah Cinta Dua Orang Problematik".</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Fruits Basket</h5>
        <p class="card-text">Manga ini mengisahkan tentang seorang gadis yatim bernama Tohru Honda, yang setelah bertemu dengan Yuki, Kyou, dan Shigure Soma, mengetahui bahwa dua belas anggota keluarga Soma telah dirasuki oleh hewan-hewan dari zodiak Tiongkok (十二支 Jūnishi) dan dikutuk untuk berubah menjadi bentuk hewan ketika mereka sedang lemah, stres, atau ketika tubuh mereka dipeluk oleh lawan jenis siapa pun itu yang tidak dirasuki oleh roh zodiak.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Boruto</h5>
        <p class="card-text">.Boruto Naruto Next Generations adalah sebuah seri manga asal Jepang yang ditulis oleh Ukyo Kodachi dan Masashi Kishimoto dan diilustrasikan oleh Mikio Ikemoto. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha pada Mei 2016, sebelum dipindahkan ke majalah lain milik Shueisha bertajuk V Jump pada Juli 2019. Pada November 2020 Kodachi mengundurkan diri, dan digantikan oleh Kishimoto. Boruto juga merupakan cerita spin-off dan sekuel dari manga Naruto karya Masashi Kishimoto, yang mengisahkan kehidupan putra Naruto Uzumaki, Boruto Uzumaki, dan teman-temannya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">True Beauty</h5>
        <p class="card-text">True Beauty adalah seri televisi Korea Selatan yang dibintangi Moon Ga-young, Cha Eun-woo, Hwang In-youp, dan Park Yoo-na. Didasarkan dari webtun berjudul sama karya Yaongyi. Menceritakan tentang gadis SMA yang diejek karena paras yang jelek, lalu dia belajar merias wajah agar menjadi cantik.Ini tayang di tvN dari 9 Desember 2020 hingga 4 Februari 2021 tiap Rabu dan Kamis (WSK).</p>
      </div>
    </div>
  </div>
  
    </div></div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
