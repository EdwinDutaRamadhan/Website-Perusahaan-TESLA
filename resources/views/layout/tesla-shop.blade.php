<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/shop.css">
    
    <title>Tesla Shop</title>
    <style>
        .section-image {
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .form-registration {
            border-radius: 0;
            margin-bottom: -1px;
        }
    </style>
</head>

<body>
    @include('partials.nav-shop-header')

    @yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>
    <script>
        function setQuantityProduct(upordown) {
            var quantity = document.getElementById('quantity');

            if (quantity.value > 1 && quantity.value < 5) {
                if (upordown == 'up') {
                    ++document.getElementById('quantity').value;
                } else if (upordown == 'down') {
                    --document.getElementById('quantity').value;
                }
            } else if (quantity.value == 1 && quantity.value < 5) {
                if (upordown == 'up') {
                    ++document.getElementById('quantity').value;
                }
            } else {
                document.getElementById('quantity').value = 1;
            }
        }
    </script>
</body>

</html>
