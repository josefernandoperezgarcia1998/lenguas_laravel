  @extends('inicio.layout')
@section('content')

 @if(session('calificacionAgregada'))
<div class="alert alert-success">
{{ session('calificacionAgregada') }}
</div>

@endif
<div class="container-fluid">

<div class="row">
<div class="col-xl-8 col-lg-7">

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Concentrado de calificacioness</h6>
</div>
<div class="card-body">
<div class="chart-area">
          <!-- Nombre del curso -->
  <p>Curso intermedio B1</p>
 
        <table class="table">
          <thead>
              <tr>
              <th >ID</th>
     <th >No. Control</th>
      <th >Nombre</th>
      <th >Calificaciones</th>
</tr>
<td>{{$calificacion->id}}</td>
      <td>{{$calificacion->no_control}}</td>
      <td>{{$calificacion->nombre}}</td>
  

<form action="{{ route('edit', $calificacion->id)}}" method="POST">
 @csrf 
    @method('PATCH') 
    
    <td><input  name="calif" type="text"></td>

        
</tr>

<div class="container" style="padding-top: 5%; ">
                          <table class="table">
                            <tr> 
                              <th>  
                                <a href="{{ url('formcalif')}}" type="button" class="btn btn-danger">REGRESAR</a></th>
                                <button type="submit"  >calificar</button>   
                            </tr>
                      
 </form>
                           
 </table>
 </div>
                  </div>                  
                </div>
              </div>

              
            </div>
          </div>

        </div>


    </div>
    
 </div>
    
@endsection
