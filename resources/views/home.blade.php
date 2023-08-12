<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
</head>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .color {
            background-color: rgb(225, 75, 135);
            transition: 25ms;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("button").mouseenter(function(){
              $("#item1").fadeIn();
              $("#item2").fadeIn("slow");
              $("#item3").fadeIn(1000);
            });
            $("button").mouseleave(function(){
              $("#item1").fadeOut();
              $("#item2").fadeOut();
              $("#item3").fadeOut();
            });
        });
    </script>  
</head>
  <body>
    <div class="container justify-items-center align-items-center">
        <h1 class="text-center">Hello, world!</h1>
        <button class="btn btn-success mx-autor">Button</button>
        <ul>
            <li id="item1" style="display:none;">item1</li>
            <li id="item2" style="display:none;">item2</li>
            <li id="item3" style="display:none;">item3</li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
