<!DOCTYPE html>
<html>
<head>
  <title>Rafting - All about rafting</title>
  <!-- Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css1/bootstrap.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css1/style.css'; ?>">
  <script type="text/javascript">
    $(document).ready(function(){
      $(window).on('scroll', (function(e) {
        var winHeight = $(this).scrollTop();

        if(winHeight>100) {
          $('nav.navbar').css({
            'position': 'fixed',
            'width': '100%',
            'left': '0',
            'top': '0',
            'z-index': 99
          });
        } else {
          $('nav.navbar').css({
            'position': 'relative'
          });
        }
      }));
    });
  </script>
</head>
<body>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> <img src="<?php echo base_url() . 'Logo/Logo1.jpg'; ?>" alt="Logo Website" class="logo-header"></a>
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
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
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
    </section>
  </main>
  <!-- Js -->
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.easing.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/scrolling-nav.js';?>"></script>
</body>
</html>