<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
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
            <img src="img/favicon.png" alt="ロゴ画像">
        </a>
        <span class="header-text">portfolio site.</span>
    </header>
    <main>
        <!--
        <section id="ccopy">
            <h1><img src="img/qr_portfolio.png" alt="QRコード" width="100%"></h1>
        </section>
        -->
        <section id="qrcode">
            <h1><img src="img/qr_portfolio.png" alt="QRコード" width="100%"></h1>
        </section>
        <section id="introduction">
            <p>shakevo(しゃけほっけ)のポートフォリオサイトです。職務経歴やスキルなどを簡潔にまとめています。</p>
            <!-- 経歴概略（アコーディオン） -->
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">whoami(経歴概略)</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>1996年生まれ / 山形県出身・関東在住</p>
                        <p>大学でコンピューターサイエンスを学んだことをキッカケにサーバー&ネットワーク分野の面白さにハマり、Cisco機器を自分で買いそろえネットワーク構築に没頭。ネットワーク構築の全国大会に県代表選手として出場。</p>
                        <p>新卒入社した地元のソフトウェア会社でソフトウェアエンジニアとなり東北6県の製造業をターゲットとした生産管理システムやERP機能の開発に2年間従事するも、インフラ技術にも実務で携わってみたくなり2018年に上京。</p>
                        <p>WEBマーケティング会社のフルスタックエンジニア兼SREとして参画。開発と基盤構築に従事し、部長級ロールでリードエンジニアとエンジニアリングマネージャーを務めたのち、2023年より同社の事業責任者としてプロダクトの企画開発を推進する。</p>
                        <p>2024年10月より現職。</p>
                    </div>
                </div>
                <br>
            </div>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="skillset">
            <h2>スキル</h2>
            <!-- 経験業界 -->
            <h3>経験業界</h3>
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">業界</th>
                            <th scope="col">経験</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">SaaS</th>
                            <td>0.1年</td>
                        </tr>
                        <tr>
                            <th scope="row">AI・データ分析</th>
                            <td>3年</td>
                        </tr>
                        <tr>
                            <th scope="row">SIer</th>
                            <td>2年</td>
                        </tr>
                        <tr>
                            <th scope="row">WEBマーケティング</th>
                            <td>3.5年</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <!-- 経験ロール -->
            <h3>経験ロール</h3>
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">職種</th>
                            <th scope="col">経験</th>
                            <th scope="col">詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">エンジニアリングマネージャー</th>
                            <td>3年</td>
                            <td>プロダクト開発組織立上げ, 評価制度構築, 1on1による目標伴走, エンジニア採用, インナーブランディング</td>
                        </tr>
                        <tr>
                            <th scope="row">プロダクトマネージャー</th>
                            <td>1年</td>
                            <td>企画立ち上げ,　要求定義, ユーザーヒアリング, プロダクトバックログ作成, 合意形成</td>
                        </tr>
                        <tr>
                            <th scope="row">プロジェクトマネージャー</th>
                            <td>3.5年</td>
                            <td>プロジェクトマネジメント体制構築, 進捗可視化, スケジュール調整, プロジェクト憲章, メンバーアサイン</td>
                        </tr>
                        <tr>
                            <th scope="row">ラインマネージャー</th>
                            <td>3年</td>
                            <td>決裁, 稟議, 就業規則作成, シフト調整, 意思決定, チーム発足, 年間目標作成・進捗管理</td>
                        </tr>
                        <tr>
                            <th scope="row">アーキテクト</th>
                            <td>4年</td>
                            <td>システム設計, 基盤設計, DB設計, 画面設計, ライフサイクル管理</td>
                        </tr>
                        <tr>
                            <th scope="row">リードエンジニア</th>
                            <td>1.5年</td>
                            <td>顧客折衝, 技術指導, 技術選定, 新人教育, 品質責任, 目標設計</td>
                        </tr>
                        <tr>
                            <th scope="row">フルスタックエンジニア</th>
                            <td>3年</td>
                            <td>要件定義, 設計, 実装, リリース, テスト, 保守, 運用, 移管, リプレース</td>
                        </tr>
                        <tr>
                            <th scope="row">ソフトウェアエンジニア</th>
                            <td>3年</td>
                            <td>WEBアプリケーション開発(PHP), ネイティブアプリケーション開発(C#, VB), バッチ開発(PHP, Shell)</td>
                        </tr>
                        <tr>
                            <th scope="row">クラウドエンジニア</th>
                            <td>4年</td>
                            <td>基盤設計, 基盤構築, コスト管理, AWSCloud導入</td>
                        </tr>
                        <tr>
                            <th scope="row">SRE</th>
                            <td>2.5年</td>
                            <td>障害対応, 攻撃対応, 冗長化, バックアップ, アップデート, サービスレベル定義, 自動化(Python, PHP, Shell, AWK)</td>
                        </tr>
                        <tr>
                            <th scope="row">コーポレートエンジニア</th>
                            <td>3年</td>
                            <td>ヘルプデスク, 資産管理, オフィス設計, ネットワーク構築, ファシリティ管理, セキュリティ対応</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <!-- ソフトスキル -->
            <h3>ソフトスキル</h3>
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">スキル</th>
                            <th scope="col">経験</th>
                            <th scope="col">詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ピープルマネジメント</th>
                            <td>3年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">プロジェクトマネジメント</th>
                            <td>3年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">テクノロジーマネジメント</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">プロダクトマネジメント</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">リーダーシップ</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">コミュニケーション能力</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">タイムマネジメント</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">勤怠</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">ファシリテーション</th>
                            <td>*年</td>
                            <td>ああああああああああああああああああああああ</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <!-- ハードスキル -->
            <h3>ハードスキル</h3>
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">スキル</th>
                            <th scope="col">経験</th>
                            <th scope="col">詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">AWS</th>
                            <td>6年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Google Cloud</th>
                            <td>6年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">C#</th>
                            <td>3年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">PHP</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Python</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">VB</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Shell</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">AWK</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">JavaScript</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">.NETFramework</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Laravel</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">FuelPHP</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Django</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">SQL</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">DBFlute</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Windows Server</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Linux(RedHad系)</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Linux(Debian系)</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">Apache</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">MySQL</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">PostgreSQL</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">OracleDB</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">SQLServer</th>
                            <td>*年</td>
                            <td>あああああああああああああああああああああああ</td>
                        </tr>
                        <tr>
                            <th scope="row">簿記</th>
                            <td>0.1年</td>
                            <td>貸借対照表を読み合わせる必要のあるミーティング, 日商３級程度の基礎知識（全商簿記２級取得）</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <p>※ 最終更新2024/07/31 ※</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="cv">
            <h2>経歴</h2>
            <h3>職務経歴書・レジュメ</h3>
            <p><a href="https://drive.google.com/drive/folders/1tfEOdNoKdHUaJl-afpFI9j8oKA4C_yum" target="_blank">リンク(Google Driveを開きます)</a></p>
            <h3>所属概要</h3>
            <p>所属企業の概要です。</p>
            <!-- 株式会社カオナビ（アコーディオン） -->
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">
                            株式会社カオナビ (現職)
                        </span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <img src="img/logo_kaonavi.png" alt="株式会社カオナビのロゴ" width="100%">
                        <p><span class="bold-text03">2024.10-</span></p>
                        <p>クラウド人材管理システム「カオナビ」を提供するSaaS企業。</p>
                        <p><a href="https://corp.kaonavi.jp/" target="_blank">https://corp.kaonavi.jp/</a></p>
                        <p>「カオナビ」の機能開発ディレクション、プロダクトマネジメントを担当。</p>

                        <!-- 所属中の配属期間内訳 -->
                        <p>
                                <table>
                                <thead>
                                    <tr>
                                    <th scope="col">期間</th>
                                    <th scope="col">ロール</th>
                                    <th scope="col">所属</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2024.10-</th>
                                        <td>プロダクトマネージャー, 開発ディレクター</td>
                                        <td>プロダクトデベロップメント本部</td>
                                    </tr>
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
                <br>
            </div>
            <!-- 株式会社ブルームテクノロジー（アコーディオン） -->
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">
                            株式会社ブルームテクノロジー
                        </span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <img src="img/logo_bloomt.jpg" alt="株式会社ブルームテクノロジーのロゴ" width="100%">
                        <p><span class="bold-text03">2018.05-2024.09</span></p>
                        <p>東京都目黒区のAI・データ分析企業。データプラットフォーム構築やデータアナリティクスをクライアントに提供する。エンジニアチームにてプロダクト開発によりデータの横断的提供をリード。</p>
                        <p><a href="https://bloom-t.co.jp/" target="_blank">https://bloom-t.co.jp/</a></p>
                        <p>リードエンジニア、アーキテクト、エンジニアリングマネージャー、プロダクトマネージャーを担当。プロダクト企画・立上げやエンジニア組織の構築・採用など0→1フェーズでのマネジメントを担当。その他 情シス部門の責任者としてセキュリティやファシリティ統括なども兼任。</p>
                        <p>2021年10月 株式会社ゼロマーケティングから社名変更、WEBマーケティング事業から事業変更（2024年12月 株式会社コアテックと吸収合併）。</p>
                        <p><a href="https://core-tech.jp" target="_blank">https://core-tech.jp</a></p>
                        
                        <!-- 所属中の配属期間内訳 -->
                        <p>
                            <table>
                                <thead>
                                    <tr>
                                    <th scope="col">期間</th>
                                    <th scope="col">ロール</th>
                                    <th scope="col">所属</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2023.12-2024.09</th>
                                        <td>エンジニアリングマネージャー, プロダクトマネージャー</td>
                                        <td>システム統括部 次長</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2021.10-2023.12</th>
                                        <td>エンジニアリングマネージャー, アーキテクト</td>
                                        <td>インテグレーション事業部 システム統括課 課長</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2021.04-2021.10</th>
                                        <td>プロジェクトマネージャー, アーキテクト</td>
                                        <td>インテグレーション事業部 システム統括課 課長代理</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2020.04-2021.04</th>
                                        <td>アーキテクト, リードエンジニア, クラウドエンジニア, SRE</td>
                                        <td>インテグレーション事業部 開発課 主任</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2019.10-2020.04</th>
                                        <td>フルスタックエンジニア, クラウドエンジニア, SRE</td>
                                        <td>テクニカルサポート部 開発課 副主任</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2018.05-2019.10</th>
                                        <td>フルスタックエンジニア, コーポレートエンジニア</td>
                                        <td>テクニカルサポート課</td>
                                    </tr>
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
                <br>
            </div>
            <!-- 株式会社エム・エス・アイ（アコーディオン） -->
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">
                            株式会社エム・エス・アイ
                        </span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <img src="img/logo_msi.jpg" alt="株式会社エム・エス・アイのロゴ" width="100%">
                        <p><span class="bold-text03">2016.03-2018.04</span></p>
                        <p>山形県のソフトウェア開発企業(独立系SIer)。</p>
                        <p><a href="https://msi-net.co.jp/" target="_blank">https://msi-net.co.jp/</a></p>
                        <p>ソフトウェアエンジニアとしてアプリケーションの要件定義・設計・製造・テスト・リリースを担当。主な担当領域は製造以降。顧客折衝を含む要求定義・納期調整といった調整業務も実施。</p>

                        <!-- 所属中の配属期間内訳 -->
                        <p>
                            <table>
                                <thead>
                                    <tr>
                                    <th scope="col">期間</th>
                                    <th scope="col">ロール</th>
                                    <th scope="col">所属</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2016.03-2018.04</th>
                                        <td>ソフトウェアエンジニア, フルスタックエンジニア</td>
                                        <td>製造ソリューション本部 システムグループ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
                <br>
            </div>

            <h3>資格・免許</h3>
            <!-- 資格 -->
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">年月</th>
                            <th scope="col">資格</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">2021.10</th>
                            <td>G検定</td>
                        </tr>
                        <tr>
                            <th scope="row">2019.01</th>
                            <td>AWS Certified Solutions Architect - Associate</td>
                        </tr>
                        <tr>
                            <th scope="row">2015.11</th>
                            <td>基本情報技術者</td>
                        </tr>
                        <tr>
                            <th scope="row">2014.08</th>
                            <td>普通自動車免許(現5t限定準中型)</td>
                        </tr>
                        <tr>
                            <th scope="row">2012.11</th>
                            <td>剣道三段</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="devel">
            <h2>個人開発など</h2>
            <h3><a href="https://trash-icogen.comilky.com/" target="_blank">適当にfaviconポコポコ作るやつ</a></h3>
            <p>ランダムな色配置の正方形アイコンを自動生成するアイコン自動生成ツールです</p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="external">
            <h2>もっと詳しく</h2>
            <!-- もっと詳しく(外部リンク) -->
            <p>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">サイト</th>
                            <th scope="col">URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Twitter(X)</th>
                            <td><a href="https://x.com/shakevo_/" target="_blank">https://x.com/shakevo_</a></td>
                        </tr>
                        <tr>
                            <th scope="row">note</th>
                            <td><a href="https://note.com/shakevo" target="_blank">https://note.com/shakevo</a></td>
                        </tr>
                        <tr>
                            <th scope="row">GitHub</th>
                            <td><a href="https://github.com/shakevo" target="_blank">https://github.com/shakevo</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Zenn</th>
                            <td><a href="https://zenn.dev/shakevo" target="_blank">https://zenn.dev/shakevo</a></td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <a href="#top">ページトップに戻る</a>
        </section>
        <section id="contact">
            <h2>お問い合わせ</h2>
            <p>大変お手数ですが、お問い合わせは以下フォームよりよろしくお願い申し上げます(shakevo宛にDMが送信されます)。</p>
            <!-- GoogleForm -->
            <p><a href="https://forms.gle/niEpuQou1PE5mS7o8" target="_blank">https://forms.gle/niEpuQou1PE5mS7o8</a></p>
        </section>

        <!-- サンプル -->
        <!--
        <section id="sample">
            <h2>サンプルコード</h2>
            <h3>span class bol-textの利用例</h3>
            <p>本文本文本文本文本文<span class="bold-text01">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>
            <p>本文本文本文本文本文<span class="bold-text02">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>
            <p>本文本文本文本文本文<span class="bold-text03">私たちは常に入社初日の気持ちで居続けます本文本文本文本文本文</span>本文本文本文本文</p>

            <h3>リストの利用例</h3>
            <p>
                <ul>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                </ul>
            </p>

            <h3>画像呼び出し利用例</h3>
            <img src="img/example.png" alt="画像呼び出し例(width100%にする)" width="100%">
            <a href="#top">ページトップに戻る</a>
        </section>
        -->
    </main>
    <footer>
        <p>&copy; 2024 <a href="#top">shakevo</a></p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
