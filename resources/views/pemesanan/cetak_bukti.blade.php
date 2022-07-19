<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .fw-bold {
            font-weight: bold;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .text-center {
            text-align: center;
        }

        .fs-20 {
            font-size: 20px;
        }

        .table-border,.table-border th, .table-border td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <div style="width: 98%; border: 3px solid black; padding: 15px">
        <table>
            <tr>
                <td class="fw-bold">
                    Pelabuhan Mulia Raja Napitulu
                </td>
            </tr>
            <tr>
                <td class="fw-bold">
                    Jl. Bukit Barisan, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia
                </td>
            </tr>
        </table>

        <table style="width: 100%; margin-top: 20px">
            <tr>
                <td width="33%"></td>
                <td class="fw-bold text-center fs-20">BUKTI PEMBAYARAN</td>
                <td width="33%"></td>
            </tr>
        </table>

        <table style="margin-top: 20px">
            <tr class="fw-bold">
                <td width="45%">No. Invoice</td>
                <td width="10%"> : </td>
                <td width="45%"> {{ $model['invoice'] }} </td>
            </tr>
            <tr class="fw-bold">
                <td width="45%">Pembeli</td>
                <td width="10%"> : </td>
                <td width="45%"> {{ Auth()->user()->name }} </td>
            </tr>
            <tr class="fw-bold">
                <td width="45%">Kode Pesanan</td>
                <td width="10%"> : </td>
                <td width="45%"> {{ $model['kode'] }} </td>
            </tr>
        </table>

        <table class="table-border" style="margin-top: 20px; width: 98%">
            <tr>
                <th height="30" class="fw-bold">No</th>
                <th height="30" class="fw-bold">Nama/Pemilik</th>
                <th height="30" class="fw-bold">Jenis Kelamin/Kendaraan</th>
                <th height="30" class="fw-bold">Umur</th>
                <th height="30" class="fw-bold">Alamat</th>
                <th height="30" class="fw-bold">No Polisi</th>
                <th height="30" class="fw-bold">Harga</th>
            </tr>
            @foreach ( $model['item'] as $key => $value )
            <tr>
                <td style="text-align: center; vertical-align: middle" height="30">{{ $key + 1 }}</td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->nama) ? $value->nama : $value->pemilik }} </td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->jk) ? $value->jk : $value->jenis }} </td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->umur) ? $value->umur : '-' }} </td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->alamat) ? $value->alamat : '-' }} </td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->no_polisi) ?  $value->no_polisi : '-' }} </td>
                <td style="text-align: center; vertical-align: middle" height="30"> {{ isset($value->harga) ? 'Rp '.number_format($value->harga,2,',','.') : '-' }} </td>
            </tr>
            @endforeach
            <tr>
                <td class="fw-bold" style="text-align: right; vertical-align: middle; padding-right: 30px" height="30" colspan="6">Total</td>
                <td class="fw-bold" style="text-align: center; vertical-align: middle;" height="30"> {{ 'Rp '.number_format($model['total'],2,',','.') }} </td>
            </tr>
        </table>

        <table style="width: 100%; margin-top: 40px;">
            <tr>
                <td width="30%" height="50"></td>
                <td width="30%" height="50"></td>
                <td width="30%" style="text-align: center;" height="50"> {{ date('d, F Y') }} </td>
            </tr>
            <tr>
                <td width="30%" height="60"></td>
                <td width="30%" height="60"></td>
                <td width="30%"height="60"></td>
            </tr>
            <tr>
                <td width="30%" height="50"></td>
                <td width="30%" height="50"></td>
                <td width="30%" style="text-align: center;" height="50">PETUGAS PELABUHAN</td>
            </tr>
        </table>
    </div>





</body>
</html>

