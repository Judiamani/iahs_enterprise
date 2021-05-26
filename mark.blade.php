<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IAHS</title>
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/iahs-style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="vendor/magnificPopup/dist/magnific-popup.css">
    <script src="vendor/magnificPopup/dist/jquery.magnific-popup.js"></script>


    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>

{{--Website menu --}}

<header>
<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light bg-blue" style="background-color: #696969; width: 100%; box-shadow: 10px 5px 7px 5px gray  ">
<h1><a target = "_self" style="margin-left:20px; color: white; font-size: 19px" class="navbar-brand" href="{{ url('/') }}"><img src="logoIAHS.jpg" style="border-radius: 50%; width: 80px; height:72px; margin-left: 5px; margin-right: 10px"/><strong>IAHS<br> International Agency for Hybrid Services</strong></a></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div style="margin-left: 140px; font-size: 13px" class="collapse navbar-collapse" id="navbarSupportedContent">
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
            body{
                background-color: #DCDCDC;
                width: 100%;
            }

            nav div ul li a:hover{
              background-color: #1ce;
            }
        </style>


<br><br>
<div class="service">
		<h2 style="text-align: center">Marketing</h2>
     <a target = "_self" href="{{ url('/service') }}"> <button type="submit" name="submit" value="Add" class="save btn btn-primary"><i class="fas fa-save" style="padding-right: 15px"></i>Passez une demande ici</button></a>
    <br><br>

		<div style="margin-left: 20px; width: 900px" class="row">
			<p class=" col-lg-8">
				Le rôle du marketing est de tisser un lien entre votre entreprise et le consommateur. Le marketing possède à la fois un rôle d'action et d'analyse dans l'entreprise. Il sert à concevoir et offrir des produits qui vont satisfaire le consommateur.
        Tout au long de vos démarches de marketing, il vous faudra utiliser l'ensemble des moyens dont dispose votre entreprise pour vendre ses produits ou services aux clients. Le tout devra être fait de manière réfléchie et structurée, mais aussi rentable.
			</p>
			<div class="img_div col-lg-4">
					<a href="imark1.png" class="gallery img-responsive ens1" title="The caption 1">
					  <img src="imark1.png" width="200" height="135" />  
					</a>
			</div>
		</div>

		<div style="margin-left: 400px" class='row'>
			<div class="img_div col-lg-4">
					<a href="imark2.jpg" class="gallery img-responsive ens1" title="The caption 1">
					  <img src="imark2.jpg" width="200" height="135" />  
					</a>
			</div>
			<p class=" col-lg-8">
				Nous pouvons vous accompagner dans votre mise en place de ce joyau entrepreneurial. Ainsi la demarche d'etablissement vous sera donnee par nos experts et conseillers. De plus la valorisation du capital humain etant non negligeable car elle est la ressource des ressources. Nous vous guiderons dans cet optique.
			</p>
		</div><br><br>

		<div style="margin-right: 400px; margin-left: 20px" class="row">
			<p class=" col-lg-8">
				Pour tisser un lien entre l'entreprise et le consommateur, le marketing répond à cinq fonctions: 
<br><br>
1. chercher à connaître et analyser la demande;<br>
2. planifier et développer des concepts de produits ou de services;<br>
3. communiquer aux consommateurs des informations pertinentes sur le produit ou le service;<br>
4. organiser la transaction des droits de propriété;<br>
5. distribuer les produits ou offrir les services sur leurs marchés respectifs.
			</p>
			<div class="img_div col-lg-4">
				<a href="imark3.jpg" class="gallery img-responsive ens1" title="The caption 1">
				  <img src="imark3.jpg" width="200" height="135" />  
				</a>
			</div>
		</div>

	</div><br><br><br>
	<!-- FIN DIV INIT -->


{{-- footer --}}
    <div class="card" style="background-color:lightgray;  background-position: bottom; width: 100%;">
                         
		<div class="contact_newsletter col-lg-12 text-center">
      <div text-center style="font-size: 43px" class="sprites" class="col-lg-1">
        <a target = "_self" href="http://facebook.com/CONNECTUSACI" id='fb'><i class="fab fa-facebook-square"></i></a>
	      <a target = "_self" href="http://twitter.com" id='tw'><i class="fab fa-twitter-square"></i></a>
	      <a target = "_self" href="http://instagram.com" id='in'><i class="fab fa-instagram"></i></a>
      </div>
      <img src="logoIAHS.jpg" style="float: right; border-radius: 50%; width: 100px; height:82px"/>
				Ecrivez-nous et restez aux nouvelles
		</div>

    <div class="milieu col-lg-6 ">
    <a target = "_self" href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cité COPRACI, Villa 129, Abidjan</a>
		</div>
		
        <div class="card-body text-center">
                Copyright IAHS  All rights reserved !
        </div>
	</div>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>
</html>