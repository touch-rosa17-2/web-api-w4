<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-tken"]').attr('content')
            }
        });
        $(document).ready(function(){
            $("#btnLogin").click(()=>{
                alert("Button clicked");
            })
        });

    </script>
</head>
<body>
    <div class="container" >
        <form action="result" method="GET" class="col-4">
            @csrf()
            <label for="fName">First Name</label>
            <input type="text" name="fName" id="fName" class="form-control">
            <label for="lName">Last Name</label>
            <input type="text" name="lName" id="lName" class="form-control">
            <label for="gender">Gender</label>
            <div class="form-group">
                <label for="Female">Female</label>
                <input type="radio" name="gender" value="Female" id="Female">
                <label for="Male">Male</label>
                <input type="radio" name="gender" value="Male" id="Male">
            </div>
    
            <input type="submit" value="Send" id="btnLogin" >
        </form>
    </div>
    {{-- <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();
        // do something with form data
        });
    </script> --}}
</body>
</html>