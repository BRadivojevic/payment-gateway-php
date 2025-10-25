<?php
require_once __DIR__ . '/../src/Db.php';
header('Content-Type: application/json');
$acckey = filter_input(INPUT_GET, 'acckey', FILTER_SANITIZE_STRING) ?? '';
if ($acckey === '') { http_response_code(400); echo json_encode(['error'=>'acckey required']); exit; }
// TODO: fetch amount & order from DB via stored proc, then redirect to PSP
echo json_encode(['status'=>'ok','redirect'=>'https://psp.example/redirect']);
