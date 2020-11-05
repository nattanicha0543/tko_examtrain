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
    <style>
        body {
            font-family: 'Grandstander', cursive;
            font-family: 'Athiti', sans-serif;

        }
    </style>

    <title>Document</title>
</head>

<body>
    <br><br><br><br>
    <div class="container">
        <form action="<?php echo site_url('welcome/show') ?>" method="POST">
            <h2 class="card-title" align="center"><b> Train Station </b></h2>
            <p></p>


            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="row" rowspan="2">ขบวน</th>
                        <th scope="col" colspan="2">ต้นทาง</th>
                        <th scope="col" colspan="2">ห้วยราช</th>
                        <th scope="col" colspan="2">ปลายทาง</th>
                        <th scope="row" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr>
                        <th> สถานี </th>
                        <th> เวลาออก </th>
                        <th> ถึง </th>
                        <th> ออก </th>
                        <th> สถานี </th>
                        <th> ถึงเวลา </th>
                    </tr>


                </thead>

                <?php foreach ($query as $rs) { ?>

                    <tbody>
                        <tr>
                            <th> <?php echo $rs['train_id'] ?> </th>
                            <td> <?php echo $rs['station'] ?> </td>
                            <td> <?php echo $rs['date_time'] ?> </td>
                            <td> <?php echo $rs['to'] ?> </td>
                            <td> <?php echo $rs['out'] ?> </td>
                            <td> <?php echo $rs['des_station'] ?> </td>
                            <td> <?php echo $rs['on_time'] ?> </td>
                            <th> <?php echo $rs['note'] ?> </th>
                        </tr>
                    </tbody>

                <?php } ?>
            </table>

        </form>
    </div>
    <br><br><br>

</body>

</html>