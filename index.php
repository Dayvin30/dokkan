<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link href="style.css" rel="stylesheet">
   <?php include 'category.php'; ?>

</head>

<body>
<div class="container">
    <img class="logo" src="assets/DokkanLogo.jpg">
<h1> Dokkan Category Translator </h1>


<div class="category-container">
    <div class="input"><input class="filter-category" placeholder="Find a category..."></div>
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




