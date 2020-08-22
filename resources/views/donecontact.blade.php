<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/spacelab/bootstrap.min.css">  
</head>
<body>
<div class="container text-center my-5">    
    <h1 class="text-primary"><img src="{{ asset('uploads/' .$setting->image) }}"/>
    </h1>
    <h1 class="text-primary"> @lang('motiv.Done_Successfully')</h1>
    <h5>@lang('motiv.sent_successfully')</h5>
    <a class="btn btn-primary btn-lg text-white mt-4" href="/index">@lang('motiv.Take_Me_Home')</a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=515591809384796&autoLogAppEvents=1" nonce="4uqdQGkR"></script>
</body>
</html>
