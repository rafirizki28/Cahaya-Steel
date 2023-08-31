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
        <h1>Data Pembelian Bahan Baku</h1>
    </center>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama Bahan Baku</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>

        @php
            $no = 1;
        @endphp

        @foreach ($data as $admin2)
            <tr>
                <td>{{ $no++ }}</td>
                <td >{{ $admin2->nama_pbb }}</td>
                <td >{{ date_format(date_create($admin2->tanggal_pbb),"d-M-Y") }}</td>
                <td >{{ $admin2->jumlah_pbb }}</td>
                <td >{{ $admin2->formatRupiah('harga_pbb') }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
