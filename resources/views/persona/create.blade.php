<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
    @include('header')
        <div class="container">
            <h4>ADD PERSON</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('persona.store')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="surnames">surnames</label>
                                <input type="text" class="form-control" id="surnames"  name="surnames" required>
                            
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="names">names</label>
                                <input type="text" class="form-control" id="names"  name="names" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="address">address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="dpi">dpi</label>
                                <input type="text" class="form-control" id="dpi"  name="dpi" required>
                            
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="mail">mail</label>
                                <input type="text" class="form-control" id="mail"  name="mail" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="telephone">telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add</button>
                        <button class="btn btn-default" type="reset">cancel</button>
                        <a href="javascript:history.back()">return to list</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
