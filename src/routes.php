<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/level/{number}', function ($request, $response, $args) {
    $number = $request->getAttribute('number');

    return $this->renderer->render($response, "level{$number}.phtml", $args);
});
