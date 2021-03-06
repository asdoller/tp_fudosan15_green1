<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>不動産業者向け 無料ホームページテンプレート tp_fudosan15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ここにサイト説明を入れます">
    <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/openclose.js"></script>
    <script src="js/fixmenu.js"></script>
    <script src="js/fixmenu_pagetop.js"></script>
    <script src="js/ddmenu_min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="container">

    <header>
        <div class="inner">
            <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="サンプル不動産"></a></h1>
            <div id="tel"><span>TEL:0120-000-000</span><br>受付9:00〜18:00　水曜定休</div>
        </div>
    </header>

    <!--PC用（801px以上端末）メニュー-->
    <nav id="menubar" class="nav-fix-pos">
        <ul class="inner">
            <li class="current"><a href="index.html">ホーム</a></li>
            <li><a href="javascript:void(0)" class="cursor-default">物件を借りる</a>
                <ul class="ddmenu">
                    <li><a href="list.html">マンション・アパート</a></li>
                    <li><a href="list.html">一戸建て</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" class="cursor-default">物件を買う</a>
                <ul class="ddmenu">
                    <li><a href="list.html">一戸建て</a></li>
                    <li><a href="list.html">マンション</a></li>
                    <li><a href="list.html">土地</a></li>
                </ul>
            </li>
            <li><a href="investment.html">売る・投資</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav>

    <!--小さい端末用（800px以下端末）メニュー-->
    <nav id="menubar-s">
        <ul class="inner">
            <li><a href="index.html">ホーム</a></li>
            <li id="menubar_hdr2" class="close">物件を借りる
                <ul id="menubar-s2">
                    <li><a href="list.html">マンション・アパート</a></li>
                    <li><a href="list.html">一戸建て</a></li>
                </ul>
            </li>
            <li id="menubar_hdr3" class="close">物件を買う
                <ul id="menubar-s3">
                    <li><a href="list.html">一戸建て</a></li>
                    <li><a href="list.html">マンション</a></li>
                    <li><a href="list.html">土地</a></li>
                </ul>
            </li>
            <li><a href="investment.html">売る・投資</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav>

    <div id="contents">

        <div class="inner">

            <section id="top-contents">

                <h2 class="c big1">取り扱い物件数：XXX件</h2>

                <div id="map-select">
                    <select onChange="location.href=value;">

                        <option value="#">都道府県から選択する</option>

                        <option value="list.html">北海道</option>

                        <option value="list.html">青森県</option>
                        <option value="list.html">岩手県</option>
                        <option value="list.html">宮城県</option>
                        <option value="list.html">秋田県</option>
                        <option value="list.html">山形県</option>
                        <option value="list.html">福島県</option>

                        <option value="list.html">茨城県</option>
                        <option value="list.html">栃木県</option>
                        <option value="list.html">群馬県</option>
                        <option value="list.html">埼玉県</option>
                        <option value="list.html">千葉県</option>
                        <option value="list.html">東京都</option>
                        <option value="list.html">神奈川県</option>

                        <option value="list.html">新潟県</option>
                        <option value="list.html">富山県</option>
                        <option value="list.html">石川県</option>
                        <option value="list.html">福井県</option>
                        <option value="list.html">山梨県</option>

                        <option value="list.html">長野県</option>
                        <option value="list.html">岐阜県</option>
                        <option value="list.html">静岡県</option>
                        <option value="list.html">愛知県</option>

                        <option value="list.html">三重県</option>
                        <option value="list.html">滋賀県</option>
                        <option value="list.html">京都府</option>
                        <option value="list.html">大阪府</option>
                        <option value="list.html">兵庫県</option>
                        <option value="list.html">奈良県</option>
                        <option value="list.html">和歌山県</option>

                        <option value="list.html">鳥取県</option>
                        <option value="list.html">島根県</option>
                        <option value="list.html">岡山県</option>
                        <option value="list.html">広島県</option>
                        <option value="list.html">山口県</option>

                        <option value="list.html">徳島県</option>
                        <option value="list.html">香川県</option>
                        <option value="list.html">愛媛県</option>
                        <option value="list.html">高知県</option>

                        <option value="list.html">福岡県</option>
                        <option value="list.html">佐賀県</option>
                        <option value="list.html">長崎県</option>
                        <option value="list.html">熊本県</option>
                        <option value="list.html">大分県</option>
                        <option value="list.html">宮崎県</option>
                        <option value="list.html">鹿児島県</option>

                        <option value="list.html">沖縄県</option>

                    </select>
                </div>

                <ul id="menu-text">
                    <li><span class="color1">賃貸物件</span>&nbsp;
                        アパート・マンション：<a href="list.html">XX件</a>｜
                        一戸建て：<a href="list.html">XX件</a>｜
                    </li>
                    <li><span class="color1">売買物件</span>&nbsp;
                        一戸建て：<a href="list.html">XX件</a>｜
                        売マンション：<a href="list.html">XX件</a>｜
                        土地：<a href="list.html">XX件</a>
                    </li>
                </ul>

                <ul id="menu-photo">
                    <li class="chintai"><span>借りる</span><a href="list.html">マンション・アパート</a>｜<a href="list.html">一戸建て</a>
                    </li>
                    <li class="baibai"><span>買う</span><a href="list.html">マンション</a>｜<a href="list.html">一戸建て</a>｜<a
                            href="list.html">土地</a></li>
                </ul>

                <ul id="map">

                    <li class="hokkaido"><a href="list.html">北海道</a></li>

                    <li class="tohoku"><a href="list.html" class="aomori">青森県</a></li>
                    <li class="tohoku"><a href="list.html" class="iwate">岩手県</a></li>
                    <li class="tohoku"><a href="list.html" class="miyagi">宮城県</a></li>
                    <li class="tohoku"><a href="list.html" class="akita">秋田県</a></li>
                    <li class="tohoku"><a href="list.html" class="yamagata">山形県</a></li>
                    <li class="tohoku"><a href="list.html" class="fukushima">福島県</a></li>

                    <li class="kanto"><a href="list.html" class="ibaraki">茨城県<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="tochigi">栃木県<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="gunma">群馬県<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="saitama">埼玉県<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="chiba">千葉県<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="tokyo">東京都<br>XX件</a></li>
                    <li class="kanto"><a href="list.html" class="kanagawa">神奈川県<br>XX件</a></li>

                    <li class="tyubu"><a href="list.html" class="nigata">新潟県</a></li>
                    <li class="tyubu"><a href="list.html" class="toyama">富山県</a></li>
                    <li class="tyubu"><a href="list.html" class="ishikawa">石川県</a></li>
                    <li class="tyubu"><a href="list.html" class="fukui">福井県</a></li>
                    <li class="tyubu"><a href="list.html" class="yamanashi">山梨県</a></li>
                    <li class="tyubu"><a href="list.html" class="nagano">長野県</a></li>
                    <li class="tyubu"><a href="list.html" class="gifu">岐阜県</a></li>
                    <li class="tyubu"><a href="list.html" class="shizuoka">静岡県</a></li>
                    <li class="tyubu"><a href="list.html" class="aichi">愛知県</a></li>

                    <li class="kansai"><a href="list.html" class="mie">三重県</a></li>
                    <li class="kansai"><a href="list.html" class="shiga">滋賀県</a></li>
                    <li class="kansai"><a href="list.html" class="kyoto">京都府</a></li>
                    <li class="kansai"><a href="list.html" class="osaka">大阪府</a></li>
                    <li class="kansai"><a href="list.html" class="hyogo">兵庫県</a></li>
                    <li class="kansai"><a href="list.html" class="nara">奈良県</a></li>
                    <li class="kansai"><a href="list.html" class="wakayama">和歌山県</a></li>

                    <li class="cyugoku"><a href="list.html" class="tottori">鳥取県</a></li>
                    <li class="cyugoku"><a href="list.html" class="shimane">島根県</a></li>
                    <li class="cyugoku"><a href="list.html" class="okayama">岡山県</a></li>
                    <li class="cyugoku"><a href="list.html" class="hiroshima">広島県</a></li>
                    <li class="cyugoku"><a href="list.html" class="yamaguchi">山口県</a></li>

                    <li class="shikoku"><a href="list.html" class="tokushima">徳島県</a></li>
                    <li class="shikoku"><a href="list.html" class="kagawa">香川県</a></li>
                    <li class="shikoku"><a href="list.html" class="ehime">愛媛県</a></li>
                    <li class="shikoku"><a href="list.html" class="kochi">高知県</a></li>

                    <li class="kyusyu"><a href="list.html" class="fukuoka">福岡県</a></li>
                    <li class="kyusyu"><a href="list.html" class="saga">佐賀県</a></li>
                    <li class="kyusyu"><a href="list.html" class="nagasaki">長崎県</a></li>
                    <li class="kyusyu"><a href="list.html" class="kumamoto">熊本県</a></li>
                    <li class="kyusyu"><a href="list.html" class="oita">大分県</a></li>
                    <li class="kyusyu"><a href="list.html" class="miyazaki">宮崎県</a></li>
                    <li class="kyusyu"><a href="list.html" class="kagoshima">鹿児島県</a></li>

                    <li class="kyusyu"><a href="list.html" class="okinawa">沖縄県</a></li>

                </ul>
                <!--/#map-->

            </section>
            <!--/#top-contents-->

            <div id="main">

                <section id="new">
                    <h2>更新情報・お知らせ</h2>
                    <dl>
                        <dt>2020/09/11</dt>
                        <dd>詳細ページの大画像が重なって見える場合があったので、style.cssの#item-imageと、すぐ下の#item-image #item_image1を修正。</dd>
                        <dt>2020/03/29</dt>
                        <dd>小さな端末を横に倒した際の２列メニューの開閉ブロックが崩れるので、１列に変更。</dd>
                        <dt>2020/02/04</dt>
                        <dd>tp_fudosan15配布開始。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                        <dt>20XX/00/00</dt>
                        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    </dl>
                    <p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
                </section>

                <section>

                    <h2>テンプレートのご利用前に必ずお読み下さい</h2>

                    <h3>利用規約のご案内</h3>
                    <p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『不動産業者向け
                        無料ホームページテンプレート tp_fudosan15』です。必ずダウンロード先のサイトの<a
                                href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
                    <p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
                        わざと見えなく加工する事も禁止です。</p>
                    <p><strong class="color1">■下部の著作を外したい場合は</strong><br>
                        <a href="https://template-party.com/">Template-Party</a>の<a
                                href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

                    <h3>テンプレートに梱包されているjsファイル(javascript)について</h3>
                    <p>これらのファイルは全て<a href="https://www.crytus.info/" target="_blank">クリタス</a>様提供のプログラムです。jsファイルは改変せずにご利用下さい。<br>
                        また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a
                                href="https://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。
                    </p>

                    <h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
                    <p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
                    <p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
                        あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="https://template-party.com/file/formgen_manual_set2.html"
                                                       target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
                    <p><strong class="color1">■自動フォームを使わない場合</strong><br>
                        テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

                    <h3>当テンプレートの詳しい使い方は</h3>
                    <p><a href="company.html">こちらをご覧下さい。</a></p>

                </section>

                <section>
                    <h2>不動産サイト用プログラム販売中</h2>
                    <p>不動産業者向けCMSを販売中。物件一覧ページ以外に、各詳細ページや物件専用フォームも出力できます。いずれのタイプも無料で試せる『試用版』公開中。<br>
                        <span class="color2">※このtp_fudosan15(日本地図タイプ)は、「高機能版CMS」でのみテンプレートを配布しています。一般向けは使える機能が限られる為、配布しておりません。</span>
                    </p>
                    <p>▼一般向け：不動産CMS（33,000円）<br>
                        <a href="https://template-party.com/fudosan_program/" target="_blank"><img
                                src="https://template-party.com/fudosan_program/images/img01.jpg" alt=""></a></p>
                    <p>▼高機能版：不動産CMS（88,000円）<br>
                        <a href="https://template-party.com/fudosan_db/" target="_blank"><img
                                src="https://template-party.com/fudosan_db/images/img01.jpg" alt=""></a></p>
                </section>

            </div>
            <!--/#main-->

            <div id="sub">

                <aside class="mb15">
                    <img src="images/banner_sub.jpg" alt="" class="pc">
                    <img src="images/banner_sub_s.jpg" alt="" class="sh">
                    ↑端末サイズで表示される画像が切り替わります。<br>
                    「class=&quot;pc&quot;」は801px以上で表示させる画像、「class=&quot;sh&quot;」は800px以下で表示させる画像です。
                </aside>

                <section class="box">

                    <h2 class="c">おすすめ物件情報</h2>

                    <div class="list">
                        <a href="item.html">
                            <figure><img src="images/sample1.jpg" alt=""></figure>
                            <h4>物件タイトル<span class="newicon">NEW</span></h4>
                            <p>所在地：東京都XXXX<br>
                                価格：XXXXX円</p>
                        </a>
                    </div>

                    <div class="list">
                        <a href="item.html">
                            <figure><img src="images/sample1.jpg" alt=""></figure>
                            <h4>物件タイトル</h4>
                            <p>所在地：東京都XXXX<br>
                                価格：XXXXX円</p>
                        </a>
                    </div>

                    <div class="list">
                        <a href="item.html">
                            <figure><img src="images/sample1.jpg" alt=""></figure>
                            <h4>物件タイトル</h4>
                            <p>所在地：東京都XXXX<br>
                                価格：XXXXX円</p>
                        </a>
                    </div>

                </section>

                <nav class="box">
                    <ul class="submenu">
                        <li><a href="index.html">ホーム</a></li>
                        <li><a href="company.html">会社概要</a></li>
                        <li><a href="contact.html">お問い合わせ</a></li>
                    </ul>
                </nav>

                <section class="box">
                    <h2>運営</h2>
                    <p><strong>サンプル不動産</strong><br>
                        <span class="mini1">東京都XX区XXXXビル3F<br>
TEL:03-0000-0000<br>
(AM9:00〜PM5:00 水曜休み)</span></p>
                    <aside class="pc"><img src="images/banner_company.jpg" alt=""></aside>
                </section>

            </div>
            <!--/#sub-->

        </div>
        <!--/.inner-->

    </div>
    <!--/#contents-->

    <footer>

        <div id="footermenu" class="inner">
            <ul>
                <li class="title">タイトル</li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
            </ul>
            <ul>
                <li class="title">タイトル</li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
            </ul>
            <ul>
                <li class="title">タイトル</li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
            </ul>
            <ul>
                <li class="title">タイトル</li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
                <li><a href="#">メニューサンプル</a></li>
            </ul>
        </div>
        <!--/#footermenu-->

        <div id="copyright">
            <small>Copyright&copy; <a href="index.html">サンプル不動産</a> All Rights Reserved.</small>
            <span class="pr"><a href="https://template-party.com/"
                                target="_blank">《Web Design:Template-Party》</a></span>
        </div>
        <!--/#copyright-->

    </footer>

</div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　800px以下-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr", "menubar-s");
    }
</script>

<!--「物件を借りる」の子メニュー-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr2", "menubar-s2");
    }
</script>

<!--「物件を買う」の子メニュー-->
<script>
    if (OCwindowWidth() <= 800) {
        open_close("menubar_hdr3", "menubar-s3");
    }
</script>

</body>
</html>
