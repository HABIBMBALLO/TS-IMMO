@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
              <div class="col-md-10">
                  <div class="login_section">
                     <div class="logo_login">
                        <div class="center">
                           <h2>Ajouter une Proprietaire</h2>
                        </div>
                     </div>
                     <div class="login_form">
                        <form action="{{ url('/proprietaire')}}" method="POST">
                           @csrf
                           <fieldset>
                              <div class="field">
                                 <label class="label_field">Nom</label>
                                 <input type="text" name="nom"  />
                              </div>
                              <div class="field">
                                 <label class="label_field">Prenom</label>
                                 <input type="text" name="prenom"  />
                              </div>
                              <div class="field">
                                 <label class="label_field">Email</label>
                                 <input type="email" name="email"  />
                              </div>
                              <div class="field">
                                 <label class="label_field">Date Naissance</label>
                                 <input type="date" name="dateNaissance"  />
                              </div>
                              <div class="field">
                                 <label class="label_field">Lieur Naissance</label>
                                 <input type="text" name="lieuNaissance"  />
                              </div>
                              <div class="field">
                                 <label class="label_field">Telephone</label>
                                 <input type="number" name="telephone" />
                              </div>
                              <div class="field">
                                 <label class="label_field">Numero Piece Identite</label>
                                 <input type="number" name="numPieceIdentite" />
                              </div>
                              
                              <div class="field">
                                 <label class="label_field">Sexe</label>
                                 <select class="custom-select" name="sexe">
                                    <option value="marie">Selectionner le sexe</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Feminin</option>
                                 </select>
                              </div>
                              <div class="field">
                                 <label class="label_field">Civilite</label>
                                 <select class="custom-select"  name="civilite">
                                    <option value="marie">Selectionner le statut</option>
                                    <option value="marie">Marie</option>
                                    <option value="celibataire">Celibataire</option>
                                 </select>
                              </div>
                                 {{-- <div class="field">
                                 <label class="label_field">Administrateur</label>
                                 <selectect>
                                 <option selected>Selectionner un Administrateur</option>
                                 @foreach($administrateurs as $key => $administrateur)
                                    <option value={{$administrateur->id}}>{{$administrateur->nom}} {{$administrateur->prenom}} </option>
                                 @endforeach
                                 </selectect>
                              </div> --}}
                              <div class="field margin_0">
                                 <label class="label_field hidden">hidden label</label>
                                 <button class="main_bt">Ajouter</button>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
              </div>
         </div>
      </div>
@endsection