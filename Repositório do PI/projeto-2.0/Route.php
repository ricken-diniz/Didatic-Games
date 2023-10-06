<?php

class Route{
    protected static $routes; // salva as rotas criadas a partir do arquivo web.php

    protected $caminho; // URI requisitada
    protected $controller; // caminho da página
    protected $method; // METHOD requisitado
    protected $rule; // regra de uso
    // protected $rule;

    public function __construct(string $caminho, string $controller, string $method){
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->method = $method;
    } // Salva as informações, criando uma nova rota

    // GETS
    public function getCaminho() : string {return $this->caminho;}
    public function getController():string{return $this->controller;}
    public function getMethod():string{return $this->method;}
    public function getRule():string{return $this->rule;}

    // registro de get/post OBS.: não há método no parametro, por questões de segurança
    public static function get (string $caminho, string $controller,string $rule) : Route {
        if (self::$routes == NULL) {
            self::$routes = [];
        }
        $route = new Route( $caminho,  $controller,  'GET');
        if(isset($rule)){
            $route->setRule($rule);
        }
        array_push(self::$routes, $route);
        return $route;
    }
    public static function post(string $caminho, string $controller,string $rule) : Route {
        if (self::$routes == NULL) {
            self::$routes = []; 
        }
        $route = new Route( $caminho,  $controller,  'POST');
        if(isset($rule)){
            $route->setRule($rule);
        }
        array_push(self::$routes, $route);
        return $route;
    }
    public function setRule(string $rule){
        $this->rule = $rule;
    }
    // roteamento
    public static function dispatch (string $uri, string $method){
        foreach (self::$routes as $route){
            if($route->getRule()=='ADM'){
                if ($route->getCaminho() == $uri){
                    if($route->getMethod() == $method){
                        include __DIR__.$route->getController();
                        exit;
                    } else {
                        header('Location: /');
                        exit;
                    }
                } 
            } else {
                if ($route->getCaminho() == $uri){
                    if($route->getMethod() == $method){
                        include __DIR__.'/Views/navbar.php';
                        include __DIR__.$route->getController();
                        include __DIR__.'/Views/footer.php';
                        exit;
                    } else {
                        header('Location: /');
                        exit;
                    }
                } 
            }
        } 
        echo "Página não encontrada";
        exit;
    }
}

?>