<?php

namespace App\Http\Controllers;


use App\Models\Utlisateur;
use Milon\Barcode\DNS1D;
use App\Models\book;
use Illuminate\Http\Request;
use App\Models\emprunt;
use App\Models\email;
use PDF;



class EtudiantControlleur extends Controller
{
  public function historique($nom)
{
    $livre = book::where('title', $nom)->first();
    if (!$livre) {
        return redirect()->back()->with('error', 'Livre non trouvé.');
    }

    $emprunts = $livre->emprunts;

    return view('etudiant.historique', ['emprunts' => $emprunts]);
}
  




  public function generatePdf()
{
    $books = book::all();
    $pdf = PDF::loadView('etudiant.index', compact('books'));

    return $pdf->download('books.pdf');
}
public function rechercherParCodeBarre(Request $request)
{
    $textRecherche = $request->input('textRecherche');

    // Requête de recherche par code-barres
    $livre = book::where('barcode', $textRecherche)->get();

    return view('etudiant.emprunt', compact('livre'));
}
// public function generatePd()
// {
//     $Utlisateurs = Utlisateur::all();
//     $pdf = PDF::loadView('etudiant.pdf', compact('Utlisateurs'));

//     return $pdf->download('Utlisateurs.pdf');
// }
  public function ajouter_livre(){
    $utilisateurs=Utlisateur::all();

    return view('etudiant.livreajouter',compact('utilisateurs'));

  }

  public function affichage_etudiant(){

     $utilisateurs=Utlisateur::all();
    return view('etudiant.affichage',compact('utilisateurs'));
     
  }
  public function affichebook()
    {
        $books = book::all();

        return view('etudiant.index',compact('books'));
    }
    public function store(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);
    
        if ($this->bookCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }
    
        $request['barcode'] = $number;
    
        book::create($request->all());
    
        return redirect('/books')->with('success', 'Book created successfully.');
    }


    public function email_e(Request $request){
      email::create($request->all());
    
      return redirect('/books')->with('success', 'envoyer.');
    }
   public function mandefa(){
    return view('etudiant.email');
   }

    
  public function bookCodeExists($number){
    return Book::where('barcode', $number)->exists();
 }
  public function rechercher_etudiant(Request $request)
  {
      $textRecherche = $request->input('textRecherche');
  
      // Vérifier si le champ de recherche est vide
      if (empty($textRecherche)) {
          return back()->with('error', 'Veuillez remplir le champ de recherche.');
      }
  
      // Logique de recherche
      $utilisateurs = Utlisateur::where('nom', 'like', '%' . $textRecherche . '%')
          ->orWhere('prenom', 'like', '%' . $textRecherche . '%')
          ->get();
  
      return view('etudiant.affichage', compact('utilisateurs'));
  }
  
      public function ajouter_etudiant(){

        return view('etudiant.ajouter');

      }
      public function retour_livre($id){
        $emprunt=emprunt::find($id);
        $emprunt->delete();
        return redirect('/lista')->with('status','L\'retour avec sucess😎');
       }
      public function em(){
        $emprunte = emprunt::all();

       return view('etudiant.listeE',compact('emprunte'));
      }

      public function aff(){
        $emails = email::all();

       return view('etudiant.emailaff',compact('emails'));
      }

      




      public function delete_etudiant($id){
       $etudiants=Utlisateur::find($id);
       $etudiants->delete();
       return redirect('/etudiant')->with('status','L\'suppressions avec sucess😎');
      }
      
      
      public function delete_book($id){
        $books=book::find($id);
        $books->delete();
        return redirect('/books')->with('status','L\'suppressions book avec sucess😎');
       }
  public function ajouter_etudiant_traitement(Request $re) {
    $re->validate([
     'prenom'=>'required',
     'nom'=>'required',
     'email'=>'required',
     'code'=>'required',
     
     
    ]);
    $etudiant=new Utlisateur();
    $etudiant->prenom = $re->prenom;
    $etudiant->nom = $re->nom;
    $etudiant->email = $re->email;
    $etudiant->code = $re->code;
    $etudiant->save();
    return redirect('/etudiant')->with('status','L\'etudiant avec sucess');
    
  }
   public function update_etudiant($id){
    $utilisateurs=Utlisateur::find($id);
    return view('etudiant.update', compact('utilisateurs'));
           
  }
  public function recuperation_etudiant_traitement(Request $re){
    $re->validate([
      'emprunteur'=>'required',
      'livre'=>'required',
      'date_emp'=>'required',
      'date_retour'=>'required',
  ]);

  $couadd = new emprunt();
  $couadd->emprunteur = $re->emprunteur;
  $couadd->livre = $re->livre;
  $couadd->date_emp = $re->date_emp;
  $couadd->date_retour = $re->date_retour;
  $couadd->save();

  return redirect('/generate')->with('status', 'L\'emprunt a été ajouté avec succès');
  }
  public function recuperation($id){
    $books=book::find($id);
    $emprunteur=Utlisateur::all();
    return view('etudiant.recuperation',compact('books','emprunteur'));
           
  }
  public function update_etudiant_traitement(Request $re){
    $re->validate([
      'prenom'=>'required',
      'nom'=>'required',
      'email'=>'required',
      'code'=>'required',  
     ]);
     $etudiants= Utlisateur::find($re->id);
     $etudiants->prenom = $re->prenom;
     $etudiants->nom = $re->nom;
     $etudiants->email = $re->email;
     $etudiants->code = $re->code;
     $etudiants->update();
     return redirect('/etudiant')->with('status','L\'update avec sucess');
     
  }
  public function bookEmp()
    {
        $livre = book::all();

        return view('etudiant.emprunt',compact('livre'));
    }
 
  }
