<html>
  
  <head>
    <style>
      .elapsed{
        font-size: x-large;
        font-family: sans-serif, "Arial";
        color: green;
      }
      .left{
        font-size: xx-large;
        font-family: sans-serif, "Arial";
        color: red;
      }
    </style>
  </head>
  <body>

<?php 


//$approxStartOf90days = strtotime("2014/12/22");
//$appliedTimeStamp = strtotime("2014/12/28");


function daysSince($a){
  date_default_timezone_set('America/Toronto');
  $today = date('Y/m/d G:i');
  //echo "today is " . $today . "<br>";
  $todayTimeStamp = strtotime($today);

  $a = strtotime($a);

  $timeDiff = abs($a - $todayTimeStamp);
  $numberDays = $timeDiff/86400;  // 86400 seconds in one day
  // and you might want to convert to integer
  $numberDays = intval($numberDays);
  return $numberDays;
}

function daysLeftUntil($a){
  date_default_timezone_set('America/Toronto');
  $today = date('Y/m/d G:i');
  //echo "today is " . $today . "<br>";
  $todayTimeStamp = strtotime($today);

  $a = strtotime($a);

  $timeDiff = abs($todayTimeStamp - $a);
  $numberDays = $timeDiff/86400;  // 86400 seconds in one day
  // and you might want to convert to integer
  $numberDays = intval($numberDays);
  return $numberDays;
}


// $timeDiff = abs($appliedTimeStamp - $todayTimeStamp);

// $numberDays = $timeDiff/86400;  // 86400 seconds in one day

// // and you might want to convert to integer
// $numberDays = intval($numberDays);

// echo $numberDays . " days";

?>
<div>
  <span class="elapsed">
    <?php echo "<br>" . daysSince("2014/12/22"); ?>
  </span> 
  days since 90 days started
</div>
<div>
  <span class="elapsed">
    <?php echo "<br>" . daysSince("2014/12/28"); ?> 
    </span> 
    days since applied
</div>
<div>
  <span class="left">
  <?php echo "<br>" . daysLeftUntil("2015/04/11"); ?> 
  </span> 
  days until Jenica's birthday
</div>
<div>
  <span class="left">
  <?php echo "<br>" . daysLeftUntil("2015/03/31"); ?> 
  </span> 
  days until the end of the study permit
</div>
<div>
  <span class="left">
  <?php echo "<br>" . daysLeftUntil("2015/05/11"); ?> 
  </span> 
  days until my birthday
</div>
<div>
  <span class="left">
  <?php echo "<br>" . daysLeftUntil("2015/04/16"); ?> 
  </span> 
  days until Joy's birthday
</div>
<div>
  <span class="left">
  <?php echo "<br>" . daysLeftUntil("2015/09/19"); ?>
  </span> 
  days until Dan's birthday
</div>
<div>
  <span class="elapsed">
  <?php echo "<br>" . daysSince("2015/02/09"); ?>
  </span> 
  days since started in MUNDO Media
</div>

<div>
  <span class="elapsed">
  <?php echo "<br>" . daysSince("1996/12/28"); ?>
  </span> 
  days since we got married
</div>

</body>

</html>