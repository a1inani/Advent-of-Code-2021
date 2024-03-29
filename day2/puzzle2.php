--- Part Two ---
<p>Based on your calculations, the planned course doesn't seem to make any sense. You find the submarine manual and discover that the process is actually slightly more complicated.</p>

<p>In addition to horizontal position and depth, you'll also need to track a third value, aim, which also starts at 0. The commands also mean something entirely different than you first thought:</p>

down X increases your aim by X units.<br/>
up X decreases your aim by X units.<br/>
forward X does two things:<br/>
It increases your horizontal position by X units.<br/>
It increases your depth by your aim multiplied by X.<br/>
<p>Again note that since you're on a submarine, down and up do the opposite of what you might expect: "down" means aiming in the positive direction.</p>

<p>Now, the above example does something different:</p>

forward 5 adds 5 to your horizontal position, a total of 5. Because your aim is 0, your depth does not change.<br/>
down 5 adds 5 to your aim, resulting in a value of 5.<br/>
forward 8 adds 8 to your horizontal position, a total of 13. Because your aim is 5, your depth increases by 8*5=40.<br/>
up 3 decreases your aim by 3, resulting in a value of 2.<br/>
down 8 adds 8 to your aim, resulting in a value of 10.<br/>
forward 2 adds 2 to your horizontal position, a total of 15. Because your aim is 10, your depth increases by 2*10=20 to a total of 60.<br/>
<p>After following these new instructions, you would have a horizontal position of 15 and a depth of 60. (Multiplying these produces 900.)</p>

<p>Using this new interpretation of the commands, calculate the horizontal position and depth you would have after following the planned course. What do you get if you multiply your final horizontal position by your final depth?</p>

<?php
$horizontal = 0;
$depth = 0;
$aim = 0;

/* Test $str = "forward 5
down 5
forward 8
up 3
down 8
forward 2";*/
$str = "forward 1
forward 8
down 9
forward 3
down 6
down 1
down 1
forward 5
forward 5
forward 8
down 6
forward 7
down 3
down 4
up 1
forward 7
forward 5
forward 8
down 1
forward 9
forward 9
forward 7
up 8
forward 5
forward 9
down 3
forward 2
down 5
down 4
up 2
up 5
forward 3
forward 8
down 9
down 1
forward 2
forward 6
up 2
up 9
forward 8
down 7
forward 2
up 5
forward 7
down 9
forward 9
forward 5
down 8
down 6
forward 2
up 4
down 2
down 9
forward 4
down 4
forward 9
down 8
down 7
down 4
forward 6
forward 9
up 7
down 2
up 6
down 8
forward 3
forward 9
forward 7
down 1
forward 1
forward 7
forward 5
down 4
down 1
forward 4
forward 9
forward 6
down 5
down 1
forward 9
down 6
down 4
forward 8
up 8
forward 9
up 9
up 9
up 7
forward 4
down 4
forward 4
forward 2
forward 2
forward 9
up 4
forward 4
forward 3
forward 5
down 3
up 4
forward 3
forward 5
forward 9
forward 7
down 1
forward 4
down 5
up 6
down 9
forward 8
down 1
forward 3
down 2
up 8
down 5
down 8
forward 5
down 6
forward 6
down 7
up 5
forward 8
forward 5
forward 7
up 3
down 6
up 9
forward 1
forward 7
forward 3
forward 8
up 4
up 9
down 5
forward 5
forward 4
forward 4
down 9
up 6
forward 5
forward 2
down 6
down 2
forward 9
down 7
forward 8
down 4
forward 8
forward 8
up 7
up 5
forward 6
forward 4
up 4
forward 2
up 3
down 8
forward 1
forward 8
forward 8
forward 4
up 7
forward 2
down 8
forward 1
down 1
down 4
up 3
forward 8
forward 1
down 9
up 5
down 5
forward 9
forward 4
up 7
down 2
down 4
forward 1
forward 6
up 8
up 1
forward 8
down 5
down 5
forward 9
down 8
forward 9
down 1
up 7
forward 8
up 2
down 2
up 1
up 9
forward 6
down 5
forward 1
down 2
forward 5
down 3
up 8
down 2
down 8
forward 7
forward 2
up 3
forward 3
down 1
forward 4
down 7
up 5
forward 8
forward 8
up 6
up 4
up 4
down 7
forward 2
forward 1
forward 6
up 3
forward 3
forward 9
down 4
forward 2
down 9
down 8
forward 5
forward 2
forward 4
forward 5
forward 7
down 4
up 5
down 7
forward 4
up 7
down 9
down 4
down 3
forward 8
down 5
forward 8
forward 8
down 3
down 8
down 2
forward 4
forward 5
down 7
down 7
down 6
up 9
down 9
down 5
forward 4
down 1
down 7
up 4
down 8
up 5
up 1
down 9
down 7
forward 9
forward 7
down 6
up 2
forward 1
down 8
up 2
forward 8
down 2
forward 2
down 9
forward 2
forward 3
forward 7
up 3
up 3
up 3
forward 5
up 9
up 1
down 9
down 4
down 5
up 9
up 7
down 9
forward 3
down 5
down 6
down 3
up 6
forward 8
up 6
up 8
down 4
forward 8
down 8
forward 7
up 1
forward 4
down 2
forward 7
down 6
up 8
forward 1
down 8
down 4
forward 7
forward 2
up 4
forward 9
forward 9
down 8
up 1
down 3
forward 7
down 9
forward 2
forward 5
down 4
down 8
down 3
up 1
down 2
up 3
forward 1
forward 5
forward 3
down 2
up 2
forward 7
down 6
forward 3
down 8
forward 5
forward 4
up 2
forward 4
up 2
down 4
forward 8
forward 5
down 1
forward 6
down 2
down 5
up 8
forward 5
down 2
up 5
down 5
forward 4
forward 3
forward 8
down 9
up 3
forward 4
forward 2
forward 2
forward 2
down 4
forward 8
forward 5
up 3
down 1
forward 3
up 5
forward 8
down 6
forward 6
down 9
forward 6
up 5
down 6
up 9
forward 8
down 2
forward 9
down 7
down 5
down 4
forward 3
forward 2
forward 1
forward 7
down 3
forward 4
up 6
down 5
down 4
down 8
down 4
up 6
forward 3
down 4
down 6
forward 9
forward 6
up 4
down 2
down 7
forward 2
forward 9
down 4
down 8
down 3
down 4
forward 9
forward 4
forward 1
down 7
forward 2
up 1
forward 7
down 7
forward 7
forward 5
up 8
down 4
up 7
up 2
up 7
up 8
down 9
forward 8
forward 8
down 3
forward 9
down 3
up 7
down 1
down 9
forward 2
up 4
down 2
forward 2
up 5
up 5
up 1
forward 7
up 5
down 3
up 8
down 9
down 7
up 4
down 8
down 4
forward 8
up 6
down 2
down 4
forward 7
forward 8
forward 8
forward 1
down 4
down 4
forward 4
down 7
forward 3
down 3
down 6
down 7
down 6
forward 8
down 4
down 7
down 1
down 7
down 5
down 2
up 5
forward 9
down 3
down 4
down 4
forward 5
down 9
forward 1
up 1
up 1
down 3
forward 8
up 6
up 6
down 1
up 2
down 7
down 9
up 7
forward 7
down 6
down 5
down 5
up 8
forward 7
down 1
down 6
forward 4
forward 5
forward 5
forward 2
down 5
up 6
down 5
forward 1
down 9
up 4
down 7
down 8
down 5
down 8
forward 7
forward 2
up 3
down 7
forward 1
forward 4
forward 5
forward 1
forward 7
down 6
forward 9
forward 8
down 5
forward 5
forward 8
forward 3
up 1
forward 6
forward 9
forward 8
down 3
forward 8
forward 7
down 1
forward 9
down 9
forward 6
forward 4
forward 2
forward 9
down 7
down 6
forward 4
forward 1
forward 3
forward 9
up 4
down 5
forward 6
down 8
up 5
down 9
down 6
forward 7
down 9
forward 6
forward 5
down 1
down 4
up 6
forward 2
down 8
down 5
up 5
forward 6
forward 5
down 8
down 4
down 3
down 8
forward 3
forward 9
up 6
down 9
down 1
forward 7
forward 5
down 5
down 1
forward 7
forward 3
up 6
forward 1
up 9
forward 1
down 4
down 3
down 3
up 6
forward 9
forward 5
up 9
up 5
forward 5
forward 7
forward 9
down 8
forward 2
down 7
down 7
forward 3
down 2
up 1
down 4
down 6
down 8
forward 8
forward 6
up 3
forward 9
down 8
up 7
forward 6
forward 9
up 8
forward 3
down 9
forward 3
forward 4
down 3
down 2
forward 2
down 5
down 9
down 2
down 7
down 4
down 6
forward 5
up 1
forward 9
forward 2
up 8
forward 8
down 3
forward 7
down 5
forward 5
down 5
down 9
down 9
down 6
down 5
down 4
up 6
forward 9
down 2
down 5
up 3
forward 8
forward 1
down 4
down 8
forward 6
forward 7
up 2
forward 1
forward 2
down 7
down 6
up 7
forward 7
down 6
down 6
down 8
forward 8
up 5
up 9
forward 8
forward 1
down 6
down 6
up 7
forward 6
up 5
forward 7
down 1
forward 1
forward 9
up 7
down 3
forward 4
down 6
down 6
up 5
up 7
down 1
up 2
down 8
down 1
forward 2
down 3
forward 8
forward 2
up 2
down 7
forward 5
forward 7
down 2
up 1
down 1
down 6
down 4
up 1
forward 2
forward 7
forward 8
down 1
forward 6
down 5
down 8
up 6
down 7
forward 6
down 8
down 6
down 9
forward 8
down 9
down 6
up 2
down 2
down 5
down 5
up 8
forward 6
forward 7
up 4
down 5
up 5
forward 6
forward 8
up 6
up 7
up 3
up 9
down 6
forward 3
forward 3
down 6
down 8
down 2
down 2
up 7
up 6
forward 5
forward 4
down 2
down 3
forward 8
down 9
forward 3
down 8
down 8
forward 9
forward 7
down 8
down 7
up 2
down 8
down 1
down 7
up 7
forward 3
forward 5
up 1
down 9
forward 3
down 4
down 5
down 3
down 8
up 7
forward 4
down 6
forward 9
forward 9
forward 1
up 6
up 8
forward 6
down 6
down 6
forward 1
up 4
down 2
forward 8
forward 6
down 2
down 9
down 6
down 4
forward 5
down 5
down 7
down 6
forward 8
down 8
down 2
up 2
up 2
down 3
forward 2
down 2
down 5
down 3
up 5
down 8
forward 8
down 8
down 4
down 3
forward 7
forward 1
forward 1
down 7
down 6
down 2
up 9
up 7
down 9
forward 1
down 3
down 4
down 7
forward 6
down 8
forward 3
down 6
forward 4
down 3
down 5
down 4
forward 4
up 4
up 1
up 2
down 3
forward 6
up 6
forward 8
forward 9
forward 3
forward 4
forward 2
forward 8
forward 7
up 4
down 5
forward 8
forward 6
down 2
forward 3
down 5
down 8
forward 3
forward 4
down 3
down 9
down 6
up 6
down 1
down 8
forward 7
down 3
forward 8
forward 4
down 2
up 7
down 5
forward 1
forward 7
forward 1
forward 3
down 8
down 7
forward 5
forward 3
down 1
forward 7
down 4
down 3
down 6
down 9
forward 6
down 1
forward 3
forward 3
forward 5
forward 9
up 3
up 6
forward 7
up 5
up 9
down 2
down 5
up 5
forward 4
forward 4
forward 6
up 2
down 9
down 4
down 2
forward 7
down 3
up 4
up 6
forward 7
forward 1
forward 1
down 7
forward 5
forward 4
up 6
forward 4
forward 2
forward 6
up 1
up 5
forward 8
up 2
forward 3
forward 5
up 9
down 4
forward 1
up 7
down 5
forward 7
forward 2
forward 8
down 8
down 2
forward 2
forward 4
forward 8
forward 1
forward 8
forward 2
down 9
forward 7
down 7
down 5
up 9
forward 5
down 1
down 9
down 2
forward 6
down 8
up 9
forward 5
down 2
forward 1
up 4
forward 1
down 9
up 3
down 3
down 2
forward 9
down 5
forward 4
down 1
forward 4
down 8
down 3
forward 8
forward 2
forward 3
down 1
forward 1
down 2
forward 6
up 3
up 5
up 9
forward 9
down 5
down 5
forward 4
up 6
down 7
down 2
forward 8
forward 6
forward 6
up 6
down 7
forward 8";

$input = explode("\n", $str);

foreach($input as $i) {
  $line = explode(" ", $i);
  if($line[0] == "forward") {
    $horizontal += $line[1];
    $depth += $aim * $line[1];
    echo "forward ".$line[1]." hor: ".$horizontal.", depth: ".$depth;
    echo "<br/>";
  } else if($line[0] == "down") {
    $aim += $line[1];
    echo "down ".$line[1]." aim: ".$aim."<br/>";
  } else if($line[0] == "up") {
    $aim = $aim - $line[1];
    echo "up ".$line[1]." aim: ".$aim."<br/>";
  }
}
echo "<br/>Product: ".$depth*$horizontal;
?>
