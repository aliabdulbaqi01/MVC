<?php

namespace Framework;
class Router
{
    private array $routes = [];
    public function add(string $path, array $params): void
    {
        $this->routes[] = [
            'path' => $path,
            'params' => $params,
        ];
    }

    public function match(string $path) :array|bool
    {
        // ?<name>   or   ?P<name>  or   ?'name'>   all are doing the same
        // but the first one is the most commonly used
        $pattern = '#^/(?<controller>[a-z]+)/(?<action>[a-z]+)$#';

        if(preg_match($pattern, $path, $match)) {
            echo '<pre>';
            var_dump($match);
            echo '</pre>';
            exit('Match');
        }
        foreach ($this->routes as $route) {
            if ($route['path'] === $path) {
                return $route['params'];
            }
        }
        return false;
    }
}