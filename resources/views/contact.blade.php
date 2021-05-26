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

           

      }
@media screen and (min-width: 1366px) {
      
            }
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


<style>
            body{
                background-color: #DCDCDC;
                width: 100%;
            }

            nav div ul li a:hover{
              background-color: #1ce;
            }
        </style>

<br><br>

<button class="button"> <i class="fas fa-phone" style="float: right; font-size: 34px; color: #3385ff"></i></button><br><br>

             <div class="card" style="width: 18rem;margin-left: 40px; display: flex; display: none;">
          <img src="logoIAHS.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong>Contactez-nous !</strong></h5>
            <p class="card-text"><strong>Siège social :</strong> Abidjan Cocody riviéra 3 cité COPRACI
                            villa 129<br> 25 BP 709 ABIDJAN 25<br> Côte d’Ivoire <br><strong>Tél:</strong> (225)  85 66 84 24/ 52 66 72 72<br>
                            <strong>Email:</strong> lmiahs11@gmail.com
                            </p>
            <i class="fas fa-phone" style="float: right; font-size: 34px; color: #3385ff"></i>
          </div>
        </div><br><br>
  
      <div  style="background-color: #20B2AA; width: 90%;" id="box_form" class="container" class="col-md-4"
      >
                <h3 id="box_form_title" style = "text-align: center">Merci de bien vouloir nous écrire !</h3><br>

                <form  class="form-horizontal" action="{{ route('iahs.form.ajout') }}" method="post">
                    <div class="form-group has-feedback" id="group1">
                    {{ csrf_field() }}
                        <label for="email">Adresse Email</label><br>
                        <input type="email" class="form-control" id="email" required="required" placeholder="Votre Email" name="email">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        <label for="password">Mot de passe</label><br>
                        <input type="password" class="form-control" id="password" required="required" placeholder="Votre mot de passe" name="password">
                        <p class="help-block"><em>Veillez à avoir un mot de passe fort composé de caractères spéciaux et de majuscules/miniscules</em></p>
                    </div>
                    <div class="form-group has-feedback" id="group2">
                    <label for="fonct">Vous êtes :</label>
                        <input class="form-control" style="width: 100%" type="text" required="required" name="fonct" value="" placeholder="Particulier / Entreprise" ><br><br>
                        <label for="comment">Laissez-nous un commentaire</label><br>
                        <textarea class="form-control" style="width: 100%" required="required" name="comment" rows="2" cols="40" placeholder="Faites-nous confiance !"></textarea>
                    </div><br>

                    <div class="g-recaptcha" data-sitekey="6LdPbaoUAAAAAHwQUkwk45Ty5x4oTv9pf0D0Di4R" data-callback="onSubmit"></div>
                
                <script src='https://www.google.com/recaptcha/api.js'></script> <br>

                    <button type="submit" style="margin-left: 30px" name="submit" value="Add" class="btn btn-success"><i class="fas fa-check-circle" style="padding-right: 10px"></i> Valider <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" name="reset" class="save btn btn-danger"><i class="fas fa-window-close" style="padding-right: 15px"></i>Annuler</button>
                </form><br>
            </div>

      
     

<style>



.button:hover 
{
  -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
}

@-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}

  .button {

  	position: relative;
  width: 50px;
  height: 70px;
  border: none;
  box-shadow: 0 0 0 0 rgba(232, 76, 61, 0.7);
  border-radius: 50%;
  background-color: #1ce;
  background-image: url(YOUR-URL-IMAGE.png);
  background-size:cover;
  background-repeat: no-repeat;
  cursor: pointer;
  -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  padding: 4px 0;
  font-size: 30px;
  position: absolute;
  left: 50%;
  
  transform: translateX(-50%) translateY(-50%);
  border-radius: 3px;
  
  &:hover {
    cursor: pointer;
  }
  
  &:after {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 10%;
    border-radius: 50%;
    background-color: darken(#f1c40f, 20%);
    opacity: 0.4;
    bottom: -30px;
  }
}
</style>
<script>
  var $button = document.querySelector('.button');
$button.addEventListener('click', function() {
  var duration = 0.3,
      delay = 0.08;
  TweenMax.to($button, duration, {scaleY: 1.6, ease: Expo.easeOut});
  TweenMax.to($button, duration, {scaleX: 1.2, scaleY: 1, ease: Back.easeOut, easeParams: [3], delay: delay});
  TweenMax.to($button, duration * 1.25, {scaleX: 1, scaleY: 1, ease: Back.easeOut, easeParams: [6], delay: delay * 3 });
});
</script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".card").fadeIn(1500);
  });
});
</script>

<br><br><br>

{{-- footer --}}
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
    <a target = "_self" href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cité COPRACI, Villa 129, Abidjan</a>
		</div>
		
       <div style="width: 100%; height: 50px; background-color: #696969; text-align: center; padding: 10px 10px 10px 10px;">
        <strong style="color: white">© 2019 IAHS. Tous droits réservés. Designed by AMANI Koffi Judicaël</strong>
      </div>
	</div>
   
</body>
</html>