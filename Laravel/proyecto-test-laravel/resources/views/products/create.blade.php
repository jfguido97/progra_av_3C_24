<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Agregar Producto</h1>


            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nombre" >
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="number" name="quantity" placeholder="Cantidad">
                @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <textarea name="description" placeholder="Descripción"></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit">Guardar</button>
                <a  href="{{ route('products') }}">Cancelar</a>

            </form>
        </div>
    </div>
 </div>
    
</body>
</html>