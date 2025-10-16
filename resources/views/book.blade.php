<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>
    <h1>Books</h1>
    <a href="/author">Back to Authors</a>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        @foreach ($books as $book)
        <tr>
            <td><img src="{{ $book->cover_photo }}" width="80"></td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->genre->name }}</td>
            <td>{{ $book->description }}</td>
            <td>Rp{{ number_format($book->price, 0, ',', '.') }}</td>
            <td>{{ $book->stock }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
