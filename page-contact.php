<?php get_header(); ?>
    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory') ?>/assets/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Us</h2>
                    <p>The ultimate multipurpose Business Theme that you can use for any of your business or clients.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:info@website.com">info@website.com</a></p>
                        <p><a href="mailto:career@website.com">career@website.com</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:+8801000987665">+8801000987665</a></p>
                        <p><a href="tel:+8801000987665">+8801000987664</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker"></i>
                        <p>27 Indira Rd, Farmgate</p>
                        <p>Dhaka, 1215</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus exercitationem eaque, a magnam animi ipsum commodi maiores ipsa perferendis unde sapiente repellat et voluptas, tempore reprehenderit quaerat eius explicabo enim!</p>
                    
                    <div class="fullwidth-form-wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input placeholder="First name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input placeholder="First name" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input placeholder="Email" type="email">
                        </div>

                        <div class="form-group">
                            <input placeholder="Phone" type="tel">
                        </div>

                        <div class="form-group">
                            <textarea placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea>
                        </div>

                        <button type="submit">Send message <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="specer-70"></div>
    
    
    <div class="map" id="googleMap"></div>   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <script>

        var myCenter = new google.maps.LatLng(23.810332, 90.412518);

        function initialize() {
            var mapProp = {
                center: myCenter,
                scrollwheel: false,
                zoom: 12,
                zoomControl: false,
                mapTypeControl: false,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "featureType": "landscape",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 65
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "poi",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 51
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 30
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road.local",
                    "stylers": [{
                        "color": "#fff"
                    }, {
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "administrative.province",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#f6f6f6"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#1360f4"
                    }, {
                        "visibility": "on"
                    }]
                }]
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
              position: myCenter,
              map: map
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);    
    </script> 
    
    
    <?php get_footer(); ?>