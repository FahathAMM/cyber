<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('includes.head')
    <livewire:styles />

</head>

<body>
    @include('includes.header')
    @include('includes.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('includes.foot')
    @include('includes.footer')


    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });
    </script>

    <livewire:scripts />

</body>

</html>
