<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
    <title>IAHS</title>
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/iahs-style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>



    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

{{--Website menu --}}
<header class="col-1">
<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light bg-blue ">
<h1><a target = "_self" style="color: white;" class="navbar-brand" href="{{ url('/') }}"><img src="logoIAHS.jpg"/><strong>IAHS<br> International Agency for Hybrid Services</strong></a></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" target = "_self" href="{{ url('/') }}"> <span style="font-size: 1.5em; color: #fff;">
                            <i class="fas fa-home"></i>
                        </span><strong>Accueil</strong><span class="sr-only">(current)</span></a>
      </li>
      

      <li class="nav-item active">
        <a class="nav-link" target = "_self" href="{{ url('/present') }}"> <span style="font-size: 1.5em; color: #fff;">
                            <i class="fas fa-binoculars"></i>
                        </span><strong>Présentation</strong><span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" target = "_self" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span style="font-size: 1.5em; color: #fff;">
                        <i class="fas fa-server"></i>
        </span> 
        <strong>Nos services</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" target = "_self" href="{{ url('/mark') }}"><i class="fas fa-briefcase" style="padding-right: 15px"></i>Marketing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/com') }}"><i class="fas fa-comment" style="padding-right: 15px"></i>Communication</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/imp') }}"><i class="fas fa-exchange-alt" style="padding-right: 15px"></i>Import-Export</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/cons') }}"><i class="fas fa-tools" style="padding-right: 15px"></i>Construction</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/pres') }}"><i class="fas fa-graduation-cap" style="padding-right: 15px"></i>Prestations Entreprises</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/res') }}"><i class="fas fa-handshake" style="padding-right: 15px"></i>Ressources humaines</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" target = "_self" href="{{ url('/ent') }}"><i class="fas fa-building" style="padding-right: 15px"></i>Entretien batiment</a>
          <div class="dropdown-divider"></div>
         <style type="text/css">
           .dropdown-item:hover {
            background-color: gray;
           }
         </style>
        </div>
      </li>

      <script type="text/javascript">
        function toggleDropdown (e) {
  const _d = $(e.target).closest('.nav-item'),
    _m = $('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

$('body')
  .on('mouseenter mouseleave','.nav-item',toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown);
      </script>

      <li class="nav-item active">
        <a class="nav-link" target = "_self" href="{{ url('/actual') }}"><span style="font-size: 1.5em; color: #fff;">
        <i class="fas fa-blog"></i>
        </span>
        <strong>Actualités</strong></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" target = "_self" href="{{ url('/contact') }}">
        <span style="font-size: 1.5em; color: #fff;">
        <i class="fas fa-id-card"></i>
        </span>
        <strong> Contacts</strong></a>
      </li>
    </ul>

     <div text-center style=" font-size: 25px" class="sprites" class="col-lg-1">
       
       <a target = "_self" href="http://facebook.com/CONNECTUSACI" title='IAHS Facebook' id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
        <a target = "_self" href="http://twitter.com" title='IAHS Twitter' id='tw'><strong><i class="fab fa-twitter-square"></i></strong></a>
        <a target = "_self" href="http://instagram.com" title='IAHS Instagram' id='in'><strong><i class="fab fa-instagram" style="color: #fff; background: #d6249f;
                        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"></i></strong></a>
    </div>  
    <br>
   
   
  </div>
</nav><br>
</header>
<br><br><br><br><br>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cd966202846b90c57ae3e3c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


        <style>
            body{
                 background-color: #DCDCDC;
                 background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: 1366px 1700px;
                height: 100%;
                margin: 0;
                padding: 0;
                width: 100%;
            }

           
             .navbar{
              background-image: linear-gradient(to right, Yellowgreen, gray); 
              width: 100%; 
              box-shadow: 10px 5px 7px 5px gray;
              
            }

            nav h1 a{
              margin-left: 20px;  
              font-size: 16px;
              
            }

             nav h1 a img{
              border-radius: 50%; 
              width: 80px; 
              height:72px; 
              margin-left: 5px; 
              margin-right: 10px;
            }

            .collapse {
              margin-left: 50px; 
              font-size: 16px;
              
            }

            nav div ul li a:hover{
              background-color: #1ce;
            }
            td div a h3 strong:hover{
                      background-color: silver;
                      
            }
            td div a:hover{
              text-decoration: none;
            }

      @media screen and (max-width: 720px) {

         nav h1 a strong{
                
              font-size: 12px;
              
            }

             nav h1 a img{
              border-radius: 50%; 
              width: 60px; 
              height:52px; 
              
              margin-right: 10px;
            }

            .about-top-area{
              margin-top: 50px; background-color: #F5DEB3; border-style: inset; border-width: 5px; margin-left: 10px; margin-right: 10px;
            }

      }


@media screen and (min-width: 1366px) {
      .about-top-area{
              margin-top: 50px; background-color: #F5DEB3; border-style: inset; border-width: 5px; margin-left: 100px; margin-right: 100px
            }
      .carousel-inner{
              margin-left: 30px
            }
}
        </style>



<section style="" class="about-top-area section-gap">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 about-top-left">
              <h3>Présentation de IAHS</h3>
              <hr>
              <p>
                L'entreprise<b> International Agency for Hybrid Services</b> est un partenaire du <b>GROUPE CONNECT IEBS</b>, spécialisé dans divers services notamment le Marketing, la Communication, l'Import-Export, les Prestations Entreprises et bien d'autres.<br>
                Son siège social est sis à <b>Abidjan, Cocody Riviera 3 cité COPRACI Villa N° 129 - 25 BP 709 ABIDJAN 25</b><br>
                
                Nous sommes ouverts du <b>lundi au vendredi de 8h00 à 20h00 et le samedi de 8h00 à 12h00</b>
              </p>
            </div>
            <div class="col-lg-6 about-top-right">
              
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
        
        
        
    
    <div style="" class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="https://www.groupeconnectiebs.com/fr/img/cusaci/pages/presentation1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="https://www.groupeconnectiebs.com/fr/img/cusaci/pages/presentation2.jpg" alt="Second slide">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>            </div>
          </div>

        </div>  
      </section> <br><br>
    <!-- End about-top Area -->
    <!-- Start service Area -->
    <section class="service-area section-gap list-page-service" id="immigration">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 pb-10 header-text text-center">
            <h3 class="pb-10">Notre Equipe</h3>
            
              
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/dg_iebs.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Mme Kouadjo Landryse</h6></a>
              <p class="text-center">
                Direcrice Générale
              </p>
            </div>
          </div>
          <div class="col-md-4" style="">
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/barbara-konan.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Konan Adjoa Barbara  Christelle </h6></a>
              <p class="text-center">
                Responsable Adminstrative
              </p>
            </div>
          </div>
          <div class="col-md-4" style="">
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/detto-zigbe.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Zigbé Detto Marius</h6></a>
              <p class="text-center">
                Responsable Ressources Humaines & Juridique.
              </p>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/florentin-konan.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Konan Florentin</h6></a>
              <p class="text-center">
                Responsable Informatique
              </p>
            </div>
          </div>
          <div class="col-md-4" style="">
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/irie_elysee.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Irié Bi Elysée</h6></a>
              <p class="text-center">
                Responsable Commercial & Marketing.
              </p>
            </div>
          </div>
          <div class="col-md-4" style="">
            <div class="single-service">
              <div class="thumb">
                <img src="https://www.groupeconnectiebs.com/fr/img/equipe/kouame_noelle_.jpg" alt="">
              </div>
              
              <a target = "_self" href="#"><h6 class="text-center">Kouamé Noëlle</h6></a>
              <p class="text-center">
                Consultante
              </p>
            </div>
          </div>
<style>
.thumb {
  
  transition: transform .2s; /* Animation */  
  margin: 0 auto;
}

.thumb:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
        </div>
      </div>
    </section>


<br><br><br>
    

    
    {{-- footer --}}
    <footer  style="background: url('cusa1.png'); width: 100%; height: 100%; background-repeat: no-repeat; background-position: bottom; padding-top: 50px">

      <div class="wrap-arc">
        <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 380.031 612 15.938"
           xml:space="preserve">
          <path class="arc" d="M612,403.969H0v-2.489c0,0,109.81-13.448,306.159-13.448C502.51,388.031,612,401.479,612,401.479V403.969z"/>
        </svg>
      </div>

      <h3 style=" text-align: center"> <strong>CONTACTS </strong></h3>

    <div class="row"> 
                 

        <div class="col-md-8">       
                        <a target = "_self" href="https://facebook.com/CONNECTUSACI" title='IAHS Facebook' id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
                        <a target = "_self" href="https://twitter.com" title='IAHS Twitter' id='tw'><strong><i class="fab fa-twitter-square"></i></strong></a>
                        <a target = "_self" href="https://instagram.com" title='IAHS Instagram' id='in'><strong><i class="fab fa-instagram" style="color: #fff; background: #d6249f;
                        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"></i></strong></a>
                </div><br>

                <div class="col-md-4" style="margin-left: 50px;font-size: 18px; background-color: lightgray; color: goldenrod ; opacity: 0.9; width: 300px; height: 180px">
                            <strong><i class="fa fa-caret-right fa-2x"></i>Siège social : Abidjan Cocody riviéra 3 cité COPRACI
                            villa 129<br> 25 BP 709 ABIDJAN 25, Côte d’Ivoire <br>Tél: (225)  85 66 84 24/ 52 66 72 72</strong>
                </div>
                    
                <div class="col-md-4">
                        <iframe target = "_self" style="margin-left: 35px; width: 300px; height: 200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4107611680674!2d-3.9614040857359862!3d5.354119237137144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1edd32377b11d%3A0x5f3dad3cf84d94bc!2sConnect+USA+CI!5e0!3m2!1sfr!2sci!4v1557234931665!5m2!1sfr!2sci" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                    
                <div id="sp" class="col-md-4">
                            <strong>
                                <i class="fa fa-caret-right fa-2x"></i> SARL au capital de 1.000.000 FCFA<br>
                                Régime d’imposition: Réel Simplifié<br>
                                Email: lmiahs11@gmail.com<br>
                                N° RC CM : CI-ABJ-2017-B-10664<br>
                                CC N° : 1720604 N
                            </strong>
                </div> <br><br>

                 <div class="col-lg-3" style="margin-left: 20px; font-size: 30px">
                  <h5>N'hésitez pas à nous écrire et à donnez votre avis !</h5>
                        <a target = "_self" href="{{ url('/contact') }}" class="lien_inscription"><button class="btn btn-primary my-2 my-sm-0" type="submit"><strong>Ecrivez-nous !<i class="fas fa-pen" style="padding-left: 15px"></i></strong></button></a>
                 </div>

               

          <div class="col-lg-3" style="margin-left: 400px; margin-top: 20px; margin-bottom: 20px" >
                        <img src="logoIAHS.jpg" style="border-radius: 50%; width: 100px; height:100px"/>
                </div><br>

                         <style>
                        .myText {
                              display: none;
                          }
                          
                          .icon:hover .myText {
                              display: initial;
}
                        </style> 
                      
        </div>

    <div style="width: 100%; height: 50px; background-color: #696969; text-align: center; padding: 10px 10px 10px 10px;">
        <strong style="color: white">© 2019 IAHS. Tous droits réservés. Designed by AMANI Koffi Judicaël</strong>
      </div>
   
</footer>
<style>

  @media screen and (min-width: 1366px) {

        .row {
          width: 100%;
          height: 100%;

        }
        
         .col-md-8 {

        margin-left: 250px;
        font-size: 30px;
        margin-top: 20px;
        }

        #sp {

        font-size: 20px; margin-left: -50px; background-color: lightgray; width:300px;  opacity: 0.7;


        }

        

  }

  

  @media screen and (max-width: 720px) {

        footer {
          width: 100%;
          height: 100%;

        }

        .row {
          width: 100%;
          height: 100%;

        }
        
         .row div {

        padding: 10px 10px 10px 10px;


        }
        .col-lg-3 img{

        margin-left: -160px;


        }

        .col-md-8 {

        margin-left: 130px;
        font-size: 30px;
        }

        #sp {

        font-size: 20px; margin-left: 50px; background-color: gray; width:300px;  opacity: 0.7;
        margin-bottom: 20px;        

        }

</style> 


</body>
</html>