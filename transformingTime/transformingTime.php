<?php
/**
 * Complete the transformTime function below.
 *
 * Good luck!
 */
 class TransformingTime {
   /**
    * Make the function take the str parameter being passed and return
    * a new string representing the input time in 24 hour format.
    * 
    * @param string $str Time in 12 hour format
    *
    * @return string
    */
   public function transformTime(string $str) {
     /**
      * Write your code here.
      */
    return date("H:i:s", strtotime($str));
   }
 }
 
 
 $trans = new TransformingTime();
 $result = $trans->transformTime("12:35:49PM");
 print $result;
 ?>
