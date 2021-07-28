<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body>
    @include('header')
        <div class="container">
            <h4>LIST OF PEOPLE</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('persona.index')}}" method="get">
                        <div class="form-row" style="margin-left:76%">
                            <div class=" my-1">
                                <input type="text" class="form-control" name="filter_text" value="{{$filter_text}}">
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary" value="filter">
                            </div>
                            <div class="col-auto my-1">
                                <a href="{{route('persona.create')}}" class="btn btn-success"  >Add</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Surnames</th>
                                    <th scope="col">Names</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">DPI</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                    @if(count($personas)<=0)
                                        <div class="alert alert-danger" role="alert">
                                            No hay resultados
                                        </div>
                                    @else
                                        @foreach ($personas as $persona)
                                        <tr scope="row">
                                            <td>{{$persona->id}}</td>
                                            <td>{{$persona->surnames}}</td>
                                            <td>{{$persona->names}}</td>
                                            <td>{{$persona->address}}</td>
                                            <td>{{$persona->dpi}}</td>
                                            <td>{{$persona->mail}}</td>
                                            <td>{{$persona->telephone}}</td>
                                            <td>
                                            <a href="{{route('persona.edit',$persona->id)}}" style="font-size: xx-small" class="btn btn-outline-primary btn-sm">Edit</a>
                                                | <button type="button" class="btn btn-outline-danger btn-sm" style="font-size: xx-small" data-toggle="modal" data-target="#delete-{{$persona->id}}">
                                                    Delete
                                                </button>
                                            </td>
                                            </tr>
                                            @include('persona.delete')
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                        {{$personas->links()}}
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                "searching": false
                });
            });
        </script>
    </body>
</html>
