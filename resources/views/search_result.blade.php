<?php

  $user = 'iahsconnect'; 
   $password = 'iahsconnect@727'; 
   $database = 'iahs'; 
   $db = new mysqli('localhost',$user,$password,$database);
    mysqli_query($db, "SET NAMES 'utf8'"); 
if(isset($_GET['q']) && $_GET['q']!="") :
    $data = mysqli_real_escape_string($db,$_GET['q']);
    $keyword =  trim(preg_replace('/\s+/',' ',$data));
    $sql=$db->query("SELECT distinct * FROM `posts` WHERE title LIKE '%$keyword%' ");
   
    mysqli_set_charset($db, 'utf8')

?>
          
    
<!DOCTYPE html>
<html lang="fr">
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

    <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>

    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>


   <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>


{{--Website menu --}}

<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light bg-blue ">
<h1><a target = "_self" style="color: white;" class="navbar-brand" href="{{ url('/') }}"><img src="logoIAHS.jpg"/><strong>IAHS<br> International Agency for Hybrid Services</strong></a></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a target = "_self" class="nav-link" href="{{ url('/') }}"> <span style="font-size: 1.5em; color: #fff;">
                            <i class="fas fa-home"></i>
                        </span>Accueil<span class="sr-only">(current)</span></a>
      </li>
      
       <li class="nav-item active">
        <a target = "_self" class="nav-link" href="{{ url('/present') }}"> <span style="font-size: 1.5em; color: #fff;">
                            <i class="fas fa-binoculars"></i>
                        </span><strong>Présentation</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active dropdown">
        <a target = "_self" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span style="font-size: 1.5em; color: #fff;">
                        <i class="fas fa-server"></i>
        </span> 
          Nos services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a target = "_self" class="dropdown-item" href="{{ url('/mark') }}"><i class="fas fa-briefcase" style="padding-right: 15px"></i>Marketing</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/com') }}"><i class="fas fa-comment" style="padding-right: 15px"></i>Communication</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/imp') }}"><i class="fas fa-exchange-alt" style="padding-right: 15px"></i>Import-Export</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/cons') }}"><i class="fas fa-tools" style="padding-right: 15px"></i>Construction</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/pres') }}"><i class="fas fa-graduation-cap" style="padding-right: 15px"></i>Prestations Entreprises</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/res') }}"><i class="fas fa-handshake" style="padding-right: 15px"></i>Ressources humaines</a>
          <div class="dropdown-divider"></div>
          <a target = "_self" class="dropdown-item" href="{{ url('/ent') }}"><i class="fas fa-building" style="padding-right: 15px"></i>Entretien batiment</a>
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
        <a target = "_self" class="nav-link" href="{{ url('/actual') }}"><span style="font-size: 1.5em; color: #fff;">
        <i class="fas fa-blog"></i>
        </span>
        Actualités</a>
      </li>
      <li class="nav-item active">
        <a target = "_self" class="nav-link" href="{{ url('/contact') }}">
        <span style="font-size: 1.5em; color: #fff;">
        <i class="fas fa-id-card"></i>
        </span>
        Contacts</a>
      </li>
    </ul>
    <p>
    
    <div text-center style=" font-size: 34px" class="sprites" class="col-lg-1">
       <a target = "_self" href="http://facebook.com/CONNECTUSACI" id='fb'><strong><i class="fab fa-facebook-square"></i></strong></a>
        <a target = "_self" href="http://twitter.com" id='tw'><strong><i class="fab fa-twitter-square"></i></strong></a>
        <a target = "_self" href="http://instagram.com" id='in'><strong><i class="fab fa-instagram"></i></strong></a>
    </div> 
   </p>  
  </div>
</nav>
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
                background-image: url(fo.jpg);
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

<br><br>
</style>


    <div style="background-color: #b3e6ff; border-style: solid; border-radius: 200px  ;margin-left: 40px; margin-right: 40px; padding: 20px 20px 20px 20px; margin-top: 70px; opacity: 0.9 ">
    <?php if(isset($sql) && $sql && ($sql->num_rows)) : ?>
    <div class="reslt_bar">                
        <?php foreach ($sql as $key => $search_data) : ?>
            
            <?=$dbContent = str_ireplace($keyword,'<h1 style="text-align: center"><strong>'.$keyword.'</strong></h1>',$search_data['title']); ?></br><br>                       
            <?=$dbContent = str_ireplace($keyword,'<b>'.$keyword.'</b>',$search_data['text']); ?>

        <?php endforeach; ?> <br><br>
        
        <h3 style="text-align: center;"> En savoir plus ? <a style="text-decoration: none" target = "_self" href="https://www.google.com/?hl=fr"><img style="width: 80px; height: 50px" src="google.png"> </a></3>              
    </div>
    <?php else :?>
    <p style="text-align: center;">Votre recherche - <b><?=@$keyword;?></b> - n'a trouvé aucune correspondance.<br>
      Vous pouvez poursuivre vos recherche via <a target = "_self" style="text-decoration: none" href="https://www.google.com/?hl=fr"><img style="width: 80px; height: 50px" src="google.png"> </a>
    </p>        
    <?php endif; ?>
    </div>
 <?php endif; ?>


 <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('keyup','#list_search',function(){   
        var value = $(this).val();
        $.getJSON('{{ url('/ajax_search_list') }}?q='+value, function (data) {
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
</script>


            <br><br><br>




    {{-- footer --}}
    <div class="card" style="background-color:lightgray;  background-position: bottom; width: 100%;">
                         
        <div class="contact_newsletter col-lg-12 text-center">
      <div text-center style="font-size: 43px" class="sprites" class="col-lg-1">
        <a href="http://facebook.com/CONNECTUSACI" id='fb'><i class="fab fa-facebook-square"></i></a>
          <a href="http://twitter.com" id='tw'><i class="fab fa-twitter-square"></i></a>
          <a href="http://instagram.com" id='in'><i class="fab fa-instagram"></i></a>
      </div>
      <img src="logoIAHS.jpg" style="float: right; border-radius: 50%; width: 100px; height:82px"/>
                
                Ecrivez-nous et restez aux nouvelles
                
        </div>

    <div class="milieu col-lg-6 ">
    <a href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cité COPRACI, Villa 129, Abidjan</a>
        </div>
        
         <div style="width: 100%; height: 50px; background-color: #696969; text-align: center; padding: 10px 10px 10px 10px;">
        <strong style="color: white">© 2019 IAHS. Tous droits réservés. Designed by AMANI Koffi Judicaël</strong>
      </div>
    </div>


</body>
</html>       
   

