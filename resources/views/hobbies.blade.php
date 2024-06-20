<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies</h1>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
    <button onclick="location.href='{{ route('about.me') }}'">About Me</button>
    <button onclick="location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
