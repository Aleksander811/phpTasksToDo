<?php

namespace ToDo;
class Router{
    private $routes =[];

    public static function load($file){  //šiai funkcijai vykdymo metu paduodam routes failą
        $router = new static;            // šiuo metodu užsikrauname routes failą
        require $file;
        return $router;
    }

    public function define($routes){   // čia realizuojamas define metodas
        $this->routes = $routes;
    }
// update-task/1
    public function direct($uri){
        $uriPart = explode('/',$uri);             //                  metodas realizuoja routerio veikimą
        if(array_key_exists($uri,$this->routes)){ // tikrina ar egzistuoja masyve                 patikrina, ar tas routas, kurį gavo iš kliento
            return $this->routes[$uri];           //                  egzistuoja tarp mūsų aprašytų routų
        }else{                                    //                  routai eina į kontrolierį ir grąžina html'ą
            $newUri = $uriPart[0].'/'.$uriPart[1];
            if(array_key_exists($newUri, $this->routes)){   //tikrina ar egzistuoja pirma uri dalis masyve
                $this->routes[$uri] = $this->routes[$newUri]; // perrasom masyvo elemento indeksa su reikiamu id
                unset($this->routes[$newUri]);
                if(array_key_exists($uri, $this->routes)){  // tikrinam ar masyve yra routas su reikiamu indeksu
                    return $this->routes[$uri]; // grazinam reikiama kontroleri 

                }
            } else{
                return $this->routes[404];
            }
            return $this->routes[404];
        }
    }



}