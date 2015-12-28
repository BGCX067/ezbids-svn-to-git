<?php
  class DB_Core
  {
    private static $dbname = "ezbids";
    private static $servername = "localhost";
    private static $user = "ezbids";
    private static $pwd = "ezbids";

    public function executeQuery($q)
    {
      $conn = mysql_connect(self::$servername, self::$user, self::$pwd) or die ("Khong the ket noi toi server");
      mysql_select_db(self::$dbname, $conn) or mysql_error("Khong the ket noi dc CSDL.");
       mysql_query('SET NAMES "UTF8"');
      $result = mysql_query($q);
      mysql_close();
      return $result;
    }

    public function __construct() { }

    public static function getInstance() {
      if (self::$instance == NULL) {
        self::$instance = new DB_Core();
      }
      return self::$instance;
    }

    public function setInstance($o) {
      self::$instance = $o;
    }

    public function __sleep() {
      return array_keys(get_object_vars($this));
    }

    public function __wakeup() { }

    static private $instance = NULL;
  }
?>
