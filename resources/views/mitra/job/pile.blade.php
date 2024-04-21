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
            font-size: 12px;
            margin-left: 2cm;
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
            height: 1cm;
            z-index: -1;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
        }
    </style>
</head>

<body>
    <header>
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents('assets/invoices/top.png')) }}" width="100%"
            height="100%" />
    </header>
    <br><br>
    <table border="0" cellspacing="0" style="width: 100%">
        <tr>
            <td>
                <h1>求人票</h1>
            </td>
            <td style="text-align: center">
                <img width="60px" src="data:image/png;base64,{{ base64_encode(file_get_contents('logo.png')) }}" />
                <h3 style="margin-top: 0rem">PADANGBAI GROUP</h3>
            </td>
        </tr>
    </table>
    作成日付 2024年 ２⽉ １２⽇<br>
    送出し機関 SO NAME<br>
    平素よりお世話になっております。益々御清祥のこととお慶び申し上げます。下記の通り、書類を送付させて
    いただきますので、ご確認の程よろしくお願い致します。
    <br><br>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%">
        <tr>
            <td>
                監理団体
            </td>
            <td>
                {{$da->comp->agen->name}}
            </td>  
        </tr>
        <tr>
            <td>
                実習実施機関
            </td>
            <td>
                {{$da->comp->name}}
            </td>   
        </tr>
        <tr>
            <td>
                職種(業種) 
            </td>
            <td>
                {{$da->type}} ({{$da->residance}})
            </td>   
        </tr>
        <tr>
            <td>
                採用人数
            </td>
            <td>
                {{$da->kouta}}
            </td>   
        </tr>
        <tr>
            <td>
                性別
            </td>
            <td>
                {{$da->gender}}
            </td>   
        </tr>
        <tr>
            <td>
                年齢
            </td>
            <td>
                {{$da->age}}
            </td>   
        </tr>
        <tr>
            <td>
                手取り額
            </td>
            <td>
                {{ number_format($da->salary,0,",",".") }}
            </td>   
        </tr>
        <tr>
            <td>
                手当込み
            </td>
            <td>
                {{ number_format($da->allowance,0,",",".") }}
            </td>   
        </tr>
        <tr>
            <td>
                備考
            </td>
            <td>
                {{$da->note}}
            </td>   
        </tr>
    </table>
    <footer>
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents('assets/invoices/bot.png')) }}"
            width="100%" height="100%" />
    </footer>
</body>

</html>
