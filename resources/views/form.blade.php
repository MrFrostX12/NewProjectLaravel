@extends('layouts.main')

@section('content')

<head>
    <title>Form Biodata Mahasiswa</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
            text-align: center;
            background: linear-gradient(to bottom, white);
            color: black; 
        }
        form {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid black;
            border-radius: 10px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.1);
            color: black;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 6px;
            margin-top: 4px;
            border-radius: 5px;
            border: none;
            background-color: rgba(0, 0, 0, 0.2);
            color: black;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 6px;
            cursor: pointer;
        }
        .hobi-group, .jk-group {
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
            border: none;
            border-radius: 7px;
            background-color: #000000ff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #2e4438ff;
        }
        .message {
            width: 400px;
            margin: 0 auto 20px;
            padding: 10px;
            background-color: #0f140fff;
            border-radius: 8px;
            font-weight: bold;
            color: white;
        }
         {
            color: #0f1410ff;
            text-decoration: none;
            display: block;
            margin-top: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<h2>Form Biodata Mahasiswa</h2>

<form method="POST" action="">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" required>

    <label for="prodi">Program Studi:</label>
    <select id="prodi" name="prodi" required>
        <option value="">-- Pilih Program Studi --</option>
        <option value="Informatika">Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
    </select>

    <label>Jenis Kelamin:</label>
    <div class="jk-group">
        <label><input type="radio" name="jk" value="Pria" required> Pria</label>
        <label><input type="radio" name="jk" value="Wanita" required> Wanita</label>
    </div>

<button type="submit">Kirim</button>
</form>

@endsection