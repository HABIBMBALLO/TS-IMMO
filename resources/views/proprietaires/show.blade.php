@extends('layout.layout')

@section('content')


    <div class="full_container">
        <div class="">
            <div class="row">
                <div class="col-md-10">
                    <div class="login_section">
                        <div class="logo_login">
                            <div class="center">
                                <h2>Information Proprietaire</h2>
                            </div>
                        </div>
                        <div class="login_form center">
                            <form action="#" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="field center">

                                        <label class="label_field">Nom:{{$proprietaires->nom}} </label>

                                    </div>
                                    <div class="field center">
                                        <label class="label_field">Prenom:{{$proprietaires->prenom}}</label>

                                    </div>
                                    <div class="field center" >
                                        <label class="label_field">Email:{{$proprietaires->email}}</label>

                                    </div>
                                    <div class="field">
                                        <label class="label_field">DateNaissance:{{$proprietaires->dateNaissance}}</label>

                                    </div>
                                    <div class="field">
                                        <label class="label_field">LieuxNaissance:{{$proprietaires->lieuNaissance}}</label>

                                    </div>
                                    <div class="field">
                                        <label class="label_field">Telephone:{{$proprietaires->telephone}}</label>

                                    </div>
                                    <div class="field">
                                        <label class="label_field">Nb_Carte:{{$proprietaires->numPieceIdentite}}</label>

                                    </div>

                                    <div class="field">
                                        <label class="label_field">Sexe:{{$proprietaires->sexe}}</label>

                                    </div>
                                    <div class="field">
                                        <label class="label_field">Civilite:{{$proprietaires->civilite}}</label>

                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection
