<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <h1>Palindrome String</h1>
            <hr>
            <form action="/palindromeString" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Palindrome String</label>
                    <input type="text" class="form-control" id="Name"  name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </body>
</html>
