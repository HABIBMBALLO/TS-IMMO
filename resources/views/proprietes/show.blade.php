@extends('layout.layout')

@section('content')


    <div class="full_container">
        <div class="">
            <div class="row">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <h2>information Propriete</h2>
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="#" method="post">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Libelle:{{$propriete->libelle}}</label>

                                </div>
                                <div class="field">
                                    <label class="label_field">Superficie:{{$propriete->superficie}}</label>

                                </div>
                                <div class="field">
                                    <label class="label_field">Nombre Etages:{{$propriete->nombre_etage}}</label>

                                </div>
                                <div class="field">
                                    <label class="label_field">Type Propriete:{{$propriete->typePropriete_id}}</label>

                                </div>
                                <div class="field">
                                    <label class="label_field">Quartier:{{$propriete->quartier_id}}</label>

                                </div>
                                <div class="field">
                                    <label class="label_field">Proprietaire:{{$propriete->proprietaire_id}}</label>

                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

