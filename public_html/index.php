<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WEBサイトのディスクリプション"/>
    <!-- ページタイトル -->
    <title>shakevo(しゃけほっけ) - portfolio site</title>
    <!-- WEBフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="styles.css">
    <!-- faviconのリンク -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body id="top">
    <header>
        <!-- ヘッダーのロゴ画像リンク -->
        <a href="https://portfolio.comilky.com/" target="_blank">
            <img src="img/example.png" alt="ロゴ画像">
        </a>
        <span class="header-text">portfolio site.</span>
        <!--
        ナビゲーション付けたくなったらこれを使う(記述例)
        <nav>
            <ul>
                <li><a href="#introduction">はじめに</a></li>
                <li><a href="#environment">開発環境</a></li>
                <li><a href="#values">バリュー</a></li>
                <li><a href="#benefits">福利厚生</a></li>
                <li><a href="#jobs">求人情報</a></li>
            </ul>
        </nav>
        -->
    </header>
    <main>
        <section id="ccopy">
            <h1>しゃけほっけ</h1>
        </section>
        <section id="introduction">
            <p>shakevo(しゃけほっけ)のポートフォリオサイトです。</p>
            <p>経歴やスキルなどを簡潔にまとめています。</p>
            <!-- アコーディオン -->
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">whoami(経歴概略)</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>1996年生まれ / 山形県出身</p>
                        <p>中学生くらいまで税理士を目指していたが、高校で簿記よりもプログラミングの方が楽しいことに気が付きシステムエンジニアを目指し始める。大学でコンピューターサイエンスを学んだことをキッカケにサーバー&ネットワーク分野の面白さにハマり、技能五輪全国大会に代表選手として出場。</p>
                        <p>新卒入社した地元のソフトウェア会社でソフトウェアエンジニアとなり東北6県の製造業をターゲットとした生産管理システムやERP機能の開発に2年間従事し、どうしてもインフラエンジニアになってみたくなり2018年に上京。</p>
                        <p>WEBマーケティング会社のフルスタックエンジニア兼SREとして参画、開発と基盤構築に従事しリードエンジニアとエンジニアリングマネージャーを務めたのち、2023年より同社の事業責任者としてプロダクトの企画開発を推進する。</p>
                    </div>
                </div>
                <br>
            </div>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="environment">
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="devel">
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <img src="img/example.png" alt="画像呼び出し例(width100%にする)" width="100%">
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="model">
            <h2>大きい見出しH2</h2>
            <!-- bold-textクラスは01から順番に大きい太字の文字になるスタイル -->
            <h3>span class bol-textの利用例</h3>
            <p>本文本文本文本文本文<span class="bold-text01">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>
            <p>本文本文本文本文本文<span class="bold-text02">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>
            <p>本文本文本文本文本文<span class="bold-text03">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="values">
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="evaluation">
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="benefits">
            <h2>大きい見出しH2</h2>
            <p>リストも使える、リストの利用例</p>
            <h3>小さい見出しH3</h3>
            <p>
                <h3>休暇・働き方</h3>
                <ul>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                </ul>
            </p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="jobs">
            <h2>大きい見出しH2</h2>
            <h3>小さい見出しH3</h3>
            <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
            <a href="#top">ページトップに戻る</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 shakevo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
