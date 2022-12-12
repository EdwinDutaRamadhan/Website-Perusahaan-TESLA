<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Boostrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body {
            font-family: sans-serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.nav-admin')
    @yield('container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
    <script>
        function previewImageCharging() {
            const image = document.querySelector('#imageCharging');
            const imgPreview = document.querySelector('.image-preview-charging');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            console.log(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                console.log(oFREvent.target.result);
            }
            
        }
        function previewImageApparell(){
            const image = document.querySelector('#imageApparell');
            const imgPreview = document.querySelector('.image-preview-apparel');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            console.log(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                console.log(oFREvent.target.result);
            }
        }
        function previewImageLifestyle(){
            const image = document.querySelector('#imageLifestyle');
            const imgPreview = document.querySelector('.image-preview-lifestyle');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            console.log(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                console.log(oFREvent.target.result);
            }
        }
        function previewImageVehicle(){
            const image = document.querySelector('#imageVehicle');
            const imgPreview = document.querySelector('.image-preview-vehicle');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            console.log(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                console.log(oFREvent.target.result);
            }
        }
    </script>
</body>

</html>
