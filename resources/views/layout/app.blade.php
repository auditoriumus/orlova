<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="@yield('description', env('APP_DESCRIPTION'))">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@include('includes.nav')
@include('includes.errors')
@include('includes.message')

@yield('content')

@include('includes.footer')
<!-- jquery plugins here-->
<script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<!-- carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
{{--<script>--}}
{{--    window.addEventListener("DOMContentLoaded", function() {--}}
{{--        [].forEach.call( document.querySelectorAll('.tel'), function(input) {--}}
{{--            var keyCode;--}}
{{--            function mask(event) {--}}
{{--                event.keyCode && (keyCode = event.keyCode);--}}
{{--                var pos = this.selectionStart;--}}
{{--                if (pos < 3) event.preventDefault();--}}
{{--                var matrix = "+7 (___) ___ ____",--}}
{{--                    i = 0,--}}
{{--                    def = matrix.replace(/\D/g, ""),--}}
{{--                    val = this.value.replace(/\D/g, ""),--}}
{{--                    new_value = matrix.replace(/[_\d]/g, function(a) {--}}
{{--                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a--}}
{{--                    });--}}
{{--                i = new_value.indexOf("_");--}}
{{--                if (i != -1) {--}}
{{--                    i < 5 && (i = 3);--}}
{{--                    new_value = new_value.slice(0, i)--}}
{{--                }--}}
{{--                var reg = matrix.substr(0, this.value.length).replace(/_+/g,--}}
{{--                    function(a) {--}}
{{--                        return "\\d{1," + a.length + "}"--}}
{{--                    }).replace(/[+()]/g, "\\$&");--}}
{{--                reg = new RegExp("^" + reg + "$");--}}
{{--                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;--}}
{{--                if (event.type == "blur" && this.value.length < 5)  this.value = ""--}}
{{--            }--}}

{{--            input.addEventListener("input", mask, false);--}}
{{--            input.addEventListener("focus", mask, false);--}}
{{--            input.addEventListener("blur", mask, false);--}}
{{--            input.addEventListener("keydown", mask, false)--}}

{{--        });--}}

{{--    });--}}
{{--</script>--}}
</body>

</html>
