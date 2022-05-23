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
    <h4>Editar Alumno</h4>
        <div class="row">
        <div class="col-xl-12 my-1">
            <form action="{{route('alumno.update',$alumno->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="n_control">n_control</label>
                    <input type="text" class="form-control" name="n_control" required maxlength="50" value="{{$alumno->n_control}}">
                </div>
                <div class="form-group">
                    <label for="nombre">nombre</label>
                    <input type="text" class="form-control" name="nombre" required maxlength="50" value="{{$alumno->nombre}}">
                </div>
                <div class="form-group">
                    <label for="fecha_de_nacimiento">fecha_de_nacimiento</label>
                    <input type="text" class="form-control" name="fecha_de_nacimiento" required maxlength="30" value="{{$alumno->fecha_de_nacimiento}}">
                </div>
                <div class="form-group">
                    <label for="semestre_actual">semestre_actual</label>
                    <input type="text" class="form-control" name="semestre_actual" required maxlength="30" value="{{$alumno->semestre_actual}}">
                </div>
                <div class="form-group">
                    <label for="carrera">carrera</label>
                    <input type="text" class="form-control" name="carrera" required maxlength="20" value="{{$alumno->carrera}}">
                </div>
                <div class="form-group">
                    <label for="especialidad">especialidad</label>
                    <input type="text" class="form-control" name="especialidad" required maxlength="20" value="{{$alumno->especialidad}}">
                </div>
                <div class="form-group m-2">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <input type?="reset" class="btn btn-default" value="Cancelar">
                    <a href="javascript:history.back()">Ir a los Registros</a>
                </div>
            </form>
        </div>

        </div>
    </div>
</body>
</html>