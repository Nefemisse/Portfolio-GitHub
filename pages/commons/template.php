<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <?php require("menu.php"); ?>
    <?= $content ?>
    <?php require("footer.php") ?>
</body>

<script src="../style/node_modules/jquery/dist/jquery.slim.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<!-- <script src="../style/js/popper.min.js"></script> -->
<script src="../style/js/bootstrap.min.js"></script>
<script>
    $(window).scroll(function() {
        let top_of_element = $("#temoignages").offset().top;
        let bottom_of_element =
            $("#temoignages").offset().top + $("#temoignages").outerHeight();
        let top_of_screen = $(window).scrollTop();
        let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
            $(".temoignage1").addClass("animationTemoignage1");
            $(".temoignage2").addClass("animationTemoignage2");
            $(".temoignage3").addClass("animationTemoignage3");
            $(".temoignage4").addClass("animationTemoignage4");
            $(".temoignage5").addClass("animationTemoignage5");
            $(".temoignage6").addClass("animationTemoignage6");
        }
    });
</script>

</html>