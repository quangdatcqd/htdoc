<center>
<!-- <style>
    input{
        margin-bottom: 5px;
    }
</style>
<form action="bai3.php" method="post">
<input type="text" name="pass" placeholder="Nhập mật khẩu">   
<button type="submit" name="gui">Check</button>
</form>  -->
    <?php

if (isset($_GET['pass'])) {
    // if (isset($_POST['gui'])) {
        // $pass = $_POST['pass'];
        $pass = substr( $_SERVER['REQUEST_URI'],30);
        
        $manh = 'Mật khẩu yếu!';
        $hoa = preg_match("(.*[A-Z])", $pass); // kiểm tra 2 ký tự viết hoa
        $dacbiet = preg_match("(.*[^a-zA-Z0-9])", $pass); // kiểm tra có ký tự đặc biệt 
        $so = preg_match("(.*[0-9])", $pass); // kiểm tra có số
        $thuong = preg_match("(.*[a-z].*[a-z].*[a-z])", $pass); //kiểm tra có ít nhất 3 ký tự thường
        $dodai = preg_match("(.{8})", $pass); // kiểm tra chuỗi có 8 kí tự
        $num = 0;
        if ($dodai && ($thuong || $so || $dacbiet || $hoa)) {
            $num += 3;
            if ($hoa && ($thuong || $so)) {
                $manh = 'Mật khẩu trung bình!';
                $num += 4;
                if ($so || $dacbiet) {
                    $num += 3;
                    $manh = 'Mật khẩu khá!';
                    if ($dacbiet && $so) {
                        $manh = 'Mật khẩu mạnh!';
                        $num += 5;
                    }
                }
            }
        }

    ?>
        <br>
        <p><?=$pass ?></p> <br>
        <h2><?=$manh ?></h2>
        <input type="range" min="0" max="15" readonly value="<?= $num ?>"> <br>
         
    <?php

    } else echo 'Vui Lòng Nhập Mật Khẩu để kiểm tra';

 
    ?>
</center>