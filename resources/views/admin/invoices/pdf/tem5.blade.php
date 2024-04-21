<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 13px;
            margin-left: 2.5cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        table {
            page-break-inside: auto;
        }

        tr {
            page-break-inside: avoid;
        }

        .page-break {
            page-break-after: always;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1.5cm;
            z-index: -5;
            background-color: #a822a3;
        }

        aside {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 50cm;
            width: 1.5cm;
            z-index: -3;
            background-color: orange;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #921919;
        }

        .triangle-right {
            position: fixed;
            top: 5.5cm;
            left: 1cm;
            width: 0;
            height: 0;
            border-top: 25px solid transparent;
            border-left: 50px solid orange;
            border-bottom: 25px solid transparent;
        }
    </style>
</head>

<body>
    <aside>
    </aside>
    <div class="triangle-right"></div>
    <header>
    </header>
    <br><br><br>
    <div style="color: black;line-height:0.5rem">
        <h1>INVOICE</h1>
        <b>NOTE: {{$da->note}}</b>
    </div>
    <br><br>
    <table border="0" cellspacing="0" style="width: 100%">
        <tr>
            <td>
                <b>INVOICE TO :</b><br>
                <b>{{ strtoupper($da->agency->name) }}</b><br>
                {{ strtoupper($da->agency->alamat) }}<br>
            </td>
            <td colspan="2" width="60%" style="text-align: right">
                <img width="100px"
                    src="data:image/png;base64,{{ base64_encode(file_get_contents('storage/' . $da->lpk->logo)) }}" />
                <br><br>
                <b>{{ strtoupper($da->lpk->name) }}</b><br>
                {{ strtoupper($da->lpk->alamat) }}
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                平素よりお世話になっております。益々御清祥のことと<br>
                お慶び申し上げます。下記の通り、書類を送付させてい<br>
                ただきますので、ご確認の程よろしくお願い致します。
            </td>
            <td>
                番号
            </td>
            <td style="text-align: right">
                {{ $da->number }}
            </td>
        </tr>
        <tr>
            <td>
                作成⽇付 
            </td>
            <td style="text-align: right">
                {{ $da->tanggal }}
            </td>
        </tr>
        <tr>
            <td>
                お⽀払期限 
            </td>
            <td>
                {{ $da->due }}
            </td>
        </tr>
    </table>
    <br>
    <table border="0" cellspacing="0" style="width: 100%; ">
        <tr style="background-color:#a822a3;text-align:center;color:white;">
            <td>
                号
            </td>
            <td>
                ⽒名
            </td>
            <td>
                会社名
            </td>
            <td>
                会社名
            </td>
            <td>
                数量
            </td>
            <td>
                単価
            </td>
            <td>
                ⾦額
            </td>

            @php $tot =0; @endphp
            @foreach ($da->inv as $item)
            @php
            $nom = ($item->time) ? $item->time : 1;
            $tot += $item->nominal*$nom;         
            @endphp
        <tr style="text-align: center;border-bottom: 1px solid #921919;">
            <td>
                {{ $loop->iteration }}
            </td>
            <td>
                {{ $item->field->name }}
            </td>
            <td>
                {{ $item->field->head->comp->name }}
            </td>
            <td>
                {{ $item->tanggal }}
            </td>
            <td>
                {{ $item->time }}
            </td>
            <td>
                {{ number_format($item->nominal, 0, ',', '.') }}
            </td>
            <td style="text-align: right">
                {{ number_format($item->nominal * $nom, 0, ',', '.') }}
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <table border="0" cellspacing="0" style="width: 100%; ">
        <tr>
            <td width="60%">
                振込先
            </td>
            <td width="20%">
                合計
            </td>
            <td width="20%" style="text-align: right">
                {{ number_format($tot, 0, ',', '.') }}
            </td>
        </tr>
        <tr>
            <td>
                Informasi rekening penerima
            </td>
            <td>
                消費税 
            </td>
            <td style="text-align: right">
                {{ number_format($tot*$set->tax/100, 0, ',', '.') }}
            </td>
        </tr>
        <tr>
            <td>
                pembayaran (choice) :           
            </td>
            <td style="background-color:#a822a3;color:white">
                請求⾦額 
            </td>
            <td style="text-align: right;background-color:#a822a3;color:white">
                {{ number_format($tot + $tot*$set->tax/100, 0, ',', '.') }}
            </td>
        </tr>
        <tr>
            <td>
                <ul style="margin-top: 0.1rem;margin-left:-1rem">
                    <li>{{ $set->bank }}</li>
                    <li>{{ $da->lpk->bankName }} - {{ $da->lpk->bankNumber }} ({{ $da->lpk->bankHolder }})</li>
                </ul>
            </td>   
        </tr>
    </table>

    <br>
    <table border="0" cellspacing="0" style="width: 100%">
        <tr>
            <td width="65%"></td>
            <td colspan="2" style="text-align: center">
                <img width="100px"
                    src="data:image/png;base64,{{ base64_encode(file_get_contents('storage/' . $da->lpk->stamp)) }}" />
                <br>
                {{ strtoupper($da->lpk->leader) }}
            </td>
        </tr>
    </table>
</body>

</html>