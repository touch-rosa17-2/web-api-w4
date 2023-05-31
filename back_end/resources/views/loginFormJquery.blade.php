<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $('#btnLogin').click(function(){
            var user = $('#txtuser').val();
            var pass = $('#txtpass').val();
            var ckremember = 0;

            if($('#ckremember').is(":checked"))
                {
                    ckremember = $("#ckremember").val();
                }
                // alert("USER: "+user+"Pass: "+pass+"Checked: "+ckremember);
            $.post('/login', {txtuser: user, txtpass: pass, ckremember: ckremember},function(result)=>{
                alert ("work");
                }
            );

        })
    })

  </script>
</head>
<body>
    <div class="container">
        <form method="post" action="/login">
            <div class="title text-center text-primary"><h1>Form Login</h1></div>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="txtuser" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="txtpass" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="ckremember">
              <label class="form-check-label" for="exampleCheck1" id="lbremember">Remember Me</label>
            </div>
            <button type="submit" id="btnLogin" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>