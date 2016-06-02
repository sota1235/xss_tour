<?php
// Routes

/**
 * @deprecated このコードには脆弱性が含まれているので絶対に使用しないでください
 */

$app->get('/', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

// Level1 普通のReflection XSS
$app->get('/level/1', function ($request, $response, $args) {
    $params          = $request->getQueryParams();
    $args['getName'] = array_get($params, 'name', 'no name');

    return $this->renderer->render(getUnsafeResponse($response), 'level1.phtml', $args);
});

// Level2 'script'文字列をサニタイズ
$app->get('/level/2', function ($request, $response, $args) {
    $params          = $request->getQueryParams();
    $args['getName'] = preg_replace('/script/', '', array_get($params, 'name', 'no name'));

    return $this->renderer->render(getUnsafeResponse($response), 'level2.phtml', $args);
});

// Level3 '>', '<'文字列をエスケープ
$app->get('/level/3', function ($request, $response, $args) {
    $params          = $request->getQueryParams();
    $args['getName'] = array_get($params, 'name', 'no name');

    return $this->renderer->render(getUnsafeResponse($response), 'level3.phtml', $args);
});

// Level4 DOM Based XSS
$app->get('/level/4', function ($request, $response, $args) {
    return $this->renderer->render(getUnsafeResponse($response), 'level4.phtml', $args);
});

// Level5 何にしようかな
$app->get('/level/5', function ($request, $response, $args) {
    return $this->renderer->render(getUnsafeResponse($response), 'level5.phtml', $args);
});
