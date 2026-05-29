<?php

/*
class Controller
{
    protected function view($view, $viewData = [])

    {
        extract($viewData);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        require_once $viewFile;

        
    }
}

class Controller

{
    protected function view($view, $data = [])
    {
        $viewFile = __DIR__ . '/../views/' . $view . '.php';

        if (is_array($data)) {
            extract($data);
        }

        require_once $viewFile;
    }
}
*/

class Controller{

   protected function view($view, $data = [])
        {
    $viewFile = __DIR__ . '/../views/' . $view . '.php';

    if (is_array($data)) {
        extract($data);
    }

    require_once $viewFile;
        }
}
