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
?>
    <html>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        <link rel="stylesheet" href="st.css" />
    </head>
    <body>

        <style>
            body{
                background-image: url(dist/img/fo.jpg);
                background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            nav div ul li a:hover{
                background-color: #1ce;
            }

<br><br>
</style>
        
    <div>
        <form action="search_result.php" id="search_form" method="GET">
            <input name="q" autocomplete="off" id="list_search" type="search" required value="<?=@$keyword;?>" class="search" />
            <button type="submit"  class="but_blue">Rechercher</button>      
        </form>
    </div>
    <div>
       <a style="text-decoration: none;" href="./index1.php"><h3>Retour à l'accueil</h3> </a>
    </div>
    <div style="background-color: #b3e6ff; border-style: solid; border-radius: 160px  ;margin-left: 40px; margin-right: 40px; padding: 20px 20px 20px 20px; opacity: 0.9 ">
    <?php if(isset($sql) && $sql && ($sql->num_rows)) : ?>
    <div class="reslt_bar">                
        <?php foreach ($sql as $key => $search_data) : ?>
            
            <?=$dbContent = str_ireplace($keyword,'<h1 style="text-align: center"><strong>'.$keyword.'</strong></h1>',$search_data['title']); ?></br><br>                       
            <?=$dbContent = str_ireplace($keyword,'<b>'.$keyword.'</b>',$search_data['text']); ?>

        <?php endforeach; ?> <br><br>
        <img style="margin-left: 500px" src="dist/img/logoIAHS.jpg" alt="AdminIAHS Logo" class="brand-image img-circle elevation-3">               
    </div>
    <?php else :?>
    <p style="text-align: center;">Votre recherche - <b><?=@$keyword;?></b> - n'a trouvé aucune correspondance.</p>        
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
</script>
            
            
   

