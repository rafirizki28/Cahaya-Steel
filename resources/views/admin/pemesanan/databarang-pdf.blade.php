<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <center>
        <h1>Data Barang</h1>
    </center>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
        </tr>

        @php
            $no=1;
        @endphp

        @foreach ($barang as $admin)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $admin->nama_brg }}</td>
            <td>{{ $admin->deskripsi_brg }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
