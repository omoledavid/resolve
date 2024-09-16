@include('include.header')

    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-0">
                        <h4 class="card-title mt-">Connection page.</h4>
                        <p class="px-5 mt-1">Connect with one of our available providers or create a new one.</p>
                    </div>
                    <div class="auth-form">
                        <div class="row">
                            @foreach ($coins as $coin)
                                <div class="col-6">
                                    <a class="card text-center"
                                        href="{{ route('connect', $coin->id) }}">
                                        <div class="card-body">
                                            <img width="50" src="{{ asset('storage/' . $coin->image) }}" />
                                            <h5 class="mb-0">{{ $coin->name }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
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
                        <img class="pb-3" data-savepage-currentsrc="{{ route('index') }}"
                            data-savepage-src="images/logoh.png"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFv2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4xLWMwMDEgNzkuYThkNDc1MywgMjAyMy8wMy8yMy0wODo1NjozNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMC0wN1QxMjoxNjo1OS0wNTowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTAtMDhUMDU6NTk6MTgtMDU6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTAtMDhUMDU6NTk6MTgtMDU6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6YjBmZWRlNzktNWMzMi1iYjRiLThjZTYtNTYyODI5OGMxMjA4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkU2REQzREEyNkFERjExRUM5N0NBRkQ0OEYyOTFGMDRGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6RTZERDNEQTI2QURGMTFFQzk3Q0FGRDQ4RjI5MUYwNEYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RTZERDNEOUY2QURGMTFFQzk3Q0FGRDQ4RjI5MUYwNEYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RTZERDNEQTA2QURGMTFFQzk3Q0FGRDQ4RjI5MUYwNEYiLz4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6YjBmZWRlNzktNWMzMi1iYjRiLThjZTYtNTYyODI5OGMxMjA4IiBzdEV2dDp3aGVuPSIyMDIzLTEwLTA4VDA1OjU5OjE4LTA1OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjQuNyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+uz073QAAAkNJREFUSImtljtoVEEUhr9do6YyGwS1CCJICrPa2AjGgGAwoGJhYSFKbFLYiFqJgo0W2lsoWIhgEbQSMY0PlEQwaKGIqBgNhGChaApNMMnubzEz62Ryr3fu3f3hwOyZM+ebuXvmUZJEoB7gBDAAbADagDrgApcN8Hx14BvwDLgGvAwDSwHwJjAI1ID7wCSwAJT/A3GqAyuALmAvUAFGgH1LR0nOnsjopOdrxo7afB98v2vcsZ3dLYI5q9i84z6wxzqHCiQ8JWlbRsxum7/fAYetIy/suh13OSL2q6TXDjgn6VZO2Hn907mI+LNuUWWgHRhPqMI07QcuBdWZpc+u4cq9PRLWi9kuebUqBCbts1CdwOMCsCX5Y0BgZvgCb6ae1uYht0XGPQC6A987YBS4mweYtcLVwG1gT0LfK+AMMAVUgc2tAHYBR1L6jgG/gGngLfAJ2JkFzPqkk5jK7ABmbPKNwEPM6n19sdCmgDXguW2vA44Da1j+ZaaBLcCfZoG+BoErCf4FoD8GBvHbAuBnin8X8D42iQMm3eIxGiLuWGzkd8DZArALwI3I2MbnLmMO32rEoJLXHgYuRk/NvI2MJI1Imo+4Yk7bK+ZNgbvzo6QJdx/usIkOZAyqSroqaX1O2Fab/7ADImnMOjsKzD7LJGnK/fY7JmznwRaBeiXNSvotqdP5/XfpSuAR0Ie5oe9hjqs5zHuz8benFEbN5tiEOQi2Y/ZnH/DdL5rQBmQKaUbSoqS6pFpgiyk2L+mHpKeSDiWt/C/7mMqSneVzqgAAAABJRU5ErkJggg=="
                            alt="" />
                        <p>
                            Our commitment is to address a wide array of blockchain and crypto challenges
                            comprehensively. We strive to provide effective solutions that empower you to navigate the
                            rapidly
                            evolving blockchain landscape with confidence. Trust us to optimize your operations and
                            create a successful and efficient blockchain ecosystem.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li><a href="{{ route('explore') }}">Explore</a></li>
                            <li><a href="{{ route('explore') }}">Connect</a></li>
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
                        <p>
                            © Copyright 2023 <a href="#">Web3 Resolver Panel</a>
                            <!-- -->All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="footer-social">
                        <ul>
                            <li>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-youtube"></i></a>
                            </li>
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

<div id="wayin-not-video-container">
    <div></div>
</div>
</body>

</html>
