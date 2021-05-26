<?php
  $nom = $_POST['nom'];
  $nation   = $_POST['nation'];
  $mail   = $_POST['mail'];
  $rccm   = $_POST['rccm'];
  $cat  = $_POST['cat'];
  $dat   = $_POST['dat'];
  $heure   = $_POST['heure'];
  $lieu   = $_POST['lieu'];
  $besoin   = $_POST['besoin'];
  $code   = $_POST['code'];
  
  
  if (!empty($nom) || !empty($prenom) || !empty($mail)) {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "root123";
      $dbname = "iahs";

      //create connection
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 

      if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      } else {
        $SELECT = "SELECT code From entreprise Where code = ? Limit 1";
        $INSERT = "INSERT Into entreprise (nom, nation, mail, rccm, cat, dat, heure, lieu, besoin, code) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
          $stmt->close();

          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssssssss", $nom, $nation, $mail, $rccm, $cat, $dat, $heure, $lieu, $besoin, $code);
          $stmt->execute();
          echo "Enrégistrement réussi";
        } else {
          echo "Cet email a été déjà utilisé";
        }
        $stmt->close();
        $conn->close();
      }
  }else {
    echo "Tous les champs sont obligatoires";
    die();
  }
?>npm install --save @ckeditor/ckeditor5-image \
@ckeditor/ckeditor5-core \
@ckeditor/ckeditor5-ui