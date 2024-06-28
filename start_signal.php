<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sequence = isset($_POST['sequence']) ? $_POST['sequence'] : [];
    $greenInterval = isset($_POST['greenInterval']) ? intval($_POST['greenInterval']) : 0;
    $yellowInterval = isset($_POST['yellowInterval']) ? intval($_POST['yellowInterval']) : 0;

    if (empty($sequence) || $greenInterval <= 0 || $yellowInterval <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid input']);
        exit;
    }
    echo json_encode([
        'success' => true,
        'sequence' => $sequence,
        'greenInterval' => $greenInterval,
        'yellowInterval' => $yellowInterval
    ]);
    exit;
}
?>
