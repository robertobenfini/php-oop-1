<?php

    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $prezzo;

        function __construct($titolo, $genere, $anno, $prezzo){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->prezzo = $prezzo;
        }

        public function setPrezzo($prezzo){
            if($this->anno > 2011){
                $this->prezzo = 20;
            }
            else{
                $this->prezzo = 10;
            }
        }

        public function getPrezzo(){
            return $this->prezzo;
        }
    }

    $fastX = new Movie('Fast and Furious 10', 'Azione', '2023', 0);
    $fastX->setPrezzo($fastX->prezzo);

    $inception = new Movie('Inception', 'Thriller', '2010', 0);
    $inception->setPrezzo($inception->prezzo);

    $ilpadrino = new Movie('Il Padrino', 'Commedia, Drammatico', '1972', 0);
    $ilpadrino->setPrezzo($ilpadrino->prezzo);

    $interstellar = new Movie('Interstellar', 'Fantasia', '2014', 0);
    $interstellar->setPrezzo($interstellar->prezzo);

    echo $fastX->titolo.'<br/>';
    echo $fastX->genere.'<br/>';
    echo $fastX->anno.'<br/>';
    echo $fastX->prezzo.'<hr/>';

    echo $inception->titolo.'<br/>';
    echo $inception->genere.'<br/>';
    echo $inception->anno.'<br/>';
    echo $inception->prezzo.'<hr/>';

    echo $ilpadrino->titolo.'<br/>';
    echo $ilpadrino->genere.'<br/>';
    echo $ilpadrino->anno.'<br/>';
    echo $ilpadrino->prezzo.'<hr/>';

    echo $interstellar->titolo.'<br/>';
    echo $interstellar->genere.'<br/>';
    echo $interstellar->anno.'<br/>';
    echo $interstellar->prezzo.'<hr/>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>