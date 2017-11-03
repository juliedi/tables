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
                <li><a href="index3.html">Exercice 3</a></li>
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
                    <option value="1">table de 1</option>
                    <option value="2">table de 2</option>
                    <option value="3">table de 3</option>
                    <option value="4">table de 4</option>
                    <option value="5">table de 5</option>
                    <option value="6">table de 6</option>
                    <option value="7">table de 7</option>
                    <option value="8">table de 8</option>
                    <option value="9">table de 9</option>
                    <option value="10">table de 10</option>
                </select>
                
                <div>
                    <input type="reset" value="Annuler"></input>
                    <input type="submit" value="Question au hasard"></input>
                </div>
            </div>
            <div id="combien">
            <?php
            $choix = $_POST["tables"];
            $hasard = mt_rand(1, 10);
            {
            echo "Combien font :".$choix."x".mt_rand(1, 10)."?";
            }
            ?>
            </div>
        </form>
        <form method="post" action="#">
        <textarea name="answer" id="" cols="30" rows="2"></textarea>
        <div>
            <input type="reset" value="Annuler"></input>
            <input type="submit" value="Tester ma réponse"></input>
        </div>
        </form>
    </section>
   
</body>
</html>

