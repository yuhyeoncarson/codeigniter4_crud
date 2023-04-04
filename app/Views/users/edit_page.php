<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Edit</title>
</head>

<body>
    <div class="container mt-3">
        <form method="post" action="<?= site_url('/update') ?>" class="was-validated">
            <input type="hidden" name="id" value="<?php echo $user_list['id']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $user_list['name']; ?>" class="form-control" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $user_list['email']; ?>" class="form-control" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>