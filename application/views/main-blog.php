<!DOCTYPE html>
<html>
<head>
  <title>Rafting - All about rafting</title>
  <!-- Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css1/bootstrap.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css1/style.css'; ?>">
  <script type="text/javascript">
    $(document).ready(function(){
      // $(window).on('scroll', (function(e) {
      //   var winHeight = $(this).scrollTop();

      //   if(winHeight>100) {
      //     $('nav.navbar').css({
      //       'position': 'fixed',
      //       'width': '100%',
      //       'left': '0',
      //       'top': '0',
      //       'z-index': 99
      //     });
      //   } else {
      //     $('nav.navbar').css({
      //       'position': 'relative'
      //     });
      //   }
      // }));
    });
  </script>
</head>
<body>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url() . 'Logo/Logo1.jpg'; ?>" alt="Logo Website" class="logo-header"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() . 'index.php/welcome'; ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'index.php/about'; ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'index.php/about'; ?>">Blog</a>
          </li>
        </ul>
        
      </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url() . 'caraousel/c4.jpg'; ?>" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url() . 'caraousel/c6.jpg'; ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url() . 'caraousel/c5.jpg'; ?>" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url() . 'blog/1.jpg'; ?>" alt="1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url() . 'blog/2.jpg'; ?>" alt="2.jpg" alt="Card image cap" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>    
    <!-- <section id="profil" class="info">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Profil</h1>
            <div class="col-lg-4">
              <img src="<?php echo base_url() . 'Info/Orad6.jpg'; ?>" alt="Orad6">
              <p>Rafting</p>
            </div>
            <div class="col-lg-8" style="background: rgb(255, 255, 128);">
              <p align="justify">
                Olah Raga Arus Deras (ORAD) atau lebih dikenal dengan sebutan Arung Jeram dapat dikategorikan sebagai olah raga petualangan, karena tidak saja mengandung unsur olahraga, tetapi juga petualangan dengan berbagai resikonya.ORAD termasuk salah satu kegiatan alam terbuka yang baru, dibandingkan dengan mendaki gunung ataupun olahraga-olahraga alam terbuka lainnya. Tidak banyak catatan yang dapat dibuka untuk mengetahui asal mula olah raga ini. Sejarah petualangan sungai di Indonesia dimulai sekitar awal tahun 1970-an dengan istilah olah raga arus deras (ORAD). Dipelopori oleh rekan-rekan pecinta alam dari Bandung dan Jakarta, olah raga ini kemudian menjadi salah satu olah raga petualangan yang paling diminati para pecinta alam.Perahu dan peralatan yang dipakai mulai meningkat kwalitasnya, dimulai dari ban dalam, perahu LCR tentara, sampai perahu karet khusus Sungai (River Raft), juga perahu Kayak. Hal ini mendorong Arung Jeram tumbuh cukup pesat, dan menarik minat para pengarung jeram untuk mengarungi sungai-sungai di daerah yang jauh dan penuh tantangan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="tools2" class="tools">
      <div class="container" style="background: rgb(255, 255, 128);">
        <div class="row">
          <div class="col-lg-12">
            <h1>Tools</h1>
            <p>
              <h3>
                1. Pelampung
              </h3>
            </p>
            <img src="<?php echo base_url() . 'tools/Pelampung.jpg'; ?>">
            <p align="justify">
              Selain daya apung yang sesuai dengan tubuh kita, kenyamanan saat dipergunakan merupakan syarat pelampung yang dapat kita ergunakan. Komposisi pelampung yang baik adalah yang berisi gabus tebal dan bagian belakang pelampung yang lebih tipis dari bagian depan sehingga jika kita terjatuh di air dan pingsan, akan berada dalam kondisi terlentang. Di samping itu terdapat pelindung kepala bagian belakang yakni kerah pada bagian belakang atas pelampung.
            </p><br>
            <p>
              <h3>
                2. Dayung
              </h3>
            </p>
            <img src="<?php echo base_url() . 'tools/Dayung.jpg'; ?>">
            <p align="justify">
              Sebagai alat pengayuh terbuat dari bahan yang kuat tetapi ringan dan usahakan berwarna mencolok dan lentur. Bahan yang cukup baik adalah plastik, selain itu dapat juga kayu, fiberglass, serta kombinasi kayu dengan aluminium atau fiberglass. 
            </p><br>
            <p>
              <h3>
                3. Alas Kaki
              </h3>
            </p>
            <img src="<?php echo base_url() . 'tools/Sandal.jpg'; ?>">
            <p align="justify">
              3. Alas kaki
              Melindungi telapak kaki dari kemungkinan lecet atau terluka. Sepatu kanvas atau parasit yang tidak mengganggu saat kita berenang dapat dipergunakan. Kita juga dapat menggunakkan sandal gunung agar saat melakukan pengarungan sandal yang kita gunakan tidak hilang terbawa arus saat kita terjatuh dari perahu.
            </p><br>
            <p>
              <h3>
                4. Helm
              </h3>
            </p>
            <img src="<?php echo base_url() . 'tools/Helm.jpg'; ?>">
            <p align="justify">
              4. Helm
              Melindungi kepala dari benturan dengan benda keras terutama saat terlempar dari perahu. Pilih yang ringan, tahan pecah, dan tidak mengganggu pandangan mata dan pendengaran serta pas ukurannya.
            </p><br>
            <p>
              <h3>
                5. Perahu
              </h3>
            </p>
            <img src="<?php echo base_url() . 'tools/Perahu.jpg'; ?>">
            <p align="justify">
              5. Perahu Karet (craft
              Merupakan alat terpenting dalam pengarungan agar kita dapat melakukan pengarungan dengan aman dan nyaman. Bahan perahu karet yang banyak digunakan adalah terbuat dari PVC (Polivinil Chloride) atau sering disebut dengan karet sintetis dan harganya relatif terjangkau.
            </p><br>
          </div>
        </div>
      </div>
    </section>
    <section id="tips" class="tips">
      <div class="container" style="background: rgb(255, 255, 128);">
        <div class="row">
          <div class="col-lg-12">
            <h1>Tips</h1>
            <p>
              <h3>
                1. Tentukan Destinasi Sungai
              </h3>
            </p>
            <p align="justify">
              Tidak semua sungai dapat digunakkan untuk arung jeram. Ada bebrapa sungai yang memiliki grade yang mudah, sedang, sulit, atau berbahaya sebaiknya anda memperhitungkan kemampuan dan pengalaman anda dan tim yang akan melakukan arung jeram.
            </p><br>
            <p>
              <h3>
                2. Perhatikan Cuaca
              </h3>
            </p>
            <p align="justify">
              Sebaiknya lakukan pengarungan pada cuaca yang pas. Sebenarnya tidak masalah kita turun ke sungai saat hujan, tapi kita harus melihat karakteristik sungainya karena saat hujan sungai bisa saja arus dan debit airnya bertambah.
            </p><br>
            <p>
              <h3>
                3. Memakai Alat Pengaman
              </h3>
            </p>
            <p align="justify">
              Tentu hal ini merupakan hal yang paling penting karena alat pengaman seperti pelampung dan helm akan melindungi kita. Memasangnya pun juga harus sesuai dengan prosedur jika kita memasang secara asal maka resiko alat terlepas dari tubuh akan sangat berbahaya.
            </p><br>
            <p>
              <h3>
                4. Patuhi Instruktur
              </h3>             
            </p>
            <p align="justify">
              Pastikan anda mengikuti dan memahami semua arahan dari instruktur. Hal tersebut dikarenakan arahan tersebut sangat berguna bagi anda saat berada di tengah pengarungan. 

            </p><br>
            <p>
              <h3>
                5. Jangan Panik Berlebihan
              </h3>
            </p>
            <p align="justify">
              Rasa panik adalah sifat alami manusia namun kita juga harus bisa mengendalikanya. Saat kita berada pada situasi darurat usahakkan jangan panik, dan percayalah pasti ada yang akan menyalamatkan anda.
            </p><br>
          </div>
        </div>
      </div>
    </section> -->
  </main>
  <!-- Js -->
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.easing.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/scrolling-nav.js';?>"></script>
</body>
</html>