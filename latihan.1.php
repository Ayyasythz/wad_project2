<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LATIHAN 1 PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="container">
        <form method="post">
            <div class="form-group row">
                <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="inp_1" id="inp_1" placeholder="Input 1">
                </div>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="inp_2" id="inp_2" placeholder="Input 2">
                </div>
                <select name="operator" class="form-control">
                    <option value="tambah">Tambah</option>
                    <option value="kurang">Kurang</option>
                    <option value="kali">Kali</option>
                    <option value="bagi">Bagi</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" name="calculate" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['calculate'])) {
    $inp1 = $_POST['inp_1'];
    $inp2 = $_POST['inp_2'];
    $operator = $_POST['operator'];

    if (is_numeric($inp1) && is_numeric($inp2)) {
        switch ($operator) {
            case "tambah":
                $result = $inp1 + $inp2;
                break;
            case "kurang":
                $result = $inp1 - $inp2;
                break;
            case "kali":
                $result = $inp1 * $inp2;
                break;
            case "bagi":
                if ($inp2 == 0) {
                    echo "err";
                } else {
                    $result = $inp1 / $inp2;
                }
                break;
            default:
                echo "Invalid ";
        }

        echo '<div class="alert alert-primary" role="alert"><strong>'.$result.'</strong></div>';
    } else {
        echo "Please enter valid numeric values.";
    }
}
?>
</body>
</html>
