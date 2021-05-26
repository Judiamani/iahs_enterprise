<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Homepage
    public function home() 
    {
        return view ('home');
    }

     public function index() 
    {
        return view ('index');
    }

    //actualité
    public function actual() 
    {
        return view ('actual');
    }
    //contacts
    public function contact() 
    {
        return view ('contact');
    }
    //marketing
    public function mark() 
    {
        return view ('mark');
    }
    //communication
    public function com() 
    {
        return view ('com');
    }
    //import-export
    public function imp() 
    {
        return view ('imp');
    }
    //construction
    public function cons() 
    {
        return view ('cons');
    }
    //prestations entreprises
    public function pres() 
    {
        return view ('pres');
    }
    //ressources humaines
    public function res() 
    {
        return view ('res');
    }
    //entretien bâtiment
    public function ent() 
    {
        return view ('ent');
    }

    //Inscription
    public function inscrit() 
    {
        return view ('inscrit');
    }

    //Service
    public function service() 
    {
        return view ('service');
    }

    //articles
    public function present() 
    {
        return view ('present');
    }

     //Page test 1
     public function mast() 
     {
         return view ('mast');
     }

      //Page test 2
      public function most() 
      {
          return view ('most');
      }

       public function welcome() 
      {
          return view ('welcome');
      }

      public function config() 
      {
          return view ('config');
      }

      public function search_result() 
      {
          return view ('search_result');
      }

      public function ajax_result_list() 
      {
          return view ('ajax_result_list');
      }



}
