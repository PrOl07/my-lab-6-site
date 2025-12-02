<?php
$data = file_get_contents('php://input');
if($data) {
    file_put_contents('collapse_data.json', $data);
    echo "Дані успішно збережено!";
} else {
    echo "Немає даних для збереження.";
}
?>
