<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
        $nom = $req->input('nom');
        $prenom = $req->input('prenom');
        $mail = $req->input('mail');
        $cni = $req->input('cni');
        $nation = $req->input('nation');
        $cat = $req->input('cat');
        $besoin = $req->input('besoin');
        $dat = $req->input('dat');
        $heure = $req->input('heure');
        $lieu = $req->input('lieu');
        $contact = $req->input('contact');
        $code = $req->input('code');
        
        $data = array("nom"=>$nom,"prenom"=>$prenom,"mail"=>$mail,"cni"=>$cni,"nation"=>$nation,"cat"=>$cat,"besoin"=>$besoin,"dat"=>$dat,"heure"=>$heure,"lieu"=>$lieu, "code"=>$code, "contact"=>$contact);

        DB::table('particulier')->insert($data);

        echo "Votre demande est bien enrégistrée !";
    }



    function inserto(Request $req)
    {
        $nom = $req->input('nom');
        $mail = $req->input('mail');
        $rccm = $req->input('rccm');
        $nation = $req->input('nation');
        $cat = $req->input('cat');
        $besoin = $req->input('besoin');
        $dat = $req->input('dat');
        $heure = $req->input('heure');
        $lieu = $req->input('lieu');
        $contact = $req->input('contact');
        $code = $req->input('code');
        
        $data = array("nom"=>$nom,"mail"=>$mail,"rccm"=>$rccm,"nation"=>$nation,"cat"=>$cat,"besoin"=>$besoin,"dat"=>$dat,"heure"=>$heure,"lieu"=>$lieu, "code"=>$code, "contact"=>$contact);

        DB::table('entreprise')->insert($data);

        echo "Votre demande est bien enrégistrée !";
    }



    function ajout(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $fonct = $req->input('fonct');
        $comment = $req->input('comment');
        
        
        $data = array("email"=>$email,"password"=>$password,"comment"=>$comment, "fonct"=>$fonct);

        DB::table('news')->insert($data);

        echo "Vous êtes bien enrégistré(e)!";
    }

    function enr(Request $req)
    {
        $mailadd = $req->input('mailadd');
        
        $data = array("mailadd"=>$mailadd);

        DB::table('newsletter')->insert($data);

        echo "Félicitations, vous êtes bien inscrit !";
    }

    function env(Request $req)
    {
        $categ = $req->input('categ');
        $intitule = $req->input('intitule');
        
        $data = array("categ"=>$categ, "intitule"=>$intitule);

        DB::table('service')->insert($data);

        echo "Félicitations, vous êtes bien inscrit !";
    }


    function search(Request $request)
    {

       $research = $request->get('search');
       $service = DB::table('service')->where('categ', 'like', '%'.$search. '%')->paginate(S);
       return view('mast', ['service' -> $service ]);
    }


}

