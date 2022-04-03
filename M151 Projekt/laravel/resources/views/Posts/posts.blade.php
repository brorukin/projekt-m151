<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My first Post</title>
    </head>
    <body>
        <h1>This is my first Blog</h1>
        <h3>Welcome {{ $name }}</h3>

        <input type="button" value="Click me!" onclick="Alert()">

        <script>
            function Alert(){
                alert('You clicked me!');
            }
        </script>
    </body>
</html>