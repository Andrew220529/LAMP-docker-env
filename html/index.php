<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php
  $dsn = 'mysql:dbname=db;charset=utf8mb4;host=mysql';
  $user = 'user';
  $password = 'dbpass';
  try {
    $db = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
    $stmt = $db->prepare(
      "SELECT * FROM"
    );
    echo '接続完了';
    // $sql = 'SELECT name FROM members ORDER BY id';
    // foreach ($db->query($sql) as $row) {
    //   print $row['name'];
    // }
  } catch (PDOException $e) {
    exit($e->getMessage());
    echo '接続失敗';
  }
  ?>
</body>

</html>