<div class="section7 mt-5 pt-2 pb-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light my-lg-5 my-md-4">
            <a class="navbar-brand linkStyle" href="#">CYCLONE</a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active linkStyle">
                    <a class="nav-link" href="{{ url('/')}}">Main</a>
                </li>
                @include ('frontend.navbar')

            </ul>



            <ul class="navbar-nav icons ml-auto">
                <li class="nav-item linkStyle">
                    <a class="nav-link" href="https://www.facebook.com/">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item linkStyle">
                    <a class="nav-link" href="https://twitter.com/">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>

                <li class="nav-item linkStyle">
                    <a class="nav-link" href="https://www.instagram.com/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item linkStyle">
                    <a class="nav-link" href="https://www.pinterest.com/">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                </li>

            </ul>

        </nav>
        <div class="copyr"></div>
        <div class="pt-3">
            <p>© @php echo date("Y") @endphp CYCLONE. Made with love by XX. All rights reserved.</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/form-validation.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
