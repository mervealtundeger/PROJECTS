<html>
<form action="index.php" method="get">
<body>
<div id="navbarSupportedContent">
<?php
        $git = @$_GET["git"];
        switch ($git) {
            case "anasayfa";
                include("index.php");
                break;
            case "karakterler";
                include("karakterler.php");
                break;
            case "haritalar";
                include("haritalar.php");
                break;
            case "techizat";
            include("techizat.php") ;
            break;
            case "iletisim";
                include("iletisim.php");
                break; 
            default;
                break;
        }

        ?>
</div>
</body> 
   </form>


</html>