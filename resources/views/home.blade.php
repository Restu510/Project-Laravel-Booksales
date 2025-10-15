<!DOCTYPE html>
<html>
<head>
    <title>Genre & Author</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f4f4; }
        h2 { color: #333; }
        table { border-collapse: collapse; width: 50%; margin-bottom: 40px; background: white; }
        th, td { border: 1px solid #aaa; padding: 10px; text-align: left; }
        th { background: #ddd; }
    </style>
</head>
<body>
    <h2>Daftar Genre</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre['id'] }}</td>
                <td>{{ $genre['name'] }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Daftar Author</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
        </tr>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author['id'] }}</td>
                <td>{{ $author['name'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
