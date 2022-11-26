<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <link rel="stylesheet" href="css/app.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }
        .name-size {
            font-size: 15px;
        }

        .section-image {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: contain;
        }
    </style>
    <title>Tesla</title>
</head>

<body>
    @include('partials.nav-blank-center')
    @yield('container')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
var i = 0, j = 0, k = 0;
    function submitform() {
        document.myform.submit();
    }
    function repeaterEA(){
        if(i % 2 == 0){
            document.getElementById("EA").innerHTML = "Remove";
            i++;
        }else{
            document.getElementById("EA").innerHTML = "Add";
            i++;
        }
    }
    function repeaterFS(){
        if(j % 2 == 0){
            document.getElementById("FS").innerHTML = "Remove";
            j++;
        }else{
            document.getElementById("FS").innerHTML = "Add";
            j++;
        }
    }
    function detail(){
        if(k % 2 == 0){
            document.getElementById("detail").innerHTML = "&#8210; Detail payment";
            k++;
        }else{
            document.getElementById("detail").innerHTML = "&#10011; Detail payment";
            k++;
        }
    }
</script>

</html>
