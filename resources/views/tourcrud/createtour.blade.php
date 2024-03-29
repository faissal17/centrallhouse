<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
    <title>Add Tour</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<x-navbar />

<body>
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Add New Tour</b></h3>
                <div class="form-group">
                    <form action="/tour" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="number" name="price" class="form-control m-2" placeholder="price">

                        <input type="text" name="name" class="form-control m-2" placeholder="name">

                        <Textarea name="description" cols="20" rows="4" class="form-control m-2" placeholder="description"></Textarea>

                        <label class="m-2">Cover Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image">

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
