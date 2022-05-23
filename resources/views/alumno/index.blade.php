<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AplicacionWeb - Busqueda de Alumnos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
       <div class="container">
           <h4>Busqueda de Alumnos</h4>
           <div class="row">
               <div class="col-xl-12 my-1">
                   <form action="{{route('alumno.index')}}" method="get">
                       <div class="form-row">
                           <div class="col-sm-6 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                           </div>
                           <div class="col-auto my-2">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                           </div>
                           </div>
                           <div class="col-auto my-2">
                                <a href="{{route('alumno.create')}}" class="btn btn-success">Nuevo</a>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="col-xl-12">
                   <div class="table-responsive">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th>Opciones</th>
                                   <th>ID</th>
                                   <th>N_Control</th>
                                   <th>Nombre</th>
                                   <th>Fecha_De_Nacimiento</th>
                                   <th>Semestre_Actual</th>
                                   <th>Carrera</th>
                                   <th>Especialidad</th>
                               </tr>
                           </thead>
                           <tbody>
                               @if(count($alumnos)<=0)
                               <tr>
                                   <td> No se encontro el alumno con el n_control proporcionado</td>
                               </tr>
                               @else
                               @foreach ($alumnos as $alumno)
                               <tr>
                                   <td>

                                       
                                       <a href="{{route('alumno.edit',$alumno->id)}}" class="btn btn-warning btn-sm"> Editar</a> 
                                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$alumno->id}}">
                                    Eliminar
                                    </button>
                                    </td>
                                   <td>{{$alumno->id}}</td>
                                   <td>{{$alumno->n_control}}</td>
                                   <td>{{$alumno->nombre}}</td>
                                   <td>{{$alumno->fecha_de_nacimiento}}</td>
                                   <td>{{$alumno->semestre_actual}}</td>
                                   <td>{{$alumno->carrera}}</td>
                                   <td>{{$alumno->especialidad}}</td>
                               </tr>
                               @include('alumno.delete')
                               @endforeach
                               @endif
                           </tbody>
                       </table>
                       {{$alumnos->links()}}
                   </div>
               </div>
           </div>
       </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>