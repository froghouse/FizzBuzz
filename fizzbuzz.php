#!/usr/bin/php
<?php
  function areArgumentsCorrect()
  {
    global $argv;

    if(count($argv) == 2)
    {
      foreach($argv as $arg)
      {
        if(is_numeric($arg))
        {
          continue;
        }
        else
        {
          return false;
        }
      }

      return true;
    }

    return false;
  }

  function divisible($a, $b)
  {
    return $a%$b ? false : true;
  }

  function fizzbuzz()
  {
    global $argv;
    for($i = 1; $i < 100; $i++)
    {
      $fizzDivisor = divisible($i, $argv[0]);
      $buzzDivisor = divisible($i, $argv[1]);

      if($fizzDivisor and $buzzDivisor)
      {
        echo "FizzBuzz";
      }
      elseif($fizzDivisor)
      {
        echo "Fizz";
      }
      elseif($buzzDivisor)
      {
        echo "Buzz";
      }
      else
      {
        echo $i;
      }

      echo PHP_EOL;
    }
  }

  array_shift($argv);

  if(areArgumentsCorrect())
  {
    fizzBuzz();
  }
  else
  {
    echo "argv[0] == " . argv[0] . " argv[1] == " . argv[1] . PHP_EOL;
  }
?>
