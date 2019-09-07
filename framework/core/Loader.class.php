<?php
Class Loader{
    public function library($lib)
    {
        include LIB_PATH . "../../app/controllers/Controller.class.php";
    }
    public function helper($helper)
    {
        include HELPER_PATH . "../../app/controllers/Controller.class.php";
    }
}
?>