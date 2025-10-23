<?php
class Signature {
  public static function verify(string $payload, string $sigHeader, string $secret): bool {
    $calc = base64_encode(hash_hmac('sha256', $payload, $secret, true));
    return hash_equals($calc, $sigHeader);
  }
}
