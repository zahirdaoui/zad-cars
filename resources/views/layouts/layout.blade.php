<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- js send email -->
    <script src="js/sendemail.js"></script>
    <!-- js send email -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
     <script type="text/javascript">
         (function() {
               emailjs.init("user_cFvhT3uuiQGNDdpc73vb4");
          })();
    </script>
    <link href="{{url('frontapp/css/main.css')}}" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Merriweather+Sans:wght@500;800&family=Orelega+One&family=Zen+Antique&display=swap" rel="stylesheet">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <header>
       <div class="nav-bar">
        <nav class="navbar navbar-expand-lg container">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{url('index')}}"><img src="{{url('frontapp/images/logo/carsvlogo.png')}}" width="130px"  alt="logo zad cars"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse nav-bar-main" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active nav-bar-links" aria-current="page" href="{{url('index')}}">actuel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('all-cars')}}">voitures</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about-us')}}">Qui sommes-nous</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact-us')}}">Contactez-nous</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
       </div>
    </header>


   @yield('content')

   <!-- start footer -->
<section class="footer py-5">
    <div class="container">
         <div class="footer-items row">
           <div class="footer-item-aboutus col d-none d-lg-block">
            <img src="{{url('frontapp/images/logo/carlogo.png')}}" width="250px" class="pb-3"  alt="logo zad cars">
             <p>Un agent commercial pour la vente de voitures d'occasion dans toutes les villes du Maroc avec la garantie de choisir les meilleures voitures d'occasion</p>
              <ul>
                <li> <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li> <a href="#" target="_blank"><i class="fa-brands fa-instagram-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>

            <div class="footer-item-cars col">
              <h3>voitures célèbres</h3>
               <ul>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="index.html">actuel</a>
                  </li>
                  <li class="nav-item">
                    <a href="menucars.html">ford</a>
                  </li>
                  <li class="nav-item">
                    <a  href="about-us.html">dacia</a>
                  </li>
                  <li class="nav-item">
                    <a  href="contactus.html">bigueu</a>
                  </li>
                  <li class="nav-item">
                    <a  href="contactus.html">kia</a>
                  </li>
                  <li class="nav-item">
                    <a href="contactus.html">volkswagen</a>
                  </li>
                </ul>
               </ul>
             </div>

             <div class="footer-item col">
              <h3>Utiliser des liens complets</h3>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active nav-bar-links" aria-current="page" href="{{url('index')}}">actuel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('all-cars')}}">voitures</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about-us')}}">Qui sommes-nous</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact-us')}}">Contactez-nous</a>
                  </li>
              </ul>
             </div>

             <div class="footer-item col">
              <h3>SERVICE CLIENT</h3>
               <ul>
                 <li> <i class="fa-solid fa-envelope"></i> ezzahirdoui@gmail.com </li>
                 <li> <i class="fa-solid fa-mobile"></i> +212 625595887 </li>
                 <li> <i class="fa-solid fa-map"></i>  magasin tacharok </li>
               </ul>
             </div>


         </div>
    </div>
  </section>
  <footer class="py-2">
    <div class="text-center">
       Copyright <span class="footer-copy-right">&copy;</span> <span id="yearCopyRight"></span> Développeur Par  : <a href="http://wwww.zahirdaoui.com/" target="_blank">ezzahir doui</a>
    </div>
  </footer>
      <!-- bootsrtap js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- form valid -->
     <script src="{{url('frontapp/js/form-valid.js')}}"></script>
      <!-- send email -->
     <script src="{{url('frontapp/js/sendemail.js')}}"></script>
     <!-- date copy right -->
      <script src="{{url('frontapp/js/datecopyright.js')}}"></script>
          <!-- form search -->
          <script src="{{url('frontapp/js/formsearch.js')}}"></script>

  </body>
  </html>

