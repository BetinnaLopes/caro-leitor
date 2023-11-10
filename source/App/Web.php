<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Book;
use Source\Models\Category;

class Web
{

    private $view;

    public function __construct(){
        $this->view = new Engine (__DIR__ . "/../../themes/web", "php");
    }

    public function home(){
        echo $this->view->render("home");
    }

    public function about(){
        echo $this->view->render("about");
    }

    public function review(){
        echo $this->view->render("review");
    }

    public function authors(){
        echo $this->view->render("authors");
    }

    public function contact(){
        echo $this->view->render("contact");
    }

    //public function categories(){
       // echo $this->view->render("categories");
    //}


    public function register(array $data)
    {
        if(!empty($data)){
            $response = json_encode($data);
            echo $response;
            return;
        }

        // "categories" => $this->categories

        echo $this->view->render("register",[
            
        ]);
    }

    public function login (array $data) : void {
        echo $this->view->render("user-auth",[]);
    }
  
    public function apiFaq (array $data)
    {
        echo $this->view->render("api-faqs",[]);
    }
    
    public function faq(){
        echo $this->view->render("faq");
        $faqs = new Faq();
        echo $this->view->render("faq",[
            "faqs" => $faqs->selectAll()
        ]);
    }
    
    public function books (array $data){
        $books = new Book();
        $faqs = new Faq();

        if(!empty($data["categoryName"])){
            echo $this->view->render("books", [
                "books" => $books->selectByCategory($data["categoryName"])
            ]);
            return;
        }
        
        echo $this->view->render("books", [
            "books" => $books->selectAll(),
        ]);
    }

    public function apiLogin (): void
    {
        echo $this->view->render("api-login",[]);
    }


}