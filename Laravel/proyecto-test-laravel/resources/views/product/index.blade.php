
     <h1>Este es la vista para Productos {{ $message }}</h1>

     @foreach ($products as $product)
    <p>Este es un producto {{ $product->name }}</p>
    @endforeach