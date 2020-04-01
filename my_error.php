<?php 
    
    function countDown() {
        $number = 12;
        try {
            throw new Exception('foo');
        } catch(Exception $e) {
                if ($number == 0 && $number < 11) {
                return "er is iets goed gegaan";
                } else {
                    return "er is iets fout gegaan";
                }
        }
    }
    echo countDown()
?>
    
  
