@extends('layout.layout')

@section('content')


    <div class="full_container">
        <div class="">
            <div class="row">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <h2>Modifier Propriete</h2>
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="{{route('propriete.update',['id'=>$propriete->id])}}" method="post">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Libelle</label>
                                    <input type="text" name="libelle"  value="{{$propriete->libelle}}" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Superficie</label>
                                    <input type="number" name="superficie" value="{{$propriete->superficie}}" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Nombre Etages</label>
                                    <input type="number" name="nombre_etage" value="{{$propriete->nombre_etage}}" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Type Propriete</label>
                                    <select class="custom-select" name="typePropriete_id">
                                        @foreach($typeProprietes as $type)
                                            <option value="{{$type->id}}">{{$type->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="field">
                                    <label class="label_field">Quartier</label>
                                    <select class="custom-select" name="quartier_id">
                                        @foreach($quartiers as $quartier)
                                            <option value="{{$quartier->id}}">{{$quartier->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="field">
                                    <label class="label_field">Proprietaire</label>
                                    <select class="custom-select" name="proprietaire_id">
                                        @foreach($proprietaires as $prop)
                                            <option value="{{$prop->id}}">{{$prop->nom}} {{$prop->prenom}}</option>
                                        @endforeach
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
@endsection
