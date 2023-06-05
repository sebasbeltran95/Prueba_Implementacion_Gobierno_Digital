@extends('layouts.plantilla-admin')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">Alcaldía Macondo</h1> 
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <form class="col-12" method="POST"  action="{{route('alcaldiainsertar')}}">
                @csrf
                <div class="text-center">
                    <label for="exampleInputEmail1">Informacion basica de la solicitud</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Primer Nombre</label>
                    <input type="text" class="form-control" name="primer_nombre" aria-describedby="emailHelp" placeholder="Ingresar nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Segundo Nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" aria-describedby="emailHelp" placeholder="Ingresar nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Primer Apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" aria-describedby="emailHelp" placeholder="Ingrese direccion" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Segundo Apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" aria-describedby="emailHelp" placeholder="Ingrese valor de la propiedad" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electronico</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese el codigo internacional" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Numero de telefono de contacto</label>
                    <input type="number" class="form-control" name="telefono" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>   
@endsection