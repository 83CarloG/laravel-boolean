<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Sesso</th>
                <th>Data di nascita</th>
            </tr>
        </thead>

        {{-- Perchè devo fare foreach?? --}}

        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->date_of_birth}}</td>

        </tr>

    </table>

</body>
</html>
