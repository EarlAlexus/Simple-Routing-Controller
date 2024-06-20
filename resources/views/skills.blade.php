<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body>
    <h1>Skills</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <button onclick="location.href='{{ route('about.me') }}'">About Me</button>
    <button onclick="location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
