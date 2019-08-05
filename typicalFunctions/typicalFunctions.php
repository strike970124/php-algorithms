<?php
/**
 * Complete the functions of the TypicalFunctions class.
 *
 * Good luck!
 */
class TypicalFunctions {
  /**
   * Make the function take the arr parameter being passed and execute a 
   * callback for each value, where a new array is created with the original 
   * values multiplied by two and identifying whether the value is even or odd.
   * 
   * @param array $arr Numbers array.
   * 
   * @return array
   */
  public function getSuperArray(array $arr) {
    /**
     * Write you code here.
     */
     $result = array();
     $arrlength = count($arr);
     for($x=0;$x<$arrlength;$x++){
         $value = $arr[$x];
         $type = ($value % 2 == 0 ? "Even" : "Odd");
         $arr_tmp = array("original" => $value, "calculated" => $value * 2, "type" => $type);
         array_push($result,$arr_tmp);
     }
     return $result;
  }
  /**
   * Make the function take the str parameter being passed and capitalize
   * the first letter of each word. Words will be separated by only one space.
   * 
   * @param string $str Chain to be transformed.
   * 
   * @return string
   */
  public function capitalizeFirstLetters(string $str) {
    /**
     * Write your code here.
     */
     $arr_tmp = explode(" ", $str);
     $newStr = "";
     foreach ($arr_tmp as $value){
         $newStr .= ucfirst($value) . " ";
     }
     return $newStr;
  }
  /**
   * Make the function take the arr parameter being passed and 
   * get the values with the lshortest and longest array length.
   * 
   * @param array $arr Source array.
   * 
   * @return string
   */
  public function getShortestLongestValue(array $arr) {
    /**
     * Write your code here.
     */
     $short=0;
     $shortest = "";
     $long = 0;
     $longest = "";
     
     foreach($arr as $value){
        $lenTmp = strlen($value);
        if ($short == 0){
         $short = $lenTmp;
         $shortest = $value;
        }
        if ($lenTmp < $short){
         $short = $lenTmp;
         $shortest = $value;
        }
        if ($long == 0){
          $long = $lenTmp;
          $longest = $value;
        }
        if($lenTmp > $long){
          $long = $lenTmp;
          $longest = $value;
        }         
     }
     

     $result = "The value with the shortest array length is " . $shortest . " and the value with the longest array length is " . $longest . ".";
     return $result;
  }
  
  /**
   * Make the function take the arr parameter being passed and
   * displays the capital and country name. Sort the list by the
   * capital of the country.
   * 
   * @param array $arr Array of countries and cities.
   * 
   * @return array
   */
  public function getCapitalCities(array $arr) {
    /**
     * Write your code here.
     */
     asort($arr);
     foreach($arr as $key => $value){
         print "The capital of ". $key . " is " . $value . ".\n";
     }
     return $arr;
  }
  /**
   * Make the function take the numb parameter being passed and 
   * compute the sum of first n given prime numbers.
   * 
   * @param int $pNumQuantity Quantity of prime numbers to sum.
   * 
   * @return int
   */
  public function getSumPrimeNumbers(int $pNumQuantity) {
    /**
     * Write your code here.
     */
    $sum = 0;
    $count = 0 ;
    $number = 2 ;
    while ($count < $pNumQuantity ){
        $div_count=0;
        for ( $i=1;$i<=$number;$i++){
            if (($number%$i)==0){
                $div_count++;
            }
        }
        if ($div_count<3){
            $sum += $number;
            $count += 1;
        }
        $number += 1;
    }
    return $sum;
  }
  
}
/*
$input = array(5,43,56,37);
$tipical = new TypicalFunctions();
$result = $tipical->getSuperArray($input);
print_r($result);*/

/*$tipical = new TypicalFunctions();*/
/*$input2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$result = $tipical->capitalizeFirstLetters($input2);
print $result;*/
/*
$input = array("Locomotive","Ant","Toucan","Dolphin","Stadium","Tree");
$result = $tipical->getShortestLongestValue($input);
print($result);
*/

/*$input = array("Italia" =>"Roma", "Belgium" => "Brussels", "Ireland" => "Dublin" ,"Greece" => "Athens");
$result = $tipical->getCapitalCities($input);*/

/*$input = 25;
$result = $tipical->getSumPrimeNumbers($input);
print($result);*/

?>