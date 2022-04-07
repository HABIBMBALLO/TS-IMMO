@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste Propriete</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark ">
                                          <tr>
                                             <th>Libelle</th>
                                             <th>Superficie</th>
                                             <th>Nombre Etages</th>
                                             <th>Type de Propriete</th>
                                             <th>Quartier</th>
                                             <th>Proprietaire</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($proprietes as $propriete)
                                          <tr>
                                             <td>{{$propriete->libelle}}</td>
                                             <td>{{$propriete->superficie}}</td>
                                             <td>{{$propriete->nombre_etage}}</td>
                                             <td>{{$propriete->type_propriete}}</td>
                                             <td><a href="{{route('propriete.show',['id'=>"$propriete->id"])}}">Detail</a></td>
                                             <td><a href="{{route('propriete.edit',['id'=>"$propriete->id"])}}">Edit</a></td>
                                             <td><a href="{{route('propriete.destroy',['id'=>"$propriete->id"])}}">Delete</a></td>
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