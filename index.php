<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="/script.js"></script>
    <link href="/style.css" rel="stylesheet">
    <?php
    function getCategory()
    {
        return [
            'Accelerated Battle' => '高速戦闘',
            'All-out Struggle' => '力戦奮闘',
            'Androids' => '人造人間',
            'Androids/Cell Saga' => '人造人間/セル編',
            'Artificial Life Forms' => '人工生命体',
            'Battle of Fate' => '命運をかけた闘い',
            'Battle of Wits' => '頭脳戦',
            'Bond of Friendship' => '親友の絆',
            'Bond of Master and Disciple' => '師弟の絆',
            'Bond of Parents and Child' => '親子の絆',
            'Connected Hope' => 'つながる希望',
            'Corroded Body and Mind' => '心身の侵食',
            'Crossover' => 'クロスオーバー',
            'DB Saga' => '少年編',
            'Defenders of Justice' => '正義の味方',
            'Dragon Ball Heroes' => 'DBヒーローズ',
            'Dragon Ball Seekers' => 'ドラゴンボールを求めし者',
            'Earth-Bred Fighters' => '地球育ちの戦士',
            'Earthlings' => '地球人',
            'Entrusted Will' => '託された意志',
            'Exploding Rage' => '怒り爆発',
            'Final Trump Card' => '最後の切り札',
            'Full Power' => 'フルパワー',
            'Fused Fighters' => '融合/合体戦士',
            'Fusion' => 'フュージョン',
            'Future Saga' => '未来編',
            'GT Bosses' => 'GT BOSS',
            'GT Heroes' => 'GT HERO',
            'Giant Ape Power' => '大猿パワー',
            'Giant Form' => '巨大化',
            'Gifted Warriors' => '天才戦士',
            'Ginyu Force' => 'ギニュー特戦隊',
            'Goku\'s Family' => '孫悟空の系譜',
            'Heavenly Events' => '天界の出来事',
            'Hybrid Saiyans' => '混血サイヤ人',
            'Inhuman Deeds' => '悪逆非道',
            'Joined Forces' => 'コンビネーション',
            'Kamehameha' => 'かめはめ波',
            'Legendary Existence' => '伝説の存在',
            'Low-Class Warrior' => '下級戦士',
            'Majin Buu Saga' => '魔人ブウ編',
            'Majin Power' => '魔人の力',
            'Mastered Evolution' => '体得した進化',
            'Miraculous Awakening' => '奇跡の覚醒',
            'Movie Bosses' => '劇場版BOSS',
            'Movie Heroes' => '劇場版HERO',
            'Namekians' => 'ナメック星人',
            'Otherworld Warriors' => 'あの世の戦士',
            'Peppy Gals' => 'ピチピチギャル',
            'Planet Namek Saga' => 'ナメック星編',
            'Planetary Destruction' => '惑星破壊',
            'Potara' => 'ポタラ',
            'Power Absorption' => 'カの吸収',
            'Power Beyond Super Saiyan' => '超サイヤ人を超えた力',
            'Power of Wishes' => '願いの力',
            'Powerful Comeback' => '再起する力',
            'Pure Saiyans' => '純粋サイヤ人',
            'Rapid Growth' => '急激な成長',
            'Realm of Gods' => '神次元',
            'Representative of Universe 7' => '第7宇宙代表',
            'Resurrected Warriors' => '復活戦士',
            'Revenge' => 'リベンジ',
            'Saiyan Saga' => 'サイヤ人編',
            'Saviors' => '救世主',
            'Shadow Dragon Saga' => '邪悪龍編',
            'Sibling\'s Bond' => '兄弟の絆',
            'Space-Traveling Warriors' => '宇宙をわたる戦士',
            'Special Pose' => 'スペシャルポーズ',
            'Storied Figures' => '語り継がれし者',
            'Super Bosses' => '超BOSS',
            'Super Heroes' => '超HERO',
            'Super Saiyan' => '超サイヤ人',
            'Super Saiyan 2' => '超サイヤ人２',
            'Super Saiyan 3' => '超サイヤ人３',
            'Super Saiyans' => '超サイヤ人',
            'Sworn Enemies' => '永遠の宿敵',
            'Target: Goku' => 'ターゲット孫悟空',
            'Team Bardock' => 'バーダックチーム',
            'Terrifying Conquerors' => '恐怖の征服',
            'Time Limit' => '時間制限',
            'Time Travelers' => '時空を超えし者',
            'Tournament Participants' => '大会出場者',
            'Transformation Boost' => '変身強化',
            'Turtle School' => '亀仙流',
            'Uncontrollable Power' => '制御不能の力',
            'Universe 11' => '第11宇宙',
            'Universe 6' => '第6宇宙',
            'Universe Survival Saga' => '宇宙サバイバル編',
            'Vegeta\'s Family' => 'ベジータの系譜',
            'Wicked Bloodline' => '最図の一族',
            'World Tournament' => '天下一武道会',
            'Worldwide Chaos' => '世界の混乱',
            'Worthy Rivals' => '好敵手',
            'Youth' => '少年・少女'
        ];
    }
    ?>

?>

</head>

<body>
<div class="container">
    <img class="logo" src="/DokkanLogo.png" alt="logo">
<h1> Dokkan Category Translator </h1>
    <div class="input"><input class="filter-category" placeholder="Find a category..."></div>
    <br> <br>

<div class="category-container">

    <?php
    $category = getCategory();
    foreach($category as $key => $value) {?>

    <div name="<?php echo $value ?>" class="category"><?php echo $key ?></div>
    <input class="invisible-input" style="display: none">


<?php
}

?>
</div>



</div>
</body>




