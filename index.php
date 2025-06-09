<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="/script.js"></script>
    <script src="https://cdn.counter.dev/script.js" data-id="f358037a-2c3a-4d3b-8c38-85172e683f9e" data-utcoffset="2"></script>
    <link href="/style.css" rel="stylesheet">
    <?php
    function getCategory()
    {
        return [
            // Orange: Sagas
            'DB Saga' => '少年編',
            'Saiyan Saga' => 'サイヤ人編',
            'Planet Namek Saga' => 'ナメック星編',
            'Android / Cell Saga' => '人造人間/セル編',
            'Majin Buu Saga' => '魔人ブウ編',
            'Future Saga' => '未来編',
            'Universal Survival Saga' => '宇宙サバイバル編',
            'Shadow Dragon Saga' => '邪悪龍編',

            // Green: Beings & Associations
            'Pure Saiyains' => '純粋サイヤ人',
            'Hybrid Saiyans' => '混血サイヤ人',
            'Earthlings' => '地球人',
            'Namekians' => 'ナメック星人',
            'Androids' => '人造人間',
            'Artificial Lifeforms' => '人工生命体',
            "Goku's Family" => '孫悟空の系譜',
            "Vegeta's Family" => 'ベジータの系譜',
            'Wicked Bloodline' => '最図の一族',
            'Youth' => '少年・少女',
            'Peppy Gals' => 'ピチピチギャル',

            // Yellow: Transformations & Techniques
            'Super Saiyan' => '超サイヤ人',
            'Super Saiyan 2' => '超サイヤ人２',
            'Super Saiyan 3' => '超サイヤ人３',
            'Power Beyond Super Saiyan' => '超サイヤ人を超えた力',
            'Fusion' => 'フュージョン',
            'Potara' => 'ポタラ',
            'Fused Fighters' => '融合/合体戦士',
            'Giant Form' => '巨大化',
            'Transformation Boost' => '変身強化',
            'Power Absorption' => 'カの吸収',
            'Kamehameha' => 'かめはめ波',

            // Cyan: Sources of Strength
            'Realm of Gods' => '神次元',
            'Full Power' => 'フルパワー',
            'Giant Ape Power' => '大猿パワー',
            'Majin Power' => '魔人の力',
            'Uncontrollable Power' => '制御不能の力',
            'Powerful Comeback' => '再起する力',
            'Power of Wishes' => '願いの力',
            'Demonic Power' => '魔の力',
            'Miraculous Awakening' => '奇跡の覚醒',
            'Corroded Body and Mind' => '心身の侵食',
            'Rapid Growth' => '急激な成長',
            'Mastered Evolution' => '体得した進化',
            'Time Limit' => '時間制限',
            'Final Trump Card' => '最後の切り札',

            // Blue: Inter-Character Relationships
            'Worthy Rivals' => '好敵手',
            'Sworn Enemies' => '永遠の宿敵',
            'Joined Forces' => 'コンビネーション',
            'Bond of Parent and Child' => '親子の絆',
            "Siblings' Bond" => '兄弟の絆',
            'Bond of Friendship' => '親友の絆',
            'Bond of Master and Disciple' => '師弟の絆',

            // Purple: Groups & Teams
            'Ginyu Force' => 'ギニュー特戦隊',
            'Team Bardock' => 'バーダックチーム',
            'Universe 6' => '第6宇宙',
            'Representatives of Universe 7' => '第7宇宙代表',
            'Universe 11' => '第11宇宙',
            'GT Heroes' => 'GT HERO',
            'GT Bosses' => 'GT BOSS',
            'Super Heroes' => '超HERO',
            'Super Bosses' => '超BOSS',
            'Movie Heroes' => '劇場版HERO',
            'Movie Bosses' => '劇場版BOSS',
            'Turtle School' => '亀仙流',
            'World Tournament' => '天下一武道会',
            'Tournament Participants' => '大会出場者',

            // Pink: Warriors & Fighters
            'Earth-Bred Fighters' => '地球育ちの戦士',
            'Low-Class Warrior' => '下級戦士',
            'Gifted Warriors' => '天才戦士',
            'Otherworld Warriors' => 'あの世の戦士',
            'Resurrected Warriors' => '復活戦士',
            'Space-Travelling Warriors' => '宇宙をわたる戦士',
            'Time Travellers' => '時空を超えし者',
            'Dragon Ball Seekers' => 'ドラゴンボールを求めし者',
            'Successors' => '継承する者',
            'Storied Figures' => '語り継がれし者',
            'Legendary Existence' => '伝説の存在',
            'Saviors' => '救世主',
            'Defenders of Justice' => '正義の味方',
            'Earth-Protecting Heroes' => '地球を守りし英雄',

            // Green: Motivation & Actions
            'Revenge' => 'リベンジ',
            'Mission Execution' => '任務遂行',
            'Target: Goku' => 'ターゲット孫悟空',
            'Terrifying Conquerors' => '恐怖の征服',
            'Inhuman Deeds' => '悪逆非道',
            'Planetary Destruction' => '惑星破壊',
            'Exploding Rage' => '怒り爆発',
            'Connected Hope' => 'つながる希望',
            'Entrusted Will' => '託された意志',
            'All-Out Struggle' => '力戦奮闘',
            'Battle of Wits' => '頭脳戦',
            'Accelerated Battle' => '高速戦闘',
            'Battle of Fate' => '命運をかけた闘い',
            'Heavenly Events' => '天界の出来事',
            'Special Pose' => 'スペシャルポーズ',
            'Worldwide Chaos' => '世界の混乱',

            // D. Blue: Other
            'Crossover' => 'クロスオーバー',
            'Dragon Ball Heroes' => 'DBヒーローズ'
        ];
    }
    ?>


?>

</head>

<body>
<div class="container">
    <img class="logo" src="/DokkanLogo.png" alt="logo">
<h1> Dokkan Category Translator </h1>
    <a class="source-link" href="https://www.reddit.com/r/DBZDokkanBattle/comments/r10piq/jp_formatted_category_list_for_easy_reading_wiki/" target="_blank">
        🔗 See on Reddit
    </a>

    <div class="input"><input class="filter-category" placeholder="Find a category..."></div>
    <br> <br>

<div class="category-container">

    <?php
    $category = getCategory();

    // Sections et couleurs associées
    $sections = [
        'Sagas (Orange)' => ['DB Saga', 'Saiyan Saga', 'Planet Namek Saga', 'Android / Cell Saga', 'Majin Buu Saga', 'Future Saga', 'Universal Survival Saga', 'Shadow Dragon Saga'],
        'Beings & Associations (Green)' => ['Pure Saiyains', 'Hybrid Saiyans', 'Earthlings', 'Namekians', 'Androids', 'Artificial Lifeforms', "Goku's Family", "Vegeta's Family", 'Wicked Bloodline', 'Youth', 'Peppy Gals'],
        'Transformations & Techniques (Yellow)' => ['Super Saiyan', 'Super Saiyan 2', 'Super Saiyan 3', 'Power Beyond Super Saiyan', 'Fusion', 'Potara', 'Fused Fighters', 'Giant Form', 'Transformation Boost', 'Power Absorption', 'Kamehameha'],
        'Sources of Strength (Cyan)' => ['Realm of Gods', 'Full Power', 'Giant Ape Power', 'Majin Power', 'Uncontrollable Power', 'Powerful Comeback', 'Power of Wishes', 'Demonic Power', 'Miraculous Awakening', 'Corroded Body and Mind', 'Rapid Growth', 'Mastered Evolution', 'Time Limit', 'Final Trump Card'],
        'Inter-Character Relationships (Blue)' => ['Worthy Rivals', 'Sworn Enemies', 'Joined Forces', 'Bond of Parent and Child', "Siblings' Bond", 'Bond of Friendship', 'Bond of Master and Disciple'],
        'Groups & Teams (Purple)' => ['Ginyu Force', 'Team Bardock', 'Universe 6', 'Representatives of Universe 7', 'Universe 11', 'GT Heroes', 'GT Bosses', 'Super Heroes', 'Super Bosses', 'Movie Heroes', 'Movie Bosses', 'Turtle School', 'World Tournament', 'Tournament Participants'],
        'Warriors & Fighters (Pink)' => ['Earth-Bred Fighters', 'Low-Class Warrior', 'Gifted Warriors', 'Otherworld Warriors', 'Resurrected Warriors', 'Space-Travelling Warriors', 'Time Travellers', 'Dragon Ball Seekers', 'Successors', 'Storied Figures', 'Legendary Existence', 'Saviors', 'Defenders of Justice', 'Earth-Protecting Heroes'],
        'Motivation & Actions (Green)' => ['Revenge', 'Mission Execution', 'Target: Goku', 'Terrifying Conquerors', 'Inhuman Deeds', 'Planetary Destruction', 'Exploding Rage', 'Connected Hope', 'Entrusted Will', 'All-Out Struggle', 'Battle of Wits', 'Accelerated Battle', 'Battle of Fate', 'Heavenly Events', 'Special Pose', 'Worldwide Chaos'],
        'Other (Dark Blue)' => ['Crossover', 'Dragon Ball Heroes'],
    ];

    // Mapping des couleurs
    $colors = [
        'Orange' => 'orange',
        'Green' => 'green',
        'Yellow' => 'yellow',
        'Cyan' => 'cyan',
        'Blue' => 'blue',
        'Purple' => 'purple',
        'Pink' => 'pink',
        'Dark Blue' => 'darkblue',
    ];

    // Affichage section par section
    foreach ($sections as $section => $keys) {
        preg_match('/\((.*?)\)/', $section, $match);
        $color = isset($match[1]) ? $match[1] : 'Orange';
        $cssColor = $colors[$color];
        echo "<div class='section-title'>$section</div>";
        foreach ($keys as $key) {
            if (isset($category[$key])) {
                echo "<div class='category {$cssColor}' title='{$category[$key]}' name='{$category[$key]}'>$key</div>";
            }
        }
    }
    ?>

</div>



</div>
</body>




