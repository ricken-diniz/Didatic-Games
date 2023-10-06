<?php

    function hasUser() : bool{   
        return isset($_SESSION['user']);
    }
    function hasAdm() : bool{   
        return isset($_SESSION['admin']);
    }

    function logout () : void {
        unset($_SESSION['user']);
        unset($_SESSION['id']);
        session_destroy();
    }

?>