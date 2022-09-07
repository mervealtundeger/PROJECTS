<html>

<head>
    <title>merhaba</title>
    <style type="text/css">
        body {
            font: 12px Arial;
            background-color: white;
        }

        h1,
        p,
        ul,
        li {
            padding: 0;
            margin: 0;
            list-style-type: none
        }

        .header {
            padding: 10px 0
        }

        #menu {
            background-color: grey;
            overflow: auto
        }

        #menu li {
            float: left;
        }

        #menu li a {
            display: block;
            padding: 5px;
            color: black;
            font-size: 14px;
            font-weight: bold
        }

        #icerik {
            background-color: #fff;
            border: 3px solid #ddd;
            padding: 10px;
            margin-top: 10px
        }

        #footer {
            border-top: 3px solid #dddd;
            padding: 10px 0;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Kosyazilim.com</h1>
        <p>bir php denemesi</p>
    </div>
    <ul id="menu">
        <li><a href="/sablon.php">Anasayfa</a></li>
        <li><a href="/sablon.php?git=hakkimda">Hakkımda</a></li>
        <li><a href="/sablon.php?git=portfolyo">Portfolyo</a></li>
        <li><a href="/sablon.php?git=iletisim2">İletişim</a></li>
    </ul>

    <div id="icerik">
        <?php
        $git = @$_GET["git"];
        switch ($git) {
            case "hakkimda";
                include("hakkimda.php");
                break;
            case "portfolyo";
                include("portfolyo.php");
                break;
            case "iletisim2";
                include("iletisim2.php");
                break;
            default;
                echo '<h1> Hosgeldiniz </h1>
          <p><b> burası anasayfa basit bir deneme yapıyoruz</b></p>
    ';
                break;
        }


        ?>


    </div>
    <div id="footer">
        Tüm hakları saklıdır
    </div>
</body>

</html>