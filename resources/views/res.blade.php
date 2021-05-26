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
            .row{
              margin-left: 10px;  
              width: 90%;
            }


           

      }
@media screen and (min-width: 1366px) {
       .row{
              margin-left: 250px; 
              width: 900px;
            }
}
        </style>
</style>

<br><br>
<div class="service">
		<h2 style="text-align: center">Ressources humaines</h2>
     <a style="margin-left: 15px;" target = "_self" href="{{ url('/service') }}"> <button type="submit" name="submit" value="Add" class="save btn btn-primary"><i class="fas fa-save" style="padding-right: 15px"></i>Passez une demande ici</button></a>
    <br><br>

		<div class="row">
			<p class=" col-lg-8">
      La gestion des ressources humaines (GRH) — anciennement la gestion du personnel — est l'ensemble des pratiques 
      mises en œuvre pour administrer, mobiliser et développer les ressources humaines impliquées dans l'activité d'une 
      organisation. Ces ressources humaines sont l'ensemble des collaborateurs de tous statuts (ouvriers, employés, 
      cadres) appartenant à l'organisation mais aussi – et de plus en plus – liés à elle par des rapports de sujétion 
      (ainsi, les collaborateurs des sous-traitants sont considérés comme faisant partie de fait du périmètre des 
      ressources humaines de l'entreprise)1. Dans un premier temps, cette fonction est entendue dans une perspective 
      opérationnelle. Il s'agit d'administrer un personnel qui peut être numériquement important et réparti en différents 
      eaux de hiérarchie ou de qualification : (gestion de la paie, droit du travail, contrat de travail, etc.).
			</p>
			<div class="img_div col-lg-4">
					<a href="rh1.jpg" class="gallery img-responsive ens1" title="The caption 1">
					  <img src="rh1.jpg" width="200" height="135" />  
					</a>
			</div>
		</div><br><br><br>

		<div class='row'>
			<div class="img_div col-lg-4">
					<a href="rh2.jpg" class="gallery img-responsive ens1" title="The caption 1">
					  <img src="rh2.jpg" width="200" height="135" />  
					</a>
			</div>
			<p class=" col-lg-8">
      La gestion des ressources humaines intervient à tous les stades de la vie des collaborateurs dans l'entreprise, 
      dont leur entrée et leur départ. Elle se décline ainsi en de multiples tâches : définition des postes, recrutement, 
      gestion des carrières, formation, gestion de la paie et des rémunérations, évaluation des performances, gestion des 
      conflits, relations sociales et syndicales, motivation et l'implication du personnel, communication, les conditions 
      de travail, sélection, et équité (justice distributive, interactive, etc.). Afin de valoriser les compétences, 
      la motivation, l'information et l'organisation, il est possible de donner toute l'attention nécessaire à certains outils de gestion :

      <br><br>-Le recrutement. En évaluant les compétences et la motivation lors du recrutement, on s'assure d'avoir un personnel adéquat en nombre et en qualification ;
      <br><br>-La formation et le coaching. Afin d'améliorer le niveau de compétence des collaborateurs, mais aussi pour améliorer leur motivation (une formation peut constituer une récompense et, il est souvent plus motivant d'effectuer un travail que l'on sait faire) ;
      <br><br>-La motivation positive (récompense : félicitation, prime, promotion, formation...) et négative (sanction : réprimandes, réduction ou suppression d'une prime, rétrogradation, voire licenciement).
			</p>
		</div><br><br>

		<div class="row">
			<p class=" col-lg-8">
      La motivation positive et la motivation négative ont chacune leur efficacité. 
      La sanction peut être démotivante pour l'intéressé. Mais il faut relativiser cette crainte car elle fait 
      appel au principe de responsabilité et d'exemplarité. Elle renvoie aussi l'individu au groupe. Ce dernier peut 
      mal vivre des comportements non sanctionnés quand ils sont hors jeu. Ce peut être un facteur de démotivation quand
      une absence de sanction traduit de fait un déséquilibre entre celui qui se dévoue et celui qui ne fait rien. 
      Le souci d'équité doit guider l'administrateur. De ce point de vue, la gestion des ressources humaines doit 
      intégrer aussi dans sa pratique administrative, la notion de groupe ou d'équipe : par la communication et la transparence.
			Notre equipe pourra donc vous accompagne dans le coaching, le recrutement et le placement des personnes de qualite et fiables
			</p>
			<div class="img_div col-lg-4">
				<a href="rh3.jpeg" class="gallery img-responsive ens1" title="The caption 1">
				  <img src="rh3.jpeg" width="200" height="135" />  
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
		
        <div style="width: 100%; height: 50px; background-color: #696969; text-align: center; padding: 10px 10px 10px 10px;">
        <strong style="color: white">© 2019 IAHS. Tous droits réservés. Designed by AMANI Koffi Judicaël</strong>
      </div>
	</div>


</body>
</html>