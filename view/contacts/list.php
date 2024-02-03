<div class="p-2">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Pic</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $id = 0;
        foreach ($contacts as $contact):
        ?>
        <tr>

            <td><?php echo $id;?></td>
            <td>
                <img src="<?php echo $contact['pic'];?>" width="60">
            </td>
            <td><?php echo $contact['firstname'].' '.$contact['lastname']?></td>
            <td><?php echo $contact['email']?></td>
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
