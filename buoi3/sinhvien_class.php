<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class sinhvien{
            //Khai bao thuoc tinh
            public $mssv = "B1906406";
            public $hoten = "Phan Thi Thanh Thuy";
            public $ngaysinh = ('2001-12-19');
            //Ham xay dung
            function __construct($mssv,$hoten,$ngaysinh){
                $this->mssv = $mssv;
                $this->hoten = $hoten;
                $this->ngaysinh= $ngaysinh;
            }
            //Hàm huy
            function _destruct(){
                        echo "Mssv {$this->mssv} , Ho Ten {$this->hoten} Va Ngay Sinh {$this->ngaysinh}."; 
            }
            //Ham gan tri
            function set_mssv($mssv) {
                $this->mssv= $mssv;
            }
            function set_hoten($hoten) {
                $this->hoten = $hoten;
            }
            function set_ngaysinh($ngaysinh) {
                $this->ngaysinh= $ngaysinh;
            }
            //Ham tra ve cac gia tri thuoc tinh
            function get_mssv(){
                return $this->mssv;
            }
            function get_hoten(){
                return $this->hoten;
            }
            function get_ngaysinh(){
                return $this->ngaysinh;
            }
            //Ham tinh tuoi
            function getAge($birthdate = '0000-00-00') {
                if ($birthdate == '0000-00-00') 
                    return 'Unknown';
                $bits = explode('-', $birthdate);
                $age = date('Y') - $bits[0] - 1;
                $arr[1] = 'm';
                $arr[2] = 'd';
                for ($i = 1; $arr[$i]; $i++) {
                    $n = date($arr[$i]);
                    if ($n < $bits[$i])
                        break;
                    if ($n > $bits[$i]) {
                        ++$age;
                        break;
                    }
                }
                return $age;
            }
        }
        $sv = new sinhvien('b1222', 'Thanh Thu', '2001-01-17');
        echo $sv->get_mssv();
        echo "<br>";
        echo $sv->get_hoten();
        echo "<br>";
        echo $sv->get_ngaysinh();
        echo "<br>";
        echo $sv->getAge($sv->get_ngaysinh());
    ?>
</body>
</html>