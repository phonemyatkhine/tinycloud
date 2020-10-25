<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid row">
        <div class="col-lg-4">
            <h4>User Storage</h4>
            Size : {{$storage[0]->total_space}} MB <br>
            Used Space : {{$storage[0]->used_space}} MB
        </div>
        <div class="col-lg-8">
            <br>
            <h5>Folders</h5>
        </div>
    </div>
</body>
</html>