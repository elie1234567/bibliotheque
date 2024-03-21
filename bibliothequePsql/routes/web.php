<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantControlleur;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Afficher la liste des livres
Route::get('/emaila', [EtudiantControlleur::class, 'aff']);
Route::get('/emaile',[EtudiantControlleur::class,'mandefa']);
Route::get('/books', [EtudiantControlleur::class, 'affichebook']);
Route::post('/books/traitement',[EtudiantControlleur::class,'store']);
Route::post('/email/traitement',[EtudiantControlleur::class,'email_e']);
Route::get('/booksa',[EtudiantControlleur::class,'ajouter_livre']);
Route::get('/retour/{id}',[EtudiantControlleur::class,'retour_livre']);
// Afficher le formulaire de création de livre
Route::get('/books/create', [EtudiantControlleur::class, 'create']);
Route::get('/presence',[EtudiantControlleur::class,'presence_etudiant']);
Route::get('/deleteetudiant/{id}',[EtudiantControlleur::class,'delete_etudiant']);
Route::get('/updateetudiant/{id}',[EtudiantControlleur::class,'update_etudiant']);
Route::get('/etudiant',[EtudiantControlleur::class,'affichage_etudiant']);
Route::get('/ajouter',[EtudiantControlleur::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantControlleur::class,'ajouter_etudiant_traitement']);
Route::post('/etudiant/rechercher', [EtudiantControlleur::class, 'rechercher_etudiant']);
Route::post('/update/traitement', [EtudiantControlleur::class, 'update_etudiant_traitement']);
Route::get('/deletebook/{id}',[EtudiantControlleur::class,'delete_book']);
Route::get('generate-pdf', [EtudiantControlleur::class, 'generatePdf'])->name('generatePdf');
 Route::get('/generate', [EtudiantControlleur::class, 'bookEmp']);
 Route::get('/generateEmpr/{id}', [EtudiantControlleur::class, 'recuperation']);
 Route::post('/recuperation/traitement', [EtudiantControlleur::class, 'recuperation_etudiant_traitement']);
 Route::get('/lista',[EtudiantControlleur::class, 'em']);
 Route::post('/etudiant/rechercher','App\Http\Controllers\EtudiantControlleur@rechercherParCodeBarre')->name('livre.rechercher');
 Route::get('/livres/{nom}/emprunts', 'App\Http\Controllers\EtudiantControlleur@historique')->name('livres.emprunts');
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

