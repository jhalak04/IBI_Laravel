<!DOCTYPE html>
<html>
<head>
    <title>Star Wars</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
<div>
    <h4>Star Wars Search</h4>
    <form>
        <input type="text" class="form-control" placeholder="Find star wars character" name="search" />
    </form>
    <table border = "1" class="movieStars">
        @if (isset($starWarsData))
            @foreach ($starWarsData as $starWars)
                <tr>
                    <td>{{ $starWars['name'] }}</td>
                    <td>{{ $starWars['height'] }}</td>
                    <td>{{ $starWars['mass'] }}</td>
                    <td>{{ $starWars['hair_color'] }}</td>
                    <td>{{ $starWars['skin_color'] }}</td>
                    <td>{{ $starWars['eye_color'] }}</td>
                    <td>{{ $starWars['birth_year'] }}</td>
                    <td>{{ $starWars['gender'] }}</td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
</body>
</html>
