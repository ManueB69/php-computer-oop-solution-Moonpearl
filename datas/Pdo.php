<?php 

/**
 * Réprésente une Bdd
 */
class Bdd
{
     /**
     * Nom de la base de données
     * @var string
     */
    private string $dbname;
    
     /**
     * Username de la base de données
     * @var string
     */
    private string $username;

     /**
     * Mot de passe de la base de données
     * @var string
     */
    private string $password;
   
    
    public function __construct(
        string $dbname,
        string $username,
        string $password
    )

    {
        $this->dbname = "mysql:host=localhost;dbname=".$dbname;
        $this->username = $username;
        $this->password = $password;
    }
    
    // Configure la connexion à la base de données
    static public function connexionBdd(): PDO
    {
        $databaseHandler = new PDO('php-config', 'root', '');
        return $databaseHandler;
    }
    
    // static public function getCpus(): array {
    //     $statement = PDO::connexionBdd()->query('SELECT * FROM `cpus`');
    //     // Récupère tous les résultats de la requête
    //     foreach ($statement->fetchAll() as $cpuData) {
    //         $cpus []= new Cpu(
    //             $cpuData['id'],
    //             $cpuData['name'],
    //             $cpuData['price'],
    //             $cpuData['brand_id'],
    //             $cpuData['clock'],
    //             $cpuData['cores']
    //         );
    //     }
    //     return $cpus;
    // }
}  
//PDO::connexionBdd()->getCpus
?>

