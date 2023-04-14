<!DOCTYPE html>
<html>
<head>
    <title>Movie Characters</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/search.js') }}" defer></script>
<body>
<div class="container">
    <input type="text" id="search" class="form-control" placeholder="Find character here" name="search" onkeydown="searchActors()" />
    <table border = "1" class="movieStars">
        <tr class="headers">
            <td>Actor's Name</td>
            <td>Movie Name</td>
        </tr>
        @if (isset($actors))
            @foreach ($actors as $actor)
                <tr>
                    <td>{{ $actor->name }}</td>
                    <td>{{ $actor->movie_name }}</td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
</body>
</html>
