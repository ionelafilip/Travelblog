<?php

class AppController
{
    protected $routes = ['home' => 'HomeController',
                         'contact' => 'ContactController',
                         'about' => 'AboutController',  
                         'login' => 'LoginController',
                         'signup' => 'SignupController',  
                         'logout' => 'LogoutController',
                         'culture' => 'CultureController',
                         'exploretheworld' => 'ExploretheworldController',
                         'tropicaldestinations' => 'TropicaldestinationsController',
                         'afghanistan' => 'AfghanistanController',
                         'indonesia'=> 'IndonesiaController',
                         'austria' => 'AustriaController',
                         'peru' => 'PeruController',
                         'canada' => 'CanadaController',
                         'india' => 'IndiaController',
                         'france' => 'FranceController',
                         'estonia' => 'EstoniaController',
                         'fiji' => 'FijiController',
                         'maya' => 'MayaController',
                         'cook' => 'CookController',
                         'popular' => 'PopularController',
                         'hallstatt' => 'HallstattController',
                         'bali' => 'BaliController',
                         'havana' => 'HavanaController',
                         'nenet' => 'NenetController',
                        ];

    public function __construct(){
        $this->init();
    }

    public function init(){
        // echo 'Calea = '.__FILE__;
        // include APP_PATH.VIEWS.'index.html';

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else $page = 'home'; // landing page

        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        } else $className = $this->routes['home'];
        new $className;
    }

    public function render($page, $data){
        $template = file_get_contents($page); // layout.html

        preg_match_all("[{{\w+}}]", $template, $matches);

        foreach($matches[0] as $value){
            $item = str_replace('{{','', $value);
            $item = str_replace('}}','', $item);
            if(array_key_exists($item, $data)){
                $template = str_replace($value, $data[$item], $template);
            }
        }
        return $template;
    }

}