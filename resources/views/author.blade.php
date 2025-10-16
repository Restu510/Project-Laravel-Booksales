<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
    <style>
        body { font-family: Arial; background: #f8f8f8; text-align: center; }
        .card { display: inline-block; width: 200px; background: #fff; margin: 10px; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>Authors</h1>
    <a href="/book">View Books</a>
    <div>
        @foreach ($authors as $a)
            <div class="card">
                <img src="{{ $a->photo }}" alt="{{ $a->name }}">
                <h3>{{ $a->name }}</h3>
                <p>{{ $a->bio }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
