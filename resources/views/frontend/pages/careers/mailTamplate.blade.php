<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .body{
            width: 550px;
            height: 400px;
            background-color: #dddd;
        }
        .header{
            text-align: center;
            padding: 5px;
            color: goldenrod;
        }
        .content p{
            margin: 5px
        }
    </style>
</head>

<body>
   <div class="body">
        <header class="header">
            <h2>1st Choice Family Service</h2>
        </header>
        <div class="content">
            <p><strong>Name:</strong>{{$data['name']}}</p>
            <p><strong>Email:</strong>{{$data['email']}}</p>
            <p><strong>Referel Name:</strong>{{$data['referelName']}}</p>
            <p><strong>Referel Email or Phone:</strong>{{$data['referelEmail']}}</p>
        </div>
        <footer>
            
        </footer>
        
   </div>
</body>
</html>