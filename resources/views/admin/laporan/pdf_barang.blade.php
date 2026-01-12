<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Barang</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
        }

        .header p {
            margin: 4px 0 0;
            font-size: 12px;
        }

        .info {
            margin-bottom: 10px;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #000;
            padding: 8px;
        }

        table th {
            background-color: #f0f0f0;
            text-align: center;
        }

        table td {
            vertical-align: middle;
        }

        .text-center {
            text-align: center;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 11px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Laporan Data Barang</h1>
        <p>Sistem Informasi Manajemen Barang</p>
    </div>

    <!-- Info -->
    <div class="info">
        Tanggal Cetak: {{ date('d-m-Y') }}
    </div>

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Kode Barang</th>
                <th>Nama Barang</th>
                <th width="15%">Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
                <td class="text-center">{{ $key + 1 }}</td>
                <td class="text-center">{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
                <td class="text-center">{{ $item->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Footer -->
    <div class="footer">
        Dicetak oleh sistem
    </div>

</body>
</html>
