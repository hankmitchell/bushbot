<?php
$master = [];
foreach (glob("*.html") as $_) {
    $j = file_get_contents($_);
    $j = json_decode($j);
    foreach ($j as $k=> $v) {
        $master[] = $v;
    }
}
echo "Initial Load: ".count($master);
$master = array_unique($master);
$master = array_values( $master);
sort($master);
echo "<br>Reduced to: ".count($master);
echo "<br>";
echo json_encode($master);
?>
<script>
    var j = <?php echo (json_encode($master));?>
</script>
