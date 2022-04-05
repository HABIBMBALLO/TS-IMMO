@extends('layout.layout')

@section('content')


    <div class="full_container">
        <div class="">
            <div class="row">
                <div class="col-md-10">
                    <div class="login_section">
                        <div class="logo_login">
                            <div class="center">
                                <h2>Modifier Proprietaire</h2>
                            </div>
                        </div>
                        <div class="login_form">
                            <form action="{{route('proprietaire.update',['id'=>$proprietaires->id])}}" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="field">
                                        <label class="label_field">Nom</label>
                                        <input type="text" name="nom" value="{{$proprietaires->nom}} "/>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">Prenom</label>
                                        <input type="text" name="prenom"  value="{{$proprietaires->prenom}}" />
                                    </div>
                                    <div class="field">
                                        <label class="label_field">Email</label>
                                        <input type="email" name="email"  value="{{$proprietaires->email}}"/>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">DateNaissance</label>
                                        <input type="date" name="dateNaissance"  value="{{$proprietaires->dateNaissance}}"/>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">LieuxNaissance</label>
                                        <input type="text" name="lieuNaissance"  value="{{$proprietaires->lieuNaissance}}"/>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">Telephone</label>
                                        <input type="number" name="telephone"  value="{{$proprietaires->telephone}}"/>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">Nb_Carte</label>
                                        <input type="text" name="numPieceIdentite"  value="{{$proprietaires->numPieceIdentite}}"/>
                                    </div>

                                    <div class="field">
                                        <label class="label_field">Sexe</label>
                                        <select class="custom-select" name="sexe" >
                                            <option value="marie">...</option>
                                            <option value="masculin">Masculin</option>
                                            <option value="feminin">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label class="label_field">Civilite</label>
                                        <select class="custom-select" name="civilite" >
                                            <option value="marie">...</option>
                                            <option value="marie">Marie</option>
                                            <option value="celibataire">Celibataire</option>
                                        </select>
                                    </div>
                                    <div class="field margin_0">
                                        <label class="label_field hidden">hidden label</label>
                                        <button class="main_bt">Modifier</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection
