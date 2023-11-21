<?php
    $students =  [
        ['name' => 'Nguyen Van A', "id" => "19573343"],
        ['name' => 'Nguyen Van B', "id" => "19578343"],
        ['name' => 'Nguyen Van C', "id" => "19576343"]
    ];
    // Truy xuất mảng
    // echo "<pre>";
    //     echo print_r($students);
    // echo "</pre>";

    // Truy xuất 1 đối tượng
    // echo $students[0]['name'];

    // vòng for
    // for($i=0; $i<count($students); $i++){
    //     echo $students[$i]['name']."<br>";
    // };

    // Dùng nhiều lấy thẳng phần tử có tên 
    // foreach($students as $student){
    //     echo $student["name"]."<br>";
    // };

    // 
    $colors = ['blue' => 'Màu xanh', 'yellow' => 'Màu vàng', 'red' => 'Màu đỏ'];
    echo "<pre>";
        echo print_r($colors);
    echo "</pre>";

    echo 'Toi la mau: ' . $colors["blue"] . '<br>';
    echo "Toi la mau: {$colors['blue']} <br>";

    $dayOfWeek = 1;
    switch  ($dayOfWeek) {
        case 1: $dayof = 'Monday';
    }
    echo $dayof;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>
        Chọn màu sắc:
        <select name="" id="">
        <!-- Kiểu 1 -->
        <!-- <?php
            foreach($colors as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
        ?> -->

    <!-- Kiểu 2 -->
        <!-- <?php
            foreach($colors as $key => $value) {
        ?>
                <option value='<?=$key?>'><?= $value?></option>
        <?php
            }
        ?> -->

        <!-- Kiểu 3 -->
        <?php foreach($colors as $key => $value) : ?>
                <option value='<?=$key?>'><?=$value?></option>;
        <?php endforeach; ?>
        </select>
    </div>

    <!-- htmlspecialchars - xóa ký tự đặc biệt -->
    

    
</body>
</html>