<html>
    <head>
        <style>
            .active{
                color:red;
            }
        </style>
    </head>
    <body>
        <div class="
        @if(str_contains(Route::current()->uri, ['home']))
            active
        @endif
        " >
            Home
            
        </div>
        <div class="
        @if(str_contains(Route::current()->uri, ['contact']))
            active
        @endif
        " >
            Contact
        </div>
        <div class="
        @if(str_contains(Route::current()->uri, ['profile']))
            active
        @endif
        " >
            Profile
        </div>

    </body>
</html>
