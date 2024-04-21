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
        li {
            text-align: justify;
        }
    </style>
</head>

<body>
    <p style="text-align: center">外国人技能実習事業に関する協定書</p>

    インドネシア共和国 {{ strtoupper($mou->mitras->alamat) }}、
    にある {{ strtoupper($mou->mitras->name) }}、
    登録番号 {{ strtoupper($mou->mitras->permit) }}、<br>
    TELP : {{ strtoupper($mou->mitras->leaderNumber) }}、
    E-MAIL : {{ $mou->mitras->email }}
    以下「送出し機関」という）
    と日本国〒 {{ strtoupper($mou->agen->address) }}
    にある {{ strtoupper($mou->agen->name) }}
    外国人技能実習機構許可番号許 {{ strtoupper($mou->agen->permit) }}、
    電話番号 {{ strtoupper($mou->agen->name) }}<br>
    E-MAIL： {{ $mou->agen->email }}（以下「監理団体」という）は、両国の諸法令に従い、
    送出し機関の送り出す技能実習生に対し、監理団体及び技能実習生を受け入れる企業等
    （以下「実習実施者」という）が実施する外国人技能実習事業（以下「技能実習事業」
    という）について、次のとおり協定を締結する。

    <br><br>
    第１章　総　則<br>
    （目的）<br>
    第１条この技能実習事業は、日本国とインドネシア共和国の諸法令に基づき、技能実習生に
    日本国の産業が有する技能、技術又は知識（以下「技能等」という）を修得させることによ
    り、インドネシア共和国に技能等の移転を図り、インドネシア共和国の産業の発展を担う人材
    育成に資するとともに、両国間の相互理解と友好親善の推進を図ることを目的とする。
    <br><br>
    第２章技能実習事業の基本的枠組み<br>
    （日本国における滞在期間）<br>
    第２条日本国における滞在期間は、出入国管理及び難民認定法（以下「入管法」という）が
    規定する在留資格「技能実習１号」と在留資格「技能実習２号」、「技能実習３号」による期
    間に区別して設定するものとする。
    ２「技能実習１号」に係る滞在期間は、技能実習生各人につき１年を超えない期間とする。
    ３「技能実習２号」に係る滞在期間は、技能実習生本人、技能実習生の所属機関、インドネ
    シア共和国の送出し機関、監理団体及び実習実施者が同意し、「技能実習２号」への在留資格
    変更申請を地方入国管理局に行い許可された場合、及びその後に「技能実習２号」に係る在留
    期間更新申請を地方入国管理局に行い許可された場合に限り、「技能実習１号」と「技能実習
    ２号」とを合わせて３年以内とすることができる。
    4「技能実習3号」に係る滞在期間は、技能実習生各人につき2年を超えない期間とする。ま
    た、「技能実習２号」が終了後、「技能実習３号」を開始するまでの間 又は「技能実習３号」
    開始後１年以内に、技能実習生は必ず１か月以上の一時帰国が必要である。
    <div class="page-break"></div>
    （講習及び本邦外における講習又は外部講習）<br>
    第３条入管法の規定に基づき技能実習生が入国当初に受講する講習は、監理団体が関係法令
    に従い適正に実施するものとする。
    2 講習の時間数は、「技能実習１号」に係る滞在期間の６分の１以上とする。ただし、監理
    団体が実施する本邦外（インドネシア共和国）における講習又はインドネシア共和国の公的機
    関若しくは教育機関が実施する外部講習が、次項の条件を充足する内容により、技能実習生の
    入国前６月以内に１月以上かつ１６０時間以上それぞれ実施された場合には、滞在期間の１２
    分の１以上とすることができる。
    3 本邦外（インドネシア共和国）における講習又は外部講習は、インドネシア共和国におい
    て、それぞれ日本語、日本国での生活一般に関する知識及び日本国での円滑な技能等の修得に
    資する知識について、座学（見学を含む）で実施されるものとする。

    <br><br>
    （技能実習）<br>
    第４条「技能実習１号」に係る技能実習は、技能実習生と実習実施者との雇用契約の下、監理
    団体が作成した技能実習計画に基づいて、講習終了後から適正に実施するものとする。
    2「技能実習２号」に係る技能実習は、「技能実習１号」と同一の実習実施者において、同
    一の技能等に関し、技能実習生と実習実施者との雇用契約の下、監理団体又は実習実施者が作
    成した技能実習計画に基づいて適正に実施するものとする。
    ３「技能実習３号」に係る技能実習は、「技能実習２号」と同一の技能等に関し、技能実習生
    と実習実施者との雇用契約の下、監理団体又は実習実施者が作成した技能実習計画に基づいて
    適正に実施するものとする.
    4技能実習は、監理団体の責任及び監理の下、監理団体と実習実施者が役割分担を明確にして行うものとする。
    <br><br>
    （技能実習指導員・生活指導員）<br>
    第５条　実習実施者は、技能実習生が修得しようとする技能等について、５年以上の経験を有
    する技能実習指導員を常勤職員として配置するとともに、技能実習生の生活を把握し、その相
    談・指導に当たる生活指導員を配置するものとする。
    2 監理団体は、実習実施者における技能実習指導員及び生活指導員がそれぞれ適切な指導を
    行うことができるよう、その育成に努めるものとする。
    <br><br>
    （技能実習生の要件）<br>
    第６条　技能実習生となる者は、次に掲げるすべての要件を満たさなければならない。
    <ol>
        <li>インドネシア共和国において、日本国で修得しようとする技能等に係る業務に現に従事し
            <br>
            ているか、又は従事した経験を有すること。
        </li>
        <li>
            日本国での技能実習を修了し帰国後に、日本国で修得した技能等を要する業務に従事する<br>
            ことが予定されていること。
        </li>
        <li>
            日本国での技能等の修得について、インドネシア共和国の国若しくは地方公共団体の機関<br>
            又はこれらに準ずる機関の推薦を受けていること。
        </li>
        <li>
            技能実習制度について理解し、技能等の修得に高い意欲を有すること。
        </li>
        <li>
            満１８歳以上であること。
        </li>
        <li>
            原則として、過去に日本国における研修又は技能実習の経験がないこと。
        </li>
        <li>
            技能実習に必要な日本語を習得するための基礎的素養を有すること。
        </li>
    </ol>
    第３章　職業紹介関係業務等<br>
    （送出し機関と監理団体の業務提携による職業紹介）<br>
    第７条　送出し機関と監理団体は、技能実習事業を円滑に進めるため、両国の諸法令に従い、
    両者が連携して、次条から第１２条までに定めるところにより、技能実習生となることを希望
    する者（以下「技能実習生候補者」という）の募集、技能実習生候補者（求職者）の選抜、技
    能実習生を受け入れようとする実習実施者（求人者）の確保、技能実習生候補者（求職者）及
    び実習実施者（求人者）の相談への対応並びに情報提供、技能実習生候補者（求職者）と実習
    実施者（求人者）のマッチングその他雇用契約の締結に至るまでの過程における職業紹介業務
    を、その役割及び義務に沿って的確に遂行するとともに、相互に必要な協力を行うものとす
    る。
    <br><br>
    （職業紹介における送出し機関及び監理団体の役割と義務）<br>
    第８条　送出し機関は、次の役割と義務を負う。
    <ol>
        <li>技能実習生候補者（求職者）の募集及び求職の申込みの受付
        </li>
        <li>
            第６条に定める要件に該当する技能実習生候補者（求職者）の選抜及び選抜された技能実<br>
            習生候補者（求職者）に係る求職者名簿の整理及び管理
        </li>
        <li>
            ２）の求職者名簿の監理団体への送付その他監理団体に対する情報の提供
        </li>
        <li>
            技能実習生候補者（求職者）に対する本協定書に基づく技能実習事業の詳細についての説<br>
            明及び相談への対応
        </li>
        <li>
            実習実施者（求人者）に関する情報、実習実施者（求人者）の提示する労働条件等の募集<br>
            条件について明示し、技能実習生候補者（求職者）が十分理解できるよう説明すること及<br>
            びこれら求人情報を管理すること。
        </li>
        <li>
            監理団体と協議、相談の上合意した方法による技能実習生候補者（求職者）と実習実施者<br>
            （求人者）のマッチングを図るための適切な措置を講ずること。
        </li>
        <li>
            技能実習生候補者（求職者）のマッチング結果の把握。
        </li>
        <li>
            技能実習生の名簿と住所、実習実施者の名前と住所、及び日本への入国と出国の報告のた<br>
            め、インドネシア共和国労働省及び在大阪インドネシア共和国総領事館へ報告書を提出す<br>
            ること。
        </li>
    </ol>
    <div class="page-break"></div>
    ２監理団体は、次の役割と義務を負う。
    <ol>
        <li>
            実習実施者（求人者）の募集及び求人の申込みの受付。
        </li>
        <li>
            実習実施者（求人者）の確認及び確保並びに求人者名簿の整理及び管理。
        </li>
        <li>
            ２）の求人者名簿の送出し機関への送付その他送出し機関への情報提供。
        </li>
        <li>
            実習実施者（求人者）に対する本協定書に基づく技能実習事業の詳細についての説明及び<br>
            相談への対応。
        </li>
        <li>
            技能実習生候補者（求職者）に係る求職者名簿の実習実施者（求人者）への提供並びに求<br>
            職者名簿の整理及び管理。
        </li>
        <li>
            送出し機関と協議、相談の上合意した方法による技能実習生候補者（求職者）と実習実施<br>
            者（求人者）のマッチングを図るための適切な措置を講ずること。
        </li>
        <li>
            実習実施者（求人者）の採用結果の把握。
        </li>
        <li>
            技能実習生の名簿と住所、実習実施者の名前と住所、及び日本への入国と出国の報告のた<br>
            め、在大阪インドネシア共和国総領事館へ報告書を提出すること。
        </li>
    </ol>
    <br>
    （送出し機関及び監理団体の支援）<br>
    第９条送出し機関及び監理団体は、実習実施者（求人者）と技能実習生候補者（求職者）と
    の間で雇用契約の締結に向けて円滑に合意がなされるために必要な支援について協議、相談の
    上、適切な措置を講ずる。
    <br><br>
    （求職者及び求人者の同意）<br>
    第１０条　送出し機関及び監理団体は、業務提携による職業紹介を行うことについて、予め対
    象となる技能実習生候補者（求職者）及び実習実施者（求人者）の同意を得なければならな
    い。
    <br><br>
    （秘密の厳守）<br>
    第１１条　送出し機関及び監理団体は、本章の規定により取得する個人情報については、業務
    提携による職業紹介においてのみ使用し、適正に管理するとともに、守秘義務を負う。

    <br><br>
    （職業紹介に係る費用の分担等）<br>
    第１２条　送出し機関と監理団体の業務提携による職業紹介を実施するに当たって必要となる
    経費（以下「職業紹介経費」という）については、両者は、本章の規定による役割及び義務を
    踏まえて協議の上、負担者及び負担割合を決定するものとする。
    ２前項の職業紹介経費は、第２３条の送出し管理費、第２４条の送出しに要する諸経費及び
    第２５条の受入監理費と明確に区分して別途経理するものとする。
    <div class="page-break"></div>
    ３第１項に基づき監理団体が負担することとされる費用については、技能実習生候補者（求
    職者）及び実習実施者（求人者）から、一切徴収してはならない。
    <br><br>
    （技能実習生の決定）<br>
    第１３条　技能実習生候補者（求職者）は、本章に定めるところによる職業紹介を経て、実習
    実施者（求人者）との間で雇用契約を締結し、日本国への入国手続きを終えることにより、技
    能実習生となるものとする。

    <br><br>
    第４章　技能実習生の処遇等<br>
    （技能実習生の処遇）<br>
    第１４条　講習期間中の処遇は、次のとおりとする。
    <ol>
        <li>
            入国当初における講習期間中は、平均的な日本人の生活水準を維持できる生活実費を講習<br>
            手当として、監理団体が毎月１回定期日に技能実習生本人に直接全額を支給する。この講<br>
            習手当の額は、１名あたり月額60,000円(食費25,000円を含む）とし、現金支給の場合に<br>
            は、技能実習生本人の受領印又は受領の署名を徴するものとする。なお、講習のために日<br>
            本国内の移動費用が生じた場合には、講習手当とは別に実費を支給する。
        </li>
        <li>講習期間中の宿泊施設については、監理団体が確保し、技能実習生に無償で貸与する。な<br>
            お、宿泊施設には、通常の生活に必要な設備等を備えるものとする。
        </li>
        <li>講習は、１週間あたり４０時間を超えないものとし、かつ、予め定めた講習時間外の時間<br>
            及び講習日以外の日には行わないものとする。
        </li>
        <li>
            監理団体は、技能実習生について、講習期間中は、国民健康保険に加入することとし、実<br>
            習期間中は外国人技能実習生総合保険など民間の傷害保険等に加入するなどし、講習期間<br>
            中の死亡、負傷、疾病等の場合における保障措置を講じるものとする。
        </li>
    </ol>

    ２技能実習期間（講習期間を除く。以下この項において同じ）中の処遇は、次のとおりとする。
    <ol>
        <li>
            講習終了後に、技能実習生は実習実施者との雇用契約の下、技能実習活動を行うが、当該<br>
            雇用契約は、日本国への入国手続きにおいて締結され、講習の終了後に効力が発生するも<br>
            のとする。なお、技能実習生に対する労働条件通知書の交付は、実習実施者が雇用契約書<br>
            を締結の際、本人に対してインドネシア語併記で行うものとする。
        </li>
        <li>実習実施者は、毎月、一定期日に技能実習生本人に対して直接賃金の全額を支払う。ただ<br>
            し、法令の定めがある税金、社会保険料などの控除を、また労使で賃金からの控除協定を<br>
            締結している場合、その範囲内での控除をすることができる。なお、同協定により控除す<br>
            る額は実費を超えないものとする。また、実習実施者は賃金支払いに際して、現金支給の<br>
            場合には、技能実習生本人に賃金支払明細書を交付の上、賃金台帳に技能実習生からの受<br>
            領印又は受領の署名を徴する。口座振込みの場合は、口座振込みに関する労使協定を締結<br>
            し、本人の同意書を取り賃金支払明細書の交付を行う。なお、技能実習期間中に日本国内<br>
            の移動費用が生じた場合には、実習実施者の規定により旅費等の手当を支給する。
        </li>
        <li>技能実習期間中の宿泊施設については、監理団体又は実習実施者において確保し、技能実<br>
            習生に対し有償又は無償で貸与するものとする。
        </li>
        <li>
            技能実習期間中における所定労働時間は、休憩時間を除き、原則として１週間について４<br>
            ０時間、１日について８時間を超えないものとする。ただし、労使協定を締結した場合、<br>
            その範囲内で時間外・休日労働を行わせることができるものとし、その場合には割増賃金<br>
            を支給する。なお、所定時間外労働、休日労働又は深夜労働を行わせる場合であっても、<br>
            実習実施者は、技能実習制度の趣旨を踏まえ、技能実習生が長時間労働とならないよう配<br>
            慮するとともに、技能実習生に対する指導が可能な体制を確保するものとする。
        </li>
    </ol>

    <br><br>
    （保証金等の徴収の禁止）<br>
    第１５条　送出し機関、監理団体又は実習実施者（以下、本条において「送出し機関等」とい
    う）は、技能実習生又はその配偶者、直系若しくは同居の親族その他技能実習生と社会生活に
    おいて密接な関係を有する者（以下、本条において「技能実習生等」という）から、当該技能
    実習生が日本国において従事する技能実習に関連して、保証金を徴収してはならない。
    ２送出し機関等は、技能実習生等から、当該技能実習生が日本国において従事する技能実習
    に関連して、名目のいかんを問わず、金銭その他の財産を管理し、かつ、当該技能実習が修了
    するまで管理することを予定してはならない。
    ３送出し機関等は、技能実習生等との間で、労働契約の不履行に係る違約金を定める契約そ
    の他の不当に金銭その他の財産の移転を予定する契約を締結してはならず、かつ、当該技能実
    習が修了するまで締結することを予定してはならない。
    <br><br>
    （技能実習の中止）<br>
    第１６条　次のいずれかに該当した場合には、技能実習生本人から事情を聴取した上、送出し
    機関、監理団体及び実習実施者が協議し、該当者の技能実習を中止し帰国させることができる。
    <ol>
        <li>
            第６条に違反した場合<br>
        </li>
        <li>第２０条の（４）に違反した場合<br>
        </li>
        <li>その他本人の責めに帰することができる事情により、技能実習の継続が不可能又は不適当<br>
            な場合
        </li>
    </ol>
    （技能実習生の一時帰国）<br>
    第１７条　技能実習生の「技能実習１号」又「技能実習２号」在留中の一時帰国は、監理団体
    及び実習実施者が相当と認め、かつ、みなし再入国許可手続により（又は、日本国の入国管理
    局から再入国許可を受けた場合に）、１４日以内の一時帰国を認めるものとする。
    なお、費用負担者については、一時帰国の事由を勘案し、技能実習生、送出し機
    体又は実習実施者が協議し決定するものとする。
    ２技能実習生は、「技能実習２号」が終了後、「技能実習３号」を開始するまでの間 又は
    「技能実習３号」開始後１年以内に、必ず１か月以上の一時帰国をしなければならない。一時
    帰国の往復旅費を監理団体及び実習実施者が負担する。
    <br><br>
    第５章　送出し機関、監理団体の役割、義務等<br>
    （送出し機関の役割と義務）<br>
    第１８条　送出し機関は、本協定書の各条で定めるもののほか、次の役割と義務を負う。<br>
    <ol>
        <li>
            技能実習事業に関する事務担当者又は連絡担当者の配置
        </li>
        <li>
            技能実習生の来日及び滞在に関する自国政府への法的諸手続の実施
        </li>
        <li>
            第３章に規定する技能実習生候補者の選抜
        </li>
        <li>
            事前健康診断（歯科診断を含む）の実施及び診断結果の監理団体への通知
        </li>
        <li>
            第３条第２項及び第３項による講習等の委託による実施又は支援、出発前のオリエンテー<br>
            ションの実施
        </li>
        <li>
            日本国での入国及び在留手続きに必要な書類の準備
        </li>
        <li>
            監理団体との連絡調整その他の技能実習事業の円滑な推進に必要な業務
        </li>
    </ol>
    （監理団体の役割と義務）<br>
    第１９条　監理団体は、本協定書の各条で定めるもののほか、次の役割と義務を負う。
    <ol>
        <li>
            技能実習事業に関する事務担当者又は連絡担当者の配置
        </li>
        <li>
            技能実習生の来日及び在留のための日本国政府に対する法的諸手続きの実施。ただし、在<br>
            留手続きについては、実習実施者が行うことを妨げない。
        </li>
        <li>
            技能実習生用の宿泊施設及び講習施設の確保。ただし、宿泊施設については、実習実施者<br>
            が確保する場合を含む。
        </li>
        <li>
            「技能実習１号」に係る適正な技能実習計画の策定
        </li>
        <li>
            技能実習計画に基づく実習実施者における適正な技能実習実施の監理・指導
        </li>
        <li>
            実習実施者に対する監理・指導（（５）に掲げるものを除く）
        </li>
        <li>
            技能実習生からの各種相談への適切な対応
        </li>
        <li>
            実習実施者の倒産等、技能実習生の責めに帰することができない事由により技能実習の継<br>
            続が困難となった場合における新たな実習先の確保（技能実習生が技能実習の継続を希望<br>
            するときに限る）
        </li>
        <li>
            送出し機関との連絡調整その他の技能実習事業の円滑な推進に必要な業務
        </li>
    </ol>

    （技能実習生の遵守すべき事項の指導）<br>
    第２０条　送出し機関は、技能実習生に対して、次に示す技能実習生が日本国滞在中に遵守す
    べき事項の周知徹底を図る。また、技能実習生の日本国滞在期間中これらの遵守事項の徹底を
    図るため、監理団体及び実習実施者と協力して、指導を行うものとる。
    <ol>
        <li>
            技能実習指導員及び生活指導員の指導に従い、誠実な姿勢で技能実習を全うすること。
        </li>
        <li>
            修得した技能等を帰国後復職した職場で有効に活用し、インドネシア共和国の産業の発展<br>
            に寄与すること。
        </li>
        <li>
            日本国滞在は単身で行い、同居を目的とした家族の呼び寄せは行わないこと
        </li>
        <li>
            在留資格で認められた以外の収入や報酬を伴う活動は行わないこと。
        </li>
        <li>
            日本国での滞在期間中は、自らが責任を持って、旅券については保管し、在留カードにつ<br>
            いては携帯すること。
        </li>
        <li>
            技能実習修了後は速やかにインドネシア共和国に帰国すること。
        </li>
    </ol>
    <br>
    （帰国後のフォローアップ）<br>
    第２１条　監理団体は、送出し機関と協力して、日本国で技能等を修得した技能実習生が帰国
    後に本国で当該技能等を活用しているかについてフォローアップ調査を行うものとする。
    ２送出し機関は、帰国した技能実習生が日本国で修得した技能等をインドネシア共和国で活
    用しているかの調査結果を取りまとめの上、監理団体又は実習実施者に報告するものとする。
    <br><br>
    （事故・犯罪・失踪に関する措置）<br>
    第２２条　技能実習生に関する事故・犯罪・失踪が発生した場合には、監理団体は送出し機関
    及び在大阪インドネシア共和国総領事館に速やかにその事実を連絡するとともに、日本国の諸
    法令等に従い、両者の協議により適切に対応するものとする。
    <br><br>
    第６章　費用負担等<br>
    （送出し管理費の内訳）<br>
    第２３条　技能実習事業の推進に関し、送出し機関側で要する費用（以下「送出し管理費」と
    いう。ただし、次条で規定する諸経費及び技能実習生候補者の選抜、決定等に係る職業紹介経
    費を除く）は次のとおりとする。
    <ol>
        <li>
            送出し機関が行う技能実習生候補者の派遣前の健康診断及び歯科診断の準備に要する費用<br>
            その他の当該診断の実施に附帯する費用
        </li>
        <li>
            日本語学習、日本国での生活指導等の事前講習等に要する費用及びこの期間中の休業補償費
        </li>
        <li>
            送出し国の企業又は監理団体との連絡・協議に要する費用
        </li>
        <li>
            送出し機関として、日本国への職員派遣等による技能実習生に対する相談、生活指導の補<br>
            助に要する費用（技能実習生が事故にあった場合の対策費用を含む）
        </li>
        <li>
            その他本事業推進のために送出し機関側で発生する費用
        </li>
    </ol>

    （送出しに要する諸経費）<br>
    第２４条　前条に規定する費用のほか、技能実習生の送出しに要する諸経費は、次のとおりとする。
    <ol>
        <li>
            健康診断費及び歯科診断費
        </li>
        <li>
            旅券及び査証申請手数料
        </li>
        <li>
            派遣前及び帰国後のインドネシア共和国内移動旅費
        </li>
        <li>
            その他技能実習生の送出しに関しインドネシア共和国内で発生する経費
        </li>
    </ol>

    （受入れ監理費の内訳）<br>
    第２５条　技能実習事業の推進に関し、監理団体側で監理に要する費用（以下「受入れ監理
    費」という）は、次のとおりとする。（ただし、技能実習生候補者の選抜、決定等に係る職業
    紹介経費は除く）
    <ol>
        <li>
            送出し機関との連絡・協議に要する費用
        </li>
        <li>
            実習実施者の選定に要する費用
        </li>
        <li>
            説明会開催等の受入れ準備に係る日本国内で要する費用
        </li>
        <li>
            第２６条に定める往復旅費
        </li>
        <li>
            講習期間中の事故等の場合における保障措置に係る費用
        </li>
        <li>
            講習の実施に要する費用
        </li>
        <li>
            実習実施者に対する監査及び訪問指導の実施に要する費用
        </li>
        <li>
            宿泊施設の確保に要する費用
        </li>
        <li>
            技能実習生からの相談に対応する措置に要する費用
        </li>
        <li>
            技能実習事業に係る打合せ及び状況視察等、送出し国訪問に要する旅費
        </li>
        <li>
            その他本事業推進のために監理団体側で発生する費用
        </li>
    </ol>
    （費用の負担）<br>
    第２６条　技能実習事業に要する費用のうち、第２３条の送出し管理費及び第２４条の送出し
    に要する諸経費については、相互に協議し、妥当な部分を送出し機関及び監理団体が、また、
    第２５条の受入れ監理費については、監理団体及び実習実施者側が負担するものとする。ただ
    し、技能実習生の技能実習のための来日と技能実習修了後の帰国 (予定される技能実習期間を満
    了せず途中帰国する場合の帰国を含む。又「技能実習２号」が終了後、「技能実習３号」を開
    始するまでの間 又は「技能実習３号」開始後の一時帰国を含む)に要するの旅費については、
    技能実習生がインドネシア共和国を離れる最後の地点から、技能実習修了後に帰国のためイン
    ドネシア共和国に入国する最初の地点までの往復旅費を、監理団体及び実習実施者側が負担す
    る。又、第3号技能実習のための来日と技能終了後の帰国旅費については監理団体及び実習実
    施者が負担する。
    <br><br>
    （送出し管理費等の取扱い）<br>
    第２７条　監理団体が、第２３条の送出し管理費及び第２４条の送出しに要する諸経費の一部
    を負担することとした場合には、双方で相当と認めた金額を送出し機関側に送金する。なお、
    この場合において、監理団体が負担する送出し管理費及び送出しに要する諸経費の内訳につい
    ては送出し機関から監理団体へ別途通知する。
    2技能実習期間中の送出し管理費は１名あたり月額5,000円とする。
    3監理団体は、実習実施者から毎月送出し管理費を徴収し、3か月に一度まとめて送出し機
    関に送金する。送金費用については、監理団体が保障する。
    ４送出し管理費の取扱いについては、専用口座を設置し、技能実習生に支給する講習手当、
    賃金とは明確に区別するとともに、講習手当及び賃金から徴収しないものとする。<br>

    ① 監理団体口座名義人名： {{ strtoupper($mou->agen->bankHolder) }} <br>
    銀行・支店名： {{ strtoupper($mou->agen->bankName) }}<br>
    口座種別：{{ strtoupper($mou->agen->bankBranch) }}<br>
    口座番号：{{ strtoupper($mou->agen->bankNumber) }}<br>
    ② 送出し機関口座名義人名： {{ strtoupper($mou->mitras->bankName) }}<br>
    銀行・支店名：{{ strtoupper($mou->mitras->bankName) }}<br>
    口座種別：{{ strtoupper($mou->mitras->bankBranch) }}<br>
    口座番号：{{ strtoupper($mou->mitras->bankNumber) }}<br>
    ③ 専用口座の名義、銀行、口座等の変更が生じた場合、監理団体または送出し機関がすみやか
    に書面で報告しなければならない。
    <br><br>
    第７章　雑　則<br>
    （技能実習生に係る覚書）<br>
    第２８条ここに記載のない事項について取り決めがある場合は、別に定める「技能実習に関す
    る協定書付属覚書」によるものとする。

    <br><br>
    （協定書の解釈等）<br>
    第２９条　本協定書の条項に解釈上の疑義が生じた場合又は本協定書に定めのない事項につい<br>
    ては、技能実習事業の目的に則り、両者の協議により決定するものとする。
    <br><br>
    （紛争の処理）<br>
    第３０条　技能実習事業に関し紛争が生じた場合には、技能実習事業の趣旨及び日本国の諸法
    令を尊重し、かつ、友好関係を損なわないように配慮しつつ、送出し機関と監理団体との協議
    により、解決するよう努力するものとする。なお、やむを得ない場合には、関係省庁又はイン
    ドネシア共和国{{ strtoupper($mou->mitras->alamat) }} にある地方裁判所、<br>
    又は日本国 {{ strtoupper($mou->agen->alamat) }} 県にある地方裁判所の判断に従うものとする。
    <br><br>
    （協定書の効力等）<br>
    第３１条　本協定書は、署名の日から発効する。ただし、日本国の関係省庁から、本協定の内
    容に抵触する条件又は本協定に定めのない事項に関し指導があった場合には、それに従うとと
    もに、監理団体は送出し機関に対し、速やかに当該内容を文書で通知する。以後、当該内容に
    ついては、本協定に優先して適用するものとする。
    <br><br>
    （協定書の終了）<br>
    第３２条　本協定は、次のいずれかにより終了するとともに、本協定書は効力を失うものとする。
    <ol>
        <li>
            本協定の対象となる技能実習事業が終了した場合（本協定書の終了日は、技能実習事業の<br>
            終了日とする）
        </li>
        <li>
            技能実習の途中で継続が不可能となり、技能実習生がインドネシア共和国へ帰国すること<br>
            となった場合（この場合には、文書をもって相手方に通知することとし、本協定書の終了<br>
            日は、文書の発信日とする）
        </li>
    </ol>
    以上に両者は合意し、協定書の正文として、日本語文及びインドネシア語文により各２通を作
    成し、署名するとともに、両者はそれぞれ各１通を保有する。

    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
                （送出し機関）
            </td>
            <td>
                （監理団体）
            </td>
        </tr>
        <tr>
            <td>
                {{ strtoupper($mou->mitras->name) }}
            </td>
            <td>
                {{ strtoupper($mou->agen->name) }}
            </td>
        </tr>
        <tr>
            <td>
                住所：インドネシア共和国
            </td>
            <td>
                （監理団体）
            </td>
        </tr>
        <tr>
            <td>
                {{ strtoupper($mou->mitras->alamat) }}
            </td>
            <td>
                {{ strtoupper($mou->agen->alamat) }}
            </td>
        </tr>
        <tr>
            <td>
                Tel : {{ strtoupper($mou->mitras->leaderNumber) }}<br>
                Email : {{ strtoupper($mou->mitras->email) }}<br>
                登録番号：{{ strtoupper($mou->mitras->permit) }}<br>
                署名<br>
                代表者　 {{ strtoupper($mou->mitras->leader) }}
            </td>
            <td>
                Tel : {{ $mou->agen->leaderNumber }}<br>
                Email : {{ $mou->agen->email }}<br>
                外国人技能実習機構許可番号: 　許{{ $mou->agen->permit }}<br>
                署名<br>
                代表理事 {{ strtoupper($mou->agen->leader) }}
            </td>
        </tr>
    </table>
    <br><br>
    <div style="text-align:center">インドネシア共和国、 年 月 日</div>
    <div class="page-break"></div>
    <p style="text-align: center;font-size:1rem;font-weight:bold">
        Surat Perjanjian Kerjasama ‘Program Pemagangan’ Orang Asing
    </p>
    <p style="text-align: justify">
        {{ strtoupper($mou->mitras->name) }} yang berada di
        {{ strtoupper($mou->mitras->alamat) }}.
        Izin BINALATTAS No. {{ strtoupper($mou->mitras->permit) }},
        Telp:{{ strtoupper($mou->mitras->leaderNumber) }},
        E-mail: {{ $mou->mitras->email }}
        (selanjutnya disebut Lembaga Pengirim)
        dan {{ strtoupper($mou->agen->name) }} yang
        berada di {{ strtoupper($mou->agen->alamat) }}. No. Registrasi Organisasi Pelatihan Praktek Keterampilan Asing
        (OTIT) {{ strtoupper($mou->agen->otit) }}
        Telp : {{ strtoupper($mou->agen->leaderNumber) }},
        Email : {{ $mou->agen->email }}
        (selanjutnya disebut Asosiasi Pengawas) sepakat untuk
        menandatangani perjanjian kesepahaman terkait ‘Program Pemagangan’ orang asing (selanjutnya disebut ‘Program
        Pemagangan’) tentang Pemagang yang dikirim oleh Lembaga Pengirim, dan pelaksanaannya oleh Asosiasi Pengawas dan
        Perusahaan dsb (selanjutnya disebut Lembaga Pelaksana) yang menerima Pemagang, mengikuti ketentuan perundangan
        kedua negara, sebagaimana tertulis di bawah ini.
    </p>
    <p style="text-align: center;font-weight:bold">
        Bab 1. Peraturan Umum
    </p>
    <strong>Pasal 1. Tujuan</strong>
    <p style="text-align: justify">
        ‘Program Pemagangan’ ini bertujuan untuk melaksanakan alih keterampilan dsb, dan pembinaan SDM yang
        berkontribusi dalam pengembangan industri di Indonesia, meningkatkan saling pengertian dan persahabatan kedua
        negara, dengan cara mengajarkan keterampilan, teknologi ataupun pengetahuan (selanjutnya disebut ‘keterampilan’
        dsb) yang dimiliki oleh industri Jepang kepada Pemagang, dengan mengacu pada perundangan kedua negara, Jepang
        dan Indonesia.</p>
    <p class="ql-align-center" style="text-align: center">
        <strong>
            Bab 2. Kerangka Program Pemagangan
        </strong>
    </p>
    <strong>
        Pasal 2. Jangka Waktu Tinggal di Jepang
    </strong>
    <ol>
        <li class="ql-align-justify" style="text-align: justify">
            Jangka waktu tinggal di Jepang dibedakan menurut jangka waktu dari izin tinggal: “Pemagangan No.1 /
            Pelatihan Teknik No.1”&nbsp;dan izin tinggal “Pemagangan No.2 / Pelatihan Teknik No.2”, izin tinggal
            “Pemagangan No.3 / Pelatihan Teknik No.3” yang ditetapkan menurut Undang-Undang Pengawasan Keimigrasian dan
            Pengungsian (selanjutnya disebut peraturan “Peraturan Keimigrasian”)
        </li>
        <li class="ql-align-justify" style="text-align: justify">
            &nbsp;Jangka waktu tinggal untuk “Pemagangan No 1 / Pelatihan Teknik No.1” adalah jangka waktu yang tidak
            melebihi 1 (satu) tahun untuk setiap Pemagang.
        </li>
        <li class="ql-align-justify" style="text-align: justify">
            Jangka waktu tinggal untuk “Pemagangan No 2 / Pelatihan Teknik No.2” apabila digabung dengan “Pemagangan
            No.1 / Pelatihan Teknik No.1”, maksimal menjadi 3 (tiga) tahun, dengan syarat; adanya persetujuan antara
            Pemagang itu sendiri, lembaga tempat Pemagang terdaftar, Lembaga Pengirim dari Indonesia, Asosiasi Pengawas
            serta Lembaga Pelaksana, dan mendapatkan izin dari kantor imigrasi daerah setelah mengajukan permohonan
            perubahan izin tinggal untuk “Pemagangan No.2 / Pelatihan Teknik No.2” atau permohonan perpanjangan izin
            tinggal setelah itu.
        </li>
        <li class="ql-align-justify" style="text-align: justify">
            &nbsp;Masa tinggal untuk “Pelatihan Magang No. 3” tidak boleh lebih dari dua tahun untuk setiap peserta
            magang teknis. Selain itu, setelah selesainya "Pelatihan Magang No. 2" hingga dimulainya "Pelatihan Magang
            No. 3", atau dalam waktu satu tahun setelah dimulainya "Pelatihan Magang No. 3", peserta magang teknis harus
            kembali rumah untuk jangka waktu satu bulan atau lebih.
        </li>
    </ol>

    <p>
    </p>
    <p>
        <strong>
            Pasal 3. Kursus, Kursus di Luar Negeri atau Kursus Eksternal
        </strong>
    </p>
    <ol>
        <li style="text-align: justify">
            Berdasarkan peraturan UU Keimigrasian, kursus yang diikuti oleh Pemagang pada awal tiba di Jepang
            dilaksanakan oleh Asosiasi Pengawas dengan mematuhi UU terkait.
        </li>
        <li style="text-align: justify">
            Total waktu dalam kursus adalah minimal 1/6 (satu per enam) dari jangka waktu tinggal “Pemagangan No.1 /
            Pelatihan Teknik No.1”.&nbsp;Kecuali kursus sudah dilaksanakan di luar Jepang (di Indonesia) oleh Asosiasi
            Pengawas, atau kursus eksternal yang dilaksanakan oleh lembaga pendidikan / instansi publik dari Indonesia,
            memenuhi persyaratan pada Pasal berikut dan telah dilaksanakan minimal 160 (seratus enam puluh) jam atau
            minimal sebulan dalam kurun waktu 6 (enam) bulan sebelum Pemagang tiba di Jepang, dalam hal ini, total waktu
            kursus diperbolehkan menjadi minimal 1/12 (satu per dua belas) dari jangka waktu tinggal di Jepang.
        </li>
        <li style="text-align: justify">
            Kursus di luar Jepang (di Indonesia) atau kursus eksternal di Indonesia harus dalam bentuk pelajaran di
            dalam kelas (termasuk peninjauan) yang meliputi; pengetahuan bahasa Jepang, wawasan umum mengenai kehidupan
            di Jepang, serta hal-hal yang diperlukan dalam memperlancar penguasaan keterampilan di Jepang.
        </li>
    </ol>
    <p>
    </p>
    <p>
        <strong>
            Pasal 4. Pemagangan
        </strong>
    </p>
    <ol>
        <li style="text-align: justify">
            Pemagangan yang terkait “Pemagangan No.1 / Pelatihan Teknik No.1” dilaksanakan secara layak setelah
            menyelesaikan kursus, sesuai dengan rencana Pemagangan yang dibuat oleh Asosiasi Pengawas, dengan
            berdasarkan kontrak kerja antara Pemagang dan Lembaga Pelaksana.
        </li>
        <li style="text-align: justify">
            Pemagangan terkait dengan “Pemagangan No 2 / Pelatihan Teknik No.2” dilaksanakan secara layak di Lembaga
            Pelaksana yang sama dan bidang keterampilan yang sama dengan “Pemagangan No.1 / Pelatihan Teknik No.1”,
            sesuai dengan rencana Pemagangan yang dibuat oleh Asosiasi Pengawas atau Lembaga Pelaksana, dengan
            berdasarkan kontrak kerja antara Pemagang dan Lembaga Pelaksana.
        </li>
        <li style="text-align: justify">
            Pelatihan Magang Teknis yang berkaitan dengan "Pelatihan Magang Teknis No. 3" adalah pelatihan magang teknis
            yang berkaitan dengan keterampilan yang sama, dll. dengan "Pelatihan Magang Teknis No. 2", dan dibuat oleh
            organisasi pengawas atau organisasi pelaksana berdasarkan kontrak kerja. antara peserta magang teknis dan
            organisasi pelaksana, hal ini harus dilaksanakan dengan tepat berdasarkan rencana.
        </li>
        <li style="text-align: justify">
            Pemagangan dilaksanakan di bawah tanggungjawab dan pengawasan oleh Asosiasi Pengawas, dengan pembagian tugas
            yang jelas antara Asosiasi Pengawas dan Lembaga Pelaksana.
        </li>
    </ol>
    <p>
    </p>
    <p>
        <strong>
            Pasal 5. Pembimbing Pemagangan dan Pembimbing Kehidupan
        </strong>
    </p>
    <ol>
        <li>
            Lembaga Pelaksana menempatkan pembimbing pemagangan sebagai staf tetap yang memiliki pengalaman minimal 5
            (lima) tahun di bidang keterampilan dsb yang akan dipelajari oleh Pemagang, dan menempatkan pembimbing
            kehidupan yang memberikan pengarahan mengenai kehidupan sehari-hari kepada Pemagang.
        </li>
        <li>
            Asosiasi Pengawas berupaya untuk membina pembimbing pemagangan dan pembimbing kehidupan agar mereka dapat
            memberikan bimbingan yang tepat di Lembaga Pelaksana Pemagang.
        </li>
    </ol>
    <p>
    </p>
    <p>
        <strong>
            Pasal 6. Persyaratan Pemagang
        </strong>
    </p>
    <p>
        Calon Pemagang harus memenuhi syarat-syarat sebagai berikut:
    </p>
    <ol>
        <li>
            Sedang bekerja atau memiliki pengalaman kerja di Indonesia pada bidang keterampilan yang akan dipelajari di
            Jepang.
        </li>
        <li>
            Setelah menyelesaikan Pemagangan di Jepang dan kembali ke Indonesia, mempunyai rencana untuk bekerja pada
            bidang yang memerlukan keterampilan dsb yang telah dipelajari di Jepang.
        </li>
        <li>
            Mendapat rekomendasi dari instansi pemerintah, instansi pemda, atau instansi yang berafiliasi dengan
            instansi instansi tsb di Indonesia, untuk mempelajari keterampilan dsb di Jepang.
        </li>
        <li>
            Memahami sistem ‘Program Pemagangan’ dan memiliki antusiasme yang tinggi untuk mempelajari keterampilan
            tersebut.
        </li>
        <li>
            Berusia lebih dari 18 (delapan belas) tahun.
        </li>
        <li>
            Pada prinsipnya, tidak pernah mengikuti pelatihan dan pemagangan di Jepang sebelumnya.
        </li>
        <li>
            Memiliki dasar-dasar pengetahuan untuk mempelajari bahasa Jepang yang diperlukan dalam pemagangan.
        </li>
    </ol>
    <p>
    </p>
    <p style="text-align: center">
        <strong>
            Bab 3. Mediator Bursa Kerja dan sebagainya
        </strong>
    </p>
    <p>
        <strong>
            Pasal 7. Mediator Bursa Kerja Melalui Kerjasama antara Lembaga Pengirim dan Asosiasi Pengawas.
        </strong>
    </p>
    <p style="text-align: justify">
        Lembaga Pengirim dan Asosiasi Pengawas yang beraliansi demi kelancaran pelaksanaan pemagangan dengan memenuhi
        perundang-undangan ke dua negara, melaksanakan kerjasama yang diperlukan dan menunaikan kewajiban serta peranan
        dalam usaha memperkenalkan bursa kerja ini, dari Pasal berikut hingga Pasal 12, dimulai dari rekrutmen
        orang-orang yang ingin menjadi Pemagang (selanjutnya disebut “Calon Pemagang”), seleksi calon Pemagang (pencari
        kerja), mempersiapkan Lembaga Pelaksana (pencari tenaga kerja), memberikan informasi dan konsultasi terhadap
        calon Pemagang (pencari kerja) dan Lembaga Pelaksana (pencari tenaga kerja),&nbsp;mempertemukan yang sesuai
        antara calon Pemagang (pencari kerja) dan Lembaga Pelaksana (pencari tenaga kerja), dan sebagainya sampai
        terjadi pengikatan kontrak kerja.&nbsp;
    </p>
    <strong>
        Pasal 8. Fungsi dan Kewajiban Lembaga Pengirim dan Asosiasi Pengawas sebagai Mediator Bursa Kerja.
    </strong>
    <ol>
        <li>Lembaga Pengirim mengemban fungsi dan kewajiban sebagai berikut:
            <ol>
                <li>Menerima permohonan lamaran kerja dan merekrut calon Pemagang (pencari kerja).</li>
                <li>Menyeleksi calon Pemagang (pencari kerja) yang memenuhi persyaratan Pasal 6 dan mengatur
                    manajemen daftar nama calon Pemagang (pencari kerja) yang telah diseleksi</li>
                <li>
                    Mengirimkan daftar nama pencari kerja pada butir no.(2) kepada Asosiasi Pengawas dan memberikan
                    informasi lainnya kepada Asosiasi Pengawas.
                </li>
                <li>
                    Memberikan penjelasan rinci mengenai ‘Program Pemagangan’ berdasarkan Surat Perjanjian ini, dan
                    memberikan layanan konsultasi kepada calon Pemagang (pencari kerja).
                </li>
                <li>
                    Memberikan informasi terkait dengan Lembaga Pelaksana (pencari tenaga kerja), dan persyaratan rekrut
                    seperti kondisi kerja dsb yang diminta oleh Lembaga Pelaksana (pencari tenaga kerja), kepada calon
                    Pemagang (pencari kerja) sampai dipahami betul, dan mengatur manajemen informasi pencarian tenaga
                    kerja ini.
                </li>
                <li>
                    Melakukan penanganan yang tepat agar dapat tercapai kecocokan antara calon Pemagang (pencari kerja)
                    dan Lembaga Pelaksana (pencari tenaga kerja) dengan metode yang disepakati atas dasar musyawarah dan
                    konsultasi dengan Asosiasi Pengawas.
                </li>
                <li>
                    Mencari tahu hasil kecocokan calon Pemagang (pencari kerja).
                </li>
                <li>
                    Menyampaikan laporan tertulis yang berisi data peserta pemagangan, lokasi kerja dan alamat tinggal
                    peserta pemagangan kepada Kementerian Ketenagakerjaan Indonesia dan Konsulat Jenderal Republik
                    Indonesia (KJRI) di Osaka.
                </li>
            </ol>
        </li>
        <li>Asosiasi Pengawas mengemban fungsi dan kewajiban sebagai berikut:
            <ol>
                <li>Merekrut Lembaga Pelaksana (pencari tenaga kerja) dan menerima permohonan pencarian tenaga kerja
                </li>
                <li>
                    Memastikan dan menginformasikan Lembaga Pelaksana (pencari tenaga kerja), serta mengatur manajemen
                    daftar nama pencari tenaga kerja.
                </li>
                <li>
                    Mengirimkan daftar pencari tenaga kerja pada butir no.2 kepada Lembaga Pengirim serta memberikan
                    informasi lain kepada Lembaga Pengirim.
                </li>
                <li>
                    Memberikan penjelasan rinci mengenai pemagangan berdasarkan Surat Perjanjian ini, dan memberikan
                    layanan konsultasi kepada Lembaga Pelaksana (pencari tenaga kerja)
                </li>
                <li>
                    Memberikan daftar nama pencari kerja terkait dengan calon Pemagang (pencari kerja) kepada Lembaga
                    Pelaksana (pencari tenaga kerja) dan mengatur manajemen daftar nama pencari kerja.
                </li>
                <li>Melakukan penanganan yang tepat agar dapat tercapai kecocokan antara calon Pemagang (pencari kerja)
                    dan Lembaga Pelaksana (pencari tenaga kerja) dengan metode yang disepakati atas dasar musyawarah dan
                    konsultasi dengan Lembaga Pengirim.</li>
                <li>Mengetahui hasil perekrutan oleh Lembaga Pelaksana (pencari tenaga kerja).</li>
                <li>Menyampaikan laporan tertulis yang berisi data peserta pemagangan, lokasi kerja dan alamat tinggal
                    peserta pemagangan kepada Konsulat Jenderal Republik Indonesia (KJRI) di Osaka.
                </li>
            </ol>
        </li>
    </ol>

    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 9. Dukungan Lembaga Pengirim dan Asosiasi Pengawas</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Lembaga Pengirim dan Asosiasi Pengawas melakukan penanganan yang tepat atas dasar
            musyawarah dan konsultasi mengenai dukungan yang diperlukan agar dapat terjadi kesepakatan dan pengikatan
            kontrak kerja secara lancar antara Lembaga Pelaksana (pencari tenaga kerja) dengan calon Pemagang (pencari
            kerja).</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 10. Persetujuan dari Pencari Kerja dan Pencari Tenaga
                Kerja</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Lembaga Pengirim dan Asosiasi Pengawas sebelumnya harus mendapatkan persetujuan dari
            calon Pemagang (pencari kerja) dan Lembaga Pelaksana (pencari tenaga kerja) terkait dengan kerjasama sebagai
            mediator bursa kerja ini.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 11. Menjaga Kerahasiaan</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Lembaga Pengirim dan Asosiasi Pengawas wajib menjaga kerahasiaan informasi pribadi
            yang didapatkan dari ketentuan dalam bab ini, mengatur manajemennya secara benar, dan hanya menggunakannya
            untuk keperluan sebagai mediator bursa kerja dalam kerjasama ini.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 12. Pembagian Tanggungan Biaya sebagai Mediator Bursa
                Kerja</strong></span>
    </p>
    <ol>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">Penanggungan biaya dan pembagian persentase tanggungan biaya yang diperlukan
                    dalam pelaksanaan kerjasama antara Lembaga Pengirim dan Asosiasi Pengawas sebagai mediator bursa
                    kerja (selanjutnya disebut “Biaya mediator bursa kerja”) ditentukan melalui musyawarah kedua pihak
                    berdasarkan fungsi dan kewajiban yang ditetapkan dalam bab ini.</span>
            </p>
        </li>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">‘Biaya mediator bursa kerja’ yang tercantum pada ayat sebelum ini,
                    diperhitungkan dalam akuntansi tersendiri dan secara jelas dibedakan dari ‘biaya pengawasan
                    pengiriman’ pada Pasal 23, ‘biaya lain yang diperlukan dalam pengiriman’ pada Pasal 24, serta ‘Biaya
                    Manajemen untuk Penerimaan’ pada Pasal 25.</span>
            </p>
        </li>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">Biaya yang menjadi tanggungan Asosiasi Pengawas berdasarkan ayat 1 tidak
                    boleh ditagih kepada calon Pemagang (pencari kerja) dan Lembaga Pelaksana (pencari tenaga
                    kerja).&nbsp;</span>
            </p>
        </li>
    </ol>

    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 13. Penentuan Pemagang</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Calon Pemagang (pencari kerja) akan resmi menjadi Pemagang setelah melalui tahap
            perkenalan bursa kerja yang ditetapkan dalam bab ini, dan mengikat kontrak dengan Lembaga Pelaksana (pencari
            tenaga kerja), serta menyelesaikan proses keimigrasian untuk masuk ke Jepang.</span>
    </p>
    <p style="text-align:center;">
        <span style="color:black;"><strong>Bab 4. Fasilitas dsb Untuk Pemagang</strong></span>
    </p>
    <strong>
        Pasal 14. Fasilitas Untuk Pemagan
    </strong>
    <ol>
        <li>Fasilitas selama masa kursus adalah sebagai berikut:
            <ol>
                <li>
                    Selama masa kursus pada awal tiba di Jepang, Asosiasi Pengawas akan membayar tunjangan kursus secara
                    langsung kepada Pemagang, sebagai biaya hidup yang setaraf dengan standar kehidupan orang Jepang,
                    setiap bulan pada tanggal yang ditentukan. &nbsp;Jumlah tunjangan kursus ini setiap bulan adalah
                    ¥60,000(enam puluh ribu Yen) per-orang　(termasuk biaya makan ¥25,000(dua puluh lima ribu Yen). Dalam
                    hal pembayaran secara tunai diperlukan tanda terima / tanda tangan dari Pemagang sendiri. Apabila
                    diperlukan biaya transportasi selama kursus di Jepang, maka biaya transportasi tersebut dibayarkan
                    terpisah dari Tunjangan Kursus.&nbsp;<br>
                    Fasilitas pemondokan, Asosiasi Pengawas menyediakannya untuk Pemagang selama masa kursus secara
                    gratis. Dan fasilitas pemondokan tersebut harus sudah dilengkapi dengan sarana yang dibutuhkan dalam
                    kehidupan sehari-hari. Asosiasi Pengawas atau Lembaga Pelaksana akan menyediakan fasilitas
                    pemondokan untuk Pemagang selama masa pemagangan, baik dikenakan biaya ataupun secara gratis.<br>
                    Kursus tidak boleh lebih dari 40 (empat puluh) jam dalam 1 (satu) minggu dan tidak dilaksanakan di
                    luar jam kursus atau hari kursus yang telah ditetapkan.<br>
                    Terkait Pemagang, Asosiasi Pengawas harus mempersiapkan instrumen jaminan untuk Pemagang, dalam hal
                    terjadi kematian, kecelakaan, sakit dsb. selama masa kursus memasukkannya ke dalam asuransi
                    kesehatan nasional, selama masa pemagangan ke dalam asuransi kecelakaan swasta seperti asuransi umum
                    Pemagang orang asing dsb.<br>
                    &nbsp;
                </li>
            </ol>
        </li>
        <li>
            Fasilitas Selama Masa Pemagangan (tidak termasuk masa kursus. Selanjutnya sama dengan ayat di bawah ini)
            adalah sebagai berikut:
            <ol>
                <li>
                    <p style="text-align:justify;">
                        Setelah kursus selesai, Pemagang melaksanakan aktivitas pemagangan berdasarkan kontrak kerja
                        dengan Lembaga Pelaksana. Kontrak kerja tersebut dibuat sebagai prosedur untuk masuk ke Jepang,
                        dan mulai efektif berlaku setelah kursus selesai. Selain itu, surat persyaratan dan ketentuan
                        kerja yang diberikan kepada Pemagang pada saat pengikatan kontrak kerja, diterjemahkan ke bahasa
                        Indonesia.
                    </p>
                </li>
                <li>
                    <p style="text-align:justify;">
                        Lembaga Pelaksana membayarkan seluruh jumlah upah secara langsung kepada Pemagang pada tanggal
                        tertentu setiap bulan. Tetapi jumlah upah ini dipotong dalam batasan tertentu untuk pajak dan
                        asuransi sosial yang ditetapkan UU, dan pemotongan lainnya jika tercantum dalam perjanjian yang
                        sama. &nbsp;Jumlah pemotongan yang tertulis di surat kontrak tersebut tidak boleh melebihi
                        jumlah biaya nyatanya. Pada saat Lembaga Pelaksana membayar upah, apabila pembayaran dilakukan
                        secara tunai, maka di samping memberikan rincian pembayaran upah, juga perlu mendapatkan tanda
                        tangan atau bukti penerimaan pada buku penghitungan upah dari Pemagang. Sementara apabila
                        pembayaran dilakukan dengan transfer ke rekening, maka harus mendapatkan persetujuan dari orang
                        yang bersangkutan, mencantumkannya pada Surat Perjanjian kontrak, dan memberikan rincian
                        pembayaran upah. Apabila terdapat biaya transportasi di Jepang selama masa Pemagangan maka akan
                        diberikan tunjangan untuk biaya transportasi dsb yang ditetapkan oleh Lembaga Pelaksana.
                    </p>
                </li>
                <li>
                    <p style="text-align:justify;">
                        Asosiasi Pengawas atau Lembaga Pelaksana akan menyediakan fasilitas pemondokan untuk Pemagang
                        selama masa pemagangan, baik dikenakan biaya ataupun secara gratis.
                    </p>
                </li>
                <li>
                    <p style="text-align:justify;">
                        Jam kerja yang ditetapkan dalam masa pemagangan pada prinsipnya 40 (empat puluh) jam/minggu, dan
                        tidak melampaui 8 (delapan) jam/hari, tidak termasuk jam istirahat. Tetapi apabila tercantum
                        dalam perjanjian kerja, maka Lembaga Pelaksana dapat mempekerjakan Pemagang di luar jam kerja
                        ataupun pada hari libur dalam batasan tersebut tadi, dengan sejumlah persentase upah tambahan.
                        &nbsp;Namun walaupun mempekerjakan di luar jam kerja, atau pada hari libur atau pada malam hari,
                        Lembaga Pelaksana perlu memperhatikan agar Pemagang tidak bekerja terlampau lama dengan
                        mempertimbangkan tujuan Program Pemagangan ini, serta mempersiapkan suatu sistem yang
                        memungkinkan bimbingan terhadap Pemagang.<br>
                        &nbsp;
                    </p>
                </li>
            </ol>
        </li>
    </ol>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 15. Larangan Pemungutan Uang Jaminan dan Sebagainya</strong></span>
    </p>
    <ol>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">Lembaga Pengirim, Asosiasi Pengawas atau Lembaga Pelaksana (selanjutnya di
                    dalam Pasal ini disebut “Lembaga Pengirim dsb”) dilarang memungut uang jaminan dari keluarga
                    langsung atau kerabat yang tinggal bersama atau orang yang memiliki hubungan dekat dalam kehidupan
                    sosial Pemagang (selanjutnya dalam pasal ini disebut “Pemagang dsb”), yang terkait pelaksanaan
                    pemagangan di Jepang yang diikuti oleh Pemagang yang bersangkutan.</span>
            </p>
        </li>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">Lembaga Pengirim dsb tidak diperbolehkan merencanakan pengawasan terhadap
                    uang dan aset lainnya milik Pemagang dsb, dengan menyimpannya sampai pemagangan selesai dengan
                    alasan apapun terkait dengan pemagangan di Jepang yang diikuti oleh Pemagang.</span>
            </p>
        </li>
        <li>
            <p style="margin-left:21.0pt;text-align:justify;">
                <span style="color:black;">Lembaga Pengirim dsb tidak diperbolehkan mengikat perjanjian dengan Pemagang
                    dsb. mengenai ketetapan sanksi keuangan apabila terjadi pelanggaran dalam perjanjian kerja atau
                    mengikat perjanjian yang merencanakan pemindahan uang atau aset lainnya. Juga tidak diperbolehkan
                    merencanakan pengikatan perjanjian tersebut sampai pemagangan selesai.</span>
            </p>
        </li>
    </ol>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 16. Penghentian Pemagangan</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Dalam hal terjadi salah satu tindakan dalam kategori di bawah ini, Lembaga Pengirim,
            Asosiasi Pengawas, dan Lembaga Pelaksana akan melakukan musyawarah setelah mendengarkan keterangan situasi
            kondisi dari Pemagangitu sendiri. Pemagangan orang yang bersangkutan dapat dihentikan dan dipulangkan ke
            Indonesia.</span>
    </p>
    <ol>
        <li>
            Apabila melanggar Pasal 6.
        </li>
        <li>
            Apabila melanggar Pasal 20 no 4
        </li>
        <li>
            Apabila ia harus bertanggungjawab dalam hal tertentu, sehingga tidak
            dapat meneruskan atau tidak layak melakukan pemagangan
        </li>
    </ol>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 17. Kepulangan Sementara Pemagang</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Kepulangan sementara Pemagang ke Indonesia selama masa “pemagangan no 1” atau
            “pemagangan no 2” dapat dilakukan selama14 (empat belas) hari apabila mendapat persetujuan dari Asosiasi
            Pengawas dan Lembaga Pelaksana, serta berdasarkan prosedur untuk izin khusus masuk kembali (special re-entry
            permit) (atau jika kantor Imigrasi Jepang memberi izin masuk kembali ke Jepang).</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Penanggung biayanya ditentukan atas dasar pembicaraan antara Pemagang, Lembaga
            Pengirim, Asosiasi Pengawas atau Lembaga Pelaksana, dengan mempertimbangkan alasan kepulangan sementara ke
            Indonesia.</span>
    </p>
    <p style="margin-left:21.3pt;text-align:justify;">
        (2)&nbsp;&nbsp; Peserta magang teknis harus kembali ke Jepang untuk sementara waktu dalam jangka waktu satu
        bulan atau lebih antara berakhirnya “Pelatihan Magang Teknis No. 2” dan dimulainya “Pelatihan Magang Teknis No.
        3,” atau dalam waktu satu tahun setelah dimulainya “Pelatihan Magang Teknis No. Pelatihan Magang Teknis No. 3.”
        Harus. Biaya perjalanan pulang pergi untuk sementara ditanggung oleh organisasi pengawas dan pelaksana
        pelatihan.
    </p>
    <div class="page-break"></div>
    <p style="text-align:center;">
        <span style="color:black;">&nbsp;<strong>Bab 5. Fungsi, Kewajiban dsb Lembaga Pengirim dan Asosiasi
                Pengawas</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>&nbsp;Pasal 18. Fungsi dan Kewajiban Lembaga Pengirim</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Selain ketentuan dalam setiap pasal pada kesepakatan ini, Lembaga Pengirim juga
            mengemban fungsi dan kewajiban sebagai berikut:</span>
    </p>

    <ol>
        <li>
            Menempatkan petugas untuk bidang administrasi dan komunikasi terkait dengan program pemagangan
        </li>
        <li>
            Melaksanakan prosedur hukum terhadap pemerintah di negaranya mengenai keberangkatan dan keberadaan Pemagang
            di Jepang.
        </li>
        <li>
            Menyeleksi Pemagang yang ditentukan pada Bab 3.
        </li>
        <li>
            Melaksanakan pemeriksaan kesehatan sebelum pemberangkatan (termasuk pemeriksaan kesehatan gigi) serta
            melaporkan hasil pemeriksaan tsb kepada Asosiasi Pengawas.
        </li>
        <li>
            Melaksanakan dan mendukung kursus dsb yang diminta, melaksanakan orientasi sebelum pemberangkatan
            berdasarkan Pasal 3 ayat 2 dan ayat 3.
        </li>
        <li>
            Mempersiapkan dokumen-dokumen yang diperlukan untuk masuk ke Jepang serta untuk prosedur izin tinggal di
            Jepang.
        </li>
        <li>
            Mengatur koordinasi dengan Asosiasi Pengawas serta pekerjaan lainnya yang diperlukan dalam memperlancar
            pelaksanaan pemagangan
        </li>
    </ol>


    <p class="ql-align-justify">
        <strong>
            Pasal 19. Fungsi dan Kewajiban Asosiasi Pengawas
        </strong>
    </p>
    <p class="ql-align-justify">
        Selain ketentuan dalam setiap Pasal pada kesepakatan ini, Asosiasi Pengawas mengemban fungsi dan kewajiban
        sebagai berikut;&nbsp;
    </p>

    <ol>
        <li>
            Penempatan petugas di bidang administrasi dan komunikasi terkait dengan pemagangan.
        </li>
        <li>
            Melaksanakan prosedur hukum terhadap pemerintah Jepang untuk kedatangan dan izin tinggal Pemagang di Jepang.
            Tetapi untuk prosedur izin tinggal, dapat saja dilaksanakan oleh Lembaga Pelaksana.
        </li>
        <li>
            Mempersiapkan fasilitas pemondokan dan fasilitas kursus untuk Pemagang. Tetapi untuk fasilitas pemondokan
            ada kalanya dipersiapkan oleh Lembaga Pelaksana.
        </li>
        <li>
            Membuat rencana Pemagangan yang layak terkait dengan “Pemagangan no 1”.
        </li>
        <li>
            Mengawasi dan membimbing pelaksanaan pemagangan secara layak di Lembaga Pelaksana berdasarkan rencana
            Pemagangan.
        </li>
        <li>
            Mengawasi dan membimbing Lembaga Pelaksana (selain yang disebut pada butir no 5).
        </li>
        <li>
            Memberikan layanan berbagai konsultasi terhadap Pemagang.
        </li>
        <li>
            Mempersiapkan tempat pemagangan baru apabila terjadi kesulitan dalam pelaksanaan pemagangan di luar
            tanggungjawab Pemagang, misalnya Lembaga Pelaksana menjadi bangkrut dan sebagainya, (terbatas dalam hal
            Pemagang yang mengharapkan kelanjutan dari pemagangannya).
        </li>
        <li>
            Mengatur koordinasi dengan Lembaga Pengirim serta pekerjaan lain yang diperlukan dalam memperlancar
            pelaksanaan pemagangan.
        </li>
    </ol>

    <p class="ql-align-justify">
        <strong>
            Pasal 20. Bimbingan Terhadap Hal-hal yang Perlu Ditaati Pemagang
        </strong>
    </p>
    <p class="ql-align-justify">
        Lembaga Pengirim menjelaskan secara mendalam kepada Pemagang mengenai hal-hal berikut yang perlu ditaati
        Pemagang selama tinggal di Jepang.&nbsp;Selain itu, juga memberikan bimbingan dengan bekerjasama dengan Asosiasi
        Pengawas dan Lembaga Pelaksana agar hal-hal yang perlu ditaati Pemagang selama tinggal di Jepang ini dapat
        dilaksanakan dengan baik.
    </p>

    <ol>
        <li>
            Mengikuti seluruh pemagangan dengan bersungguh-sungguh dan menuruti bimbingan dari pembimbing pemagang dan
            pembimbing kehidupan.
        </li>
        <li>
            Berkontribusi dalam pengembangan industri di Indonesia, dengan memanfaatkan keterampilan dsb yang diperoleh
            di Jepang, setelah kembali bekerja di Indonesia.
        </li>
        <li>
            Saat berada di Jepang tidak diperbolehkan membawa anggota keluarga untuk tinggal bersama.
        </li>
        <li>
            Tidak diperkenankan melakukan kegiatan di luar ketentuan izin tinggal untuk memperoleh penghasilan atau upah
            lainnya.
        </li>
        <li>
            Selama berada di Jepang, Pemagang bertanggungjawab untuk menyimpan paspornya sendiri dan selalu membawa
            kartu identitas (Resident Card / Zairyuu Card).
        </li>
        <li>
            Setelah selesai pemagangan segera pulang ke Indonesia.
        </li>
    </ol>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 21. Tindak Lanjut Setelah Kembali ke Indonesia</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Asosiasi Pengawas bekerjasama dengan Lembaga Pengirim, melaksanakan survei tindak
            lanjut mengenai; ‘apakah Pemagang memanfaatkan keterampilan yang dipelajari di Jepang setelah kembali ke
            Indonesia?’.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Lembaga Pengirim merangkum hasil survei mengenai; ‘Apakah Pemagang yang kembali ke
            Indonesia memanfaatkan keterampilan dsb yang dipelajari di Jepang?’, serta memberikan laporan tsb kepada
            Asosiasi Pengawas atau Lembaga Pelaksana.</span>
    </p>
    <div class="page-break"></div>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;<strong>Pasal 22. Penanganan Terhadap Kecelakaan/ Kriminalitas/
                Pelarian</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;Apabila terjadi kecelakaan / kriminalitas / pelarian dari Pemagang, maka
            Asosiasi Pengawas segera melaporkan kepada Lembaga Pengirim dan Konsulat Jenderal Republik Indonesia (KJRI)
            di Osaka, dan bersamaan dengan itu, melakukan antisipasi yang tepat melalui pembicaraan kedua pihak dengan
            mengikuti perundang-undangan di Jepang.</span>
    </p>
    <p style="text-align:center;">
        <span style="color:black;">&nbsp;<strong>Bab 6. Pembebanan Biaya dsb</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 23. Rincian Biaya Manajemen untuk Pengiriman</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Biaya yang diperlukan terkait pelaksanaan pemagangan oleh pihak Lembaga Pengirim
            (selanjutnya disebut “Biaya Manajemen Pengiriman”, tetapi ini tidak termasuk biaya perkenalan bursa kerja
            seperti; penyeleksian dan penentuan calon Pemagang serta berbagai biaya lain yang disebutkan dalam Pasal
            selanjutnya) adalah sebagai berikut:</span>
    </p>

    <p>
        Biaya yang diperlukan untuk persiapan pemeriksaan kesehatan dan pemeriksaan gigi Pemagang oleh Lembaga Pengirim
        sebelum pemberangkatan serta biaya-biaya terkait pelaksanaan pemeriksaan tersebut.
    </p>
    <ol>
        <li>
            Biaya yang diperlukan untuk kursus pra-pemberangkatan seperti pembelajaran bahasa Jepang, bimbingan
            kehidupan di Jepang dan sebagainya serta biaya kompensasi libur kerja selama masa tersebut.
        </li>
        <li>
            Biaya yang diperlukan untuk komunikasi dan musyawarah dengan pihak perusahaan dari negara pengirim serta
            Asosiasi Pengawas.
        </li>
        <li>
            Biaya yang diperlukan untuk pengiriman staf Lembaga Pengirim ke Jepang dsb, untuk membantu memberikan
            layanan konsultasi dan bimbingan kehidupan terhadap Peserta Biaya yang diperlukan untuk pengiriman staf
            Lembaga Pengirim ke Jepang dsb, untuk membantu memberikan layanan konsultasi dan bimbingan kehidupan
            terhadap Peserta.
        </li>
        <li>
            Biaya-biaya lain yang timbul di pihak Lembaga Pengirim dalam melaksanakan pemagangan ini.
        </li>
    </ol>
    <div class="page-break"></div>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 24. Berbagai Biaya Lainnya untuk Pengiriman</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Biaya yang diperlukan untuk pengiriman Pemagang di luar biaya yang ditentukan dari
            Pasal sebelumnya adalah sebagai berikut:</span>
    </p>

    <ol>
        <li>
            Biaya pemeriksaan kesehatan serta biaya pemeriksaan gigi.
        </li>
        <li>
            Biaya administrasi untuk pembuatan paspor dan visa.
        </li>
        <li>
            Biaya perjalanan dari dalam negeri Indonesia sebelum pemberangkatan dan setelah kembali ke Indonesia.
        </li>
        <li>
            Biaya lain yang timbul di Indonesia berkaitan dengan pengiriman Pemagang.
        </li>
    </ol>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 25. Rincian Biaya Manajemen untuk Penerimaan</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Biaya yang diperlukan untuk manajemen di pihak Asosiasi Pengawas dalam pelaksanaan
            pemagangan (selanjutnya disebut “Biaya Manajemen untuk Penerimaan”) adalah sebagai berikut (tetapi tidak
            termasuk biaya perkenalan bursa kerja seperti; penyeleksian dan penentuan calon Pemagang).</span>
    </p>

    <ol>
        <li>
            Biaya yang diperlukan untuk komunikasi dan musyawarah dengan Lembaga Pengirim.
        </li>
        <li>
            Biaya yang diperlukan untuk menyeleksi Lembaga Pelaksana.
        </li>
        <li>
            Biaya yang di perlukan di dalam Jepang terkait dengan persiapan penerimaan, seperti; penyelenggaraan rapat
            orientasi dan sebagainya.
        </li>
        <li>
            Biaya perjalanan pulang-pergi yang ditentukan pada Pasal 26.
        </li>
        <li>
            Biaya yang berhubungan dengan jaminan apabila terjadi kecelakaan dan sebagainya selama masa kursus.
        </li>
        <li>
            Biaya yang diperlukan untuk pelaksanaan kursus.
        </li>
        <li>
            Biaya yang diperlukan untuk melaksanakan kunjungan, bimbingan dan monitor terhadap Lembaga Pelaksana.
        </li>
        <li>
            Biaya yang diperlukan untuk mempersiapkan fasilitas pemondokan.
        </li>
        <li>
            Biaya yang diperlukan untuk memberikan layanan konsultasi dan solusinya kepada Pemagang.
        </li>
        <li>
            Biaya yang diperlukan untuk mengunjungi Indonesia terkait urusan pemagangan, misalnya untuk rapat,
            peninjauan kondisi dan sebagainya.
        </li>
        <li>
            Biaya-biaya lain yang timbul di pihak Asosiasi Pengawas untuk melaksanakan pemagangan ini.
        </li>
    </ol>
    <div class="page-break"></div>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 26. Pembebanan Biaya</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Di antara biaya yang diperlukan untuk Program Pemagangan ini, biaya yang diperlukan
            untuk ‘biaya manajemen pengiriman’ pada Pasal 23 dan ‘biaya lainnya untuk pengiriman’ pada Pasal 24
            dibicarakan satu sama lain dan ditanggung bersama oleh Lembaga Pengirim dan ‘Asosiasi Pengawas’ dengan
            pembebanan yang layak. Sedangkan ‘biaya manajemen penerimaan’ Pasal 25 ‘Asosiasi Pengawas’ dan Lembaga
            Pelaksana yang menanggungnya </span>(Termasuk pulang ke rumah jika pulang ke rumah di tengah jalan tanpa
        menyelesaikan periode pelatihan magang teknis yang dijadwalkan. Juga, dari akhir "pelatihan magang teknis 2"
        hingga dimulainya "pelatihan magang teknis 3" atau "pelatihan magang teknis 3" ( termasuk kembalinya sementara
        ke Jepang setelah permulaan). Asosiasi Pengawas dan Lembaga Pelaksana menanggung<span style="color:black;">
            biaya pulang pergi perjalanan Pemaganguntuk datang ke Jepang dan pulang ke Indonesia setelah selesai masa
            pemagangan, yaitu dari tempat terakhir meninggalkan Indonesia, sampai tempat pertama kembali </span>ke
        Indonesia setelah selesai masa pemagang. Selain itu, organisasi pembimbing dan pelaksana pelatihan akan
        bertanggung jawab atas biaya kedatangan ke Jepang untuk Pelatihan Praktek No. 3 dan kepulangan ke negara asal
        setelah menyelesaikan pelatihan teknis.
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal 27. Penanganan Biaya Manajemen untuk Pengiriman dsb</strong></span>
    </p>

    <ol>
        <li>
            Apabila Asosiasi Pengawas menanggung sebagian dari ‘biaya manajemen pengiriman’ pada Pasal 23 dan ‘biaya
            lainnya yang diperlukan untuk pengiriman’ pada Pasal 24, maka kedua pihak menyepakati jumlah uang yang
            layak, kemudian mengirimkannya kepada pihak Lembaga Pengirim.&nbsp;Dalam hal ini, rincian biaya manajemen
            pengiriman serta biaya lainnya untuk pengiriman yang ditanggung Asosiasi Pengawas, dilaporkan oleh Lembaga
            Pengirim kepada Asosiasi Pengawas secara terpisah.
        </li>
        <li>
            Biaya manajemen pengiriman selama masa pemagangan adalah ¥5,000(lima ribu Yen) per orang setiap bulan
        </li>
        <li>
            Asosiasi Pengawas setiap bulan memungut biaya manajemen pengiriman dari Lembaga Pelaksana, dan
            mengirimkannya sekaligus setiap 3 (tiga) bulan sekali kepada Lembaga Pengirim. Biaya transfer ditanggung
            oleh Asosiasi pengawas.
        </li>
        <li>
            Untuk biaya manajemen pengiriman, dibuka rekening khusus agar dapat dibedakan secara jelas dengan tunjangan
            kursus dan upah yang diberikan kepada Pemagang, dan ditetapkan tidak boleh diambil dari tunjangan kursus
            maupun dari upah.
        </li>
        <div class="page-break"></div>
        <li>
            Rincian dari kedua rekening khusus sebagai berikut;
            <ol>
                <li>
                    Nama pemegang rekening dari Asosiasi Pengawas: {{ strtoupper($mou->agen->name) }}<br>
                    Nama bank, cabang : {{ strtoupper($mou->agen->bankName) }},
                    {{ strtoupper($mou->agen->bankBranch) }}<br>
                    Jenis rekening : {{ strtoupper($mou->agen->jenis) }}<br>
                    Nomor rekening : {{ strtoupper($mou->agen->bankNumber) }}

                </li>
                <li>
                    Nama pemegang rekening dari Lembaga Pengirim (SO): {{ strtoupper($mou->mitras->name) }}<br>
                    Nama bank, cabang : {{ strtoupper($mou->mitras->bankName) }},
                    {{ strtoupper($mou->mitras->bankBranch) }}<br>
                    Jenis rekening : {{ strtoupper($mou->mitras->jenis) }}<br>
                    Nomor rekening : {{ strtoupper($mou->mitras->bankNumber) }}

                </li>
                <li>
                    Jika terjadi perubahan pada nama, bank, rekening, dan lain-lain. Dari rekening khusus, Asosiasi
                    Pengawas
                    atau Lembaga Pengirim harus segera melaporkan secara tertulis.
                </li>
            </ol>
        </li>
    </ol>
    <p style="text-align:center;">
        <span style="color:black;"><strong>Bab 7. Peraturan Lainnya</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>Pasal28&nbsp;&nbsp; Lampiran Nota Kesepakatan Terkait dengan Program
                Pemagangan</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Untuk hal yang tidak ditulis di sini ditetapkan secara terpisah melalui “Lampiran
            Nota Kesepakatan Terkait dengan Program Pemagangan”.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;<strong>Pasal 29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Interpretasi dsb dari Surat Perjanjian Kerjasama</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Apabila timbul pertanyaan atau ketidakjelasan atas interpretasi Pasal-Pasal
            perjanjian ini atau hal-hal yang belum diatur dalam Perjanjian Kerjasama ini, hal itu akan diputuskan
            melalui musyawarah kedua pihak merujuk kepada tujuan ‘Program Pemagangan’ ini.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;<strong>Pasal 30 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penyelesaian
                Perselisihan</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Apabila timbul perselisihan terkait pemagangan, Lembaga Pengirim dan Asosiasi
            Pengawas, berusaha menyelesaikannya melalui musyawarah dengan menjunjung tujuan pemagangan dan ketentuan
            perundang-undangan Jepang dan memperhatikan agar hubungan persahabatan tetap terjaga. Namun, apabila keadaan
            memaksa, akan mengikuti pertimbangan dari instansi pemerintah terkait atau keputusan dari Pengadilan
            Negeri</span> {{ strtoupper($mou->mitras->alamat) }}<span style="color:black;">,
            Indonesia atau Pengadilan Negeri/Wilayah &nbsp;Prefektur&nbsp;</span>
            {{ strtoupper($mou->agen->alamat) }}
            <span style="color:black;">,
            Jepang.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">&nbsp;<strong>Pasal 31 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Masa
                Berlakunya Perjanjian Kerjasama</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Surat Perjanjian Kerjasama ini mulai berlaku sejak tanggal penandatanganannya.&nbsp;
            Apabila ada petunjuk dari instansi pemerintah Jepang mengenai kondisi yang kontradiktif dalam substansi
            perjanjian ini atau hal-hal yang belum ditetapkan dalam perjanjian ini, petunjuk itu akan ditaati dan
            Asosiasi Pengawas segera menyampaikan substansi tersebut secara tertulis kepada Lembaga Pengirim.
            Selanjutnya substansi tersebut diprioritaskan untuk dimasukkan ke dalam Perjanjian Kerjasama ini.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;"><strong>&nbsp;Pasal 32. Berakhirnya Masa Perjanjian Kerjasama</strong></span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Perjanjian kerjasama ini akan berakhir ketika terjadi salah satu hal yang disebut di
            bawah ini, seiring dengan itu perjanjian ini kehilangan kekuatannya.</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Apabila pemagangan sebagai objek perjanjian ini telah selesai (tanggal selesainya
            perjanjian ini adalah sama dengan tanggal selesainya pemagangan).</span>
    </p>
    <p style="text-align:justify;">
        <span style="color:black;">Apabila dalam masa pemagangan kelangsungannya tidak mungkin dilanjutkan dan Pemagang
            harus pulang ke Indonesia (dalam hal ini, pemberitahuan disampaikan kepada pihak tersebut melalui surat,
            yang tanggal selesainya perjanjian ini adalah tanggal terbitnya surat tersebut).</span>
    </p>
    <p>
        <span style="color:black;"><span lang="IN" dir="ltr">Demikian Surat Perjanjian kerjasama ini dibuat
                dengan kesepakatan kedua pihak dan dibuat rangkap 2 (dua) untuk masing-masing pihak, dalam bahasa Jepang
                dan bahasa Indonesia, yang setelah ditandatangani, masing-masing pihak menyimpan 1 (satu) berkas Surat
                Perjanjian kerjasama ini.;</span></span>
    </p>

    <table border="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td>
                （Lembaga Pengirim）
            </td>
            <td>
                （Lembaga Pengawas）
            </td>
        </tr>
        <tr>
            <td>
                {{ strtoupper($mou->mitras->name) }}<br>
                Alamat：Indonesia
            </td>
            <td>
                {{ strtoupper($mou->agen->name) }}<br>
                Alamat：Jepang
            </td>
        </tr>
        <tr>
            <td>
                {{ strtoupper($mou->mitras->alamat) }}
            </td>
            <td>
                {{ strtoupper($mou->agen->alamat) }}
            </td>
        </tr>
        <tr>
            <td>
                Tel : {{ strtoupper($mou->mitras->leaderNumber) }}<br>
                Email : {{ strtoupper($mou->mitras->email) }}<br>
                Nomor izin : {{ strtoupper($mou->mitras->permit) }}<br>
                Nama Lengkap<br>
                Perwakilan　 {{ strtoupper($mou->mitras->leader) }}
            </td>
            <td>
                Tel : {{ $mou->agen->leaderNumber }}<br>
                Email : {{ $mou->agen->email }}<br>
                Nomor Registrasi : {{ $mou->agen->permit }}<br>
                Nama Lengkap<br>
                Perwakilan　 {{ strtoupper($mou->agen->leader) }}
            </td>
        </tr>
    </table>

    <p style="text-align:center;">
        <span style="color:black;">Indonesia<span lang="IN" dir="ltr">, </span>Tahun&nbsp;&nbsp;&nbsp;<span lang="IN" dir="ltr"> &nbsp;</span>&nbsp;&nbsp;&nbsp; <span lang="IN" dir="ltr">&nbsp;&nbsp;&nbsp; B</span>ulan<span lang="IN" dir="ltr">&nbsp;&nbsp;</span> &nbsp;&nbsp; <span lang="IN" dir="ltr">&nbsp;&nbsp;&nbsp; T</span>anggal</span>
    </p>
</body>

</html>
