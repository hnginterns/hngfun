<?php

class Connection 
{

    public static function make($config)
    {
        try{
            
                    return new PDO(
                        $config['host'].';dbname='.$config['dbname'],
                        $config['username'],
                        $config['pass']                    
                        );
                
                } catch (PDOException $e) {
            
                    die($e->getMessage());
                    
                }
    }
    
    

}