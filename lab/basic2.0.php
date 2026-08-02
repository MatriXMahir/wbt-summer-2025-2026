<!DOCTYPE html>
<html>
    <body>
        <h1>Lab Task 2.0 </h1>
        
        <?php
      
//1 Interest calculation:
$principal = 2000;
$rate = 20;
$time = 10;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal = $principal <br>";
echo "Rate = $rate <br>";
echo "Time = $time  <br>";
echo "Simple Interest = $simpleInterest <br><br>";


//2 Prime Number Finder:
$num = 2;
$count = 0;

for ($i = 1;$i<=$num;$i++)
    {
    if ($num % $i == 0)
        {
        $count++;
        }
    }

if ($count == 2)
    {
    echo "$num is a prime number.<br><br>";
    } 
else{
    echo "$num is not a prime number.<br><br>";
}

//3 Factorial calculation:
$num = 4;
$fact = 1;

for ($i = 1; $i <= $num; $i++) 
    {
    $fact = $fact * $i;
    }

echo "Factorial: $num = $fact <br><br>";


//4 sum and avg of an array
$num = [10, 30, 50];

$sum = 0;

for ($i = 0;$i < 3;$i++) 
    {
    $sum = $sum + $num[$i];
    }

echo "Sum = $sum <br>";
$avg = $sum / 3;
echo "Average = $avg <br><br>";


//5 pattern:

for ($i = 1; $i<=4;$i++)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo "$i ";
        }
    echo "<br>";
    }

        ?>
        </body>
        </html>