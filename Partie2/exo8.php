<h1>Exercice8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</P>
<h2>Exemple :</h2>
<p>repeterImage($url,4)</P>


<h3>Résultat</h3>



<?php
    $url = " http://my.mobirise.com/data/userpic/764.jpg";

    $nFois = 4;

    echo repeterImage($url,$nFois);


    function repeterImage($url,$nFois){


        $result="";


        foreach (range(1,$nFois)as $image) {

        $result.="<img src= '$url'>";

    }


    return $result;


}
