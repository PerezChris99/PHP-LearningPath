<?php
/** for loop syntax
 * for (initialize; condition; incrememt) {
 * // code to be executed
 * }
 */

for($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
}
/* while loop syntax
while (condition) {
    code to be executed
}
*/

/*$x = 1;

while($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x = $x + 1;
*/

/* do while lop syntax
do {
    // code to be executed
} while (condition);
*/
$x = 1;

do {
    echo 'Number' . $x . '<br>';
    $x++;
} while ($x <= 5);

/** foreach lop syntax
 * foreach ($array as $value) {
 * //code to be executed}/ */
$posts = ['First Post', 'Second Post', 'Third Post'];
for($x = 0; $x < count($posts);$x++) {
    echo $posts[$x];
}

/*either*/
foreach($posts as $post) {
    echo $post;
}
/*or */
foreach($posts as $index => $post) {
    echo $index . ' - ' .$post . '<br>';
}

/*associative aray*/
$person = [
    'first_name' => 'John',
    'last_name' => 'Kelly',
    'email' => 'john@gmail.com',
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}









?>