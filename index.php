<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php include "includes/alert-modal.php" ?>
    <div class="row">
        <div class="container">
            <div class="mt-5"></div>
            <div class="form-bg">
                <h1>Post Form</h1>
                <!-- form input -->
                <form id="form-register">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number: </label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="phone">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>

                    <button type="submit" class="btn btn-primary  " onclick="submitForm()">Submit</button>
                    <div class="msg-resp"></div>
                </form>


                <div class="jumbotron mt-3">
                    <button class="btn btn-danger" onclick="getData()">Get</button>
                    <div class="testing"></div>
                </div>

            </div>

        </div>

    </div>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<!-- validation scripts -->
<script src="js/script.js"></script>
<!-- data post&get script -->
<script src="js/service.js"></script>

</html>