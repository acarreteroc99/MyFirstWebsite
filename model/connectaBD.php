<?php

    function connectaBD(){
	        try{
	            $connection = new PDO('mysql: host=localhost;dbname=tdiwj4;port=3306;charset=utf8mb4;', 'tdiw-j4', 'Jymhz7jW');
	        }
	        catch(PDOException $e){
	            echo "Connection failed:" . $e->getMessage();
	            die;
	        }
        return ($connection);
    }
?>