<?php
?>
<div class="p-2">
    <div class="row">
    <div class="col-md-6">
        <div class="row">Pic</div>
        <div class="row">First Name</div>
        <div class="row">Last Name</div>
        <div class="row">Mobile</div>
        <div class="row">Email</div>
        <div class="row">Address</div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <img src="<?php echo $contact['pic']?>" width="60">
        </div>
        <div class="row"><?php echo $contact['firstname']?></div>
        <div class="row"><?php echo $contact['lastname']?></div>
        <div class="row"><?php echo $contact['mobile']?></div>
        <div class="row"><?php echo $contact['email']?></div>
        <div class="row"><?php echo $contact['address']?></div>
    </div>
</div>
    <a href="?c=contacts&a=list" class="btn btn-primary">Back To List</a>
</div>

