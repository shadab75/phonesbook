<link rel="stylesheet" href="cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div class="p-2">
    <table class="table table-striped" id="listTable">
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
        $id = 1;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#llistTable');
</script>