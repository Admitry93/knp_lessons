<?php
$str = strtolower('heLLo gUYS nEVEr mORe');
$num = rand(100, 200);
$mas = [
    "one" => "tut one",
    "two" => "tut two",
    "three" => "tut three",
    "four" => [11,12,13]
];

$n1 = 10;
$n2 = $n1;
$n1 += 10;
?>
<h2>
    <?php echo $num . '<br>' . $str; ?>
</h2>

<h4>
    <?php
        foreach ( $mas as $val ) {
            echo $val . "<br>";
        }
    ?>
</h4>

<h3>
    <?php
        echo "var1 - {$n1}" . "<br>";
        echo "var2 - {$n2}";
    ?>
</h3>

<h2>
    <?php echo "I luv puppies"; ?>
</h2>









<?php
require __DIR__.'/lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $toys = get_great_pet_toys();
    $newToy = [
        'name' => $name,
        'description' => $description
    ];

    $toys[] = $newToy;
    $newJson = json_encode($toys, JSON_PRETTY_PRINT);
    file_put_contents('toys.json', $newJson);
}

?>

<form action="/new_toy.php" method="POST">
    <input type="text" name="name" />
    <textarea name="description"></textarea>

    <button type="submit">Add toy</button>
</form>
