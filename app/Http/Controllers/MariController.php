<?php

namespace App\Http\Controllers;

class MariController extends Controller
{
    public static function contato(){
      return view ('contato');
    }

    public static function redesSociais(){
      return view ('redesSociais');
    }

    public static function formacao(){
      return view ('formacao');
    }

    public static function experiencias(){
      return view ('experiencias');
    }

    public static function qualificacoes(){
      return view ('qualificacoes');
    }
}
