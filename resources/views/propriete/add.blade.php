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
                        <form action="/propriete/store" method="POST">
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