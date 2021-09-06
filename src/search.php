<?php /* if (!strpos($_SERVER['PHP_SELF'], "search.php")) {
    include_once('ajax/aedit.php');

    $log = $bdd->query("SELECT DISTINCT `tagname` FROM tags ORDER BY `tagname` ASC;");
    $tags = $log->fetchAll();
    $restag = "";
    foreach ($tags as $key => $value) {
        $restag .= "<option value='".$value['tagname']."'>".$value['tagname']."</option>";
    // } */
    ?>
    <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/profile.css">
<link rel="stylesheet" type="text/css" href="../style/global.css">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" type="text/css" href="../style/navbar.css">
</head>
<body>
<h2>Select Your Match</h2>

<p>Choose type of your match that you would prefer.</p>
<form method="POST" action="chat2.php">
    <div id='profile' style='height:auto;'>
        <fieldset>
        <div id='adsearch'>
            - Age between <input id='age1' type="number" name="name"value="18" min="18" max='50'> and <input id='age2' type="number" name="name" value="100" min="18" max='100'><br>
            - Gender <select id="gender" name="gender"><option value="male">Male</option><option value="Female">Female</option></select><br>
            - Location <select id="location" name="location"><option value="johannesburg">Johannesburg</option><option value="pretoria">Pretoria</option><option value="bloemfontein">Bloemfontein</option><option value="capetown">Cape town</option></select><br>
            - Interest <select id="interest" name="interest"><option value="coding">Coding</option><option value="reading">Reading</option><option value="Hiking">Hiking</option><option value="traveling">Traveling</option></select>
        </div>
        </div>
        <input type = "submit" name = "submit" value="Search"/>
        </fieldset>
</form>
        <!-- <select id='filtra' style="margin-top: -25px;  margin-right: 70px;">
            <option selected value="Default">Default</option>
            <option value="Age">Age</option>
            <option value="Popularity Score">Popularity Score</option>
            <option value="Tags">Tags</option>
            <option value="Localisation">Localisation</option>
        </select>
        <select id='order' style="margin-top: -25px; margin-right: 20px;">
            <option selected value="ASC">Asc</option>
            <option value="DESC">Desc</option>
        </select>
        <div id='discopeo'>
        </div>
    </br>
        <div id="arrow">
            <input id='prev' type="button" name="Prev" value="Prev"> - <input id='next' type="button" name="Next" value="Next">
        </div>
    </div>
    </fieldset>
    <script src="js/discover.js"></script>
    <script type="text/javascript">
    $('#searchtag').change(function () {
        var content = "<?php print($restag); ?>";
        var i = 1;
        document.getElementById('nbrtag').innerHTML = "";
        while (i <= document.getElementById('searchtag').value) {
            document.getElementById('nbrtag').innerHTML += ' - <select id="tag'+i+'">'+content+'</select>';
            i++;
            if (i > 5) {
                break;
            }
        }
    });
    </script> 
} -->
<!-- // else {
    // echo "<meta http-equiv='refresh' content='0;URL=../index.php'/>";
// }?> -->
<script type="text/javascript">
    $('#searchtag').change(function () {
        var content = "<?php print($restag); ?>";
        var i = 1;
        document.getElementById('nbrtag').innerHTML = "";
        while (i <= document.getElementById('searchtag').value) {
            document.getElementById('nbrtag').innerHTML += ' - <select id="tag'+i+'">'+content+'</select>';
            i++;
            if (i > 5) {
                break;
            }
        }
    });
    </script> 
</body>
<?php
    include '../includes/footer.php';
 ?>
 </html>
