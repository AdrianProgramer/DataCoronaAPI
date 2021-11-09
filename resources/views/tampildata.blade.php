@extends('Layouts.Templates')
@section('main')
<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
    <table>
        <tr>
           @if ($slug == 'indo')
           <th>Negara</th>
           <th>Positif</th>
           <th>Sembuh</th>
           <th>Meninggal</th>
           @elseif ($slug == 'dunia')
           <th>Negara</th>
           <th>Positif</th>
           <th>Sembuh</th>
           <th>Meninggal</th>
           @elseif ($slug == 'provinsi')
           <th>Provinsi</th>
           <th>Positif</th>
           <th>Sembuh</th>
           <th>Meninggal</th>
           @endif
        </tr>
            @if ($slug == 'indo')
            @foreach ($data as $d)
            <tr>
                <td>{{$d['name']}}</td>
                <td>{{$d['positif']}}</td>
                <td>{{$d['sembuh']}}</td>
                <td>{{$d['meninggal']}}</td>
            </tr>
            @endforeach
            @elseif ($slug == 'dunia')
            @foreach ($data as $d)
            <tr>
                <td>{{$d['attributes']['Country_Region']}}</td>
                <td>{{$d['attributes']['Confirmed']}}</td>
                <td>{{$d['attributes']['Recovered']}}</td>
                <td>{{$d['attributes']['Deaths']}}</td>
            </tr>
            @endforeach
            @elseif ($slug == 'provinsi')

            @endif
    </table>

@endsection
