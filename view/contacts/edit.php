<?php
?>
<div class="p-2">
    <form action="?c=contacts&a=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firstname" value="<?php echo $contact['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" name="lastname" placeholder="lastname" value="<?php echo $contact['lastname'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $contact['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Mobile number:</label>
                    <input type="text" class="form-control" name="mobile" placeholder="mobile" value="<?php echo $contact['mobile'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $contact['address'] ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $contact['pic'];?>" class="w-100">
                <div class="form-group">
                    <input type="file" name="pic" class="form-control-file">
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Update now">
    </form>
</div>
