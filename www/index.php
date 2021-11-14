<?php
include('Controller/indexController.php');
include('Controller/loginController.php');
include('Controller/areaRestritaController.php');
include('config/config.php');

$route = new Route();

class Route{


    private $routes;
    
    public function __construct(){
        $this->initRoutes();
        $this->run($this->getURL());
    }

    public function initRoutes()
    {
        //site principal
        $this->routes['/'] = array('controller' => 'indexController', 'action' => 'index');
        $this->routes['/index.php'] = array('controller' => 'indexController', 'action' => 'index');
        $this->routes['/contato'] = array('controller' => 'indexController', 'action' => 'goContato');
        $this->routes['/about'] = array('controller' => 'indexController', 'action' => 'goEmpresa');
        $this->routes['/cachaca'] = array('controller' => 'indexController', 'action' => 'goCachaca');
        $this->routes['/derivados'] = array('controller' => 'indexController', 'action' => 'goDerivados');
        $this->routes['/apicultura'] = array('controller' => 'indexController', 'action' => 'goApicultura');
        $this->routes['/horta'] = array('controller' => 'indexController', 'action' => 'goHorta');
        $this->routes['/medicinais'] = array('controller' => 'indexController', 'action' => 'goMedicinais');
        $this->routes['/ovos'] = array('controller' => 'indexController', 'action' => 'goOvos');
        $this->routes['/submit'] = array('controller' => 'indexController', 'action' => 'sendMessage');
        
        // login
        $this->routes['/login'] = array('controller' => 'loginController', 'action' => 'goLogin');
        $this->routes['/logar'] = array('controller' => 'loginController', 'action' => 'tryLogin');
        $this->routes['/logout'] = array('controller' => 'loginController', 'action' => 'goLogout');

        // area restrita
        $this->routes['/arearestrita'] = array('controller' => 'areaRestritaController', 'action' => 'index');

        //interessados
        $this->routes['/leads'] = array('controller' => 'areaRestritaController', 'action' => 'goLeads');
        $this->routes['/leads/remove'] = array('controller' => 'areaRestritaController', 'action' => 'removeLead');

        //clients
        $this->routes['/clients'] = array('controller' => 'areaRestritaController', 'action' => 'goClients');
        $this->routes['/clients/edit'] = array('controller' => 'areaRestritaController', 'action' => 'editClient');
        $this->routes['/clients/remove'] = array('controller' => 'areaRestritaController', 'action' => 'removeClient');
        $this->routes['/clients/insert'] = array('controller' => 'areaRestritaController', 'action' => 'goInsertClient');
        $this->routes['/clients/insert/add'] = array('controller' => 'areaRestritaController', 'action' => 'insertClient');

        //Vendas
        $this->routes['/sales'] = array('controller' => 'areaRestritaController', 'action' => 'goSales');
        $this->routes['/sales/insert'] = array('controller' => 'areaRestritaController', 'action' => 'goInsertSales');
        $this->routes['/sales/insert/add'] = array('controller' => 'areaRestritaController', 'action' => 'insertSale');
        $this->routes['/sales/remove'] = array('controller' => 'areaRestritaController', 'action' => 'removeSale');
        $this->routes['/sales/edit'] = array('controller' => 'areaRestritaController', 'action' => 'editSale');

        //Produtos
        $this->routes['/product/insert'] = array('controller' => 'areaRestritaController', 'action' => 'goInsertProduct');
        $this->routes['/tableproducts'] = array('controller' => 'areaRestritaController', 'action' => 'goViewProducts');
        $this->routes['/product/insert/add'] = array('controller' => 'areaRestritaController', 'action' => 'insertProduct');
        $this->routes['/products/edit'] = array('controller' => 'areaRestritaController', 'action' => 'editProduct');
        $this->routes['/products/remove'] = array('controller' => 'areaRestritaController', 'action' => 'removeProduct');
        
        

        
        

    }

    public function getURL()
    {
        // parse_url para site
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        //parse_url para localhost
        $url = substr($url, 13, 1000);  // 11 letras = /trab_lbd/www
        return $url;
        
    }

    public function run($url)
    {
        if(array_key_exists($url, $this->routes))
        {
            $class ="\\Controller\\" . $this->routes[$url]['controller'];
            $controller = new $class();
            $action = $this->routes[$url]['action'];
            $controller->$action();
        }
        else
            include('View/404.php');
    }
    
}
