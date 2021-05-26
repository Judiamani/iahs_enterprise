<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <title>IAHS</title>
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" media="screen and (max-device-width=320px)" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    

    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>


    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

			
    </style>

    <script>

      $(window).resize(function() {
        var width = $(window).width();
        if (width < 730){
          alert('Your screen is too small');
        }
      });


    </script>

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
       
       <a target = "_self" href="https://facebook.com/CONNECTUSACI" title='IAHS Facebook' id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
        <a target = "_self" href="https://twitter.com" title='IAHS Twitter' id='tw'><strong><i class="fab fa-twitter-square"></i></strong></a>
        <a target = "_self" href="https://instagram.com" title='IAHS Instagram' id='in'><strong><i class="fab fa-instagram" style="color: #fff; background: #d6249f;
                        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"></i></strong></a>
    </div>  
    <br>
   <button class="openBtn" onclick="openSearch()">Recherchez !</button>
   
  </div>
</nav><br>
</header>


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


</nav>
        <style>
            body{
                 background-color: silver;
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

        </style>
<br><br>

<div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      <img src="iahs1.jpg " alt="" />
      <figcaption><h3>IAHS, la référence pour un service de qualité!</h3></figcaption>
      </div>
      <div class="slide">
      <img src="iahs2.jpg " alt="" />
      <figcaption><h3>Nous travaillons à vous offrir le meilleur service!</h3></figcaption>
      </div>
      <div class="slide">
      <img src="iahs3.png " alt="" />
      <figcaption><h3>Votre satisfaction, notre priorité!</h3></figcaption>
      </div>
      <div class="slide">
      <img src="iahs4.jpg " alt=""/>
      <figcaption><h3>Le professionalisme, notre métier!</h3></figcaption>
      </div>
    </div>
  </div>


  <div class="directional_nav">
  <div class="previous_btn" title="Previous">
    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
          <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
        </g>
      </g>
    </svg>
  </div>
  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
          <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
        </g>
      </g>
    </svg>
  </div>   

  </div><!-- End // .directional_nav -->

</div><!-- End // .slider -->


<section class="details-card">
	<h2 style="text-align: center; margin-top: -30px"><strong>Nos services</strong></h2><hr>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            	
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="mark7.jpg" alt="">
                        <span><h4>Marketing</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Marketing</h3>
                        <p>Le rôle du marketing est de tisser un lien entre votre entreprise et le consommateur...</p>
                            <a target = "_self" href="{{ url('/mark') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            
        </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="c7.jpg" alt="">
                        <span><h4>Communication</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Communication</h3>
                        <p>La communication est l'ensemble des interactions avec autrui qui transmettent quelque information...</p>
                            <a target = "_self" href="{{ url('/com') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="imp7.jpg" alt="">
                        <span><h4>Import-Export</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Import-Export</h3>
                        <p>Le commerce international est l'échange de biens, de services et capitaux entre pays...</p>
                            <a target = "_self" href="{{ url('/imp') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="cons7.jpg" alt="">
                        <span><h4>Construction</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Construction</h3>
                        <p>Cette activité appelle souvent le concours de nombreux acteurs et corps de métier, plus ou moins spécialisés...</p>
                            <a target = "_self" href="{{ url('/cons') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="pres7.jpg" alt="">
                        <span><h4>Prestations Entreprises</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Prestations Entreprises</h3>
                        <p>Le terme « service aux entreprises » est utilisé pour définir une gamme...</p>
                            <a target = "_self" href="{{ url('/pres') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="res7.jpg" alt="">
                        <span><h4>Ressources humaines</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Ressources humaines</h3>
                        <p>La gestion des ressources humaines (GRH) anciennement la gestion...</p>
                            <a target = "_self" href="{{ url('/res') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img class="img" src="ent7.jpg" alt="">
                        <span><h4>Entretien bâtiment</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Entretien bâtiment</h3>
                        <p>Effectue la maintenance et l'entretien des locaux et espaces à usage collectif (locaux d'entreprises,...</p>
                            <a target = "_self" href="{{ url('/ent') }}" class="btn-card">Lire</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    	

.col-md-4 {
  
  transition: transform .2s; /* Animation */  
  margin: 0 auto;
}

.col-md-4:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}


    	/* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 50px 15px 15px 20px;
}
.details-card {
	background: #ecf0f1;
	opacity: 0.9;
 margin-left: 10px;
 margin-right: 20px;
  
  margin-top: 320px;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
  width: 250px;
  margin-top: 45px;
}

.card-img {
	position: relative;
	overflow: hidden;
	border-radius: 0;
	z-index: 1;
}

.card-img img {
	width: 100%;
	height: 150px;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 70px;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #1ABC9C;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}

    </style>

</section>
            

 <br><br><br>
    
<div class="div2" style="background-color: #DCDCDC; opacity: 0.9; width: 100%; padding: 10px"> 
            <h2 style="color: solid gold; text-align: center"><em><strong>Nos Partenaires</strong></em></h2><hr>
            <MARQUEE scrollamount="15" direction="left" onmouseover="this.stop();" loop="infinite" onmouseout="this.start();">&nbsp;
                <a target = "_self" href="https://www.ets.org/"><img style="margin-left: 70px; height:160px; width:200px" src="i1 (1).jpg" alt="ETS"/></a>
                <a target = "_self" href="https://www.groupeconnectiebs.com/fr/"><img style="margin-left: 70px; height:160px; width:200px" src="i2.png" alt="Connect USA CI"/></a>
                <a target = "_self" href="https://esatic.ci/"><img style="margin-left: 70px; height:160px; width:200px" src="i1 (3).jpg" alt="ESATIC pole d'excellence des TIC !"/>
                <a target = "_self" href="https://www.laposte.ci.post/"><img style="margin-left: 70px; height:160px; width:200px" src="i4.png" alt="La Poste de Cote d'Ivoire"/></a>
                <a target = "_self" href="https://cufop.ci/"><img style="margin-left: 70px; height:160px; width:200px" src="i5.jpg" alt="Ecole Supérieure de Formation Continue de l'UFHB"/></a>
            </MARQUEE>
</div>
            
   
<br><br><br> 
<form action="{{ route('iahs.form.enr') }}" method="post">

<section class="home-newsletter">
<div class="container">
<div class="row">
<div >
  <div class="single">
    <h2><em><strong> Restez informé(e) en réjoignant notre Newsletter !</strong></em></h2>
    
  <div class="input-group">
  {{ csrf_field() }}
  <div class="input-group-addon">
  <span class="glyphicon glyphicon-envelope"></span> 
   </div>
        
          <input name="mailadd" type="email" required="required" class="form-control" placeholder="Entrez votre email">
          <span class="input-group-btn">
          <button class="btn btn-theme" type="submit">S'inscrire</button>
          </span>
          </div>
  </div>
</div>
</div>
</div>
</section>
</form>         


 <br><br><br>
<!-- start count stats -->

<button class="button">Nos statisques</button><br><br>

<style>
  .button {
  background: #3498db;
  width: 250px;
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

<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 stats">
                <i class="fa fa-star" aria-hidden="true"></i>
                <div class="counting" data-count="9">0</div>
                <h5>Partenaires</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <div class="counting" data-count="7">0</div>
                <h5>Catégories de Services</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class="counting" data-count="250">0</div>
                <h5>Clients satisfaits</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <div class="counting" data-count="4">0</div>
                <h5>Articles en ligne</h5>
            </div>


        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</section>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#counter-stats").fadeIn(1500);
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on('keyup','#list_search',function(){   
        var value = $(this).val();
        $.getJSON('ajax_search_list.php?q='+value, function (data) {
            var availableTags = data;
            $( "#list_search" ).autocomplete({
                source: availableTags,
                select: function(event, ui) {
                $(event.target).val(ui.item.value);
                $('#search_form').submit();
                return false;
            },
             });
        });
        
    });
});


function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);


/*/ start count stats /*/

section#counter-stats {
    display: flex;
    justify-content: center;
    padding-top: 15px;
    background: #DCDCDC;
    display:none;
    width: 100%;
}

.stats {
  text-align: center;
  font-size: 35px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
}

.stats .fa {
  color: #008080;
  font-size: 60px;
}

/*/ end count stats /*/

@media screen and (max-width: 720px) {

	section#counter-stats {
    display: flex;
    justify-content: center;
    padding-top: 15px;
    background: gray;
    display:none;
    width: 100%;
	}

	.stats {
	  text-align: center;
	  font-size: 15px;
	  font-weight: 300;
	  font-family: 'Montserrat', sans-serif;
	}

	.stats .fa {
	  color: #008080;
	  font-size: 35px;
	}

}
</style>
<script>


    // number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 12000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});
</script>

<!-- end cont stats -->


<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size: 15px" class="fas fa-arrow-up"></i></button>

<style>
    #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 30px; /* Place the button at the bottom of the page */
  right: 100px;/* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: gray; /* Set a background color */
  opacity: 0.9;
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 30px; /* Rounded corners */
  font-size: 5px; /* Increase font size */

  
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>

<script>
 // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>



  <style>
    .slider,.div2 {
      margin:0px;
      padding:0px;
    }
  </style>

    <div class="container my-4">
        {{--@yield('content')--}}
    </div>


<style type="text/css">
    .home-newsletter {

background-image: linear-gradient(to bottom right, red, yellow);
padding: 10px 10px 10px 10px;
border-radius: 20px 20px 20px 20px; 


}

.home-newsletter .single {
max-width: 100%;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; 
}

@media screen and (min-width: 1366px) {
	.home-newsletter .single {
		margin-left: 100px;
	}

	.home-newsletter  {
		margin-left: 250px;
		margin-right: 250px;
	}
}

.home-newsletter .single h2 {
font-size: 22px;
color: white;
text-transform: uppercase;
margin-bottom: 40px; }
.home-newsletter .single .form-control {
height: 50px;
background: rgba(255, 255, 255, 0.6);
border-color: transparent;
border-radius: 20px 0 0 20px; }
.home-newsletter .single .form-control:focus {
box-shadow: none;
border-color: #243c4f; }
.home-newsletter .single .btn {
min-height: 50px; 
border-radius: 0 20px 20px 0;
background: #243c4f;
color: #fff;
}   

 //medium phone size
			@media screen and (max-width: 720px) {
				
			   .home-newsletter {

				background: #ff3333;
				padding: 10px 10px 10px 10px;
				border-radius: 20px 20px 20px 20px; 


				}

				.home-newsletter .single {
				max-width: 100%;
				margin: 0 auto;
				text-align: center;
				position: relative;
				z-index: 2; }
				.home-newsletter .single h2 {
				font-size: 22px;
				color: white;
				text-transform: uppercase;
				margin-bottom: 40px; }
				.home-newsletter .single .form-control {
				height: 50px;
				background: rgba(255, 255, 255, 0.6);
				border-color: transparent;
				border-radius: 20px 0 0 20px; }
				.home-newsletter .single .form-control:focus {
				box-shadow: none;
				border-color: #243c4f; }
				.home-newsletter .single .btn {
				min-height: 50px; 
				border-radius: 0 20px 20px 0;
				background: #243c4f;
				color: #fff;
				} 
			}  
</style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>


 
<script type="text/javascript"></script>

<br>
    </div>
</div>

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
        <a target = "_self" href="https://www.facebook.com/profile.php?id=100005672775138" title='AMANI Facebook' id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
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

    <style>

.contain, {
  margin : 0px;
}

.slider {
  margin: -300px auto;
  max-width: 100%;
  max-height: 30%;
  margin-top: 57px;
  
}

.slide_viewer {
  height: 530px;
  overflow: hidden;
  position: relative;
}

.slide_group {
  height: 100%;
  position: relative;
  width: 100%;
}

.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}

.slide img {
  
  height: 100%;
  
  width: 100%;
}

.slide figcaption {
                    position:absolute;
                    width: 500px;
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

@keyframes figcaptionner {
                    0%, 25%, 50%, 75%, 100%						{ bottom: -45px;	}
                    5%, 20%, 30%, 45%, 55%, 70%, 80%, 95%		{ bottom: 70px; width:75% ;	}
                }

.slide figcaption {
                    /* ... la propriété animation */
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

.slide:first-child {
  display: block;
}

.slide:nth-of-type(1) {
  background: #D7A151;
}

.slide:nth-of-type(2) {
  background: #F4E4CD;
}

.slide:nth-of-type(3) {
  background: #C75534;
}

.slide:nth-of-type(4) {
  background: #D1D1D4;
}

.slide_buttons {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a.slide_btn {
  color: #474544;
  font-size: 42px;
  margin: 0 0.175em;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.slide_btn.active, .slide_btn:hover {
  color: #428CC6;
  cursor: pointer;
}

.directional_nav {
  
  margin: 0 auto;
  max-width: 1200px;
  position: relative;
  top: -340px;
}

.previous_btn {
  bottom: 0;
  left: 0.9px;
  margin: auto;
  position: absolute;
  top: 250px;
}

.next_btn {
  bottom: 0;
  margin: auto;
  position: absolute;
  right: 0.5px;
  top: 250px;
}

.previous_btn, .next_btn {
  cursor: pointer;
  height: 65px;
  opacity: 0.9;
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  width: 65px;
}

.previous_btn:hover, .next_btn:hover {
  opacity: 3;
}

@media only screen and (max-width: 720px) {

	.slider {
  margin: -300px auto;
  max-width: 100%;
  max-height: 30%;
  margin-top: 57px;
  
}

.slide_viewer {
  height: 320px;
  overflow: hidden;
  position: relative;
}

.slide img {
  
  height: 100%;
  
  width: 100%;
}

@keyframes figcaptionner {
                    0%, 25%, 50%, 75%, 100%						{ bottom: -45px;	}
                    5%, 20%, 30%, 45%, 55%, 70%, 80%, 95%		{ bottom: -25px; width:100% ;	}
                }
  .previous_btn {
    left: 10px;
  }
  .next_btn {
    right: 10px;
  }


}
</style>

<script>

$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});

</script>


<div style="margin-top: 100px" id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">&times;</span>
  <div class="overlay-content">
      <form class="form-inline ml-3" target = "_self" action="{{ url('/search_result') }}" method="GET">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="q" autocomplete="off" id="list_search" type="search" required placeholder="Quelle catégorie de services voulez-vous ?" aria-label="Search"/> 
      <div class="input-group-append">
      <button  type="submit" id="click" class="btn btn-navbar" value="Rechercher"  onclick="closeSearch()"><i class="fa fa-search"></i></button>
      </div>
        </div>
    </form>
  </div>
</div>



     

<style>
.openBtn {
    background: #f1f1f1;
    border: none;
    padding: 10px 15px;
    font-size: 15px;
    cursor: pointer;
    margin-left: 15px;
    border-radius: 12px;
}

.openBtn:hover {
    background: #bbb;
}

.overlay {
    height: 30%;
    width: 100%;
    display:none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
    position: relative;
    top: 42%;
    width: 80%;
    text-align: center;
    margin-top: 30px;
    margin: auto;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
    cursor: pointer;
    color: white;
}
.overlay .closebtn:hover {
    color: #ccc;
}

.overlay input[type=search] {
    padding: 15px;
    font-size: 17px;
    border: none;
    width: 80%;
    background: white;
    width: 500px; max-width: 100%;
    margin-left: 250px;
    
    
}

.overlay input[type=search]:hover {
    background: #f1f1f1;
}

.overlay button {
    float: left;
    width: 20%;
    padding: 15px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
    width: 50px;
}


.overlay button:hover {
    background: #bbb;
}


@media screen and (max-width: 720px) {

				.overlay {
				    width: 100%;
				    display:none;
				    position: fixed;
				    z-index: 1;
				    top: 50px;
				    left: 0;
				    background-color: rgba(0,0,0, 0.9);
				}

				.overlay-content {
				    position: relative;
				    top: 42%;
				    width: 100%;
				    text-align: center;
				    margin-top: 100px;
				    margin: auto;
				}

				.overlay .closebtn {
			    position: absolute;
			    top: 20px;
			    right: 45px;
			    font-size: 60px;
			    cursor: pointer;
			    color: white;
				}
				.overlay .closebtn:hover {
				    color: #ccc;
				}

				.overlay input[type=search] {
				    padding: 15px;
				    font-size: 17px;
				    border: none;
				    width: 300px;
				    background: white;
				    top:40px;
				    width: 100px; max-width: 100%;
				    margin-left: -10px;
				}

				.overlay input[type=search]:hover {
				    background: #f1f1f1;
				}

				.overlay button {
				    float: left;
				    width: 20%;
				    padding: 15px;
				    background: #ddd;
				    font-size: 17px;
				    border: none;
				    cursor: pointer;
				    width: 30px;
				    top:40px;
				}

				.overlay button:hover {
				    background: #bbb;
				}
}				

</style>



</body>
</html>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

