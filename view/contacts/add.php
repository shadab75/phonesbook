<?php
?>
<div class="p-2">
    <form action="?c=contacts&a=create" method="post" enctype="multipart/form-data" class="w-100">
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" class="form-control" name="firstname" placeholder="firstname">
            </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" name="lastname" placeholder="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="email">Mobile number:</label>
            <input type="text" class="form-control" name="mobile" placeholder="mobile">
        </div>
        <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" class="form-control" name="address" placeholder="address">
        </div>

            <div class="form-group">
                <input type="file" name="pic" class="form-control-file">
            </div>
        <input type="submit" value="create" class="btn btn-primary">

    </form>
</div>
