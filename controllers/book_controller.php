 <?php
//file book_controller.php
//Nội dung của trang controller.php

include "models/book_model.php";
class Book_Controller
{
   	   public $model;
       public function  __construct()
       {
             $this->model = new Book_Model();
       }

       public function invoke()
       {        
            $action = (isset($_GET["action"]))?$_GET["action"]:null;    
            switch($action)
            {
               case "view" :
                       $id = (isset($_GET["id"]))?$_GET["id"]:0;
                       $this->views($id);
                       break;
               case "lists":
               default:
                      $this->lists();
                      break;
            }
       }

      public function lists()
      {       		  
      		$listBooks = $this->model->getListBooks();
          include "views/booklist.php";      
      }

      public function views($id)
      {
           $bookView = $this->model->getBook($id);
           include "views/bookview.php";
      }
}  
?> 