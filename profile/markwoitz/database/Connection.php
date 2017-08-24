<?php

class Connection 
{

    public static function make()
    {
        try{
            
                    return new PDO('mysql:host=localhost;dbname=hng', 'intern', '@hng.intern1');
                
                } catch (PDOException $e) {
            
                    die($e->getMessage());
                    
                }
    }
    
    

}