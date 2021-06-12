<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        

    </head>
    <body class="antialiased">
        <div class="container">
            <!--  -->
            <div class="d-flex p-5 bd-highlight">
                <div class="col-12">
                    <h2 class="center" align="center">Lista de Productos</h2>
                    
                </div>
            </div>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100">
                <div class="container">
                    <form action="/products" method="post" name="addProduct">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-2">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="col-2">
                                <label for="weight">Weight:</label>
                                <input type="text" class="form-control" id="weight" name="weight">
                            </div>
                            <div class="col-2">
                                <label for="type">Type:</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                            <div class="col-2">
                                <input type="submit" class="btn btn-success" value="Guardar">
                            </div>
                        </div>
                    </form>
                        <br><br>
                    <div class="col-12">
                        <div class="row">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Weight</th>
                                    <th>Type</th>
                                </thead>
                                <tbody>
                                    @foreach($products as $prod)
                                    <tr>
                                        <td>{{$prod['id']}}</td>
                                        <td>{{$prod['name']}}</td>
                                        <td>{{$prod['price']}}</td>
                                        <td>{{$prod['weight']}}</td>
                                        <td>{{$prod['type']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
