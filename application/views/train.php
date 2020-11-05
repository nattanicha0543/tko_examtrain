<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Grandstander&display=swap" rel="stylesheet">


    <title>Document</title>


    <style>
        body {
            font-family: 'Grandstander', cursive;
            font-family: 'Athiti', sans-serif;

        }
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="container">
        <div class="card shadow" style="padding:20px;">
            <h3 align="center"><b><strong> Train Station </strong></b></h3>
            <br><br>
            <form action="<?php echo site_url('welcome/insert') ?>" method="POST">
                <h5 class="card-title">Train</h5>
                <p></p>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Train_id</label>
                        <select class="form-control" name="train_id" id="">
                            <option> - เลือกขบวน - </option>
                            <option>234</option>
                            <option>424</option>
                            <option>72</option>
                            <option>428</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Note</label>
                        <select class="form-control" name="note" id="">
                            <option> - เลือกหมายเหตุ - </option>
                            <option>รถธรมดา</option>
                            <option>รถดีเซลราง</option>
                            <option>รถด่วนดีเซลราง</option>
                        </select>
                    </div>
                </div>

                <br>

                <h5 class="card-title">The Origin</h5>
                <p></p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Train Station</label>
                        <select class="form-control" name="station" id="">
                            <option> - เลือกสถานี - </option>
                            <option>สุรินทร์</option>
                            <option>สำโรงทาบ</option>
                            <option>อุบลราชธานี</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Departure Time</label>
                        <input type="text" class="form-control" name="date_time" id="" required>

                    </div>
                </div>

                <br>

                <h5 class="card-title">Huay Rach</h5>
                <p></p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>To</label>
                        <input type="text" class="form-control" name="to" id="">

                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Out</label>
                        <input type="text" class="form-control" name="out" id="">

                    </div>
                </div>

                <br>

                <h5 class="card-title">Destination</h5>
                <p></p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Station</label>
                        <select class="form-control" name="des_station" id="">
                            <option> - สถานี - </option>
                            <option>กรุงเทพฯ</option>
                            <option>นครราชสีมา</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Arrival Time</label>
                        <input type="text" class="form-control" name="on_time" id="address" required>

                    </div>
                </div>

                <div align="right">
                    <button class="btn btn-success" type="submit">OK</button>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>

</body>

</html>