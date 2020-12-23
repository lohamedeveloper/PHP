<?php

/** PHP 7 */
switch(7.0){
    case '7.0':
        $result = "Oh no !";
    break;
    case 7.0:
        $result = "This is what I expected";
    break;

}

echo $result;

//> Oh no !

echo "\n";

/** PHP 8.0 */
echo match(8.0){
    '8.0' => "Oh no !",
    8.0 =>  "This is what I expected",    
};
