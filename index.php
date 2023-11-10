<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/registro","Web:register");
$route->get("/login","Web:login");

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/autores","Web:authors");
$route->get("/livros","Web:books");
$route->get("/contato","Web:contact");
$route->get("/perfil","Web:perfil");
$route->get("/resenhas","Web:review");
$route->get("/faq","Web:faq");
$route->get("/livros/{categoryName}","Web:books");
$route->get("/api-faq", "Web:apiFaq");
$route->get("/api-login","Web:apiLogin");

//$route->get("/categorias","Web:categories");

$route->group("/app");
$route->get("/", "App:home");
$group = $route->group(null);

$route->group("/admin");
$route->get("/","Adm:home");
$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();