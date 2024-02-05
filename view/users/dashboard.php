<?php
?>
<div class="row">
    <div class="col-sm-6">
        <h4>Last Contacts :</h4>
        <table class="table table-striped" id="listTable">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Mobile</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $id = 1;
             foreach ($contacts as $contact):
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $contact['firstname'].' '.$contact['lastname']?></td>
                    <td><?php echo $contact['mobile']?></td>
                    <td>
                        <a href="?c=contacts&a=show&id=<?php echo $contact['id'];?>">Show</a>
                        <a href="?c=contacts&a=edit&id=<?php echo $contact['id'];?>">Edit</a>
                        <a href="?c=contacts&a=delete&id=<?php echo $contact['id'];?>">Delete</a>
                    </td>
                </tr>

                <?php $id++;endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h4>Add new Contacts :</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nulla!
        </p>
        <a href="?c=contacts&a=add" class="btn btn-primary">Add new Contact</a>
    </div>
</div>
