<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'quiz-gamification-engine-php-blade-v50',
    'category' => 'E-Learning Gamification & Quiz Engine',
    'tech' => 'PHP / Modular Blade Engine',
    'status' => 'operational'
]);
