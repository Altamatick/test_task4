<?php

$mysql_response = [
    [
        'id' => 1,
        'parent_id' => null,
        'title' => '1.'
    ],
    [
        'id' => 2,
        'parent_id' => 1,
        'title' => '1.1.'
    ],
    [
        'id' => 3,
        'parent_id' => 1,
        'title' => '1.2.'
    ],
    [
        'id' => 4,
        'parent_id' => 2,
        'title' => '1.1.1.'
    ],
    [
        'id' => 5,
        'parent_id' => 3,
        'title' => '1.2.1.'
    ],
    [
        'id' => 6,
        'parent_id' => null,
        'title' => '2.'
    ],
    [
        'id' => 7,
        'parent_id' => 6,
        'title' => '2.1.'
    ],
    [
        'id' => 8,
        'parent_id' => 6,
        'title' => '2.2.'
    ],
    [
        'id' => 9,
        'parent_id' => 7,
        'title' => '2.1.1'
    ],
    [
        'id' => 10,
        'parent_id' => 7,
        'title' => '2.1.2'
    ],
    [
        'id' => 11,
        'parent_id' => 8,
        'title' => '2.2.1.'
    ],
    [
        'id' => 12,
        'parent_id' => 8,
        'title' => '2.2.2.'
    ],
];

$mysql_response = array_combine(array_column($mysql_response, 'id'), $mysql_response);
foreach ($mysql_response as $key => &$value) {
    if ($key === 0) {
        continue;
    }
    $parent_id = $value['parent_id'] ?? 0;
    $mysql_response[$parent_id]['children'][] = &$value;
}
print_r($mysql_response[0]['children']);

