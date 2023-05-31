
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-tken"]').attr('content')
            }
        });

        $(document).ready(function(){
            $("a").click(function(){
                $(this).animate({
                    fontSize:'200px',
                })
            });
        });
    </script>
    <title>{{$name}}</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="/ulist">User View</a>
                </li>
                <li>
                    <a href="/update">Update</a>
                </li>
                <li>
                    <a href="/form">Form</a>
                </li>
                <li>
                    <a href="/second-form">Second Form</a>
                </li>
                <li>
                    <a href="/result">Result</a>
                </li>
                <li>
                    <a href="/jquery-form">Jquery Form</a>
                </li>
            </ul>
        </nav>
        <h1>Welcome</h1>
    </div>
</body>
</html>