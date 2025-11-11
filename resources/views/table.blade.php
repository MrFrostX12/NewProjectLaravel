@extends('layouts.main')

@section('content')

<title>Table</title>
  </head>
  <body>
    <h1>This Is Table Page</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Prodi</th>
      <th scope="col">Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rafly</td>
      <td>56</td>
      <td>IF</td>
      <td>Pria</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Syafa</td>
      <td>36</td>
      <td>SI</td>
      <td>Wanita</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kipli</td>
      <td>96</td>
      <td>TE</td>
      <td>Pria</td>
    </tr>
  </tbody>
</table>

@endsection