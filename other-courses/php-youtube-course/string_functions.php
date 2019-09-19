<?php
    # substr()
    # Returns a portion of a string
    $output1 = substr('Hello', 1, 3);
    echo $output1; // ell
    echo "<br>";
    $output2 = substr('Hello', -2);
    echo $output2; //lo
    echo "<br>";
    echo "<br>";

    # strlen()
    # Returns the length of a string
    $output3 = strlen('Hello World');
    echo $output3; //11
    echo "<br>";
    echo "<br>";

    # strpos()
    # Finds the position of the first occurence of a sub string
    $output4 = strpos('Hello Worls', 'o');
    echo $output4; // 5
    echo "<br>";
    echo "<br>";

    $output5 = strrpos('Hello Worls', 'o');
    echo $output5; // 7
    echo "<br>";
    echo "<br>";

    # trim()
    # Strips whitespace
    $text = 'Hello World               ';
    var_dump($text); // 26
    echo "<br>";
    $trimmed = trim($text); // use it for form data
    echo "<br>";
    var_dump($trimmed); // 11
    echo "<br>";
    echo "<br>";

   # strtoupper
   # Makes everything uppercaxe
   $output = strtoupper('Hello World'); // HELLO WORLD
   echo $output;
   echo "<br>";
   echo "<br>";

   # strtolower
   # Makes everything uppercaxe
   $output = strtolower('Hello World'); // hello world
   echo $output;
   echo "<br>";
   echo "<br>";


   # ucwords()
   # Capitalize every word
   $output = ucwords('hello world'); // Hello World
   echo $output;
   echo "<br>";
   echo "<br>";
   
   # str_replace()
   # Replace all occurences of a search string with a replacement
   $text ='Hello World';
   $output = str_replace('World', 'Everyone', $text);
   echo $output;
   echo "<br>";
   echo "<br>";

   # is_string()
   # Check if string
   $val ='22';
   $output = is_string($val);
   echo $output;
   echo "<br>";
   

   $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

   foreach($values as $value){
       if(is_string($value)){
           echo "{$value} is a string<br>";
       }
   }
   echo "<br>";
   echo "<br>";


   # gzcompress()
   # Compress a string
   $string =
   "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur similique blanditiis, obcaecati, perferendis in cum est impedit dolorum eum quos iste debitis quod sequi sed soluta officiis consequatur aliquam quas vitae quisquam hic. Pariatur id quis explicabo! In fuga atque itaque minus, magni quae corrupti iste veritatis tempora. Ducimus, sapiente est! Libero, velit. Consectetur doloribus ab dolores quibusdam, et recusandae totam magni ex iure minus, facere culpa modi natus expedita? Ipsum earum magni alias inventore voluptate quae, eum est iure?";
   $compressed = gzcompress($string);
   echo $compressed;
   echo "<br>";
   
   $original = gzuncompress($compressed);
   echo $original;
   echo "<br>";

?>