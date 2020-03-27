<html lang="en">
<head>
    <title>Laravel Ajax jquery Validation Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<div class="container panel panel-default ">
    <h2 class="panel-heading">Laravel Ajax jquery Validation</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">mobile_number</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $serialNum=0;?>
        @foreach($contact as $dt)
        <tr>
            <th scope="row"> {{ ++$serialNum }}</th>
            <td>{{ $dt->name }}</td>
            <td>{{ $dt->email }}</td>
            <td>{{ $dt->mobile_number }}</td>

            <td><a href="/contact-edit/{{ $dt->id }}" class="btn btn-primary">Edit</a><a href="/contact-delete/{{ $dt->id }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


</body>
</html>
