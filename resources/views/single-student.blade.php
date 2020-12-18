<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-lg">
        <form action="
            @if ($student->id)
                {{ route("students.update",['id'=>$student->id]) }}"
            @else
                {{ route("students.store") }}"   
            @endif
        method="post">
            @csrf
            <td><input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" value="{{ $student->first_name }}"></td>
            <td><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name" value="{{ $student->last_name }}"></td>
            @if ($student->id)
                <button class="btn btn-primary">Edit</button>
            @else
                <button class="btn btn-primary">Add</button>    
            @endif
            
        </form>
    </div> 
</body>
</html>