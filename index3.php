<!DOCtYPE html>
<html lang="fr">
<head>
    <meta charset="UtF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Atelier PHP</title>
</head>
<body>

    <header>
        <h1>Les tables de multiplication</h1>
        <nav class="nav nav-pills nav-justified">
            <ul>
                <li><a href="index.html">Exercice 1</a></li>
                <li><a href="index2.html">Exercice 2</a></li>
                <li><a href="index3.php">Exercice 3</a></li>
                <li><a href="index4.html">Exercice 4</a></li>
            </ul> 
        </nav>
    </header>

    <section class="row"> 
        <h2>Etape 3</h2>
        <form method="post" action="#">
            <div id="container">
                <p> Choisis dans la liste la table que tu veux apprendre ou réviser</p>
                <select name="tables">
                    <option class="listed" value="1">Table de 1</option>
                    <option class="listed" value="2">Table de 2</option>
                    <option class="listed" value="3">Table de 3</option>
                    <option class="listed" value="4">Table de 4</option>
                    <option class="listed" value="5">Table de 5</option>
                    <option class="listed" value="6">Table de 6</option>
                    <option class="listed" value="7">Table de 7</option>
                    <option class="listed" value="8">Table de 8</option>
                    <option class="listed" value="9">Table de 9</option>
                    <option class="listed" value="10">Table de 10</option>
                </select>
                <div>
                    <input class="button"type="reset" value="Annuler"></input>
                    <input class="button" type="submit" value="Question au hasard"></input>
                </div>
            </div>
        </form>

        <div id="combien">
        <?php
        if(isset($_POST['tables'])) :
            $choix = $_POST["tables"];
            $hasard = mt_rand(1, 10);
            $resultat = $choix * $hasard;
            {
            echo "Combien font : ".$choix."x".mt_rand(1, 10)."?";
            }
            ?>
        </div>

        <form method="post" action="#">
        <div>
            <input type="hidden" value="<?php echo $resultat; ?>" name="essai"></input>
            <input type="text"  name="answer"></input>
            <input class="button" type="reset" value="Annuler"></input>
            <input class="button" type="submit" value="Tester ma réponse"></input>
        </div>
        </form>

        <?php endif; ?>
    </section>
   
</body>
</html>

