<?php
  session_start();


try   //Connection a la bdd
                  {
                    $PDO = new PDO('mysql:host=localhost;dbname=iahs;charset=utf8', 'iahsconnect', 'iahsconnect@727');
                    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
                    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                  }
                  catch (PDOException $e)
                  {
                    echo "Connexion impossible";
                  }
//Class Auth
class Auth{
  function login($d){
    

        global $PDO;
        $req = $PDO->prepare('SELECT users.email, users.name, users.role, users.stat, roles.name, roles.slug, roles.level FROM users LEFT JOIN roles ON users.id=roles.id_role WHERE email=:email AND password=:password');
        $req->execute($d);
        $data = $req->fetchAll();
        if(count($data)>0){
          $_SESSION['Auth'] = $data[0];
          return true;
        }
        return false;
  }
}   
$Auth = new Auth();

?>

<?php
/*
Allows the user to both create new records and edit existing records
*/
// server info
$server = 'localhost';
$user = 'iahsconnect';
$pass = 'iahsconnect@727';
$db = 'iahs';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);
mysqli_query($mysqli, "SET NAMES 'utf8'");

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

// confirm that the 'id' variable has been set
if (isset($_GET['id_art']) && is_numeric($_GET['id_art']))
{
// get the 'id' variable from the URL
$id = $_GET['id_art'];



// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($titre = '', $dat ='', $heure = '', $auteur = '', $contenu = '', $id_art = '')
{ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
   IAHS | Edit Article
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Rechercher" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

   <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/dg.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Mme Kouadjo
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Appelle-moi quand tu pourras...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>Il y'a 4 jours</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/info.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  M. Konan
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Message bien reçu Madame</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>Il y'a 5 jours</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/ad.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Mrs Barbara
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Quel était le thème de la rencontre ?</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>Il y'a 8 jours</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nouveaux messages
            <span class="float-right text-muted text-sm">3 minutes</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 demandes d'amis
            <span class="float-right text-muted text-sm">12 heures</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 nouveaux rapports
            <span class="float-right text-muted text-sm">2 jours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir toutes les notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index1.php" class="brand-link">
      <img src="dist/img/logoIAHS.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">IAHS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index1.php" class="d-block">IAHS Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index1.php" class="nav-link active">
                <i style="color: goldenrod" class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Tableau de bord</p>
                </a>
              </li>
              

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i style="color: red" class="nav-icon fas fa-power-off"></i>
              <p>
                Déconnexion
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" style="color: goldenrod">
              <i style="color: silver" class="nav-icon fas fa-key"></i>
              <p>
                <?php
                  print_r($_SESSION['email']);
                ?>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



<?php
    try   //Connection a la bdd
    {
        $bdd = new PDO('mysql:host=localhost;dbname=iahs;charset=utf8', 'iahsconnect', 'iahsconnect@727');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM articles');
    $donnees = $reponse->fetch();
?>



  <!-- Content Wrapper. Contains page content -->
<div style="text-align: center; background-color: #80d4ff; margin-left: 500px; margin-right: 400px">

<h1 style="text-align: center;margin-top: 100px"><?php if ($id_art != '') { echo "Modifier Article"; } else { echo "Modifier Article"; } ?></h1>



<form action="./ajout.php" method="post">

<?php if ($id_art != '') { ?>
<input type="hidden" name="id_art" value="<?php echo $id_art; ?>" />
<p>ID: <?php echo $id_art; ?></p>
<?php } ?>


                <div class="modal-body">
                <div class="form-group"> 
                 <label>Titre *</label>
                    <input v-model="form.titre"  class="form-control" required type="text" name="titre"
                    value="<?php echo $titre; ?>"/>            
                  <has-error :form="form" field="titre"></has-error>
                </div>

                <div class="form-group"> 
                <label>Date d'édition *</label>             
                  <input v-model="form.dat" type="date" name="dat" value="<?php echo $dat; ?>"
                    class="form-control"  required>
                  <has-error :form="form" field="dat"></has-error>
                </div>

                <div class="form-group"> 
                <label>Heure d'édition *</label>               
                  <input v-model="form.heure" type="time" name="heure" value="<?php echo $heure; ?>"
                    class="form-control" required>
                  <has-error :form="form" field="heure"></has-error>
                </div>

                <div class="form-group"> 
                <label>Auteur de l'article *</label>               
                  <input v-model="form.auteur" type="text" name="auteur" value="<?php echo $auteur; ?>"
                    class="form-control" required>
                  <has-error :form="form" field="auteur"></has-error>
                </div>

                <div class="form-group"> 
                <label>Contenu de l'article *</label>               
                  <textarea v-model="form.contenu" name = "contenu"  rows=3 class="form-control" required>
                    <?php echo $contenu; ?>
                  </textarea> 
                  <has-error :form="form" field="contenu"></has-error>
                </div>

                    <p>* obligatoire</p>
                <input type="submit" name="submit" value="Submit" />
                    
                </div>
          </form>
        </div>
      <br>

<a style="margin-left: 500px" href="index4.php"><button class="btn btn-success" style="border-radius: 12px"> Retour à la liste </button></a>

</div>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="main-footer" style="width:100%; position: bottom">
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io">AdminIAHS</a>.</strong>
    Tous droits réservés.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


</body>
</html>


<?php }






/*

EDIT RECORD

*/
// if the 'id' variable is set in the URL, we know that we need to edit a record



if (isset($_GET['id_art']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id_art']))
{
// get variables from the URL/form
$id = $_POST['id_art'];
$titre = htmlentities($_POST['titre'], ENT_QUOTES);
$dat = htmlentities($_POST['dat'], ENT_QUOTES);
$heure = htmlentities($_POST['heure'], ENT_QUOTES);
$auteur = htmlentities($_POST['auteur'], ENT_QUOTES);
$contenu = htmlentities($_POST['contenu'], ENT_QUOTES);

// check that title , date ... are both not empty
if ($titre == '' || $dat == '' || $heure == '' || $auteur == '' || $contenu == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($titre, $dat, $heure, $auteur, $contenu);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE articles SET titre = ?, dat = ?, heure = ?, auteur = ?, contenu = ?
WHERE id_art=?"))
{
$stmt->bind_param("sssss", $titre, $dat, $heure, $auteur, $contenu);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: index4.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id_art']) && $_GET['id_art'] > 0)
{
// get 'id' from URL
$id_art = $_GET['id_art'];

// get the recod from the database
if($stmt = $mysqli->prepare("SELECT id_art, titre, dat, heure, auteur, contenu FROM articles WHERE id_art=?"))
{
$stmt->bind_param("i", $id_art);
$stmt->execute();

$stmt->bind_result($id_art, $titre, $dat, $heure, $auteur, $contenu);
$stmt->fetch();

// show the form
renderForm($titre, $dat, $heure, $auteur, $contenu, $id_art);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: index4.php");
}
}
}
}



// close the mysqli connection
$mysqli->close();

?>