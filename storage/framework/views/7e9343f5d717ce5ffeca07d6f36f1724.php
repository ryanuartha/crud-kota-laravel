<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Kota</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    >

    <style>
        body {
            background: #fff;
            font-family: Arial, sans-serif;
        }

        .martop-sm {
            margin-top: 15px;
        }

        .martop-lg {
            margin-top: 70px;
        }

        .panel-body {
            padding: 20px;
        }

        h1, h2, h3 {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .table > thead > tr > th,
        .table > tbody > tr > td {
            vertical-align: middle;
            padding: 10px;
        }

        .table > thead > tr > th {
            font-weight: bold;
        }

        .btn {
            margin-right: 3px;
        }
    </style>
</head>
<body>
    <div class="container martop-lg">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/app.blade.php ENDPATH**/ ?>