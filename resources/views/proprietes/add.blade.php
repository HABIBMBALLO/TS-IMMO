@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
              <div class="col-md-10">
                  <div class="login_section">
                     <div class="logo_login">
                        <div class="center">
                           <h2>Ajouter un Propriete</h2>
                        </div>
                     </div>
                     <div class="login_form">
                        <form action="{{ url('/propriete') }}" method="POST">
                           @csrf
                           <fieldset>
                              <div class="field">
                                 <label class="label_field">Nom</label>
                                 <input type="text" name="libelle"  value=""/>
                              </div>
                              <div class="field">
                                 <label class="label_field">Superficie</label>
                                 <input type="number" name="superficie" value="" />
                              </div>
                              <div class="field">
                                 <label class="label_field">Nombre-etage</label>
                                 <input type="number" name="nombre_etage" value="" />
                              </div>
                              <div class="field">
                                 <label class="label_field">Type Propriete</label>
                                 <input type="texte" name="typepropriete"  value=""/>
                              </div>
                              <div class="field">
                                 <label class="label_field">Proprietaire</label>
                                 <select>
                                 <option selected>Selectionner le proprietaire</option>
                                 @foreach($proprietaires as $key => $proprietaire)
                                    <option value={{$proprietaire->id}}>{{$proprietaire->nom}} {{$proprietaire->prenom}} </option>
                                 @endforeach
                                 </select>
                              </div>
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