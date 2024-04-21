<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <title>{{$data}}</title>
    <style>
        @page {
            margin: 1cm 3cm 0cm 3cm;
        }

        body {
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 12.5px;
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
    </style>
</head>

<body>
    <p style="text-align: center">協定書付属覚書</p>
    インドネシア国：{{ strtoupper($mou->mitras->name) }}（以下「送り出し機関」という）と日本<br>
    国： {{ strtoupper($mou->agen->name) }}（以下「監理団体」という）は両者の協議に従<br>
    い、外国人技能実習事業に関する協定書の付属覚書として以下の内容を確認する。
    <br><br>
    第1条　送出し管理費の取扱い
    <ol>
        <li>
            協定書の第27条第4項について、送出し管理費の取扱いについては、インドネ<br>
            シア国送出機関の日本にある関連口座を経由し、最終的に現地送り出し機関の口<br>
            座へ全額送金することとする。
        </li>
        <li>
            監理団体は管理費を下記の関連口座に振り込み、送出し管理費は、関連口座から<br>
            現地法人の口座へ振り込まれるものとする。
        </li>
    </ol>

    【監理団体】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                銀行口座
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankNumber) }}
            </td>
        </tr>
        <tr>
            <td>
                口座名義
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankHolder) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行名
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankName) }}
            </td>
        </tr>
        <tr>
            <td>
                支店名
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankBranch) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行住所
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankAddress) }}
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : {{ strtoupper($mou->agen->swiftCode) }}
            </td>
        </tr>
    </table>

    <br>
    【関連口座】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                銀行口座
            </td>
            <td>
                : 3030951
            </td>
        </tr>
        <tr>
            <td>
                口座名義
            </td>
            <td>
                : 株式会社パダンバイ
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行名
            </td>
            <td>
                : HIROSHIMA BANK広島銀行
            </td>
        </tr>
        <tr>
            <td>
                支店名
            </td>
            <td>
                : OOKOU BRANCH大河支店
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行住所
            </td>
            <td>
                : 〒734-0036広島県広島市南区旭2-17-1
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : HIROJPJT
            </td>
        </tr>
    </table>

    <br>

    【監理団体】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                銀行口座
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankNumber) }}
            </td>
        </tr>
        <tr>
            <td>
                口座名義
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankHolder) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行名
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankName) }}
            </td>
        </tr>
        <tr>
            <td>
                支店名
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankBranch) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                銀行住所
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankAddress) }}
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : {{ strtoupper($mou->mitras->swiftCode) }}
            </td>
        </tr>
    </table>

    第2条　雑則
    <ol>
        <li>
            技能実習生事業に関する協定書およびその他の条件は有効である。
        </li>
        <li>
            本書はインドネシア語及び日本語により各３通作成し、署名するとともに、３者はそれぞれ各１通を保有する。
        </li>
    </ol>

    <div class="page-break"></div>
    送出し機関<br>
    {{ strtoupper($mou->mitras->name) }}
    <br>
    代表
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;署名<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>

    監理団体<br>
    {{ strtoupper($mou->agen->name) }}
    <br>
    代表
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;署名<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>

    関連者
    <br>
    株式会社パダンバイ
    <br>
    代表取締役イ・ワヤン・スラスナ
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;署名<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>
    <div style="word-spacing: 3rem;margin-left:3rem"> 年 月 日</div>
    <div class="page-break"></div>
    <p style="text-align: center;font-size:1rem;font-weight:bold">
        Perjanjian Terlampir
    </p>
    <p style="text-align: justify">
        Indonesia: {{ strtoupper($mou->mitras->name) }} (selanjutnya disebut "organisasi pengirim") dan Jepang:
        {{ strtoupper($mou->agen->name) }}
        (selanjutnya disebut "organisasi pengawas"), sesuai dengan pembahasan antara kedua belah pihak, telah
        melampirkan memorandum berikut kepada perjanjian bisnis pelatihan praktek kerja asing sebagai berikut:
    </p>

    Pasal 1 Penanganan Biaya Administrasi Pengiriman
    <ol>
        <li>
            Mengenai Pasal 27 Ayat 4, pengurusan biaya administrasi pengiriman ditangani sepenuhnya melalui rekening
            yang bersangkutan di Jepang dari organisasi pengirim di Indonesia, dan terakhir ke rekening organisasi
            pengirim.
        </li>
        <li>
            Organisasi pengawas akan mengirim biaya pengelolaan ke rekening terkait berikut, dan biaya pengelolaan
            pengiriman akan dikirim dari rekening terkait ke rekening perusahaan lokal.
        </li>
    </ol>

    【ASOSIASI PENGAWAS】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                No. Rekening
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankNumber) }}
            </td>
        </tr>
        <tr>
            <td>
                Nama Pengguna
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankHolder) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                Nama Bank
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankName) }}
            </td>
        </tr>
        <tr>
            <td>
                Kantor Cabang
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankBranch) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                Alamat
            </td>
            <td>
                : {{ strtoupper($mou->agen->bankAddress) }}
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : {{ strtoupper($mou->agen->swiftCode) }}
            </td>
        </tr>
    </table>
    <br>
    【REKENING PENANGGUNG JAWAB】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                No. Rekening
            </td>
            <td>
                : 3030951
            </td>
        </tr>
        <tr>
            <td>
                Nama Pengguna
            </td>
            <td>
                : PADANGBAI Co., Ltd
            </td>
        </tr>
        <tr>
            <td width="30%">
                Nama Bank
            </td>
            <td>
                : HIROSHIMA BANK
            </td>
        </tr>
        <tr>
            <td>
                Kantor Cabang
            </td>
            <td>
                : OOKOU BRANCH
            </td>
        </tr>
        <tr>
            <td width="30%">
                Alamat
            </td>
            <td>
                : 734-0036 Hiroshima-ken Hiroshima-shi Minami-ku Asahi 2-17-1
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : HIROJPJT
            </td>
        </tr>
    </table>

    <br>

    【ASOSIASI PENGIRIM】
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td width="30%">
                No. Rekekning
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankNumber) }}
            </td>
        </tr>
        <tr>
            <td>
                Nama Pengguna
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankHolder) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                Nama Bank
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankName) }}
            </td>
        </tr>
        <tr>
            <td>
                Kantor Cabang
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankBranch) }}
            </td>
        </tr>
        <tr>
            <td width="30%">
                Alamat
            </td>
            <td>
                : {{ strtoupper($mou->mitras->bankAddress) }}
            </td>
        </tr>
        <tr>
            <td>
                SWIFT
            </td>
            <td>
                : {{ strtoupper($mou->mitras->swiftCode) }}
            </td>
        </tr>
    </table>
    <div class="page-break"></div>
    Pasal 2 Lain-lain
    <ol>
        <li>Perjanjian dan ketentuan lain mengenai pelatihan praktek kerja adalah benar adanya.</li>
        <li>Dokumen ini harus dibuat dalam tiga salinan masing-masing dalam bahasa Indonesia dan Jepang, dan
            ditandatangani, dan masing-masing dari ketiga pihak menyimpan satu salinan.</li>
    </ol>

    ASOSIASI PENGIRIM<br>
    {{ strtoupper($mou->mitras->name) }}
    <br>
    Perwakilan
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanda Tangan<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>

    ASOSIASI PENGAWAS<br>
    {{ strtoupper($mou->agen->name) }}
    <br>
    Perwakilan
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanda Tangan<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>

    PENANGGUNG JAWAB
    <br>
    PADANGBAI CO., LTD
    <br>
    Perwakilan I Wayan Surasna
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanda Tangan<span
        style="border-bottom: 1px solid black; padding-left: 10rem">&nbsp;</span>
    <br><br>
    <div style="word-spacing: 3rem;margin-left:3rem">Tanggal     Bulan      Tahun </div>
</body>

</html>
