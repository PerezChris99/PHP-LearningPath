<?php
/* conditionals
< less than
>greater than
<= less than or equal to
>= greater than or equal to
== equal to
!= not equal to
!== not identical to
*/ 
/* if statement syntax 
if (condition) {
    //code to be executed if condition is true
}
*/


$age = 17;

if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}

$t = date("H");

if($t < 12) {
  echo 'Good morning';
} elseif($t < 17) {
  echo 'Good Afternoon';
} else {
  echo 'Good evening';
}

$posts = ['First Post'];

//*either
if(empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

//* or
echo !empty($posts) ? $posts[0] : 'No posts';
$firstPost = !empty($posts) ? $posts[0] : 'No posts';
$firstPost = $posts[0] ?? null;
echo $firstPost;

//*switches*//
$favcolor = 'blue';
switch($favcolor) {
    case 'red':
      echo 'Your favourate color is red';
      break;
    case 'blue':
      echo 'Your favourate color is blue';
      break;
    case 'green':
       echo 'Your favourate color is green';
       break;
    default:
       echo 'Your favourite color is not red, green or blue';
}













?>