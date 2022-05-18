@extends('layout.layout')

@section('content')


<div class="full_container">
         <div class="">
            <div class="row">


                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste des Proprietes</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark ">
                                          <tr>
                                             <th>Libelle</th>
                                             <th>Nomnre Etage</th>
                                             <th>Superficie</th>

{{--                                             <th>TypePropriete</th>--}}
                                             <th>Quartier</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($proprietes as $propriete)
                                          <tr>
                                             <td>{{$propriete->libelle}}</td>
                                             <td>{{$propriete->nombre_etage}}</td>
                                             <td>{{$propriete->superficie}}</td>
{{--                                              <td>{{$propriete->type_proprietes->libelle}}</td>--}}
                                             <td>{{$propriete->quartier->libelle}}</td>

                                             <td>
                                                 <a href="{{route('propriete.show',['id'=>$propriete->id])}}"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a>
                                                 <a href="{{route('propriete.edit',['id'=>$propriete->id])}}"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
                                                 <a href="{{route('propriete.destroy',['id'=>$propriete->id])}}"><i class="bi bi-x-circle" style="color:#E40000;"></i></a>
                                             </td>
                                          </tr>
                                          @endforeach

                                       </tbody>
                                    </table>

                                 </div>
                              </div>
                           </div>
                        </div>

         </div>
      </div>
@endsection
