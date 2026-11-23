<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form action="/products/{{ $product->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $product->name) }}"
        >

        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Price</label>
        <input
            type="number"
            name="price"
            value="{{ old('price', $product->price) }}"
        >

        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Description</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>

        <br><br>

        <label>Stock</label>
        <input
            type="number"
            name="stock"
            value="{{ old('stock', $product->stock) }}"
        >

        <br><br>

        <button type="submit">Update Product</button>

    </form>

</body>
</html>