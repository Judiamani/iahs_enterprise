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


    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>

{{--Website menu --}}

<header>
<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light bg-blue" style="background-color: yellowgreen; width: 100%; box-shadow: 10px 5px 7px 5px gray  ">
<h1><a style="margin-left:20px; color: white; font-size: 19px" class="navbar-brand" href="{{ url('/') }}"><img src="logoIAHS.jpg" style="border-radius: 50%; width: 80px; height:72px; margin-left: 5px; margin-right: 10px"/><strong>IAHS<br> International Agency for Hybrid Services</strong></a></h1>
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
         
        </div>
      </li>

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
                background-color: #ccffcc;
                width: 100%;
            }

</style>


<style>
  nav div ul li a:hover{
      background-color: #1ce;
  }
</style>

            <div  style="text-align: center; background-color: lightgray; margin-left: 150px; margin-right: 150px" id="box_form" class="container" class="col-xs-12 col-sm-12 col-md-12">
                <h3 id="box_form_title">Merci de bien vouloir faire votre demande de service !</h3><br>
      
                    <div class="g-recaptcha" data-sitekey="6Lc5gaMUAAAAAP0sAXfZlld5AtL3HUjTgZFvUmG4" data-callback="onSubmit"></div>
                
                     <script src='https://www.google.com/recaptcha/api.js'></script><br>

                    <div class="card-tools">
                      <label for="fonct"><h3>Vous êtes ?</h3></label><br>
                      <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Particulier <i class="fas fa-user-plus fa-fw"></i></button> 

                       <button class="btn btn-primary" data-toggle="modal" data-target="#addNews">Entreprise<i class="fas fa-building fa-fw"></i></button> 
                 
                    </div><br><br>
                        
                    </div><br>



            <!-- Modal1 -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #ccffcc">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewLabel">Demande pour un particulier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="./insert.php" method="POST">
              <div class="modal-body">
                <div class="form-group">              
                  <input v-model="form.nom" type="text" name="nom"
                    placeholder="Nom" 
                    class="form-control" required>
                  <has-error :form="form" field="nom"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.prenom" type="text" name="prenom"
                    placeholder="Prénoms" 
                    class="form-control" required>
                  <has-error :form="form" field="prenom"></has-error>
                </div>

                <div class="form-group">  
                 <label for="nation">Nationalité</label><br>            
                        <select v-model="form.nation" class="form-control" style="width: 100%" name="nation" value="">
                                <option value="AFG">Afghane (Afghanistan)</option>
                                <option value="ALB">Albanaise (Albanie)</option>
                                <option value="DZA">Algérienne (Algérie)</option>
                                <option value="DEU">Allemande (Allemagne)</option>
                                <option value="USA">Americaine (États-Unis)</option>
                                <option value="AND">Andorrane (Andorre)</option>
                                <option value="AGO">Angolaise (Angola)</option>
                                <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                <option value="ARG">Argentine (Argentine)</option>
                                <option value="ARM">Armenienne (Arménie)</option>
                                <option value="AUS">Australienne (Australie)</option>
                                <option value="AUT">Autrichienne (Autriche)</option>
                                <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
                                <option value="BHS">Bahamienne (Bahamas)</option>
                                <option value="BHR">Bahreinienne (Bahreïn)</option>
                                <option value="BGD">Bangladaise (Bangladesh)</option>
                                <option value="BRB">Barbadienne (Barbade)</option>
                                <option value="BEL">Belge (Belgique)</option>
                                <option value="BLZ">Belizienne (Belize)</option>
                                <option value="BEN">Béninoise (Bénin)</option>
                                <option value="BTN">Bhoutanaise (Bhoutan)</option>
                                <option value="BLR">Biélorusse (Biélorussie)</option>
                                <option value="MMR">Birmane (Birmanie)</option>
                                <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
                                <option value="BOL">Bolivienne (Bolivie)</option>
                                <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
                                <option value="BWA">Botswanaise (Botswana)</option>
                                <option value="BRA">Brésilienne (Brésil)</option>
                                <option value="GBR">Britannique (Royaume-Uni)</option>
                                <option value="BRN">Brunéienne (Brunéi)</option>
                                <option value="BGR">Bulgare (Bulgarie)</option>
                                <option value="BFA">Burkinabée (Burkina)</option>
                                <option value="BDI">Burundaise (Burundi)</option>
                                <option value="KHM">Cambodgienne (Cambodge)</option>
                                <option value="CMR">Camerounaise (Cameroun)</option>
                                <option value="CAN">Canadienne (Canada)</option>
                                <option value="CPV">Cap-verdienne (Cap-Vert)</option>
                                <option value="CAF">Centrafricaine (Centrafrique)</option>
                                <option value="CHL">Chilienne (Chili)</option>
                                <option value="CHN">Chinoise (Chine)</option>
                                <option value="CYP">Chypriote (Chypre)</option>
                                <option value="COL">Colombienne (Colombie)</option>
                                <option value="COM">Comorienne (Comores)</option>
                                <option value="COG">Congolaise (Congo-Brazzaville)</option>
                                <option value="COD">Congolaise (Congo-Kinshasa)</option>
                                <option value="COK">Cookienne (Îles Cook)</option>
                                <option value="CRI">Costaricaine (Costa Rica)</option>
                                <option value="HRV">Croate (Croatie)</option>
                                <option value="CUB">Cubaine (Cuba)</option>
                                <option value="DNK">Danoise (Danemark)</option>
                                <option value="DJI">Djiboutienne (Djibouti)</option>
                                <option value="DOM">Dominicaine (République dominicaine)</option>
                                <option value="DMA">Dominiquaise (Dominique)</option>
                                <option value="EGY">Égyptienne (Égypte)</option>
                                <option value="ARE">Émirienne (Émirats arabes unis)</option>
                                <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
                                <option value="ECU">Équatorienne (Équateur)</option>
                                <option value="ERI">Érythréenne (Érythrée)</option>
                                <option value="ESP">Espagnole (Espagne)</option>
                                <option value="TLS">Est-timoraise (Timor-Leste)</option>
                                <option value="EST">Estonienne (Estonie)</option>
                                <option value="ETH">Éthiopienne (Éthiopie)</option>
                                <option value="FJI">Fidjienne (Fidji)</option>
                                <option value="FIN">Finlandaise (Finlande)</option>
                                <option value="FRA">Française (France)</option>
                                <option value="GAB">Gabonaise (Gabon)</option>
                                <option value="GMB">Gambienne (Gambie)</option>
                                <option value="GEO">Georgienne (Géorgie)</option>
                                <option value="GHA">Ghanéenne (Ghana)</option>
                                <option value="GRD">Grenadienne (Grenade)</option>
                                <option value="GTM">Guatémaltèque (Guatemala)</option>
                                <option value="GIN">Guinéenne (Guinée)</option>
                                <option value="GUY">Guyanienne (Guyana)</option>
                                <option value="HTI">Haïtienne (Haïti)</option>
                                <option value="GRC">Hellénique (Grèce)</option>
                                <option value="HND">Hondurienne (Honduras)</option>
                                <option value="HUN">Hongroise (Hongrie)</option>
                                <option value="IND">Indienne (Inde)</option>
                                <option value="IDN">Indonésienne (Indonésie)</option>
                                <option value="IRQ">Irakienne (Iraq)</option>
                                <option value="IRN">Iranienne (Iran)</option>
                                <option value="IRL">Irlandaise (Irlande)</option>
                                <option value="ISL">Islandaise (Islande)</option>
                                <option value="ISR">Israélienne (Israël)</option>
                                <option value="ITA">Italienne (Italie)</option>
                                <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
                                <option value="JAM">Jamaïcaine (Jamaïque)</option>
                                <option value="JPN">Japonaise (Japon)</option>
                                <option value="JOR">Jordanienne (Jordanie)</option>
                                <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
                                <option value="KEN">Kenyane (Kenya)</option>
                                <option value="KGZ">Kirghize (Kirghizistan)</option>
                                <option value="KIR">Kiribatienne (Kiribati)</option>
                                <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                                <option value="KWT">Koweïtienne (Koweït)</option>
                                <option value="LAO">Laotienne (Laos)</option>
                                <option value="LSO">Lesothane (Lesotho)</option>
                                <option value="LVA">Lettone (Lettonie)</option>
                                <option value="LBN">Libanaise (Liban)</option>
                                <option value="LBR">Libérienne (Libéria)</option>
                                <option value="LBY">Libyenne (Libye)</option>
                                <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
                                <option value="LTU">Lituanienne (Lituanie)</option>
                                <option value="LUX">Luxembourgeoise (Luxembourg)</option>
                                <option value="MKD">Macédonienne (Macédoine)</option>
                                <option value="MYS">Malaisienne (Malaisie)</option>
                                <option value="MWI">Malawienne (Malawi)</option>
                                <option value="MDV">Maldivienne (Maldives)</option>
                                <option value="MDG">Malgache (Madagascar)</option>
                                <option value="MLI">Maliennes (Mali)</option>
                                <option value="MLT">Maltaise (Malte)</option>
                                <option value="MAR">Marocaine (Maroc)</option>
                                <option value="MHL">Marshallaise (Îles Marshall)</option>
                                <option value="MUS">Mauricienne (Maurice)</option>
                                <option value="MRT">Mauritanienne (Mauritanie)</option>
                                <option value="MEX">Mexicaine (Mexique)</option>
                                <option value="FSM">Micronésienne (Micronésie)</option>
                                <option value="MDA">Moldave (Moldovie)</option>
                                <option value="MCO">Monegasque (Monaco)</option>
                                <option value="MNG">Mongole (Mongolie)</option>
                                <option value="MNE">Monténégrine (Monténégro)</option>
                                <option value="MOZ">Mozambicaine (Mozambique)</option>
                                <option value="NAM">Namibienne (Namibie)</option>
                                <option value="NRU">Nauruane (Nauru)</option>
                                <option value="NLD">Néerlandaise (Pays-Bas)</option>
                                <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
                                <option value="NPL">Népalaise (Népal)</option>
                                <option value="NIC">Nicaraguayenne (Nicaragua)</option>
                                <option value="NGA">Nigériane (Nigéria)</option>
                                <option value="NER">Nigérienne (Niger)</option>
                                <option value="NIU">Niuéenne (Niue)</option>
                                <option value="PRK">Nord-coréenne (Corée du Nord)</option>
                                <option value="NOR">Norvégienne (Norvège)</option>
                                <option value="OMN">Omanaise (Oman)</option>
                                <option value="UGA">Ougandaise (Ouganda)</option>
                                <option value="UZB">Ouzbéke (Ouzbékistan)</option>
                                <option value="PAK">Pakistanaise (Pakistan)</option>
                                <option value="PLW">Palaosienne (Palaos)</option>
                                <option value="PSE">Palestinienne (Palestine)</option>
                                <option value="PAN">Panaméenne (Panama)</option>
                                <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                <option value="PRY">Paraguayenne (Paraguay)</option>
                                <option value="PER">Péruvienne (Pérou)</option>
                                <option value="PHL">Philippine (Philippines)</option>
                                <option value="POL">Polonaise (Pologne)</option>
                                <option value="PRT">Portugaise (Portugal)</option>
                                <option value="QAT">Qatarienne (Qatar)</option>
                                <option value="ROU">Roumaine (Roumanie)</option>
                                <option value="RUS">Russe (Russie)</option>
                                <option value="RWA">Rwandaise (Rwanda)</option>
                                <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
                                <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
                                <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                <option value="SLB">Salomonaise (Îles Salomon)</option>
                                <option value="SLV">Salvadorienne (Salvador)</option>
                                <option value="WSM">Samoane (Samoa)</option>
                                <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
                                <option value="SAU">Saoudienne (Arabie saoudite)</option>
                                <option value="SEN">Sénégalaise (Sénégal)</option>
                                <option value="SRB">Serbe (Serbie)</option>
                                <option value="SYC">Seychelloise (Seychelles)</option>
                                <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
                                <option value="SGP">Singapourienne (Singapour)</option>
                                <option value="SVK">Slovaque (Slovaquie)</option>
                                <option value="SVN">Slovène (Slovénie)</option>
                                <option value="SOM">Somalienne (Somalie)</option>
                                <option value="SDN">Soudanaise (Soudan)</option>
                                <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
                                <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
                                <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
                                <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
                                <option value="SWE">Suédoise (Suède)</option>
                                <option value="CHE">Suisse (Suisse)</option>
                                <option value="SUR">Surinamaise (Suriname)</option>
                                <option value="SWZ">Swazie (Swaziland)</option>
                                <option value="SYR">Syrienne (Syrie)</option>
                                <option value="TJK">Tadjike (Tadjikistan)</option>
                                <option value="TZA">Tanzanienne (Tanzanie)</option>
                                <option value="TCD">Tchadienne (Tchad)</option>
                                <option value="CZE">Tchèque (Tchéquie)</option>
                                <option value="THA">Thaïlandaise (Thaïlande)</option>
                                <option value="TGO">Togolaise (Togo)</option>
                                <option value="TON">Tonguienne (Tonga)</option>
                                <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
                                <option value="TUN">Tunisienne (Tunisie)</option>
                                <option value="TKM">Turkmène (Turkménistan)</option>
                                <option value="TUR">Turque (Turquie)</option>
                                <option value="TUV">Tuvaluane (Tuvalu)</option>
                                <option value="UKR">Ukrainienne (Ukraine)</option>
                                <option value="URY">Uruguayenne (Uruguay)</option>
                                <option value="VUT">Vanuatuane (Vanuatu)</option>
                                <option value="VAT">Vaticane (Vatican)</option>
                                <option value="VEN">Vénézuélienne (Venezuela)</option>
                                <option value="VNM">Vietnamienne (Viêt Nam)</option>
                                <option value="YEM">Yéménite (Yémen)</option>
                                <option value="ZMB">Zambienne (Zambie)</option>
                                <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
                        </select>
                        <has-error :form="form" field="nation"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.email" type="email" name="email"
                    placeholder="Adresse Email" 
                    class="form-control"  required>
                  <has-error :form="form" field="email"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.cni" type="text" name="cni"
                    placeholder="Numéro CNI" 
                    class="form-control"  required>
                  <has-error :form="form" field="cni"></has-error>
                </div>
                  

                <div class="form-group">

                  <label for="cat">Catégorie de la demande</label><br>
                        <select v-model="form.contact" class="form-control" style="width: 100%" name="cat" value="" required>
                            <option value="mar">Marketing</option>
                            <option value="imp">Import-Export</option>
                            <option value="com">Communication</option>
                            <option value="cons">Construction</option>
                            <option value="pres">Prestations Entreprises</option>
                            <option value="res">Ressources humaines</option>
                            <option value="ent">Entretien bâtiment</option>
                  </select>
                  <has-error :form="form" field="cat"></has-error>
                </div>

                <div class="form-group">
                 <label for="besoin">La date du service </label><br>              
                  <input v-model="form.date" type="date" name="date"
                    placeholder="Date du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="date"></has-error>
                </div>

                <div class="form-group">  
                <label for="besoin">L'heure du service </label><br>               
                  <input v-model="form.heure" type="time" name="heure"
                    placeholder="Heure du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="heure"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.lieu" type="text" name="lieu"
                    placeholder="Lieu du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="lieu"></has-error>
                </div>

                <div class="form-group">

                  <label for="besoin">Faites-nous savoir votre besoin ! </label><br>
                        <textarea v-model="form.besoin" class="form-control" style="width: 100%" required="required"  name="besoin" rows="2" cols="40" placeholder="Faites-nous confiance !"></textarea>
                  <has-error :form="form" field="date"></has-error>
                </div>
                    <button type="submit" name="submit" value="Add" class="btn btn-success"><i class="fas fa-check-circle" style="padding-right: 10px"></i> Valider <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" name="reset" class="save btn btn-danger"><i class="fas fa-window-close" style="padding-right: 15px"></i>Annuler</button>
                </div>
          </form>
          </div>
        </div>
    <!-- /.content -->
  </div>

   <!-- Modal2 -->
        <div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="addNewsLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #1ce">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewsLabel">Demande pour une entreprise</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="./inserts.php" method="POST">
              <div class="modal-body">
                <div class="form-group">              
                  <input v-model="form.nom" type="text" name="nom"
                    placeholder="Nom de l'entreprise" 
                    class="form-control" required>
                  <has-error :form="form" field="nom"></has-error>
                </div>

                <div class="form-group">  
                 <label for="nation">Nationalité de l'entreprise</label><br>            
                        <select v-model="form.nation" class="form-control" style="width: 100%" name="nation" value="">
                                <option value="AFG">Afghane (Afghanistan)</option>
                                <option value="ALB">Albanaise (Albanie)</option>
                                <option value="DZA">Algérienne (Algérie)</option>
                                <option value="DEU">Allemande (Allemagne)</option>
                                <option value="USA">Americaine (États-Unis)</option>
                                <option value="AND">Andorrane (Andorre)</option>
                                <option value="AGO">Angolaise (Angola)</option>
                                <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                <option value="ARG">Argentine (Argentine)</option>
                                <option value="ARM">Armenienne (Arménie)</option>
                                <option value="AUS">Australienne (Australie)</option>
                                <option value="AUT">Autrichienne (Autriche)</option>
                                <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
                                <option value="BHS">Bahamienne (Bahamas)</option>
                                <option value="BHR">Bahreinienne (Bahreïn)</option>
                                <option value="BGD">Bangladaise (Bangladesh)</option>
                                <option value="BRB">Barbadienne (Barbade)</option>
                                <option value="BEL">Belge (Belgique)</option>
                                <option value="BLZ">Belizienne (Belize)</option>
                                <option value="BEN">Béninoise (Bénin)</option>
                                <option value="BTN">Bhoutanaise (Bhoutan)</option>
                                <option value="BLR">Biélorusse (Biélorussie)</option>
                                <option value="MMR">Birmane (Birmanie)</option>
                                <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
                                <option value="BOL">Bolivienne (Bolivie)</option>
                                <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
                                <option value="BWA">Botswanaise (Botswana)</option>
                                <option value="BRA">Brésilienne (Brésil)</option>
                                <option value="GBR">Britannique (Royaume-Uni)</option>
                                <option value="BRN">Brunéienne (Brunéi)</option>
                                <option value="BGR">Bulgare (Bulgarie)</option>
                                <option value="BFA">Burkinabée (Burkina)</option>
                                <option value="BDI">Burundaise (Burundi)</option>
                                <option value="KHM">Cambodgienne (Cambodge)</option>
                                <option value="CMR">Camerounaise (Cameroun)</option>
                                <option value="CAN">Canadienne (Canada)</option>
                                <option value="CPV">Cap-verdienne (Cap-Vert)</option>
                                <option value="CAF">Centrafricaine (Centrafrique)</option>
                                <option value="CHL">Chilienne (Chili)</option>
                                <option value="CHN">Chinoise (Chine)</option>
                                <option value="CYP">Chypriote (Chypre)</option>
                                <option value="COL">Colombienne (Colombie)</option>
                                <option value="COM">Comorienne (Comores)</option>
                                <option value="COG">Congolaise (Congo-Brazzaville)</option>
                                <option value="COD">Congolaise (Congo-Kinshasa)</option>
                                <option value="COK">Cookienne (Îles Cook)</option>
                                <option value="CRI">Costaricaine (Costa Rica)</option>
                                <option value="HRV">Croate (Croatie)</option>
                                <option value="CUB">Cubaine (Cuba)</option>
                                <option value="DNK">Danoise (Danemark)</option>
                                <option value="DJI">Djiboutienne (Djibouti)</option>
                                <option value="DOM">Dominicaine (République dominicaine)</option>
                                <option value="DMA">Dominiquaise (Dominique)</option>
                                <option value="EGY">Égyptienne (Égypte)</option>
                                <option value="ARE">Émirienne (Émirats arabes unis)</option>
                                <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
                                <option value="ECU">Équatorienne (Équateur)</option>
                                <option value="ERI">Érythréenne (Érythrée)</option>
                                <option value="ESP">Espagnole (Espagne)</option>
                                <option value="TLS">Est-timoraise (Timor-Leste)</option>
                                <option value="EST">Estonienne (Estonie)</option>
                                <option value="ETH">Éthiopienne (Éthiopie)</option>
                                <option value="FJI">Fidjienne (Fidji)</option>
                                <option value="FIN">Finlandaise (Finlande)</option>
                                <option value="FRA">Française (France)</option>
                                <option value="GAB">Gabonaise (Gabon)</option>
                                <option value="GMB">Gambienne (Gambie)</option>
                                <option value="GEO">Georgienne (Géorgie)</option>
                                <option value="GHA">Ghanéenne (Ghana)</option>
                                <option value="GRD">Grenadienne (Grenade)</option>
                                <option value="GTM">Guatémaltèque (Guatemala)</option>
                                <option value="GIN">Guinéenne (Guinée)</option>
                                <option value="GUY">Guyanienne (Guyana)</option>
                                <option value="HTI">Haïtienne (Haïti)</option>
                                <option value="GRC">Hellénique (Grèce)</option>
                                <option value="HND">Hondurienne (Honduras)</option>
                                <option value="HUN">Hongroise (Hongrie)</option>
                                <option value="IND">Indienne (Inde)</option>
                                <option value="IDN">Indonésienne (Indonésie)</option>
                                <option value="IRQ">Irakienne (Iraq)</option>
                                <option value="IRN">Iranienne (Iran)</option>
                                <option value="IRL">Irlandaise (Irlande)</option>
                                <option value="ISL">Islandaise (Islande)</option>
                                <option value="ISR">Israélienne (Israël)</option>
                                <option value="ITA">Italienne (Italie)</option>
                                <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
                                <option value="JAM">Jamaïcaine (Jamaïque)</option>
                                <option value="JPN">Japonaise (Japon)</option>
                                <option value="JOR">Jordanienne (Jordanie)</option>
                                <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
                                <option value="KEN">Kenyane (Kenya)</option>
                                <option value="KGZ">Kirghize (Kirghizistan)</option>
                                <option value="KIR">Kiribatienne (Kiribati)</option>
                                <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                                <option value="KWT">Koweïtienne (Koweït)</option>
                                <option value="LAO">Laotienne (Laos)</option>
                                <option value="LSO">Lesothane (Lesotho)</option>
                                <option value="LVA">Lettone (Lettonie)</option>
                                <option value="LBN">Libanaise (Liban)</option>
                                <option value="LBR">Libérienne (Libéria)</option>
                                <option value="LBY">Libyenne (Libye)</option>
                                <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
                                <option value="LTU">Lituanienne (Lituanie)</option>
                                <option value="LUX">Luxembourgeoise (Luxembourg)</option>
                                <option value="MKD">Macédonienne (Macédoine)</option>
                                <option value="MYS">Malaisienne (Malaisie)</option>
                                <option value="MWI">Malawienne (Malawi)</option>
                                <option value="MDV">Maldivienne (Maldives)</option>
                                <option value="MDG">Malgache (Madagascar)</option>
                                <option value="MLI">Maliennes (Mali)</option>
                                <option value="MLT">Maltaise (Malte)</option>
                                <option value="MAR">Marocaine (Maroc)</option>
                                <option value="MHL">Marshallaise (Îles Marshall)</option>
                                <option value="MUS">Mauricienne (Maurice)</option>
                                <option value="MRT">Mauritanienne (Mauritanie)</option>
                                <option value="MEX">Mexicaine (Mexique)</option>
                                <option value="FSM">Micronésienne (Micronésie)</option>
                                <option value="MDA">Moldave (Moldovie)</option>
                                <option value="MCO">Monegasque (Monaco)</option>
                                <option value="MNG">Mongole (Mongolie)</option>
                                <option value="MNE">Monténégrine (Monténégro)</option>
                                <option value="MOZ">Mozambicaine (Mozambique)</option>
                                <option value="NAM">Namibienne (Namibie)</option>
                                <option value="NRU">Nauruane (Nauru)</option>
                                <option value="NLD">Néerlandaise (Pays-Bas)</option>
                                <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
                                <option value="NPL">Népalaise (Népal)</option>
                                <option value="NIC">Nicaraguayenne (Nicaragua)</option>
                                <option value="NGA">Nigériane (Nigéria)</option>
                                <option value="NER">Nigérienne (Niger)</option>
                                <option value="NIU">Niuéenne (Niue)</option>
                                <option value="PRK">Nord-coréenne (Corée du Nord)</option>
                                <option value="NOR">Norvégienne (Norvège)</option>
                                <option value="OMN">Omanaise (Oman)</option>
                                <option value="UGA">Ougandaise (Ouganda)</option>
                                <option value="UZB">Ouzbéke (Ouzbékistan)</option>
                                <option value="PAK">Pakistanaise (Pakistan)</option>
                                <option value="PLW">Palaosienne (Palaos)</option>
                                <option value="PSE">Palestinienne (Palestine)</option>
                                <option value="PAN">Panaméenne (Panama)</option>
                                <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                <option value="PRY">Paraguayenne (Paraguay)</option>
                                <option value="PER">Péruvienne (Pérou)</option>
                                <option value="PHL">Philippine (Philippines)</option>
                                <option value="POL">Polonaise (Pologne)</option>
                                <option value="PRT">Portugaise (Portugal)</option>
                                <option value="QAT">Qatarienne (Qatar)</option>
                                <option value="ROU">Roumaine (Roumanie)</option>
                                <option value="RUS">Russe (Russie)</option>
                                <option value="RWA">Rwandaise (Rwanda)</option>
                                <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
                                <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
                                <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                <option value="SLB">Salomonaise (Îles Salomon)</option>
                                <option value="SLV">Salvadorienne (Salvador)</option>
                                <option value="WSM">Samoane (Samoa)</option>
                                <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
                                <option value="SAU">Saoudienne (Arabie saoudite)</option>
                                <option value="SEN">Sénégalaise (Sénégal)</option>
                                <option value="SRB">Serbe (Serbie)</option>
                                <option value="SYC">Seychelloise (Seychelles)</option>
                                <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
                                <option value="SGP">Singapourienne (Singapour)</option>
                                <option value="SVK">Slovaque (Slovaquie)</option>
                                <option value="SVN">Slovène (Slovénie)</option>
                                <option value="SOM">Somalienne (Somalie)</option>
                                <option value="SDN">Soudanaise (Soudan)</option>
                                <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
                                <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
                                <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
                                <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
                                <option value="SWE">Suédoise (Suède)</option>
                                <option value="CHE">Suisse (Suisse)</option>
                                <option value="SUR">Surinamaise (Suriname)</option>
                                <option value="SWZ">Swazie (Swaziland)</option>
                                <option value="SYR">Syrienne (Syrie)</option>
                                <option value="TJK">Tadjike (Tadjikistan)</option>
                                <option value="TZA">Tanzanienne (Tanzanie)</option>
                                <option value="TCD">Tchadienne (Tchad)</option>
                                <option value="CZE">Tchèque (Tchéquie)</option>
                                <option value="THA">Thaïlandaise (Thaïlande)</option>
                                <option value="TGO">Togolaise (Togo)</option>
                                <option value="TON">Tonguienne (Tonga)</option>
                                <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
                                <option value="TUN">Tunisienne (Tunisie)</option>
                                <option value="TKM">Turkmène (Turkménistan)</option>
                                <option value="TUR">Turque (Turquie)</option>
                                <option value="TUV">Tuvaluane (Tuvalu)</option>
                                <option value="UKR">Ukrainienne (Ukraine)</option>
                                <option value="URY">Uruguayenne (Uruguay)</option>
                                <option value="VUT">Vanuatuane (Vanuatu)</option>
                                <option value="VAT">Vaticane (Vatican)</option>
                                <option value="VEN">Vénézuélienne (Venezuela)</option>
                                <option value="VNM">Vietnamienne (Viêt Nam)</option>
                                <option value="YEM">Yéménite (Yémen)</option>
                                <option value="ZMB">Zambienne (Zambie)</option>
                                <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
                        </select>
                        <has-error :form="form" field="nation"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.email" type="email" name="email"
                    placeholder="Adresse Email" 
                    class="form-control"  required>
                  <has-error :form="form" field="email"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.rccm" type="text" name="rccm"
                    placeholder="Numéro RCCM" 
                    class="form-control"  required>
                  <has-error :form="form" field="rccm"></has-error>
                </div>
                  

                <div class="form-group">

                  <label for="cat">Catégorie de la demande</label><br>
                        <select v-model="form.contact" class="form-control" style="width: 100%" name="cat" value="" required>
                            <option value="mar">Marketing</option>
                            <option value="imp">Import-Export</option>
                            <option value="com">Communication</option>
                            <option value="cons">Construction</option>
                            <option value="pres">Prestations Entreprises</option>
                            <option value="res">Ressources humaines</option>
                            <option value="ent">Entretien bâtiment</option>
                  </select>
                  <has-error :form="form" field="cat"></has-error>
                </div>

                <div class="form-group">
                 <label for="besoin">La date du service </label><br>              
                  <input v-model="form.date" type="date" name="date"
                    placeholder="Date du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="date"></has-error>
                </div>

                <div class="form-group">  
                <label for="besoin">L'heure du service </label><br>               
                  <input v-model="form.heure" type="time" name="heure"
                    placeholder="Heure du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="heure"></has-error>
                </div>

                <div class="form-group">              
                  <input v-model="form.lieu" type="text" name="lieu"
                    placeholder="Lieu du service" 
                    class="form-control"  required>
                  <has-error :form="form" field="lieu"></has-error>
                </div>

                <div class="form-group">

                  <label for="besoin">Faites-nous savoir votre besoin ! </label><br>
                        <textarea v-model="form.besoin" class="form-control" style="width: 100%" required="required"  name="besoin" rows="2" cols="40" placeholder="Faites-nous confiance !"></textarea>
                  <has-error :form="form" field="date"></has-error>
                </div>
                    <button type="submit" name="submit" value="Add" class="btn btn-success"><i class="fas fa-check-circle" style="padding-right: 10px"></i> Valider <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" name="reset" class="save btn btn-danger"><i class="fas fa-window-close" style="padding-right: 15px"></i>Annuler</button>
                </div>
          </form>
          </div>
        </div>
    <!-- /.content -->
  </div>

            <br><br><br>




            {{-- footer --}}

    <footer></footer>
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
    <a target = "_self" href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cité COPRACI, Villa 129, Abidjan</a> <a href='https://www.google.com/maps/place/Connect+USA+CI/@5.3562657,-3.9604247,17z/data=!4m8!1m2!2m1!1sRivi%C3%A9ra+3+cit%C3%A9+copraci+villa+129!3m4!1s0xfc1edd32377b11d:0x5f3dad3cf84d94bc!8m2!3d5.3541139!4d-3.9592154'><i class="fa fa-map-marker"></i>Cocody Riviera 3, Cité COPRACI, Villa 129, Abidjan</a>
		</div>
		
        <div class="card-body text-center">
                Copyright IAHS  All rights reserved !
        </div>
	</div>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>
</html>