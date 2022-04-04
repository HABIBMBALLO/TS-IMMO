@extends('layout.layout')
 
@section('content')
 
	
<div class="full_container">
         <div class="">
            <div class="row">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste Proprietaires</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark ">
                                          <tr>
                                             <th>Nom</th>
                                             <th>Prenom</th>
                                             <th>Telephone</th>
                                             <th>Genre</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($proprietaires as $prop)
                                          <tr>
                                             <td>{{$prop->nom}}</td>
                                             <td>{{$prop->prenom}}</td>
                                             <td>{{$prop->telephone}}</td>
                                             <td>{{$prop->sexe}}</td>
                                             <td><a href="#">Detail</a></td>
                                             <td><a href="#">Edit</a></td>
                                             <td><a href="#">Delete</a></td>
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