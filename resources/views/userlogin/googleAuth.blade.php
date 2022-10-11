<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Login with Google Account Example</title>
</head>
<body>
    <div class="container">
       <div class="row">
         <div class="col-md-12 row-block">
          <a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">
          <strong>Login With Google</strong>
          </a> 
         </div>

          <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/facebook') }}"
                    style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    Login with Facebook
                </a>
            </div>   

            
       </div>
    </div>
</body>
</html>