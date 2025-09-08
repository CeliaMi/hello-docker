<?php
$quotes = [
    ["id" => 1, "author" => "Carl Sagan", "quote" => "We are star-stuff thinking about the stars."],
    ["id" => 2, "author" => "Galileo Galilei", "quote" => "And yet it moves."],
    ["id" => 3, "author" => "Stephen Hawking", "quote" => "Look up at the stars and not down at your feet."]
];

$request = $_SERVER['REQUEST_URI'];
header('Content-Type: application/json');

if( $request === '/' ) {
    echo json_encode(["message" => "Welcome to the Quotes API visit /quotes for more information."]);
    exit();
}

if ($request === '/quotes') {
    echo json_encode($quotes);
    exit();
}

if (preg_match("/\/quotes\/(\d+)/", $request, $matches)) {
    $id = (int)$matches[1];
    foreach ($quotes as $q) {
        if ($q["id"] === $id) {
            echo json_encode($q);
            exit();
        }
    }
    http_response_code(404);
    echo json_encode(["error" => "Quote not found"]);
    exit();
}

http_response_code(404);
echo json_encode(["error" => "Endpoint not found"]);
