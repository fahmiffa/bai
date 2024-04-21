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
            font-size: 14px;
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
    <p style="text-align: center">特定技能提携契約書</p>
    {{ strtoupper($mou->agen->name) }}（以下、「甲」という。）と、PT. LINTAS NEGERI
    MANDIRI（以下、「乙」という。） は、日本国への特定技能人材の送り出し、受入支
    援業務に関し、次のとおり業務提携契約（以下、「本契約」という。）を締結するもの
    とする。
    <br><br>
    （目的）<br>
    第 1 条　本契約は、甲が紹介する日本の受入企業が求める特定技能外国人（以下、「労働
    者」という。）をインドネシア共和国（以下、「インドネシア国」という。）から採用
    することにより、日本国とインドネシア国の相互発展を目的とし、甲及び乙が協力して
    推進することを目的とする。
    <br><br>
    （業務内容）<br>
    第２条 甲は、乙に対し、受入れを希望する事業者及びその求人情報を提供するものとす
    る。<br>
    2 乙は、甲が紹介した受入れを希望する事業者の求人情報に見合った能力や資格等を有
    するインドネシア国の労働者を紹介し、採用のための手続きを支援するものとする。
    <br><br>
    （甲の義務）
    <br>
    第４条　乙は、本契約の目的を遂行するため、以下の各号に掲げる業務を行うものとする。
    <ol>
        <li>労働者となる候補者への日本語教育及び必要な資格の取得支援を行うこと。</li>
        <li>甲から提供を受けた求人情報に対する人材の募集を行うこと。</li>
        <li>受入事業者が面接等のためインドネシア国へ渡航する場合、現地での対応等支援を行うこと。</li>
        <li>労働者の日本国への送出しを行うための各種書類を作成し、手続きを行うこと。</li>
        <li>労働者の日本国への送出しを行うための各種書類を作成し、手続きを行うこと。</li>
        <li>労働者が日本国へ出国する際、インドネシア国の空港までの送迎を行うこと</li>
        <li>労働者が日本国で就業している間、緊急時の対応が生じた場合、甲と協力しその解決を図ること。</li>
        <li>その他、特定技能関連法令に基づき受入事業者及び労働者の支援を行うこと。</li>
    </ol>
    （外国人労働者の要件）
    第５条　労働者となる者は、次に掲げるすべての要件を満たす者であるものとする。
    <ol>
        <li>技能実習2号を良好に修了又は在留資格特定技能を申請するために必要とされている要<br>件を満たしていること。</li>
        <li>日本国での就労について理解し、高い意欲を有していること。</li>
        <li>原則として、満１８歳以上であること。</li>
        <li>日本国での就労について必要な日本語及び技能試験を習得するための基礎的素養を有していること。</li>
    </ol>
    <div class="page-break"></div>
    （講習又は外部講習）
    第６条　入管法の規定に基づき外国人労働者が入国前に受講する講習は、関係法令に従い
    適正に実施されるものとする。
    ２講習又は外部講習は、それぞれ日本語、日本国での生活一般に関する知識及び日本国<br>での円滑な技能等の修得に資する知識について実施されるものとする
    （外国人労働者の遵守すべき事項の指導）
    第７条　甲は、労働者に対して、日本国滞在中に遵守すべき以下に掲げる事項の指導を行
    い、周知徹底を図るものとする。乙は、必要と認められる場合、甲の指導及び周知徹底に
    協力するものとする。
    <ol>
        <li>甲及び乙の指導に従い、誠実な姿勢で業務を全うすること</li>
        <li>留資格で認められた以外の収入や報酬を伴う活動を行わないこと。</li>
        <li>日本国での滞在期間中、自らが責任を持って旅券を保管し、外国人登録証明書を携帯すること。</li>
    </ol>
    （事故・犯罪・失踪に関する処置）<br>
    第８条　甲は、労働者に事故、犯罪又は失踪が発生した場合、乙に対し速やかにその事実
    を連絡するとともに、日本国の諸法令等に従い、適切に処理するものとする。


    （労働者の処遇）<br>
    第９条　労働者の処遇は、以下に掲げるとおりとする。
    <ol>
        <li>
            受入事業者は、雇用契約に基づき毎月一定期日に労働者に対して直接賃金の全
            額を支給する。ただし、日本国の法令の定めによる所得税、住民税等の税金、社会保険
            料及び労使協定等により賃金から控除される事項については、あらかじめ賃金から
            控除されて支給するものとする。
        </li>
        <li>
            所定労働時間は、休憩時間を除き、原則として1 週間について 40 時間、
            1 日について 8 時間を超えないものとする。ただし、労使協定を締結した場合、受
            入事業者は、その範囲内で時間外及び休日労働を行わせることができるものとし、そ
            の場合には割増賃金を支給するものとする。この場合、受入事業者は、労働者が長
            間労働とならないよう配慮するものとする。
        </li>
    </ol>
    （費用と支払い）<br>
    第１０条　甲は、乙が受入事業者の要請に基づき労働者を送り出した場合、乙に対し紹介
    手数料を支払うものとする。その金額については別途定めるものとする。
    2 紹介手数料の支払時期は、以下のとおりとし、甲は、当該金額を乙の指定する日本
    国の金融機関の口座に振り込むものとする。なお、支払日が金融機関の休業日にあた
    る場合、その前営業日までに振り込むものとし、振込手数料は甲の負担とするものと
    する。
    <ol>
        <li>労働者の査証が発給されたとき　紹介手数料の50％</li>
        <li>労働者が日本国に入国したとき　紹介手数料の50％</li>
    </ol>

    <div class="page-break"></div>
    （紹介手数料の返還）<br>
    第１１条　労働者が自己都合により早期に退職をする場合、乙は、甲に対し以下のとお
    り紹介手数料を返還するものとする。また、これ以外の早期退職があった場合につい
    ても、甲及び乙は、誠意ある協議を行い､善後策を講じるものとする。
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%;">
        <tr style="text-align: center;background-color:rgb(187, 184, 184)">
            <td>
                労働者の退職時期
            </td>
            <td>
                返還の金額
            </td>
        </tr>
        <tr>
            <td>入職の日から起算して３０日以内 紹介手数料の全額</td>
            <td>紹介手数料の全額</td>
        </tr>
        <tr>
            <td>入職の日から起算して３０日以内 紹介手数料の全額</td>
            <td>紹介手数料の７５％</td>
        </tr>
        <tr>
            <td>入職の日から起算して３０日以内 紹介手数料の全額</td>
            <td>紹介手数料の５０％</td>
        </tr>

    </table>
    ※上記退職時期と返金の関係については、各契約先と交渉の上決定とする<br><br>

    （損害賠償）<br>
    第１２条　乙が本契約の条項のいずれかに違反し、又は乙の責に帰すべき事由により、甲
    の業務運営に支障をもたらし、若しくは甲に損害を与えた場合、乙は、損害賠償の責を
    負うものとする。ただし、その範囲及び金額については、その都度甲乙協議の上、決定
    するものとする。
    <br><br>
    （機密条項）<br>
    第１３条　甲及び乙は、本契約に基づき知り得た双方の業務上の秘密及び個人情報、その
    他の秘密事項を本契約の遂行のためのみに使用するものとし、第三者に漏えいしてはな
    らないものとする。
    <br><br>
    （不可抗力による免責事項）<br>
    第１４条　天変地異、戦争、内乱、法令の改廃制定、公権力による命令処分、同盟罷業そ
    の他の労働争議、輸送機関の事故等の不可効力により甲乙双方の管理能力を超えた責務
    により、業務の遂行が不能と認められる事態が生じた場合、損害賠償の責は負わないも
    のとする。
    <div class="page-break"></div>
    （契約の解除）<br>
    第１５条　甲又は乙は、本契約を解除しようとする日から起算して３か月前までに書面に
    て相手方に通知をすることにより解除することができるものとする。
    ２甲又は乙は、相手方が次の各号に該当すると認められた場合、何らの通知又は催告を
    することなく、本契約の全部又は一部を解除することができるものとする。
    <ol>
        <li>
            故意又は重大な過失により、相手方に著しい損害を与えたとき。
        </li>
        <li>正当な理由なく本契約を履行しない、又は履行する見込みがないと認められるとき。</li>
        <li>第１３条業の規定に反し、秘密事項を第三者に漏えいしたとき。</li>
        <li>破産、民事再生、会社更生、特別清算等の申し立てがなされ、又は不渡り処分等重大な信用<br>不安が発生したとき。</li>
        <li>前各号に掲げる場合のほか、本契約に違反したとき。</li>
    </ol>
    （契約期間）<br>
    第１６条　本契約の契約期間は、契約締結日から３年間とする。但し、契約期間終了の２
    か月前までに甲乙いずれかより書面にて契約終了の申し出がない限り、本契約は、同一
    内容にて１年間更新し、以下同様とするものとする。労働者が特定技能１号に該当する
    場合、契約期間は、最大５年間とする。
    <br><br>
    （紛争の処理）<br>
    第１７条 本契約の履行にあたり紛争が生じた場合、甲及び乙は、本契約の趣旨及び日本
    国の諸法令を尊重し、かつ友好関係を損なわないよう配慮しつつ、双方の協議により解
    決するよう努めるものとする。やむを得ず解決に至らなかった場合、日本の関係省庁又
    は甲の所在地を管轄する裁判所による判断に従うものとする。
    <br><br>
    （別途協議）<br>
    第１８条　本契約に定めのない事項若しくは本契約の解釈に疑義が生じた場合、又は契約
    期間中、政府の法令により契約内容に変更の必要が生じた場合、甲及び乙は、別途協議
    して決定するものとする。
    <br><br>
    （保証金等の徴収の禁止）<br>
    第１９条　甲又は乙は、労働者又はその配偶者、直系若しくは同居の親族その他労働者と
    社会生活において密接な関係を有する者（以下、「労働者等」という。）から本契約の
    行に関連して、保証金を徴収してはならないものとする。
    ２甲又は乙は、労働者等から当該労働者が日本国において従事する労働に関連して、名
    目のいかんを問わず、金銭その他の財産を管理し、かつ当該労働が終了するまで管理す
    ることを予定してはならないものとする。
    ３甲又は乙は、労働者等との間で、労働契約の不履行に係る違約金を定める契約その他不
    当に金銭等の財産の移転を予定する契約を締結し、かつ当該労働が修了するまで締結する
    ことを予定してはならないものとする。

    <br><br>
    （優先適用）<br>
    第２０条　本契約は、日本語により締結するものとする。本契約書に添付されている他の
    言語の翻訳は、参考のためのものであり、矛盾が生じた場合、日本語版と他の言語版と
    の間に矛盾や相違があるときは、日本語版が優先される。
    甲及び乙は、以上のとおり合意し、その証として本契約書を２通作成し、それぞれ記
    名押印のうえ各１通を保有する。
    <br>
    <div style="word-spacing: 3rem;margin-left:1rem"> 年 月 日</div>
    （甲）：{{ strtoupper($mou->agen->name) }}<br>
    代表者：代表理事　{{ strtoupper($mou->agen->leader) }} 印<br><br><br>
    （乙）：PT.LINTAS NEGERI MANDIRI<br>
    代表者：I WAYAN SURASNA 印
    <div class="page-break"></div>
    特記事項
    <ol>
        <li>本契約第１０条第１項に規定する紹介手数料については、以下のとおりとする。<br>
            労働者１人につき１５万円<br>
            但し、特段の事情がある場合、案件ごとに甲乙協議の上決定するものとする。
        </li>
        <li>
            本契約第１０条第２項に規定する乙の指定する金融機関口座は、以下のとおりとする。
        </li>
    </ol>
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
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
    <div style="word-spacing: 3rem;margin-left:1rem"> 年 月 日</div>
    （甲）：{{ strtoupper($mou->agen->name) }}<br>
    代表者：代表理事　{{ strtoupper($mou->agen->leader) }} 印<br><br><br>
    （乙）：PT.LINTAS NEGERI MANDIRI<br>
    代表者：I WAYAN SURASNA 印
    <div class="page-break"></div>
    <p style="text-align: center;font-size:1rem;font-weight:bold">
        PERJANJIAN KERJA SAMA
    </p>

    <p style="text-align: justify">
        {{ strtoupper($mou->agen->name) }} (selanjutnya disebut Pihak Pertama), dan PT. LINTAS NEGERI MANDIRI
        (selanjutnya disebut
        Pihak Kedua), melakukan kerja sama dalam bidang pengiriman kandidat “Pekerja Berketerampilan Khusus” ke Jepang
        (selanjutnya disebut Kontrak KerjaSama)
    </p>
    Pasal 1 (Tujuan)
    <p style="text-align: justify">
        Kontrak kerja sama ini bertujuan untuk memajukan pembangunan bersama antara Jepang dan Indonesia dalam
        perekrutan “Pekerja Berketerampilan khusus” (selanjutnya disebut Pekerja) yang dibutuhkan oleh Perusahaan Jepang
        dan diperkenalkan oleh Pihak Pertama dari warga negara Republik Indonesia (selanjutnya disebut Indonesia) untuk
        memajukan pembangunan bersama antara kedua belah pihak.
    </p>

    Pasal 2 (Lingkup kerja sama)

    <p style="text-align: justify">
        Kontrak kerja sama ini bertujuan untuk memajukan pembangunan bersama antara Jepang dan Indonesia dalam
        perekrutan “Pekerja Berketerampilan khusus” (selanjutnya disebut Pekerja) yang dibutuhkan oleh Perusahaan Jepang
        dan diperkenalkan oleh Pihak Pertama dari warga negara Republik Indonesia (selanjutnya disebut Indonesia) untuk
        memajukan pembangunan bersama antara kedua belah pihak.
    </p>
    Pasal 3 (Kewajiban Pihak Pertama)
    <ol>
        <li>Pihak Pertama akan memberikan Pihak Kedua informasi job pekerjaan dari perusahaan penerima terlebih dahulu.
        </li>
        <li> Pihak Pertama menjelaskan kepada Pihak Kedua kondisi kerja yang diberikan oleh perusahaan penerima kepada
            para
            pekerja.</li>
        <li>
            Pihak Pertama akan membangun kerja sama yang efektif dengan Perusahaan Jepang, memperkenalkan “Pekerja
            Berketerampilan Khusus” dan membuat kontrak dukungan.
        </li>
        <li>
            Pihak Pertama mengajukan dan menginstruksikan kebijakan Pendidikan tenaga kerja kepada Pihak Kedua sesuai
            dengan
            permintaan perusahaan penerima.
        </li>
        <li>
            Jika ada permintaan dari perusahaan penerima, Pihak Pertama akan menyesuaikan jadwal kunjungan ke negara
            Indonesia dan jadwal wawancara.
        </li>
        <li>
            Untuk membangun hubungan yang baik dengan perusahaan penerima, Pihak Pertama akan mengadakan wawancara
            bulanan
            dengan Pekerja dan menangani keadaan darurat.
        </li>
        <li>
            Ketika Pekerja memasuki Jepang, Pihak Pertama akan menjemput dari bandara (di Jepang) dan mengantarkan ke
            perusahaan atau tempat tinggal.
        </li>
        <li>
            Pihak Pertama akan mensuport perusahaan penerima dan Pekerja berdasarkan hukum “Pekerja Berketerampilan
            Khusus”.
        </li>
    </ol>
    Pasal 4 (Kewajiban Pihak Kedua)
    <ol>
        <li>
            Memberikan pendidikan bahasa Jepang pada kandidat sesuai dengan kualifikasi yang dibutuhkan.
        </li>
        <li>
            Melakukan rekrutmen kandidat berdasarkan job yang diperoleh oleh Pihak Pertama.
        </li>
        <li>
            Jika perlu melakukan kontrak dengan Perusahaan Penerima, Pihak Kedua bertanggung jawab atas akomodasi di
            Indonesia
        </li>
        <li>
            Menyiapkan dokumen terkait pengiriman tenaga kerja
        </li>
        <li>
            Memproses dan mengarahkan pengurusan dokumen ke Kedutaan Jepang di Indonesia (merubah COE ke visa, dan
            lainnya).
        </li>
        <li>
            Mengantar ke bandara di Indonesia saat akan berangkat ke Jepang.
        </li>
        <li>
            Jika Pekerja membutuhkan tanggapan darurat saat dia bekerja, Pihak Kedua akan bekerjasama dengan Pihak
            Pertama untuk mebuat keputusan.
        </li>
        <li>
            Pihak Kedua akan mensuport perusahaan penerima dan pekerja berdasarkan hukum “Pekerja Berketerampilan
            Khusus”.
        </li>
    </ol>
    Pasal 5 (Persyaratan Bagi Pekerja Asing)<br>
    Seseorang yang ingin menjadi Pekerja asing, harus memenuhi persyaratan sebagai berikut:
    <ol>
        <li>
            Menyelesaikan program Technical Intern Training 2 dengan baik, atau memenuhi syarat untuk mendaftar sebagai
            pekerja berketerampilan khusus.
        </li>
        <li>
            Memahami dan memiliki motivasi yang tinggi untuk bekerja di Jepang.
        </li>
        <li>
            Berusia minimal 18 tahun.
        </li>
        <li>
            Memiliki pengetahuan dasar Bahasa Jepang yang diperlukan untuk bekerja di Jepang.
        </li>
    </ol>

    Pasal 6 (Pelatihan atau Pelatihan Eksternal)
    <ol>
        <li>
            Berdasarkan ketentuan Pengendalian dan Perlindungan Imigrasi, pelatihan yang diikuti oleh Pekerja asing
            sebelum memasuki Jepang harus dilakukan dengan benar sesuai hukum dan peraturan yang sesuai
        </li>
        <li>
            Pelatihan yang dilakukan meliputi Bahasa Jepang, pengetahuan tentang kehidupan di Jepang secara umum, dan
            pengetahuan yang dibutuhkan untuk memperoleh keterampilan di Jepang
        </li>
    </ol>
    Pasal 7 (Panduan Hal yang Harus Diperhatikan oleh Pekerja Asing)

    <p style="text-align: justify">
        Pihak Pertama memastikan Pekerja asing mendapatkan informasi yang harus diperhatikan selama berada di Jepang.
        Selain itu Pihak Pertama dan Pihak Kedua bekerja sama untuk memastikan Pekerja asing mematuhi hal-hal yang harus
        diperhatikan selama di Jepang.
    </p>

    <ol>
        <li>
            Mematuhi arahan Pihak Kedua dan menyelesaikan pekerjaan dengan baik.
        </li>
        <li>
            Tidak terlibat dalam kegiatan yang berkaitan dengan pendapatan atau remunerasi selain yang disetujui oleh
            status ijin tinggal.
        </li>
        <li>
            Selama tinggal di Jepang, Pekerja wajib menyimpan paspor dan kartu registrasi orang asing.
        </li>
    </ol>
    Pasal 8 (Penanganan untuk Kecelakaan, Kejahatan, dan Kehilangan)
    <p style="text-align: justify">
        Jika terjadi kecelakaaan, kejahatan, atau kehilangan yang terkait dengan Pekerja asing, Pihak Pertama segera
        memberi informasi pada Pihak Kedua dan memberi penanganan yang tepat melalui koordinasi dengan kedua pihak
        sesuai dengan hukum dan peraturan di Jepang.
    </p>
    Pasal 9 (Ketentuan bagi Pekerja Asing)<br>
    Ketentuan bagi Pekerja asing adalah sebagai berikut:
    <ol>
        <li>
            Berdasarkan kontrak kerja dengan Pihak Kedua atau End User, gaji penuh akan dibayarkan penuh pada Pekerja
            asing secara langsung setiap bulan pada tanggal yang sudah ditentukan. Namun, terdapat hukum dan peraturan
            (terdapat pemotongan pajak, asuransi sosial, dan lain- lain. Apabila Pekerja dan management memiliki
            kesepakatan pemotongan gaji, maka pemotongan dapat dilakukan dalam perjanjian tersebur. Jumlah potongan
            tidak akan melebihi biaya sebenarnya)
        </li>
        <li>
            Jam kerja yang ditentukan tidak lebih dari 40 jam/minggu dan 8 jam/hari, tidak termasuk istirahat. Namun,
            jika terdapat perjanjian antara Pekerja dan management, lembur/ bekerja pada hari libur dapat dilakukan
            dalam kisaran waktu tersebut, dan dalam hal ini akan
            dibayarkan upah tambahan. Jika terdapat lembur, bekerja saat hari libur, atau shift malam,
            End User akan mempertimbangkan agar Pekerja tidak memiliki jam kerja yang panjang.
        </li>
    </ol>
    Pasal 10 (Biaya administrasi)<br>
    ①. Pekerja Kerketerampilan Khusus
    <ol>
        <li>
            Jika Pihak Kedua mengirimkan Pekerja Berketerampilan Khusus pada Perusahaan Penerima yang diperkenalkan oleh
            Pihak Pertama, Pihak Pertama membayar sejumlah biaya yang telah disepakati kepada Pihak Kedua sebagai biaya
            administrasi. Keterangan lebih lengkap dimuat pada halaman terpisah
        </li>
        <li>
            Handling fee dibayarkan 50% saat visa dikeluarkan, dan sisanya dibayarkan pada rekening yang ditentukan
            ketika sudah masuk ke Jepang. Biaya administrasi akan dibayarkan pada rekening yang telah ditentukan pada
            bulan berikutnya setelah Pekerja mulai bekerja. Biaya administrasi dibayarkan pada Pihak Kedua selama
            Pekerja dalam masa kontrak.
        </li>
    </ol>
    Pasal 11 (Pengembalian dana handling fee)
    <p style="text-align: justify">
        Apabila Perusahaan Penenrima mengalami kendala yang tidak terduga karena niat Pekerja yang tidak terduga, yang
        berbeda dari rencana “Pekerja Berketerampilan Khusus” yang telah disepakati, maka biaya yang dibayarkan Pihak
        Pertama kepada Pihak Kedua akan dikembalikan sesuai dengan masa yang telah ditentukan. Jika situasinya berbeda,
        Pihak Pertama akan mendiskusikanya dengan Pihak Kedua dangan itikad baik dan menyelesaikanya.
    </p>

    <table border="1" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
                Periode Pengunduran diri Pekerja
            </td>
            <td>
                Pengembalian dana
            </td>
        </tr>
        <tr>
            <td>
                30 hari sejak bekerja
            </td>
            <td>
                Handling fee 100%
            </td>
        </tr>
        <tr>
            <td>
                90 hari sejak bekerja
            </td>
            <td>
                Handling fee 50%
            </td>
        </tr>
    </table>

    <p style="text-align: justify">
        *hal yang berkaitan dengan masa pengunduran diri dan pengembalian dana, didiskusikan dan diputuskan oleh kedua
        belah pihak
    </p>
    Pasal 12 (Kompensasi kerugian)
    <p style="text-align: justify">
        Apabila Pihak Kedua melakukan pelanggaran terhadap salah satu ketentuan dalam kontrak ini, atau karena
        pertanggung jawaban Pihak Kedua, sehingga mengganggu jalannya pekerjaan atau menyebabkan kerugian terhadap Pihak
        Pertama, maka Pihak Kedua akan bertanggung jawab atas kerugian yang ditimbulkan. Ketentuan mengenai pelanggaran
        dan kerugian tersebut diputuskan oleh Pihak Pertama dan Pihak Kedua.
    </p>
    Pasal 13 (Kerahasiaan)
    <p style="text-align: justify">
        Menjaga kerahasiaan pekerjaan, informasi pribadi, dan rahasia kedua belah pihak yang terdapat dalam kontrak
        kerja sama ini.
    </p>

    Pasal 14 (Pembatalan karena Force Majeure)
    <p style="text-align: justify">
        Hal yang disebabkan oleh bencana alam, perang, konflik internal, amandemen undang-undang dan peraturan,
        disposisi pemerintahan oleh otoritas publik, perselisihan aliansi, perselisihan perburuhan lainnya, kecelakaan
        transportasi, dan hal lain yang terjadi diluar kendali kedua belah pihak, maka para pihak tidak bertanggung
        jawab atas kerugian tersebut
    </p>


    Pasal 15 (Pembatalan kontrak)
    <p style="text-align: justify">
        Jika Pihak Kedua melakukan hal berikut, maka Pihak Pertama berhak membatalkan seluruh atau Sebagian dari kontrak
        ini tanpa pemberitahuan apapun.
    </p>
    <ol>
        <li>
            Pihak Kedua mengakibatkan kerugian yang signifikan pada Pihak Pertama atas kemauan atau kelalaian Pihak
            Kedua.
        </li>
        <li>
            Pihak Kedua tidak melaksanakan atau tidak mampu memenuhi kontrak tanpa alasan yang dapat dibenarkan.
        </li>
        <li>
            Pihak Kedua membocorkan rahasia Pihak Pertama yang terdapat dalam kontrak ini.
        </li>
        <li>
            Pihak Kedua mengalami bangkrut, rehabilitasi sipil, perubahan organisai perusahaan, likuidasi khusus, atau
            hilangnya kepercayaan terhadap Pihak Kedua karena pencemaran
            nama baik
        </li>
        <li>
            Pihak Kedua melakukan pelanggaran lain, selain yang disebutkan sebelumnya.
        </li>
    </ol>
    Pasal 16 (Periode kontrak)

    <p style="text-align: justify">
        Periode kontrak ini berlaku tiga tahun sejak tanggal kesepakatan. Tetapi, jika dua bulan sebelum masa kontrak
        berakhir, Pihak Pertama dan Pihak Kedua tidak merubah isi atau mengakhiri kontrak, maka akan diperpanjang selama
        satu tahun tanpa perubahan isi kontrak. (untuk tokuteiginou 1, periode kontrak awal adalah 3 tahun dan
        perpanjangan 2 tahun, sehingga maksimal 5 tahun). Apabila Pihak Pertama atau Pihak Kedua ingin mengakhiri
        kontrak dan melakukan konfirmasi secara tertulis, serta terjadi kesepakatan diantara kedua belah pihak, maka
        kontrak bisadiakhiri.
    </p>

    Pasal 17 (Penyelesaian Perselisihan)

    <p style="text-align: justify">
        Jika terjadi perselisihan dalam perjanjian penerimaan kandidat pekerja asing, Pihak Pertama dan Pihak Kedua
        melakukan negosiasi untuk menyelesaikan masalah dengan tetap menghormati tujuan perjanjian ini, hukum dan
        peraturan Jepang, serta tidak merusak hubungan persahabatan. Apabila perselisihan tidak dapat diselesaikan
        dengan negosiasi, maka kedua pihak akan mematuhikeputusan Kementerian dan lembaga terkait di Jepang atau
        pengadilan yang memiliki yurisdiksi atas Pihak Pertama.
    </p>


    Pasal 18 (Addendum)

    <p style="text-align: justify">
        Apabila ada hal-hal yang tidak ditetapkan dalam kontrak ini atau terjadi keraguan dalam penyelesaian kontrak,
        maka akan didiskusikan dan diputuskan lebih lanjut. Selain itu, apabila dalam periode kontrak terjadi perubahan
        karena peraturan pemerintah maka akan dilakukan pembahasan terpisah.
    </p>


    Pasal 19 (Larangan Pemungutan Uang Jaminan)

    <ol>
        <li>
            Pihak Pertama dan Pihak Kedua dilarang meminta uang jaminan dari keluarga atau kerabat yang tinggal bersama atau orang yang memiliki hubungan dekat dalam kehidupan sosial Pekerja terkait dengan program ke Jepang yang diikuti oleh Pekerja.
        </li>
        <li>
            Pihak Pertama dan Pihak Kedua dilarang merencanakan pengawasan terhadap uang dan aset lainnya milik Pekerja, dengan menyimpannya sampai berakhirnya kontrak Pekerja dengan alasan apapun terkait dengan program ke Jepang yang diikuti oleh Pekerja.
        </li>
        <li>
            Pihak Pertama dan Pihak Kedua dilarang mengikat perjanjian dengan Pekerja terkait dengan sanksi keuangan atau pemindahan uang dan aset lainnya apabila Pekerja melakukan pelanggaran dalam kontrak kerja, atau merencanakan pengikatan perjanjian tersebut hingga berakhirnya kontrak Pekerja
        </li>       
    </ol>

    Pasal 20 (Prioritas Penggunaan Dokumen)

    <p style="text-align: justify">
        Kontrak ini disetujui dalam Bahasa Jepang. Terjemahan dalam bahasa lain dilampirkan dalam kontrak ini sebagai
        referensi. Apabila ada kontradiksi antara dokumen dalam Bahasa Jepang dan dokumen dalam bahasa lainnya, maka
        dokumen dalam Bahasa Jepang akan diprioritaskan
    </p>

    <p style="text-align: justify">
        Berdasarkan kesepakatan yang tertulis di atas (pasal 1 sampai 20) dokumen kontrak ini dicetak sebanyak 2 lembar
        yang ditandatangani atau di stempel oleh Pihak Pertama dan Pihak Kedua. Kedua dokumen tersebut memiliki kekuatan
        hukum yang sama.
    </p>
    <div style="word-spacing: 3rem;margin-left:3rem">Tanggal     Bulan      Tahun </div>

    Pihak Pertama	： {{ strtoupper($mou->agen->name) }}<br>
    Perwakilan	：代表理事　{{ strtoupper($mou->agen->leader) }} 	印<br><br<br>
    Pihak Kedua	：PT. LINTAS NEGERI MANDIRI<br>
    Perwakilan	：I WAYAN SURASNA			印

    <div class="page-break"></div>
    <p style="text-align: center;font-size:1rem;font-weight:bold">
        Addendum
    </p>
    <i>(Handling Fee)</i><br>
    <p style="text-align: justify">
        Apabila Pihak Kedua mengirimkan Pekerja Berketerampilan Khusus kepada Perusahaan Penerima yang diperkenalkan oleh Pihak Pertama, maka Pihak Pertama membayar biaya
        Adminisrasi sejumlah 1 Pekerja JPY150.000 kepada Pihak Kedua. Jumlah pembayaran ini akan diputuskan setelah konsultasi antara Pihak Pertama dan Pihak Kedua.        
    </p>

    (Informasi Bank)
    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
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
            <td>
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
            <td>
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
    <br><br>
    <div style="word-spacing: 3rem;margin-left:3rem">Tanggal     Bulan      Tahun </div>
    <br><br>
    Pihak Pertama	： {{ strtoupper($mou->agen->name) }}<br>
    Perwakilan	：代表理事　{{ strtoupper($mou->agen->leader) }} 	印<br><br<br>
    Pihak Kedua	：PT. LINTAS NEGERI MANDIRI<br>
    Perwakilan	：I WAYAN SURASNA			印

</body>

</html>
