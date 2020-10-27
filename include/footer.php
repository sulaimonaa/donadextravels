<footer>
    <div class="col-md-12 layer-one">
        <div class="col-sm-3 layer-one-item">
            <h5>Cheap Flights (Africa)</h5>
            <ul>
                <li>Accra</li>
                <li>Cape Town</li>
                <li>Johannesburg</li>
                <li>Kigali</li>
                <li>Nairobi</li>
                <li>Zanzibar</li>
            </ul>
        </div>
        <div class="col-sm-3 layer-one-item">
            <h5>Cheap Flights (Europe)</h5>
            <ul>
                <li>Barcelona</li>
                <li>Frankfurt</li>
                <li>Istanbul</li>
                <li>London</li>
                <li>Paris</li>
                <li>Rome</li>
            </ul>
        </div>
        <div class="col-sm-3 layer-one-item">
            <h5>Cheap Flights (America)</h5>
            <ul>
                <li>Atlanta</li>
                <li>Boston</li>
                <li>Houston</li>
                <li>New York</li>
                <li>Toronto</li>
                <li>Washington</li>
            </ul>
        </div>
        <div class="col-sm-3 layer-one-item">
            <h5>Cheap Flights (Asia)</h5>
            <ul>
                <li>Bangkok</li>
                <li>Beijing</li>
                <li>Dubai</li>
                <li>Guangzhou</li>
                <li>Kuala Lumpur</li>
                <li>Mumbai</li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 layer-two">
        <div class="col-sm-3 layer-two-item">
            <h5>Quick Links</h5>
            <ul>
                <li>Flights</li>
                <li>Hotels</li>
                <li>Vacation Packages</li>
                <li>Visa</li>
                <li>Contact Us</li>
                <li>About Us</li>
            </ul>
        </div>
        <div class="col-sm-6 layer-two-item">
            <h5>Newsletter</h5>
            <p>Get the latest travel deals and updates</p>
            <form name="myForm" action="newsletter.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Full Name" name="name" required>
                </div>
                <div class=" form-group">
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
        <div class="col-sm-3 layer-two-item">
            <h5>Social Links</h5>
            <ul>
                <li><a href="#"><i class="fa fa-facebook foot-icon"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter foot-icon"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram foot-icon"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp foot-icon"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="col-md-12 layer-three-item">
    <p>&copy;
        <?php echo date('Y'); ?> &nbsp; All Right Reserved. Donadex Travels
    </p>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="http://localhost/donadextravels/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/donadextravels/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="http://localhost/donadextravels/js/jquery-2.1.4.min.js"></script>
<!-- Calendar -->
<link rel="stylesheet" href="http://localhost/donadextravels/css/jquery-ui.css" />
<script src="http://localhost/donadextravels/js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker,#datepicker1").datepicker();
    });

</script>
<!-- //Calendar -->

<!--TravelStart IBE Script-->
<script type='text/javascript' src='https://www.travelstart.com.ng/resources/js/vendor/jquery.browser-0.0.8.min.js'></script>
<script type='text/javascript' src='https://www.travelstart.com.ng/resources/js/jquery.ba-postmessage.min.js'></script>
<script type='text/javascript'>
    // these variables can be configured 
    var travelstartIframeId = 'travelstartIframe-443947c0-8955-460a-992c-953ee6074ec8';
    var iframeUrl = 'https://www.travelstart.com.ng';
    var logMessages = false;
    var showBanners = false;
    var affId = '213737';
    var affCampaign = '';
    var affCurrency = 'Default'; // ZAR / USD / NAD / ... 
    var height = '0px';
    var width = '100%';
    var language = ''; // ar / en / leave empty for user preference

    // do not change these 
    var iframe = $('#' + travelstartIframeId);
    var iframeVersion = '11';
    var autoSearch = false;
    var affiliateIdExist = false;
    var urlParams = {};
    var alreadyExist = [];
    var iframeParams = [];
    var cpySource = '';
    var match,
        pl = /\+/g,
        search = /([^&=]+)=?([^&]*)/g,
        decode = function(s) {
            return decodeURIComponent(s.replace(pl, " "));
        },
        query = window.location.search.substring(1);
    while (match = search.exec(query)) {
        urlParams[decode(match[1])] = decode(match[2]);
    }
    for (var key in urlParams) {
        if (urlParams.hasOwnProperty(key)) {
            if (key == 'search' && urlParams[key] == 'true') {
                autoSearch = true;
            }
            if (key == 'affId' || key == 'affid' || key == 'aff_id') {
                affiliateIdExist = true;
            }
            iframeParams.push(key + '=' + urlParams[key]);
            alreadyExist.push(key);
        }
    }
    if (!('show_banners' in alreadyExist)) {
        iframeParams.push('show_banners=' + showBanners);
    }
    if (!('log' in alreadyExist)) {
        iframeParams.push('log=' + logMessages);
    }
    if (!affiliateIdExist) {
        iframeParams.push('affId=' + affId);
    }
    if (!affiliateIdExist) {
        iframeParams.push('language=' + language);
    }
    if (!('affCampaign' in alreadyExist)) {
        iframeParams.push('affCampaign=' + affCampaign);
    }
    if (cpySource !== '' && !('cpySource' in alreadyExist)) {
        iframeParams.push('cpy_source=' + cpySource);
    }
    if (!('utm_source' in alreadyExist)) {
        iframeParams.push('utm_source=affiliate');
    }
    if (!('utm_medium' in alreadyExist)) {
        iframeParams.push('utm_medium=' + affId);
    }
    if (!('isiframe' in alreadyExist)) {
        iframeParams.push('isiframe=true');
    }
    if (!('landing_page' in alreadyExist)) {
        iframeParams.push('landing_page=false');
    }
    if (affCurrency.length == 3) {
        iframeParams.push('currency=' + affCurrency);
    }
    if (!('iframeVersion' in alreadyExist)) {
        iframeParams.push('iframeVersion=' + iframeVersion);
    }
    if (!('host' in alreadyExist)) {
        iframeParams.push('host=' + window.location.href.split('?')[0]);
    }
    var newIframeUrl = iframeUrl + (autoSearch ? '/search-on-index?search=true' : '/search-on-index?search=false') + '&' + iframeParams.join('&');
    iframe.attr('src', newIframeUrl);

    function setIframeSize(newWidth, newHeight) {
        iframe.css('width', newWidth);
        iframe.width(newWidth);
        iframe.css('height', newHeight);
        iframe.height(newHeight);
    }
    setIframeSize(width, height);
    jQuery.receiveMessage(function(e, host) {
        try {
            if (typeof e.data !== 'undefined') {
                var dataElements = e.data.split('&');
                if (dataElements) {
                    if (dataElements.length === 1) {
                        //Resize 
                        setIframeSize(width, e.data + 'px');
                    } else {
                        // Set iframe Size 
                        var height = dataElements[1].split('=');
                        setIframeSize(width, height[1] + 'px');
                        // Scroll to position 
                        if (dataElements.length > 2) {
                            var scrollTo = dataElements[2].split('=');
                            if (scrollTo[1] !== 'none') {
                                var iframeTop = iframe.position().top;
                                if (scrollTo[1] == 'to-top') {
                                    window.scrollTo(0, iframeTop);
                                } else {
                                    window.scrollTo(0, iframeTop + parseInt(scrollTo[1]));
                                }
                            }
                        }
                    }
                }
            }
        } catch (err) {
            window.console && console.log(err);
        }
    }, iframeUrl);

</script>
<!--TravelStart IBE-->
<!-- Modal -->
<div id="liveBooking" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="margin: 0; color: #ff4000">&times;</button>
                <h4 class="modal-title" style="margin: 0 auto;">Complete Your Booking</h4>
            </div>
            <div class="modal-body">
                <p style="font-size: 14px;">Kindly comfirm your itinerary; Input departure and destination location, date, and other information</p>
                <iframe class="liveBookingFrame" src="https://www.travelstart.com.ng/?affId=213737&utm_source=affiliate&utm_medium=213737">
                </iframe>
            </div>
            <div class="modal-footer">
                <p style="color: #ff4000; font-size: 14px;"><sup>*</sup>Please note that quoted flight/price is not guaranteed until payment is comfirmed </p>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #ff4000; color: #fff">Close</button>
            </div>
        </div>

    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5c8c2f7fc37db86fcfce1eb2/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

</script>
<!--End of Tawk.to Script-->
</body>

</html>
