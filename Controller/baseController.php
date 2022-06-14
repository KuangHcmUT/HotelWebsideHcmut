<?php
abstract Class BaseController{
    public function Render($url){
        include '../Views/' . $url . '.php';
    }
}
?>