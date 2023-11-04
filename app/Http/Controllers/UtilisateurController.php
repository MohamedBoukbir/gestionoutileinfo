<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
class UtilisateurController extends Controller
{
    public function index(){
        $users=Utilisateur::get();
        return view('admin.Utilisateurs',compact('users'));
     }

     public function destroy( $id){
     
        $user=Utilisateur::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'user a été bien supprimé !!');
  
     }

     public function add(Request $request){
      $request->validate([
         'nom' => ['required', 'string', 'max:255'],
         'prenom' => ['required', 'string', 'max:255'],
         'cin' => ['required', 'string', 'max:255'],
         'adresse' => ['required', 'string', 'max:255'],
     ]);
  
     $user = new Utilisateur() ;
     $user->nom=$request->nom;
     $user->prenom=$request->prenom;
     $user->cin=$request->cin;
     $user->adresse=$request->adresse;
     $user->save();
     return back();
     }

     public function update(Request $request, $id){
        $request->validate([
           'nom' => ['required', 'string', 'max:255'],
           'prenom' => ['required', 'string', 'max:255'],
           'cin' => ['required', 'string', 'max:255'],
           'adresse' => ['required', 'string', 'max:255'],
       ]);
    
       $user =Utilisateur::find($id) ;
       $user->nom=$request->nom;
       $user->prenom=$request->prenom;
       $user->cin=$request->cin;
       $user->adresse=$request->adresse;
       $user->save();
       return back();
       }
}
