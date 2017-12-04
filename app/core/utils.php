<?php

class Util{
    public static function isAdmin(){
        $user = $_SESSION['user'];
        
        if($user->role == 'admin') return true;
    }
}

