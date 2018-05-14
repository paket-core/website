<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"
        integrity="sha384-Fe7o4IB+X/R42l4ubeFS03yRfSAAB99jbFAEQS6OSH1Sx+vKlefJt3gHPd/H6CO3"
        crossorigin="anonymous"></script>

<script data-cfasync="false"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"
        integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"
        integrity="sha384-RcvxIIFoyCfCY1JFTRhL2OqY/d1HP2ZXiRylchU66h1fgQzvytVH8YUPYiYXAsx6"
        crossorigin="anonymous"></script>

<script data-cfasync="false" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS"
        crossorigin="anonymous"></script>

@if(isset($captcha) && $captcha)
    {!! NoCaptcha::renderJs() !!}
@endif