<?php
/* This function is copy right 2013-2014 by Joseph S. White - JoesfreicoinPool@gmail.com
 * http://pool.cr.rs
 * No part of this code may be duplicated with out the express written concent of Joe
 * This code must have this warning included as it is not given out with any warranty or service assistance
 * You may not use this code for financial gains. no pools may use this, no exchanges.
 * Thank you - Joe
 */

/* This variable gets us the latest cryptsy price for freicoin to btc */
$cryp = file_get_contents('http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=39');

/* This variable decodes the json string so we can use it */
$cry = json_decode($cryp, true);

//bistamp price
$bsc = file_get_contents('https://www.bitstamp.net/api/ticker/');
$bs = json_decode($bsc, true);

echo "<html><body>";

echo "cryptsy values\n";
echo "<br/>\n";

echo "Last: ";
echo ($cry["return"]["markets"]["FRC"]["lasttradeprice"]);
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo "<br/>\n";

echo "Sell: ";
echo ($cry["return"]["markets"]["FRC"]["sellorders"][0]["price"]);
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo "<br/>\n";

echo "Buy: ";
echo $cry["return"]["markets"]["FRC"]["buyorders"][0]["price"];
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo "<br/>\n";
echo "Volume: ";
echo ($cry["return"]["markets"]["FRC"]["volume"]);
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo "<br/>\n";

echo "1";
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo ": $";
echo ( intval($coins) * $bs['last']  * ($cry["return"]["markets"]["FRC"]["lasttradeprice"]) );
echo "USD.";

//http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=39
echo ( $bs['last']  * ($cry["return"]["markets"]["FRC"]["lasttradeprice"]) );

$coins = $_POST["coins"];
if ($coins != NULL) {
echo "<br/>\n";
echo "<br/>\n";
echo $coins;
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo " are currently worth $";
echo ( intval($coins) * $bs['last']  * ($cry["return"]["markets"]["FRC"]["lasttradeprice"]) );
echo "USD.";
echo "<br/>\n";
echo "<br/>\n";

}
echo '<form action="estimate.php" method="post">';
echo mb_convert_encoding('&#x0191', 'UTF-8', 'HTML-ENTITIES');
echo 'RC: <input type="num" name="coins"><br>';
echo '<input type="submit">';
echo '</form>';

?>

</body>
</html>

