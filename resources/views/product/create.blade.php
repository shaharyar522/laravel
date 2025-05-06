<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">Price</label>
        <input type="number" name="price" id="">
        <label for="">Description</label>
        <input type="text" name="description" id="">
        <label for="">Type</label>
        <input type="text" name="type" id="">
        <input type="submit">
    </form>
</body>
</html>