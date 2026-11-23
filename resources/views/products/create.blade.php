<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

    <h1>Add New Product</h1>

    <form action="/products" method="POST">

        @csrf

        <label>Product Name</label>
        <input type="text" name="name">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Price</label>
        <input type="number" name="price">
        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Description</label>
        <textarea name="description"></textarea>

        <br><br>

        <label>Stock</label>
        <input type="number" name="stock" value="0">

        <br><br>

        <button type="submit">Save Product</button>

    </form>

</body>
</html>