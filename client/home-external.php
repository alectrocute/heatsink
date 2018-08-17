<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>heatsink.io - no log, ad-blocking throwaway vpn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/shards.min.css?v=2.0.1">
    <link rel="stylesheet" href="assets/shards-demo.min.css?v=2.0.1">
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>

<body onload="startTime()">

    <body>
        <div class="loader">
            <div class="page-loader"></div>
        </div>
        <!-- Floating Shards --><img src="assets/shard-1-5x-3.png" alt="Shard" class="shard">
        <!-- Welcome Section -->
        <div class="welcome d-flex justify-content-center flex-column">
            <div class="inner-wrapper mt-auto mb-auto">
                <h2 class="slide-in">heatsink.io</h2>
                <br>
                <p class="slide-in">anonymous, throwaway, ad-blocking, no log VPN</p>
                <br>
                <div class="action-links slide-in">
                    <a href="#" class="btn btn-primary btn-pill align-self-center mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fa mr-1"></i>✋ Generate</a> <a href="#" data-scroll-to="#introduction" id="scroll-to-content" class="btn btn-outline-light btn-pill align-self-center">Learn More</a> </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="page-content">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">🤔 Think about it, seriously</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body"> To ensure full privacy in extreme tyranical conditions, we highly suggest you use <a href="#">Tor Browser</a> to generate and download everything related to heatsink.io.
                            <br>
                            <br>In fact, in the most extreme of conditions, it's not a bad idea to use only Tor. Here's <a href="#">why</a>.
                            <br>
                            <br><strong>NOTE: </strong>Click the green button below and wait. It may take up to 20 seconds to generate your throwaway account.
                            <br>
                            <br> <strong>Do you still want to continue?</strong> </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nah</button>
                            <a href="generate"><button type="button" class="btn btn-success">Yep</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="content clearfix">
                <!-- Extras -->
                <div id="introduction" class="mb-5 py-1">
                    <div class="section-title container ml-auto mr-auto">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto mb-5">
                            <h1 class="mb-8 text-center">🔥</h1>
                            <h3 class="mb-4 text-center">heatsink.io's Mission</h3>
                            <br>
                            <h6 class="mb-4 text-left">Provide a secure pathway to information</h6>
                            <p>We support internet privacy and realize that for some, visiting a webpage can <a href="#">mean life or death</a>. In a time where the Internet has become similiar to books or words, we believe the Internet should have no tracking, spying, datamining nor censorship. Period.</p>
                            <h6 class="mb-4 text-left">Down with the gross n' greedy VPN industry</h6>
                            <p>These servers cost money to run and maintain, but really not <i>that</i> much. We survive entirely on donations as our source of revenue. We do not believe in the seedy, astro-turf marketing strategies of the industry and poor customer support. People who deserve privacy should not have to pay. The 'paper trail' also opens up more oppertunity for evidence.</p>
                            <h6 class="mb-4 text-left">heatsink.io vs the big boys</h6>
                            <p>You wouldn't really want to torrent download large files, or stream on our service. We would have no way of knowing that you're doing it, but we can tell you this: our slower speeds vs. competitors would make it an underwhelming experience. No, our speeds aren't as fast as <a href="#">Mulvill</a> but we charge 100% less. If you're going to do intensive, DMCA-ish stuff – go with someone else. Our service is for transferring sensitive data for people who really need it.</p>
                        </div>
                    </div>
                </div>
                <div id="introduction" class="container mb-5">
                    <!-- Typography -->
                    <div id="icon-packs" class="container mb-5">
                        <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto mb-5">
                            <h1 class="mb-2 text-center">💻</h1>
                            <h3 class="mb-4 text-center">heatsink.io's Servers</h3> </div>
                    </div>
                    <div class="example col-md-10 ml-auto mr-auto">
                        <table class="table table-striped table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Protocol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-toggle="tooltip" data-placement="Left" title="vpn-nl.heatsink.io">
                                    <td>Amsterdam, Netherlands</td>
                                    <td><span class="badge mr-3 badge-pill badge-success">Online </span>
                                        <a id="txt" style="position:float;"></a>
                                    </td>
                                    <td>OpenVPN v2.3.16 UDP</td>
                                </tr>
                                <tr>
                                    <td>Stockholm, Sweden</td>
                                    <td><span class="badge mr-3 badge-pill badge-danger">Coming soon</span></td>
                                    <td>OpenVPN v2.3.16 UDP</td>
                                </tr>
                                <tr>
                                    <td>Fremont, CA. USA</td>
                                    <td><span class="badge mr-3 badge-pill badge-danger">Coming soon</span></td>
                                    <td>OpenVPN v2.3.16 UDP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="icon-packs" class="container mb-5">
                    <div class="section-title col-lg-8 col-md-10 ml-auto mr-auto mb-5">
                        <h1 class="mb-2 text-center"><a href="#" class="btn btn-primary btn-pill align-center mr-2" data-toggle="modal" data-target="#exampleModal">✋ Generate</a></h1> </div>
                </div>
                <!-- Documentation -->
                <div id="documentation" class="bg-white">
                    <div class="section-title container ml-auto mr-auto py-5">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto py-5">
                            <h1 class="mb-2 text-center">📘</h1>
                            <h3 class="mb-4 text-center">Read our docs</h3>
                            <p class="text-center">Everything client-side, server-side and even the source – get it here.</p>
                            <a class="d-table ml-auto mr-auto" href="#">
                                <button class="btn btn-pill btn-outline-primary"> <i class="fa fa-book mr-1"></i> Documentation</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Footer CTA -->
                <div class="footer-cta bg-dark">
                    <div class="container my-5">
                        <div class="py-5">
                            <div class="text-center">
                                <h1>🛠</h1>
                                <h2 class="text-white">Help the heatsink.io team!</h2>
                                <p class="text-muted col-lg-8 col-md-10 ml-auto mr-auto">Do you believe in our cause?<b>
                <u>Should Internet privacy be free and accessable?
                </u>
              </b>We're looking for IT system professionals to help improve our system for the greater good.
                                    <br>
                                    <br>Send us an email, info [at] heatsink.io.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="main-footer py-5">
                    <p class="text-muted text-center small p-0 mb-4">&copy; Copyright 2018 — heatsink.io</p>
                    <div class="social d-table mx-auto">
                        <a class="twitter mx-3 h4 d-inline-block text-secondary" href="#" target="_blank"> <i class="fa fa-twitter"></i> <span class="sr-only">View our Twitter Profile</span> </a>
                        <a class="github mx-3 h4 d-inline-block text-secondary" href="#" target="_blank"> <i class="fa fa-github"></i> <span class="sr-only">View our GitHub Profile</span> </a>
                    </div>
                </footer>
            </div>
            <!-- JavaScript -->
            <div id="fb-root"></div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="assets/shards.min.js"></script>
            <script src="assets/demo.min.js"></script>
    </body>

</html>