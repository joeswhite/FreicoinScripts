<?php
/* This function is copy right 2013-2014 by Joseph S. White - JoesfreicoinPool@gmail.com
 * http://pool.cr.rs
 * No part of this code may be duplicated with out the express written concent of Joe
 * This code must have this warning included as it is not given out with any warranty or service assistance
 * You may not use this code for financial gains. no pools may use this, no exchanges.
 * Thank you - Joe
 */

function demurrageFrcYears($coins, $years) {
        $old_value = $coins;
        //52560 is the number of blocks in a year, with a 10 mminute block window
        //there are 144 blocks per day
        $new_height = $years * 52560 ;
        //technically this is not needed, but this is here for sake of completeness of the formula
        $old_height = 0;

                //original example as described by https://github.com/freicoin/freicoin-old/wiki/How-to-properly-handle-demurrage-in-applications
                //$new_value = $old_value * (1 - 2**-20)**($new_height - $old_height)

                        //going step by step so I understand how its done
                        $pow1 = pow(2, -20);

                        //next step in the equation
                        //$new_value = $old_value * (1 - $pow1)**($new_height - $old_height)

                        //step by step
                        $powP1 = (1 - $pow1);

                        //next step looks like
                        //$new_value = $old_value * $powP1 **($new_height - $old_height)

                        //next step
                        $powP2 = ($new_height - $old_height);

                        //next step example
                        //$new_value = $old_value * $powP1 **$powP2

                        //final step towards simplification
                        $pow2 = pow($powP1, $powP2);

                //simplest example. now you can easily do this <3 algebra (I don't)
                $new_value = $old_value * $pow2;

        //returns the new value
        return $new_value;
}

function demurrageFrcMonths($coins, $months) {
        $old_value = $coins;
        //there are 144 blocks per day
        //there are usually 31 days in a month
        //there are 4464 in 31 days
        $new_height = $months * 4464 ;
        //technically this is not needed, but this is here for sake of completeness of the formula
        $old_height = 0;

                //original example as described by https://github.com/freicoin/freicoin-old/wiki/How-to-properly-handle-demurrage-in-applications
                //$new_value = $old_value * (1 - 2**-20)**($new_height - $old_height)

                        //going step by step so I understand how its done
                        $pow1 = pow(2, -20);

                        //next step in the equation
                        //$new_value = $old_value * (1 - $pow1)**($new_height - $old_height)

                        //step by step
                        $powP1 = (1 - $pow1);

                        //next step looks like
                        //$new_value = $old_value * $powP1 **($new_height - $old_height)

                        //next step
                        $powP2 = ($new_height - $old_height);

                        //next step example
                        //$new_value = $old_value * $powP1 **$powP2

                        //final step towards simplification
                        $pow2 = pow($powP1, $powP2);

                //simplest example. now you can easily do this <3 algebra (I don't)
                $new_value = $old_value * $pow2;

        //returns the new value
        return $new_value;
}

function demurrageFrcWeeks($coins, $weeks) {
        $old_value = $coins;
        //there are 144 blocks per day based on a 10 minute block window. actual times may vary
        //there are 7 days in a week so there are 1008 blocks in a week
        $new_height = $weeks * 1008 ;
        //technically this is not needed, but this is here for sake of completeness of the formula
        $old_height = 0;

                //original example as described by https://github.com/freicoin/freicoin-old/wiki/How-to-properly-handle-demurrage-in-applications
                //$new_value = $old_value * (1 - 2**-20)**($new_height - $old_height)

                        //going step by step so I understand how its done
                        $pow1 = pow(2, -20);

                        //next step in the equation
                        //$new_value = $old_value * (1 - $pow1)**($new_height - $old_height)

                        //step by step
                        $powP1 = (1 - $pow1);

                        //next step looks like

                        //$new_value = $old_value * $powP1 **($new_height - $old_height)

                        //next step
                        $powP2 = ($new_height - $old_height);

                        //next step example
                        //$new_value = $old_value * $powP1 **$powP2

                        //final step towards simplification
                        $pow2 = pow($powP1, $powP2);

                //simplest example. now you can easily do this <3 algebra (I don't)
                $new_value = $old_value * $pow2;

        //returns the new value
        return $new_value;
}


function demurrageFrcDays($coins, $days) {
        $old_value = $coins;
        //there are 144 blocks per day based on a 10 minute block window. actual times may vary
        $new_height = $days * 144 ;
        //technically this is not needed, but this is here for sake of completeness of the formula
        //technically this is not needed, but this is here for sake of completeness of the formula
        $old_height = 0;

                //original example as described by https://github.com/freicoin/freicoin-old/wiki/How-to-properly-handle-demurrage-in-applications
                //$new_value = $old_value * (1 - 2**-20)**($new_height - $old_height)

                        //going step by step so I understand how its done
                        $pow1 = pow(2, -20);

                        //next step in the equation
                        //$new_value = $old_value * (1 - $pow1)**($new_height - $old_height)

                        //step by step
                        $powP1 = (1 - $pow1);

                        //next step looks like
                        //$new_value = $old_value * $powP1 **($new_height - $old_height)

                        //next step
                        $powP2 = ($new_height - $old_height);

                        //next step example
                        //$new_value = $old_value * $powP1 **$powP2

                        //final step towards simplification
                        $pow2 = pow($powP1, $powP2);

                //simplest example. now you can easily do this <3 algebra (I don't)
                $new_value = $old_value * $pow2;

        //returns the new value
        return $new_value;
}



function demurrageFrcBlocks($coins, $block) {
        $old_value = $coins;
        $new_height = $block;
        //technically this is not needed, but this is here for sake of completeness of the formula
        $old_height = 0;

                //original example as described by https://github.com/freicoin/freicoin-old/wiki/How-to-properly-handle-demurrage-in-applications
                //$new_value = $old_value * (1 - 2**-20)**($new_height - $old_height)

                        //going step by step so I understand how its done
                        $pow1 = pow(2, -20);

                        //next step in the equation
                        //$new_value = $old_value * (1 - $pow1)**($new_height - $old_height)

                        //step by step
                        $powP1 = (1 - $pow1);

                        //next step looks like

                        //$new_value = $old_value * $powP1 **($new_height - $old_height)

                        //next step
                        $powP2 = ($new_height - $old_height);

                        //next step example
                        //$new_value = $old_value * $powP1 **$powP2

                        //final step towards simplification
                        $pow2 = pow($powP1, $powP2);

                //simplest example. now you can easily do this <3 algebra (I don't)
                $new_value = $old_value * $pow2;

        //returns the new value
        return $new_value;
}



?>


<?php
echo "Demurrage Calculator";
$coins = intval($_POST["coins"]);
$demTime = $_POST["demTime"];
$demLength = intval($_POST["demLength"]);
if ($coins != NULL) {
if ($demTime != NULL) {
if ($demLength != NULL) {



echo "<br/>\n";
echo $coins;
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo " will be worth ";
echo "<br/>\n";

if ($demTime == "Y") {
echo demurrageFrcYears($coins, $demLength);
}

if ($demTime == "M") {
echo demurrageFrcMonths($coins, $demLength);
}

if ($demTime == "W") {
echo demurrageFrcWeeks($coins, $demLength);
}

if ($demTime == "D") {
echo demurrageFrcDays($coins, $demLength);
}

if ($demTime == "B") {
echo demurrageFrcBlocks($coins, $demLength);
}
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo "<br/>\n";
echo "<br/>\n";
echo "<br/>\n";

}
}
}


echo '<form action="demurrage.php" method="post">';
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo 'RC: <input type="num" name="coins"><br>';

echo '<form action="demurrage.php" method="post">';
echo 'Over: <input type="num" name="demLength"><br/>';


echo '<input type="radio" name=demTime value="Y" checked>Years
<input type="radio" name=demTime value="M" >Months
<input type="radio" name=demTime value="W" >Weeks
<input type="radio" name=demTime value="D" >Days
<input type="radio" name=demTime value="B" >Blocks
';
echo '<br/><input type="submit">';
echo '</form>';

?>

</body>
</html>



