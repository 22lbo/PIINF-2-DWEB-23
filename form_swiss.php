<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire "Swiss"</title>
    <meta charset="UTF-8">
    <style>
        html {
            margin:0px;
            padding:0px;
            width:auto;
        }
        body {
            width:500px;
            margin-left: auto;
            margin-right:auto;
        }
        .text {
            display:inline;
            font-weight:bold;
        }
        .boxes{
            margin-left:20px;
        }
        .checkbox {
            margin-top: 30px;
        }
        .send_button{
            color:
            float:center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    define("depart", "Genève");
    $destinations = array("ADL"=>"Adélaïde","ALC"=>"Alicante","ATH"=>"Athenes","ATL"=>"Atlanta","BUE"=>"Buenos Aires","BSL"=>"Bâle","BCN"=>"Barcelone","BKK"=>"Bangkok",
        "CPH"=>"Copenhague","CLE"=>"Cleveland","CPT"=>"Le Cap","DBV"=>"Dubrovnik","DUB"=>"Dublin","DEN"=>"Denver","EDI"=>"Edimbourg","FLR"=>"Florence",
        "FUE"=>"Fuerteventura","GOT"=>"Goteborg","GVA"=>"Genève","GLA"=>"Glasgow","HAM"=>"Hambourg","HEL"=>"Helsinki","HNL"=>"Honolulu","HKG"=>"Hong Kong","IBZ"=>"Ibiza",
        "IND"=>"Indianapolis","INN"=>"Innsbruck","JNB"=>"Johannesburg","KWI"=>"Kuwait","IEV"=>"Kiev","LON"=>"Londres","LAX"=>"Los Angeles","LIS"=>"Lisbonne",
        "MOW"=>"Moscou","MLA"=>"Malte","MUC"=>"Munich","NYC"=>"New York","NBO"=>"Nairobi","NAS"=>"Nassau","ORL"=>"Orlando","OSA"=>"Osaka","ODS"=>"Odessa","PAR"=>"Paris",
        "PRG"=>"Prague","YQB"=>"Quebec","ROM"=>"Rome","RIO"=>"Rio de Janeiro","REK"=>"Reykjavik","SFO"=>"San Francisco","SOF"=>"Sofia","SYD"=>"Sydney","TCI"=>"Ténérife",
        "TYO"=>"Tokyo","YTO"=>"Toronto","UME"=>"Umea","VCE"=>"Venise","YVR"=>"Vancouver","WAM"=>"Varsovie","WAS"=>"Washington","WLG"=>"Wellington","WRO"=>"Wroclaw",
        "SIA"=>"Xian","XMN"=>"Xiamen","YAO"=>"Yaoundé","ZHR"=>"Zurich","ZTH"=>"Zakynthos");
    $dateD = date("Y-m-d");
    $dateR = date("Y-m-d", strtotime("tomorrow"));
    echo "<img src='.\logo-swiss-2x.png' alt='SWISS airline logo' height='100px'>";
    echo "<h2>Réservez votre vol</h2>";
    echo "<form action='result.php' method='post'>";
        echo "<div class='text'>De</div>";
        echo "<select class='boxes' name='depart'>";
            echo "<option >".depart."</option>";
        echo "</select>";
        echo "<div class='text' class='secondRow'>À</div>";
        echo "<select class='boxes' name='destination'>";
            foreach($destinations AS $key => $value) {
                echo "<option value='$key'>".$value."</option>";
            }
        echo "</select>";

        echo "<br>";
        echo "<div class='text'>Vol Aller</div>";
        echo "<input class='boxes' type='date' name='date_depart' value=$dateD>";
        echo "<div class='text'class='secondRow'>Vol Retour</div>";
        echo "<input class='boxes' type='date' name='date_arrivee' value=$dateR>";

        $categories = array("cat_1" => "Adultes","cat_2" => "Enfants","cat_3" => "Bébés");
        foreach($categories AS $key => $value) {
            echo "<br>";
            $passValue = 0;
            if ($key == "cat_1") {
                $passValue = 1;
            }
            echo "<div class='text'>$value</div> <input class='boxes' type='text' name='cat_1' value='$passValue'>";
        }

        echo "<br>";
        echo "<input class='checkbox' type='checkbox' name='reserver_siege' value='1'>Réserver votre siège ?";
        echo "<br>";
        echo "<input class='send_button' type='submit' name='rechercher' value='Rechercher votre Vol'>";
    echo "</form>";
    ?>
</body>
</html>