<?php 

/**
 * Réprésente un objet Bdd
 */
class Bdd
{
//      /**
//      * Nom de la base de données
//      * @var string
//      */
//     private string $dbname;
    
//      /**
//      * Username de la base de données
//      * @var string
//      */
//     private string $username;

//      /**
//      * Mot de passe de la base de données
//      * @var string
//      */
//     private string $password;
   
    
    // public PDO::__construct(
    //     string $dbname,
    //     string $username,
    //     string $password
    // )

    // {
    //     $this->dbname = "mysql:host=localhost;dbname=".$dbname;
    //     $this->username = $username;
    //     $this->password = $password;
    // }
    
    // Configure la connexion à la base de données
    static public function connexionBdd(): PDO
    {
        $databaseHandler = new PDO("mysql:host=localhost;dbname=php-config", 'root', '');
        return $databaseHandler;
    }
    
    // // Récupère tous les enregistrements de la table cpus
    // static public function getCpus(): array {
    //     $statement = Bdd::connexionBdd()->query('SELECT * FROM `cpus`');
    //     $cpus= $statement->fetchAll();
    //     return $cpus;
    // }
    
    // Récupère tous les enregistrements de la table cpus
    static public function getTableAll(string $table): array {
        $statement = Bdd::connexionBdd()->query('SELECT * FROM '.$table);
        $items= $statement->fetchAll();
        return $items;
    }

      // Récupère tous les enregistrements de la table cpus
      static public function getTableById(string $table, int $id): array {
        $statement = Bdd::connexionBdd()->prepare('SELECT * FROM '.$table.' WHERE `id` = :id');
        $statement->execute([ ':id' => $id ]);
        $item= $statement->fetch();
        return $item;
    }
}  

?>

