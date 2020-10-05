<?php
function random_char($string) {
  $i = random_int(0,strlen($string)-1); //use mtrand if working with an older version or third party library, maybe add param?
  return $string[$i];
}
function random_string($length, $char_set) {
  for($i=0; $i < $length; $i++) {
    $output .= random_char($char_set);
  }
  return $output;
}

function generate_password($length) {
  //define character sets
  $lower = implode(range('a','z'));
  $upper = implode(range('A','Z'));
  $numbers = implode(range(0,9));
  $symbols = '!@#$%^&*()';

  //extract configuration flags into variables
  $use_lower = isset($_GET['lower']) ? $_GET['lower'] : '0';;
  $use_upper = isset($_GET['upper']) ? $_GET['upper'] : '0';;
  $use_numbers = isset($_GET['numbers']) ? $_GET['numbers'] : '0';;
  $use_symbols = isset($_GET['symbols']) ? $_GET['symbols'] : '0';;

  $chars = '';
  if($use_lower == '1') { $chars .= $lower; }
  if($use_upper == '1') { $chars .= $upper; }
  if($use_numbers == '1') { $chars .= $numbers; }
  if($use_symbols == '1') { $chars .= $symbols; }

  return random_string($length, $chars);
}
$password = generate_password($_GET['length']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Password Generator</title>
  </head>
  <body>

    <p> Generated Password: <?php echo $password; ?></p>

    <p>Generate a new password using the form options.</>
    <form action="" method="get">
    <!--Loop the checkboxes and grab the names from array,re-do the save state checking with php functions-->
      Length: <input type="text" name="length" value= 
        "<?php if(isset($_GET['length'])) { echo $_GET['length']; } ?>"
       /><br />
      <!--use number line-->
      <input type="checkbox" name="lower" value="1" 
        <?php if($_GET['lower'] == 1) {echo 'checked';}?> 
      /> Lowercase<br />
      <input type="checkbox" name="upper" value="1" 
        <?php if($_GET['upper'] == 1) {echo 'checked';}?> 
      /> Uppercase<br />
      <input type="checkbox" name="number" value="1" 
        <?php if($_GET['number'] == 1) {echo 'checked';}?> 
      /> Number<br />
      <input type="checkbox" name="symbols" value="1" 
        <?php if($_GET['symbols'] == 1) {echo 'checked';}?> 
      /> Symbols<br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>