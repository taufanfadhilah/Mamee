<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pelaksanaan Meeting PT. Finnet Indonesia</title>
    <style>
        main {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table { 
            border-collapse: collapse; 
            width: 100%;
        }
        .text-center {
            text-align: center;
        }
        .tab {
            text-indent: 40px;
            text-align: justify;
        }
        .table-header tr td{
             border: 1px solid black;
        }
        .img-logo {
            width: 150px;
        }
        .table-main tr td {
            padding: 5px;
            border: 1px solid black;
            text-align: center;
        }
        .table-main tr th {
            padding: 5px;
            background-color: #ffe0b2;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <main>
        <table class="table-header">
            <tr>
                <td><img src="https://scbtii.telkomuniversity.ac.id/wp-content/uploads/2017/07/telkom-group-finnet-e1470818926306-300x166.jpg" alt="logo" class="img-logo"></td>
                <td>
                    <p class="text-center">
                        <b>
                        LAPORAN PELAKSANAAN MEETING <br> PT. FINNET INDONESIA
                        </b>    
                    </p>
                </td>
                <td>
                    <p class="text-center">
                        <b>
                            {{$monthBahasa}} {{$year}}
                        </b>
                    </p>
                </td>
            </tr>
        </table>
        <p class="tab">
            Berikut merupakan hasil penggunaan aplikasi Management Meeting (MaMee) pada periode bulan <b>Desember 2019</b>:
        </p>
        <table class="table-main">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Meeting</th>
                    <th>Ruangan</th>
                    <th>Jumlah Peserta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($meetings as $index => $meeting)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$meeting->tanggal}}</td>
                        <td style="text-align: left">{{$meeting->nama_meeting}}</td>
                        <td>{{$meeting->Room->nama_ruangan}}</td>
                        <td>{{count($meeting->PIC)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p class="tab">
            Didapatkan hasil bahwa dalam periode bulan <b>{{$monthBahasa}} {{$year}}</b>, telah dilaksanakan meeting sebanyak {{count($meetings)}} di PT. Finnet Indonesia.
        </p>
        <p style="text-align: right">
            Jakarta, {{$currentDate}}
            <br>
            <br>
            <br>
            <br>
            <br>
            <b>
                <u>
                    MaMee Admin
                </u>
            </b>
        </p>
    </main>
</body>
</html>