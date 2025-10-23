<?php
require_once __DIR__ . '/../src/Signature.php';
$secret = getenv('PSP_WEBHOOK_SECRET') ?: '';
$raw = file_get_contents('php://input');
$hdr = $_SERVER['HTTP_X_PSP_SIGNATURE'] ?? '';
if (!$secret || !Signature::verify($raw, $hdr, $secret)) { http_response_code(401); exit('invalid signature'); }
// TODO: parse payload, mark payment status idempotently
http_response_code(200);
echo 'ok';
