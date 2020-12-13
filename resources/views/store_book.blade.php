<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/store-book" method="post">
        @csrf
        <p>book name:</p><input type="text" name="book_name" id="">
        <p>price:</p><input type="number" name="price" id="">
        <button type="submit" >save</button>
    </form>
</body>
</html>