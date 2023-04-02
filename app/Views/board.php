<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<div class="container mt-3">
    <a href="<?php echo site_url('/form') ?>" class="btn btn-primary mb-3">Add User</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($users) : ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="<?php echo base_url('edit/' . $user['id']); ?>">Edit</a>
                    <a href="<?php echo base_url('delete/' . $user['id']); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('.table').DataTable();
});
</script>