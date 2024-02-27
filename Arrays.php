<pre>
<?php
function assoc_array_print($assocAr){
    foreach ($assocAr as $key => $value) {
        echo $key . ' => ' . $value . "\n";
    echo "\n";}
}

function newline(){
    echo("\n" . "\n");
}
print("\n---------- START (##) ----------\n");
print("\n---------- END (##) ----------\n\n"); 


print("\n---------- START (##) ----------\n"); 
// 1.
$color = array("white", "green", "red", "blue", "black");
$text = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
print($text);
print("\n---------- END (##) ----------\n\n"); 


//2.
print("\n---------- START (##) ----------\n");
$color2 = array("white", "green", "red");
foreach ($color2 as $color){
    print($color . "\n");
}
print("\n---------- END (##) ----------\n\n"); 



//3.
print("\n---------- START (##) ----------\n"); 
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu);
foreach ($ceu as $country => $capital){
    print("The capital of ". $country. " is ". $capital . "\n");
}
print("\n---------- END (##) ----------\n\n");



//3.
print("\n---------- START (##) ----------\n");
$x = array(1,2,3,4,5);
print_r($x);
unset($x[2]);
$x = array_values($x);
print_r($x);
print("\n---------- END (##) ----------\n\n"); 




//5.
print("\n---------- START (##) ----------\n"); 

$color3 = array(4 => 'white', 6 => 'green', 11=> 'red');
print_r(reset($color3));
print("\n---------- END (##) ----------\n\n"); 



//6.
print("\n---------- START (##) ----------\n"); 
$jsonstring = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown anole got eaten by the green one"
    }
}';
$decodedstring = json_decode($jsonstring, true);
print_r($decodedstring);
print("\n---------- END (##) ----------\n\n"); 




//7.
print("\n---------- START (##) ----------\n"); 
$num = array(1,2,3,4,5);
array_splice($num, 3, 0, "$");
print_r($num);
print("\n---------- END (##) ----------\n\n"); 
// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key
//asort value ksort key kr = descending
print("\n---------- START (##) ----------\n");
$people = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($people); print_r($people); ksort($people);print_r($people);arsort($people);print_r($people);krsort($people);print_r($people);
print("\n---------- END (##) ----------\n\n");



// 9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6 
// List of seven lowest temperatures : 60, 62, 63, 63, 64, 
// List of seven highest temperatures : 76, 78, 79, 81, 85,
print("\n---------- START (##) ----------\n"); 
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temps) / count($temps);
echo $average;
sort($temps);
newline();
print_r(array_slice($temps, 0, 5));
newline();
print_r(array_slice($temps,-5));
print("\n---------- END (##) ----------\n\n"); 



// 11. Write a PHP program to merge (by index) the following two arrays.
// Sample arrays :
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
print("\n---------- START (##) ----------\n");

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
array_unshift($array1[0], $array2[0]);
array_unshift($array1[1], $array2[1]);;
print_r($array1);
print("\n---------- END (##) ----------\n\n"); 




//12.
print("\n---------- START (##) ----------\n");
$color4 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$a1 = array_map("strtolower", $color4);
$a2 = array_map("strtoupper", $color4);
print_r($a1);
print_r($a2);
print("\n---------- END (##) ----------\n\n"); 



//13.
print("\n---------- START (##) ----------\n");

for ($i = 200; $i <= 250; $i++) {
if($i % 4 == 0){
    print($i. "\n");
}
}
print("\n---------- END (##) ----------\n\n");



//14.
print("\n---------- START (##) ----------\n");
$gibberish = array("abcd","abc","de","hjjj","g","wer");
$placeholder = 0;
foreach($gibberish as $value){
    $len = strlen($value);
    if($len >= $placeholder){
        $placeholder = $len;
    } 
$newplace = $placeholder;
foreach($gibberish as $value){
    $len = strlen($value);
    if($len <= $newplace){
        $newplace = $len;
    }
    }
}
print($placeholder);
print("\n");
print($newplace);

print("\n---------- END (##) ----------\n\n");



//15.
print("\n---------- START (##) ----------\n");
// $counter = 10;
// while ($counter > 0){
// print(mt_rand(11, 20). "\n");
// $counter --;
// }
// print("\n");

$x = array(11, 20);
$y = array();
$counter = 0;
while ($counter < max($x) - min($x) + 1) {
$num = mt_rand(min($x), max($x));
if (array_search($num, $y) == False){
    array_push($y, $num);
    $counter ++;
}
}
foreach($y as $number){
    print($number. "\n");
}
print("\n---------- END (##) ----------\n\n");


//16. Write a PHP script to get the largest key in an array
print("\n---------- START (##) ----------\n");
$dumber = ["hippo"=>"fat","placemat"=>"bob", "fire hydrant"=>"red", "beethoven"=>"good baker", "fire hydrate" => "wooder"];
$max_key = max(array_map('strlen', array_keys($dumber))); 
$max_keys_array = [];
foreach ($dumber as $key => $value){
    if (strlen($key) == $max_key){
        array_push($max_keys_array, $key);
    }
}
print_r("The maximum key(s): ". implode(", ",$max_keys_array) . " and the length is " . $max_key);

print("\n---------- END (##) ----------\n\n");




// 17. Write a PHP function that returns the lowest integer that is not 0
print("\n---------- START (##) ----------\n");



$nums = array(2, 4, 31, 9, 0);


#----- Way 1
$new_nums = array_diff($nums, [0]);
print(min($new_nums). "\n");

#----- Way 2
$counter = 0;
$max_num = max($nums);
$array_length = count($nums) - 1;
while ($counter <= $array_length ){
    $current_num = $nums[$counter];
    $counter ++;
    if ($current_num <= $max_num && $current_num != 0){
        $max_num = $current_num;
    }
}
print($max_num. "\n");
#----- Way 3
foreach ($nums as $index => $number){
    if ($number == 0){
        unset($nums[$index]);
        print(min($nums));
    }
}
print("\n---------- END (##) ----------\n\n"); 



//18. Write a PHP function to floor decimal numbers with precision.
print("\n---------- START (##) ----------\n\n"); 
$numbers_array = [
    [1.155, 2],
    [100.25781, 4],
    [2.9636, 3]];

foreach ($numbers_array as $floating_point_num_array){
    $placeholder1 = false;
    $after_decimal_counter = 0;
    foreach ($floating_point_num_array as $num){
        if (is_float($num)){
            $strnum = strval($num);
            $reconstructed_str = '';
            $loop_count = 0;
            $num_array = str_split($strnum);
            while ($after_decimal_counter != $floating_point_num_array[1]){
                
                $char =  $num_array[$loop_count];
                $reconstructed_str .= $char;
                $loop_count++;
                if ( $char == "."){
                    $placeholder1 = true;
                }
                elseif ($placeholder1 == true){;// doesnt execute on first run since is elif. Will execute next
                    $after_decimal_counter ++; //countes how many places are after the decimal
                }
   
            }
            print($reconstructed_str . "\n");
            }
            

        }
    }

;
print("\n---------- END (##) ----------\n\n");




//19. Write a PHP script to print "second" and Red from the following array.
print("\n---------- START (##) ----------\n");

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

print($color["color"]["a"] . "\n" . strtolower($color["holes"][5]));

print("\n---------- END (##) ----------\n\n"); 



//20. Write a PHP function to sort an array according to another array acting as a priority list.
print("\n---------- START (##) ----------\n");
function sortByPriority($array, $priorityList) {
    // Use a custom sorting function
    usort($array, function($a, $b) use ($priorityList) {
        // Get the priority index of $a and $b
        $priorityA = array_search($a, $priorityList);
        $priorityB = array_search($b, $priorityList);

        // Compare based on priority
        return $priorityA - $priorityB;
    });

    return $array;
}

// Example usage:
$originalArray = array("Second", "Third", "First");
$priorityList = array("First", "Second", "Third");

$sortedArray = sortByPriority($originalArray, $priorityList);

// Display the sorted array
print_r($sortedArray);
print("got this from chatgpt. algorithms are hard");
print("\n---------- END (##) ----------\n\n"); 

//26. Write a PHP function to shuffle an associative array, preserving key, value pairs.
print("\n---------- START (##) ----------\n");
$my_array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");
function randsort($value1, $value2){
    rand(-1,1);

}
assoc_array_print($my_array);
uksort($my_array, "randsort");
assoc_array_print($my_array);


print("\n---------- END (##) ----------\n\n");

//27. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other) using shuffle() function.
print("\n---------- START (##) ----------\n");
function randPass($passLength){
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    $allChars = $uppercase . $lowercase . $numbers . $specialChars;
    
    $allCharsArray = str_split($allChars);
    $shuffledChars = $allCharsArray;
    shuffle($shuffledChars);
    
    $password = '';
    while (strlen($password) != $passLength){
        $randomINT = mt_rand(0, strlen($allChars));
        $password .= implode(array_slice($shuffledChars,$randomINT, 1));
    }
    


    return $password;



}
print(randPass(12));
///^^^ THIS WAY IS SHITTY

function randPassBetter($passLength){
    function randInt($length){
        global $allChars;
        $randomINT = mt_rand(0, $length);
        return $randomINT; 
    }
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    $allChars = $uppercase . $lowercase . $numbers . $specialChars;
    
    $allCharsArray = str_split($allChars);
    $shuffledChars = $allCharsArray;
    shuffle($shuffledChars);
    $passwordStr = '';
    while (strlen($passwordStr) < $passLength){
        $passwordStr .= implode(array_slice($shuffledChars, mt_rand(0, count($shuffledChars)-1), 1));
    }
    $password = str_split($passwordStr);
    $specialCharCounter = 0;
    $passwordNormalCharIndexs = array();
    foreach ($password as $index => $value){
        if (in_array($value,str_split($specialChars))){
            $specialCharCounter ++; // counts how many special chars are in the password
            }
        else{
        $passwordNormalCharIndexs[] = $index;} //to prevent overwriting existing special chars
        }
        
    while ($specialCharCounter < 4){
        $randIndex = mt_rand(0,count($passwordNormalCharIndexs)-1); //Finds a random index in the NON special chars 
        $password[$passwordNormalCharIndexs[$randIndex]] = str_split($specialChars)[mt_rand(0,(strlen($specialChars)-1))];
        // looks in current password for the value specified by the random index of the nonSpecial characters
        // For example : a$%he9%8djsr  
        // $passwordNormalCharIndexes = a,h,e,9,8,d,j,s,r if the random index in that range is 2 then e.
        // password[e] = specialchars[random number within range of array]
        // unset the $passwordNormalCharIndexes e so that it can't be overwritten again
        // reindex the array

        unset($passwordNormalCharIndexs[$randIndex]); //Removes index from the 
        $passwordNormalCharIndexs = array_values($passwordNormalCharIndexs); //reindex the array after unsetting to avoid gaps
        $specialCharCounter ++;
    }   
         return implode($password);
            }

print("\n" . randPassBetter(12));
print("\n---------- END (##) ----------\n\n");
//28. Write a PHP script to sort an array in reverse order (highest to lowest).
print("\n---------- START (##) ----------\n");

$x = array("Tarantula","a","get","should","BOB");
//--- pretty
echo "Initial array: ";
foreach ($x as $element){
    echo $element . " ";
}
echo "\n" . "Method 1: ";
//---pretty

$xLen = count($x) - 1;
for($i = $xLen; $i >=0; $i--){
    echo $x[$i] . " ";
}
//--- pretty
echo "\n" . "Method 2: ";
//--- pretty
$x = array_reverse($x);
foreach($x as $element){
    echo $element . " ";
}
print("\n---------- END (##) ----------\n");
//29. Write a PHP program to generate an array with a range taken from a string.
print("\n---------- START (##) ----------\n");
$rangeString = "1-5";
$range = explode("-", $rangeString);
$rangeStart = intval($range[0]);
$rangeEnd = intval($range[1]);
$x = array();
for ($i = $rangeStart; $i<=$rangeEnd; $i++){
    $x[] = $i;

}
foreach ($x as $y){
    echo $y . " ";
}
print("\n---------- END (##) ----------\n");

?>
</pre>