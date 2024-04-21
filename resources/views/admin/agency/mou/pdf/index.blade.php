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
    <p style="text-align: center">委託講習協定書</p>

    第一条 外国人技能実習事業に関する協定書（以下「協定書」という。）第３条に定める本邦外にお
    <div style="margin-left: 3rem">
        ける講習については、（以下「事前研修」という。）講習実施機関を<br>
        {{ strtoupper($mou->agen->name) }}
        とし、インドネシア共和国での講習実施機関として<br>
        {{ strtoupper($mou->mitras->name) }}
        に委託し、行うこととする。
    </div>
    <br>
    第二条 講習内容は「日本語（読み書き・文法・日常会話）」「日本での生活一般に関する知識（日本
    <div style="margin-left: 3rem">
        の歴史 文化・生活様式・職場のルール）」「日本での円滑な技能等の習得に資する知識（職場<br>
        規律・心構え・修得技能の目標、内容）」を科目とし、１カ月以上の期間を有し、かつ 176時<br>
        間以上の課程を有するものとする。各講習内容、講習時間については技能実習予定者ごとに<br>
        作成する「本邦外における講習・外部講習実施予定表」によるものとする。
    </div>
    <br>
    第三条 事前研修の講習テキスト等講習内容については {{ strtoupper($mou->agen->name) }}の計画に従い執り行うものとする。
    <br><br>
    第四条 事前研修の委託費については１人当たり15,000円とし一括で請求を行うものとする。
    <br><br>
    第五条 「監理団体は、毎月実習実施機関から送出し管理費を徴収し、3か月分を纏めて送出し機
    <div style="margin-left: 3rem">
        関へ送金する。送金手数料は送出し機関の負担とする。」
    </div>
    第六条 外国人技能実習事業に関する委託講習協定書の有効期間は協定書の終了日とする。
    <div style="margin-left: 3rem">
        以上に両者は合意し、外国人技能実習事業に関する委託講習協定書の正文として、日本語文及<br>
        びインドネシア語文により各二通を作成し、署名するとともに、両者はそれぞれ各一通を保<br>
        有する。
    </div>
    <br><br>
    <table border="0" cellspacing="0" style="width: 100%">
        <tr>
            <td align="center">
                （送出し機関）<br>
                インドネシア共和国<br>
                {{ strtoupper($mou->mitras->name) }}<br>
                代表者 {{ strtoupper($mou->mitras->leader) }}
            </td>
            <td align="center">（監理団体）<br>
                日本国<br>
                {{ strtoupper($mou->agen->name) }}<br>
                代表理事 {{ strtoupper($mou->agen->leader) }}
            </td>
        </tr>
    </table>

    <center>
        <p style="word-spacing:1rem"> 年 月 日</p>
    </center>
    <div class="page-break"></div>

    <p style="text-align: center;font-size:1rem;font-weight:bold">SURAT PERJANJIAN
        PENYELENGGARAAN PELATIHAN (PRA PEMBERANGKATAN)
    </p>
    Pasal 1
    <p style="text-align:justify">
        Surat Perjanjian yang berhubungan dengan Pelatihan Keterampilan Kerja orang asing yang selanjutnya disebut
        dengan Surat Perjanjian, yang ditetapkan dalam pasal 3 tentang Pelatihan Keterampilan di luar Negara Jepang yang
        disebut Pelatihan Pra Pemberangkatan. Pihak
        {{ strtoupper($mou->agen->name) }}.
        mengamanatkan Pelatihan Pra　Pemberangkatan kepada pihak
        {{ strtoupper($mou->mitras->name) }}.
    </p>
    Pasal 2
    <p style="text-align: justify">
        Materi pelatihan adalah Bahasa Jepang (membaca dan menulis, tata bahasa, percakapan sehari-hari), pengetahuan
        tentang kehidupan di Jepang (sejarah dan kebudayaan Jepang, cara hidup bermasyarakat, peraturan di tempat
        kerja), pengetahuan tentang penguasaan keterampilan di Jepang, sikap mental dan keterampilan dalam kerja) dalam
        waktu lebih dari satu bulan atau dalam hitungan lebih dari 176 jam mata pelajaran. Tentang waktu dan materi dari
        masing-masing akan dibuatkan oleh perencana pelatihan keterampilan (daftar perencanaan pelatihan yang
        diselenggarakan di luar negeri).
    </p>
    Pasal 3
    <p style="text-align: justify">
        Isi dari materi (buku panduan) Pelatihan Pra Pemberangkatan harus mengikuti Lembar Rencana Pelatihan dari
        {{ strtoupper($mou->agen->name) }}.
    </p>
    Pasal 4
    <p style="text-align: justify">
        Tentang biaya Pelatihan Pra Pemberangkatan adalah ¥ 15,000 per orang.
    </p>
    Pasal 5
    <p style="text-align: justify">
        Organisasi pengawas memungut biaya pengelolaan pengiriman dari organisasi pelaksana setiap bulan dan
        mengirimkannya kepada organisasi pengirim secara sekaligus selama tiga bulan, organisasi pengirim menanggung
        biaya pengiriman.”
    </p>
    Pasal 6
    <p style="text-align: justify">
        Jangka waktu berlakunya kontrak perjanjian pelatihan tentang usaha pelatihan praktek kerja bagi orang asing
        adalah tanggal berakhirnya perjanjian tersebut
    </p>
    <p style="text-align: justify">
        Kedua belah pihak telah menyetujui hal di atas, dan sebagai teks resmi perjanjian pelatihan konsinyasi mengenai
        bisnis pelatihan magang teknis asing, masing-masing dua salinan akan disiapkan dalam bahasa Jepang dan
        Indonesia, dan ditandatangani, dan masing-masing pihak akan menyimpan satu salinan.
    </p>
    <p style="text-align: justify">
        Kedua belah pihak sepakat dengan Surat Perjanjian ini, naskah perjanjian ini ditulis dalam
    </p>
    <div class="page-break"></div>
    <p style="text-align: justify">
        Bahasa Jepang dan Bahasa Indonesia masing-masing dua buah. Kedua belah pihak menandatangani perjanjian dan
        menerima naskah Surat Perjanjian ini masing-masing satu lembar.
    </p>
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
                Pengirim<br>
                INDONESIA<br>
                {{ strtoupper($mou->mitras->name) }}
                <br><br><br>
                Direktur<br>
                {{ strtoupper($mou->mitras->leader) }}
            </td>
            <td>Penerima<br>
                JEPANG<br>
                {{ strtoupper($mou->agen->name) }}
                <br><br><br>
                Direktur<br>
                {{ strtoupper($mou->agen->leader) }}
            </td>
        </tr>
    </table>  
    <center>
        <p style="word-spacing:3rem"> Tahun            Bulan            Tanggal</p>
    </center>
</body>

</html>
