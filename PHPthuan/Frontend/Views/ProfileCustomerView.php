<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $result->Id ?></th>
        <td><?php echo $result->name ?></td>
        <td><?php echo $result->email ?></td>
        <td><?php echo $result->phone ?></td>
        <td><?php echo $result->address ?></td>
    </tr>

    </tbody>
</table>