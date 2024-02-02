<?php

//creo la classe movie con 3 istanze: nome, anno, durata
class Movie {

    public $nome;
    public $anno;
    public $durata;


    // creo un costruttore che serve per dare un valore alle istanze ogni volta  che viene creato un oggetto, in questo caso, pirati e nemo

    public function __construct($nome , $anno, $durata)
    {
        
        $this->nome = $nome;
        $this->anno = $anno;
        $this->durata = $durata;
    }


    //creo una funzione che attribuisce agli oggetti i propri attributi
    public function getAttributes(){
        return 
        "titolo: {$this-> nome}, anno:{$this-> anno}, durata:{$this -> durata}";
    }
} 


// a questo punto creo un oggetto che contiene i tre attributi di cui ho bisogno, e li andiamo a stampare richiamando la funzione che ho creato in precedenza 
$pirati = new Movie('pirati dei caraibi', '1900', '200');
echo $pirati -> getAttributes();

echo '<br>';


$nemo = new Movie ('nemo', '1300', '490');
echo $nemo -> getAttributes();


?>