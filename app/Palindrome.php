<?php
namespace App;

class Palindrome {
	public function checkPalindrome($string) {
		if (strrev($string) == $string){   
            return 1;    
        } 
        else{ 
           return 0; 
        }
	}
	 
	public function StringPalindrome($string) { 
      
      	$digit = is_numeric($string) ? 'Number' : 'String';
	    if ((strlen($string) <= 1))
	        return "Palindrome ".$digit; 
	    else{ 
	        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) 
	            return $this->StringPalindrome(substr($string,1,strlen($string) -2)); 
	        else  
	            return "Not a Palindrome ".$digit; 
	    } 
	} 
}

?>