<?php
class Db {
  public static function conn(): PDO {
    $dsn = getenv('DB_DSN') ?: 'sqlsrv:Server=localhost;Database=app';
    $user = getenv('DB_USER') ?: '';
    $pass = getenv('DB_PASS') ?: '';
    return new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
}
