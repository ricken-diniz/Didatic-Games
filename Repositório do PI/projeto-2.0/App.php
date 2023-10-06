<?php

class App{
    // Recebe a URI e o METHOD, e executa a função de redirecionamento da classe Route
    public function dispatch(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // pega a URI lançada, como exemplo, o action de um form
        $method = $_SERVER['REQUEST_METHOD'];
        Route::dispatch($uri, $method);
    }
}

