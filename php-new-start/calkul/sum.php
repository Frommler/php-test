<?php
    function show_result($a, $b, $c) {
        if ($c == '+') {
            $d = $a + $b;
        } elseif ($c == '-') {
            $d = $a - $b;
        } elseif ($c == '*') {
            $d = $a * $b;
        } elseif ($c == '/') {
            $d = $a / $b;
        };
      $result = $d;
        
      echo "$a $c $b = <b>$result</b>";
      echo '<br><a href="sum.php">BACK</a>';
    };
    if (isset($_POST['a']) && isset($_POST['b'])) {
          show_result($_POST['a'], $_POST['b'], $_POST['calc']);
      } else {
          include('form.php');
      };
?> 