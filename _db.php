<?php
  // This defines the connection data to connect to the database
  $config = [
    'dbserver' => 'sql.local',
    'dbuser' => 'db349760035',
    'dbpassword' => '3GlahQs6',
    'dbname' => 'db349760035'
  ];

  // This creates a connection to the database
  function dbConnect() {
    global $config;
    $dsn = "mysql:host={$config['dbserver']};dbname={$config['dbname']};charset=utf8mb4";
    $pdo = null;
    try {
      $pdo = new PDO($dsn, $config['dbuser'], $config['dbpassword']);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $pdo->setAttribute(PDO::MYSQL_ATTR_FOUND_ROWS, true);
      return $pdo;
    }
    catch(PDOException $e)
    {
      echo ':-(';
    }
  }

  function showTables($pdo) {
    $sql = "SHOW TABLES";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $num = $stmt->rowCount();
    return [$num, $result];
  }

  
?>
