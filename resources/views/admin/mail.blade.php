<!doctype html>
<html lang="en">
  <head>
    <title>Archivos Para Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3>Click the link to verify your email</h3>
                <p>Login Details</p>
                <p>Email:{{$email}}</p>
                <p>Password:{{$password}}</p>
                <p> <a href="{{$url}}">Link</a> </p>
                <br/>
                 <p style="color:#455056; font-size:15px;line-height:24px; justify-content: center;">
                            
If you’re having trouble clicking the Link, copy and paste the URL below into your web browser: {{$url}}
                <br/>
                <p> Best Regards</p>
                <p> Team, Archivos Para Web </p>
            </div>
        </div>
    </div>
  </body>
</html>