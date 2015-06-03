<?php
ini_set('display_errors', 0);
define('BASE_URL', 'http://localhost/amitgarg/immifinder/');
class connection
{
    protected $db;

    public function __construct()
    {
        try {
            $db_host = 'localhost';  //  hostname
            $db_name = 'playm694_myimmifinder';  //  databasename
            $db_user = 'playm694_finder';  //  username
            $user_pw = 'finder@123';  //  password

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$this->db = $con;
			return $this->db;
        }
        catch (PDOException $err) {
            die("Connection Failed..");  //  terminate connection
        }
    }
}
?>