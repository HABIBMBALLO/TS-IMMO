@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <h2>Ajouter un Type</h2>
                     </div>
                  </div>
                  <div class="login_form">
                     <form>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Libelle</label>
                              <input type="text" name="email"  />
                           </div>
                           <div class="field">
                              <label class="label_field">Superficie</label>
                              <input type="number" name="superficie"  />
                           </div>
                           <div class="field">
                              <label class="label_field">Nombre Etages</label>
                              <input type="number" name="superficie" />
                           </div>
                           <div class="field">
                                <label class="label_field">Type Prpriete</label>
                              <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection


