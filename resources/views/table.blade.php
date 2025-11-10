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
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rafly</td>
      <td>12</td>
      <td>IF</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>34</td>
      <td>SI</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kipli</td>
      <td>56</td>
      <td>TK</td>
    </tr>
  </tbody>
</table>

@endsection