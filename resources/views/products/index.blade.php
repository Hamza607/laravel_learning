<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>All Products</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="/products/create">Add Product</a>

   @forelse($products as $product)

    <div>
        <h3>{{ $product->name }}</h3>

        <p>Price: {{ $product->price }}</p>

        <p>Stock: {{ $product->stock }}</p>

        <a href="/products/{{ $product->id }}/edit">
            Edit
        </a>

        <form
            action="/products/{{ $product->id }}"
            method="POST"
        >
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>
        </form>
    </div>

    <hr>

@empty

    <p>No products found.</p>

@endforelse

</body>
</html>