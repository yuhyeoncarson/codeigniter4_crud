<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container mt-3">
    <form method="post" action="<?= site_url('/submit') ?>" class="was-validated">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>