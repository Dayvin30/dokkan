<head>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet">
   <?php include 'category.php'; ?>

</head>

<body>
<div class="container">
<h1> Dokkan Category Translator </h1>
<img class="logo" src="assets/DokkanLogo.jpg">

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




