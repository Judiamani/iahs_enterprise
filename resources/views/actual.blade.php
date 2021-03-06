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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
                        </span><strong>Pr??sentation</strong><span class="sr-only">(current)</span></a>
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
        <strong>Actualit??s</strong></a>
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

<style>
  nav div ul li a:hover{
      background-color: #1ce;
  }
</style>

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


<br>
    <div><img class="im" src="infos.gif"/></div>    
<br><br>


<style>
            body{
                background-color: #DCDCDC;
                background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
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

        .im {
        margin-left: 60px;
        width: 250px;
        height: 100px;
          }
           

      }
@media screen and (min-width: 1366px) {
      
      .im {
        margin-left: 450px;
        width: 400px; 
        height: 200px;
        margin-bottom: 50px;
          }
}
        </style>

<section id="slideshow">

<div class="container">
    <div class="c_slider"></div>
    <div class="slider">
        <figure>
            <img src="im1.jpg " alt=""/>
            <a href="marketing.html"><figcaption><h3>Ouverture des magasins de stockage ?? San-P??dro</h3></figcaption></a>
        </figure><!--
        --><figure>
            <img src="im2.jpg " alt=""/>
            <a href="communication.html"><figcaption><h3>Sponsorisation du parc de v??hicules ?? Issia</h3></figcaption></a>
        </figure><!--
        --><figure>
            <img src="im3.jpg " alt=""/>
            <a href="import.html"><figcaption><h3>Part??nariat avec Bouygues Telecoms</h3></figcaption></a>
        </figure><!--
        --><figure>
            <img src="im4.jpg " alt=""/>
            <a href="construction.html"><figcaption><h3>Part??nariat avec Bouygues Telecoms</h3></figcaption></a>
        </figure>
        
    </div>
</div>
<h2>En savoir plus ? <i class="fas fa-arrow-alt-circle-down" style="padding-right: 50px; font-size: 30px"></i></h2>
</section><br><br>


<script type="text/javascript">

           function load()
           {
           if(localStorage.getItem("counter")!=null)
                 {
                     counter = Number(localStorage.getItem("counter"));
                     document.getElementById("counterValue").innerHTML = counter;
                 }

           }

           function load1()
           {
           if(localStorage.getItem("counter1")!=null)
                 {
                     counter1 = Number(localStorage.getItem("counter1"));
                     document.getElementById("counterValue1").innerHTML = counter1;
                 }

           }

           function load2()
           {
           if(localStorage.getItem("counter2")!=null)
                 {
                     counter2 = Number(localStorage.getItem("counter2"));
                     document.getElementById("counterValue2").innerHTML = counter2;
                 }

           }

           function load3()
           {
           if(localStorage.getItem("counter3")!=null)
                 {
                     counter3 = Number(localStorage.getItem("counter3"));
                     document.getElementById("counterValue3").innerHTML = counter3;
                 }

           }
               

         function counterFn() {          
            counter = Number(localStorage.getItem("counter"));

            console.log(counter);
            counter += 1;
            localStorage.setItem("counter",counter);             
            document.getElementById("counterValue").innerHTML = counter;
         }

         function counterFn1() {          
            counter1 = Number(localStorage.getItem("counter1"));

            console.log(counter1);
            counter1 += 1;
            localStorage.setItem("counter1",counter1);             
            document.getElementById("counterValue1").innerHTML = counter1;
         }

         function counterFn2() {          
            counter2 = Number(localStorage.getItem("counter2"));

            console.log(counter2);
            counter2 += 1;
            localStorage.setItem("counter2",counter2);             
            document.getElementById("counterValue2").innerHTML = counter2;
         }

         function counterFn3() {          
            counter3 = Number(localStorage.getItem("counter3"));

            console.log(counter3);
            counter3 += 1;
            localStorage.setItem("counter3",counter3);             
            document.getElementById("counterValue3").innerHTML = counter3;
         }

</script>


<div class="row" style="background-color: #48D1CC; width: 100%; height: 100%; padding: 20px 10px 10px 20px;">

<div class="col-md-12">
<h2 style="text-align: center">Publications</h2><br><br><br>
</div>
        <div class="col-md-4">
        <div class="card" style="width: 18rem; height: 20rem; border-style: solid; border-color: gray;
  border-width: 5px">
          <img style="height: 150px" src="im1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          Ouverture des magasins de stockage ?? San-P??dro <i class="fas fa-eye" style="margin-left: 20px"><span id="counterValue"></span></i>
            <p>
				18/05/2019 - IAHS Admin
		    </p>
          <button data-toggle="modal" data-target="#addNew" onclick="counterFn()"><i class="fas fa-plus-circle" style="float: right; font-size: 34px; color: #3385ff"></i></button>
          </div>
        </div>
        </div>
      
      <div class="col-md-4">
      <div class="card" style="width: 18rem; height: 20rem; border-style: solid;border-color: gray;
  border-width: 5px">
          <img style="height: 150px" src="im2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          Sponsorisation du parc de v??hicules ?? Issia <i class="fas fa-eye" style="margin-left: 20px"><span id="counterValue1"></span></i>
            <p>
				18/05/2019 - IAHS Admin
		    </p>
           <button data-toggle="modal" data-target="#addNews" onclick="counterFn1()"><i class="fas fa-plus-circle" style="float: right; font-size: 34px; color: #3385ff"></i></button>
          </div>
        </div>
        </div>
      
      <div class="col-md-4">
      <div class="card" style="width: 18rem; height: 20rem; border-style: solid;border-color: gray;
  border-width: 5px">
          <img style="height: 150px" src="im3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          Part??nariat avec Bouygues Telecoms <i class="fas fa-eye" style="margin-left: 20px"><span id="counterValue2"></span></i>
            <p>
				18/05/2019 - IAHS Admin
		    </p>
          <button data-toggle="modal" data-target="#addNewer" onclick="counterFn2()"><i class="fas fa-plus-circle" style="float: right; font-size: 34px; color: #3385ff"></i></button>
          </div>
        </div>
        </div>
      
      <div class="col-md-4">
      <div class="card" style="width: 18rem; height: 20rem; border-style: solid;border-color: gray;
  border-width: 5px">
          <img style="height: 150px" src="im4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          Part??nariat avec Bouygues Telecoms <i class="fas fa-eye" style="margin-left: 20px"><span id="counterValue3"></span></i>
            <p>
				18/05/2019 - IAHS Admin
		    </p>
           <button data-toggle="modal" data-target="#addNewer" onclick="counterFn3()"><i class="fas fa-plus-circle" style="float: right; font-size: 34px; color: #3385ff"></i></button>
          </div>
        </div>
     </div>
     </div>


</div><br><br>

<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #66ff99">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewLabel">Ouverture de magasins ?? San-P??dro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <p style="padding: 15px 15px 15px 15px">
                  Apr??s le contr??le et la r??ception, les marchandises destin??es au magasin sont rang??es suivant deux m??thodes d???affectation : 
 
Emplacement fixe et invariable : c???est une m??thode de rangement claire, les articles affect??s ?? un emplacement r??gulier sont plus faciles ?? trouver physiquement, il y a peu de chance de les oublier. Cependant, cette forme de rangement utilise un syst??me de stockage lourd et un espace plus grand. 
Emplacement variable en fonction des espaces disponibles : apr??s chaque r??ception, l???article est rang?? ?? n???importe quel emplacement libre. Il y a risque de trouver la m??me pi??ce ?? diff??rents endroits, ce qui peut entra??ner des oublies. Bien que cette forme de rangement pr??sente l???avantage d???une meilleure exploitation de l???espace de stockage, elle est mieux indiqu??e pour des stocks unitaires en transit ou de projets. Elle demande beaucoup d?????critures car ?? chaque fois, il faut mettre ?? jour le nouvel emplacement sur les documents et le logiciel de gestion des stocks.

Dans la pratique, l???utilisation des emplacements ou des aires de stockage fixes est pr??dominante. L???emploi d???emplacements variable est admise seulement lorsqu???il y a insuffisance d???espace (capacit?? de stockage limit??e) ou pour certains produits en vrac.
                </p>

            </div>
          </div>
        </div>


<div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="addNewsLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #66ff99">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewsLabel">Sponsorisation du parc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <p style="padding: 15px 15px 15px 15px">
                  Le pr??sent dossier est destin?? aux diverses entreprises, organismes publics ou autres associations qui pourraient ??tre int??ress??s par un partenariat dans le domaine du sport automobile.

Il comprend la pr??sentation de notre association, la description des courses pass??es et ?? venir ainsi qu???une description des int??r??ts que peut vous apporter le financement d???une association sportive.

Cette demande de sponsoring ne concerne pas l???achat du v??hicule de course. Celle-ci a pour objectif d???apporter une participation financi??re au co??t des participations aux ??preuves (engagements, inscriptions, frais de d??placements, pneumatiques, entretiens), cela dans le but de r??aliser l???ensemble des courses envisag??es sur le planning 2019
                </p>

            </div>
          </div>
        </div>


        <div class="modal fade" id="addNewer" tabindex="-1" role="dialog" aria-labelledby="addNewerLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #66ff99">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewerLabel">Part??nariat avec Bouygues Telecoms</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <p style="padding: 15px 15px 15px 15px">
                  S???appuyer sur Bouygues Telecom Entreprises, op??rateur fixe-mobile-Internet, c???est b??n??ficier d???un partenariat avec un acteur majeur sur le march?? des Nouvelles Technologies de l???Information et de la Communication (NTIC) pour les professionnels et les PME, comptant plus de 200 000 clients entreprises.
                  Bouygues Telecom Entreprises s???appuie sur un r??seau national de distributeurs partenaires qui vous aident ?? qualifier vos besoins, ?? d??terminer les solutions optimales en t??l??phonie mobile, fixe, convergente, en acc??s data et en solutions Cloud, et ?? vous proposer les offres les mieux adapt??es ?? votre organisation et ?? son ??volution.
                </p>

            </div>
          </div>
        </div>



<span id="sl_play" class="sl_command">&nbsp;</span>
<span id="sl_pause" class="sl_command">&nbsp;</span>






<style>

@media screen and (max-width: 720px) {

        .col-md-4 .card{
                
              margin-top: 30px;
              margin-left: 20px;
              
            }


         #slideshow{
                
              width: 350px;
              height: 370px;
              padding: 15px;
              
            }

            #slideshow .container {
                position:relative;
                width: 310px;
                height: 310px;
                overflow: hidden;
            }

          #timeline {
    position: absolute;
    background: #999;
    bottom: 15px;
    left: 15px;
   
    background: rgb(214,98,13);
    background: rgba(214,98,13,.8);
    width: 0;
    /* fonction d'animation */
    -webkit-animation: timeliner 7s infinite;
    -moz-animation: timeliner 7s infinite;
    animation: timeliner 7s infinite;
}
@keyframes timeliner {
    0%, 25%, 50%, 75%, 100% { width: 0;   }
    20%, 45%, 70%, 90%    { width: 20px; }
}

        figure img {
                
              width:310px;
              height:310px;
              
            }

}

@media screen and (min-width: 1366px) {

  .col-md-4 .card{
                
              margin-top: 30px;
              margin-left: 70px;
              
            }

         #slideshow{
                
              width: 740px;
              height: 370px;
              padding: 15px;
              
            }

        #slideshow .container {
          position:relative;
          width: 640px;
          height: 310px;
          overflow: hidden;
        }

        #timeline {
    position: absolute;
    background: #999;
    bottom: 15px;
    left: 15px;
    height: 0.5px;
    background: rgb(214,98,13);
    background: rgba(214,98,13,.8);
    width: 0;
    /* fonction d'animation */
    -webkit-animation: timeliner 7s infinite;
    -moz-animation: timeliner 7s infinite;
    animation: timeliner 7s infinite;
}
@keyframes timeliner {
    0%, 25%, 50%, 75%, 100% { width: 0;   }
    20%, 45%, 70%, 90%    { width: 640px; }
}

        figure img {
                
              width:640px;
              height:310px;
              
            }

}

#slideshow {
    position: relative;
    margin: 0 auto 2em;
    border: 1px solid #ddd;
    background: #FFF;
    /* CSS3 effects */
    background: -webkit-linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
    background: -moz-linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
    background: -ms-linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
    background: -o-linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
    background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
    border-radius: 2px 2px 2px 2px;
    box-shadow: 0 0 3px rgba(0,0,0, 0.2);
}
 
/* avanced box-shadow
 * tutorial @
 * https://www.creativejuiz.fr/blog/les-tutoriels/ombre-avancees-avec-css3-et-box-shadow 
*/
#slideshow:before,
#slideshow:after {
    position: absolute;
    bottom:16px;
    z-index: -10;
    width: 50%;
    height: 20px;
    content: " ";
    background: rgba(0,0,0,0.1);
    border-radius: 50%;
    box-shadow: 0 0 3px rgba(0,0,0, 0.4), 0 20px 10px rgba(0,0,0, 0.7);
}
#slideshow:before {
    left:0;
    transform: rotate(-4deg);
}
#slideshow:after {
    right:0;
    transform: rotate(4deg);
}

/* gestion des dimensions et d??bordement du conteneur */

    
/* on pr??voit un petit espace gris pour la timeline */
#slideshow .container:after {
    position:absolute;
    bottom: 0; left:0;
    content: " ";
    width: 100%;
    height: 1px;
    background: #999;
}
/* 
   le conteneur des slides
   en largeur il fait 100% x le nombre de slides
*/
#slideshow .slider {
    position: absolute;
    left:0; top:0;
    width: 400%;
    height: 310px;
}

/* annulation des marges sur figure */
#slideshow figure {
    position:relative;
    display:inline-block;
    padding:0; margin:0;
}
/* petit effet de vignette sur les images */
#slideshow figure:after {
    position: absolute;
    display:block;
    content: " ";
    top:0; left:0;
    width: 100%; height: 100%;
    box-shadow: 0 0 65px rgba(0,0,0, 0.5) inset;
}
/* styles de nos l??gendes */
#slideshow figcaption {
    position:absolute;
    left:0; right:0; bottom: 5px;
    padding: 20px;
    margin:0;
    border-top: 1px solid rgb(225,225,225);
    text-align:center;
    letter-spacing: 0.05em;
    word-spacing: 0.05em;
    font-family: Georgia, Times, serif;
    background: #fff;
    background: rgba(255,255,255,0.7);
    color: #555;
    text-shadow: -1px -1px 0 rgba(255,255,255,0.3);
}
@keyframes slider {
    0%, 20%, 100%	{ left: 0 }
    25%, 45%		{ left: -100% }
    50%, 70%		{ left: -200% }
    75%, 95%		{ left: -300% }
}
/* compl??tez le s??lecteur : */
#slideshow .slider {
    /* ... avec la propri??t?? animation */
    animation: slider 15s infinite;
}



@keyframes figcaptionner {
    0%, 25%, 50%, 75%, 100%						{ bottom: -55px;	}
    5%, 20%, 30%, 45%, 55%, 70%, 80%, 95%		{ bottom: 5px;		}
}
/* ajouter ?? l'??l??ment : */
#slideshow figcaption {
    /* ... la propri??t?? animation */
    position:absolute;
    padding: 20px 20px; margin:0;
    left:0; right:0; bottom: 5px;
    text-align:center;
    letter-spacing: 0.05em;
    word-spacing: 0.05em;
    font-family: Georgia, Times, serif;
    background: #000;
    background: rgba(255,255,255,0.7);
    border-top: 1px solid rgb(225,225,225);
    color: #555;
    text-shadow: -1px -1px 0 rgba(255,255,255,0.3);
    
    -webkit-animation: figcaptionner 15s infinite;
    -moz-animation: figcaptionner 15s infinite;
    animation: figcaptionner 15s infinite;
}

#slideshow .commands {
    position: absolute;
    top: 45%;
    padding: 5px 13px;
    border-bottom:0;
    font-family: 'Amaranth', Arial, Verdana, sans-serif;
    font-size: 1.3em;
    color: #aaa;
    text-decoration:none;
    background-color: #eee;
    background-image: -webkit-linear-gradient(#fff,#ddd);
    background-image: -moz-linear-gradient(#fff,#ddd);
    background-image: -ms-linear-gradient(#fff,#ddd);
    background-image: -o-linear-gradient(#fff,#ddd);
    background-image: linear-gradient(#fff,#ddd);
    text-shadow: 0 0 1px #aaa;
    
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
    -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}
#slideshow .commands:after {
    position: absolute;
    bottom: 65px; left:-18px;
    content: attr(title);
    width: 50px;
    padding: 12px;
    background: #fff;
    font-family: Georgia, Times, serif;
    font-size: 14px;
    text-align:center;
    text-shadow: 0 0 0;
    opacity: 0;
    
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    
    -webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    -moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    
    -webkit-transition: opacity 0.7s, bottom 0.7s;
    -moz-transition: opacity 0.7s, bottom 0.7s;
    transition: opacity 0.7s, bottom 0.7s;
}
#slideshow .commands:before {
    position: absolute;
    bottom: 55px; left: 13px;
    content: " ";
    width: 1px; height: 1px;
    border-top: 10px solid #fff;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    z-index:100;
    opacity: 0;
    
    -webkit-transition: opacity 0.7s, bottom 0.7s;
    -moz-transition: opacity 0.7s, bottom 0.7s;
    transition: opacity 0.7s, bottom 0.7s;
}
#slideshow .commands:hover:before {
    bottom: 35px;
    opacity: 1;
}
#slideshow .commands:hover:after {
    bottom: 45px;
    opacity: 1;
}
#slideshow .commands:focus { 
    outline: 0;
    -webkit-transform: translate(1px, 2px);
    -moz-transform: translate(1px, 2px);
    -ms-transform: translate(1px, 2px);
    -o-transform: translate(1px, 2px);
    transform: translate(1px, 2px);
}
#slideshow .commands:active {
    -webkit-transform: translate(0, 1px);
    -moz-transform: translate(0, 1px);
    -ms-transform: translate(0, 1px);
    -o-transform: translate(0, 1px);
    transform: translate(0, 1px);
}
#slideshow .prev {
    left: -48px;
}
#slideshow .next {
    right: -48px;
}
#slideshow .prev,
#slideshow .next {
    display:none;
}
#slideshow .prev,
#slideshow .next {
    display:none;
}
#slideshow .commands1 {
    display: block;
}

/* play/pause commands */
.play_commands {
    position: absolute;
    width: 22px; height: 22px;
    top: 25px; right: 25px;
    z-index: 10;
    text-indent: -9999px;
    border:0 none;
    opacity: 0;

    -webkit-transition: opacity 1s, right 1s;
    -moz-transition: opacity 1s, right 1s;
    transition: opacity 1s, right 1s;
}
.play { right: 55px; cursor: default; }

.pause:hover { border:0 none; }
.play_commands:focus { outline:0; }

#slideshow:hover .pause,
#sl_play:target ~ #slideshow:hover .pause,
.play_commands:focus {
    opacity: 1;
}
.sl_command:target ~ #slideshow:hover .pause,
#sl_pause:target ~ #slideshow:hover .pause {
    opacity: 0;
}
.pause:after,
.pause:before {
    position: absolute;
    display: block;
    content: " ";
    top:0;
    width:38%;
    height: 22px;
    background: #fff;
    background: rgba(255,255,255,0.5);
}
.pause:after {
    right:0;
}
.pause:before {
    left:0;
}
.play {
    width: 1px; 
    height: 1px; 
    border-top: 10px solid transparent; 
    border-left: 20px solid #fff; 
    border-left: 20px solid rgba(255,255,255,0.5); 
    border-bottom: 10px solid transparent;
    opacity: 0;
}
.play:hover,
.play:focus {
    border-bottom: 10px solid transparent;
}

.sl_i:target ~ #slideshow .slider {
    -webkit-transition: left 1s;
    -moz-transition: left 1s;
    transition: left 1s;
}
.sl_command:target ~ #slideshow .slider {
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    transition: opacity 1s;
}
#slideshow .c_slider {
    position: absolute;
    left:0; top:0;
    width: 400%;
    height: 310px;
    /* multiple background */
    background: url(img/dummy-640x310-1.jpg) 0 0 no-repeat,
                url(img/dummy-640x310-2.jpg) 640px 0 no-repeat,
                url(img/dummy-640x310-3.jpg) 1280px 0 no-repeat,
                url(img/dummy-640x310-4.jpg) 1920px 0 no-repeat;
    transition: background 1s;
}

.sl_i:target ~ #slideshow .c_slider {
    -webkit-transition: background 1s;
    -moz-transition: background 1s;
    transition: background 1s;
}

.sl_command { display: none; }

.sl_command:target ~ #slideshow .slider,
.sl_command:target ~ #slideshow figure:after,
.sl_command:target ~ #slideshow figcaption,
.sl_command:target ~ #slideshow #timeline,
.sl_command:target ~ #slideshow .dots_commands li:first-child a:after {
    -webkit-animation-play-state: paused;
    -moz-animation-play-state: paused;
    animation-play-state: paused;
}

#sl_play:target ~ #slideshow .slider,
#sl_play:target ~ #slideshow figure:after,
#sl_play:target ~ #slideshow figcaption,
#sl_play:target ~ #slideshow #timeline,
#sl_play:target ~ #slideshow .dots_commands li:first-child a:after {
    -webkit-animation-play-state: running;
    -moz-animation-play-state: running;
    animation-play-state: running;
}

.sl_command:target ~ #slideshow .pause 	{ opacity:0; }
.sl_command:target ~ #slideshow .play 	{ opacity:1; right: 25px; cursor: pointer; }
#sl_play:target ~ #slideshow .pause 	{ opacity:0; }
#sl_play:target ~ #slideshow .play 		{ opacity:0; right: 55px; cursor: default;}

.sl_i:target ~ #slideshow .slider									{ visibility: hidden }
.sl_i:target ~ #slideshow .slider figcaption						{ visibility: hidden }
.sl_i:target ~ #slideshow .dots_commands li:first-child a:after		{ display:none; }
.sl_i:target ~ #slideshow .dots_commands li:first-child a:before	{ display:block; }}

#sl_i1:target ~ #slideshow .commands								{ display: none; }
#sl_i1:target ~ #slideshow .commands1								{ display: block; }
#sl_i1:target ~ #slideshow .c_slider								{ background-position: 0 0, 640px 0, 1280px 0, 1920px 0; }
#sl_i1:target ~ #slideshow .dots_commands li:first-child a:before	{ left:0; }

#sl_i2:target ~ #slideshow .commands								{ display: none; }
#sl_i2:target ~ #slideshow .commands2								{ display: block; }
#sl_i2:target ~ #slideshow .c_slider								{ background-position: -640px 0, 0 0, 640px 0, 1280px 0; }
#sl_i2:target ~ #slideshow .dots_commands li:first-child a:before	{ left:18px; }

#sl_i3:target ~ #slideshow .commands								{ display: none; }
#sl_i3:target ~ #slideshow .commands3								{ display: block; }
#sl_i3:target ~ #slideshow .c_slider								{ background-position: -1280px 0, -640px 0, 0 0, 640px 0; }
#sl_i3:target ~ #slideshow .dots_commands li:first-child a:before	{ left:36px; }

#sl_i4:target ~ #slideshow .commands								{ display: none; }
#sl_i4:target ~ #slideshow .commands4								{ display: block; }
#sl_i4:target ~ #slideshow .c_slider								{ background-position: -1920px 0, -1280px 0, -640px 0, 0 0; }
#sl_i4:target ~ #slideshow .dots_commands li:first-child a:before	{ left:54px; }

/* dots styles */
.dots_commands  {
    position: relative;
    top: 32px;
    padding:0; margin:0;
    text-align:center;
}
.dots_commands li {
    display:inline;
    padding:0; margin:0;
    list-style:none;
}
.dots_commands a {
    position: relative;
    display:inline-block;
    height:8px; width: 8px;
    margin: 0 5px;
    text-indent: -9999px;
    background: #fff;
    border-bottom:0;
    
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
    box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
    
    z-index:25;
}
.dots_commands li + li a {
    z-index:10;
}
/* on style after et before, on utilisera les deux */
.dots_commands li:first-child a:after,
.dots_commands li:first-child a:before {
    position: absolute;
    top: 0; left: 0;
    content: " ";
    width: 8px; height: 8px;
    background: #bd9b83;
    z-index:20;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
    box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
}
.dots_commands li:first-child a:after {
    -webkit-animation: dotser 32s infinite; /* webkit can't animate pseudo-element =_= :L: */
    -moz-animation: dotser 32s infinite; /* thanks moz ! :D */
    animation: dotser 32s infinite;
}
.dots_commands li:first-child a:before {
    display:none;
}
 
/* c'est parti pour l'animation ! */
@-moz-keyframes dotser {
    0%, 100% 	{ opacity: 1; left: 0; 		}
    
    20%			{ opacity: 1; left: 0;		}
    22%			{ opacity: 0; left: 0;		}
    23%			{ opacity: 0; left: 18px;	}
    25%			{ opacity: 1; left: 18px;	}
    
    45%			{ opacity: 1; left: 18px;	}
    47%			{ opacity: 0; left: 18px;	}
    48%			{ opacity: 0; left: 36px;	}
    50%			{ opacity: 1; left: 36px;	}
    
    70%			{ opacity: 1; left: 36px;	}
    72%			{ opacity: 0; left: 36px;	}
    73%			{ opacity: 0; left: 54px;	}
    75%			{ opacity: 1; left: 54px;	}
    
    95%			{ opacity: 1; left: 54px;	}
    97%			{ opacity: 0; left: 54px;	}
    98%			{ opacity: 0; left: 0;	}
}
@-webkit-keyframes dotser {
    0%, 100% 	{ opacity: 1; left: 0; 		}
    
    20%			{ opacity: 1; left: 0;		}
    22%			{ opacity: 0; left: 0;		}
    23%			{ opacity: 0; left: 18px;	}
    25%			{ opacity: 1; left: 18px;	}
    
    45%			{ opacity: 1; left: 18px;	}
    47%			{ opacity: 0; left: 18px;	}
    48%			{ opacity: 0; left: 36px;	}
    50%			{ opacity: 1; left: 36px;	}
    
    70%			{ opacity: 1; left: 36px;	}
    72%			{ opacity: 0; left: 36px;	}
    73%			{ opacity: 0; left: 54px;	}
    75%			{ opacity: 1; left: 54px;	}
    
    95%			{ opacity: 1; left: 54px;	}
    97%			{ opacity: 0; left: 54px;	}
    98%			{ opacity: 0; left: 0;	}
}
@keyframes dotser {
    0%, 100% 	{ opacity: 1; left: 0; 		}
    
    20%			{ opacity: 1; left: 0;		}
    22%			{ opacity: 0; left: 0;		}
    23%			{ opacity: 0; left: 18px;	}
    25%			{ opacity: 1; left: 18px;	}
    
    45%			{ opacity: 1; left: 18px;	}
    47%			{ opacity: 0; left: 18px;	}
    48%			{ opacity: 0; left: 36px;	}
    50%			{ opacity: 1; left: 36px;	}
    
    70%			{ opacity: 1; left: 36px;	}
    72%			{ opacity: 0; left: 36px;	}
    73%			{ opacity: 0; left: 54px;	}
    75%			{ opacity: 1; left: 54px;	}
    
    95%			{ opacity: 1; left: 54px;	}
    97%			{ opacity: 0; left: 54px;	}
    98%			{ opacity: 0; left: 0;	}
}
</style>

    
<span id="timeline"></span>




{{-- footer --}}
<footer>
    <div class="card" style="background-color:lightgray;  background-position: bottom; width: 100%;">
                         
		<div class="contact_newsletter col-lg-12 text-center">
        <div text-center style=" font-size: 34px" class="sprites" class="col-lg-1">
       <a target = "_self" href="http://facebook.com/CONNECTUSACI" title='IAHS Facebook' id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
        <a target = "_self" href="http://twitter.com" title='IAHS Twitter' id='tw'><strong><i class="fab fa-twitter-square"></i></strong></a>
        <a target = "_self" href="http://instagram.com" title='IAHS Instagram' id='in'><strong><i class="fab fa-instagram" style="color: #fff; background: #d6249f;
                        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"></i></strong></a>
    </div> 
      <img src="logoIAHS.jpg" style="float: right; border-radius: 50%; width: 100px; height:82px"/>
      Ecrivez-nous et restez aux nouvelles
		</div>

    <div class="milieu col-lg-6 ">
    <a target = "_self" href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cit?? COPRACI, Villa 129, Abidjan</a>
		</div>
		
       <div style="width: 100%; height: 50px; background-color: #696969; text-align: center; padding: 10px 10px 10px 10px;">
        <strong style="color: white">?? 2019 IAHS. Tous droits r??serv??s. Designed by AMANI Koffi Judica??l</strong>
      </div>
	</div>

</footer>

</body>
</html>