<?php

namespace App\Core;

class View{

    public function __construct(string $view, string $title, array $breadcrumb = [], array $data = []) {

        extract($data);

        require_once(VIEW_DIR."/templates/header.php");

        if(file_exists(VIEW_DIR."/".$view)){
            require_once(VIEW_DIR."/".$view);
        }

        require_once(VIEW_DIR."/templates/footer.php");
    }

}