<footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_logo">
                        <img src="asstes/img/footerlogo.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu_1 menu">
                        <h4>Get to Know Us</h4>
                        <ul>
                            <li>ome </li>
                            <li>About Us</li>
                            <li> Services</li>
                            <li>  Work</li>
                            <li> Review</li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu_3 menu">
                        <h4>Get to Know Us</h4>
                        <ul>
                            <li>Web Deelopment </li>
                            <li>Web Marketing</li>
                            <li>E-Commerce</li>
                            <li>Web Portal</li>
                            <li>SEO</li>
                            <li>Management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu_3 menu">
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="footer_content">
                                <h4>ADDRESS</h4>
                                <p>This is a dumy text, your address
                                    comes here..</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="footer_content">
                                <h4>CALL US 24/7</h4>
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="footer_content">
                                <h4>EMAIL</h4>
                                <p>info@lakeviewboutique.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <p>© 2021 , All Rights Reserved</p>
        </div>
    </footer>
    <script src="asstes/js/jquery.min.js"></script>
    <script src="asstes/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('.homeSlider').slick({
                dots: false,
                infinite: true,
                autoplay: false,
                speed: 300,
                centerMode: false,
                prevArrow:"<img src='asstes/img/left.png' class='slick-prev slick-arrow'>",
                nextArrow:"<img src='asstes/img/right.png' class='slick-next slick-arrow'>",
                slidesToShow: 1,
                slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });
            var counters = $(".count");
            var countersQuantity = counters.length;
            var counter = [];

            for (i = 0; i < countersQuantity; i++) {
            counter[i] = parseInt(counters[i].innerHTML);
            }

            var count = function(start, value, id) {
            var localStart = start;
            setInterval(function() {
                if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
                }
                }, 40);
            }

            for (j = 0; j < countersQuantity; j++) {
            count(0, counter[j], j);
            }
        });
    </script>
</body>
</html>