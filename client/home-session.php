<?php

$remotefile = "http://vpn-sg.heatsink.io/" . $sessionIdentify . ".ovpn";
$page404 = "http://heatsink.io";
$certDL = "no";

?>
    <html>
    <!doctype html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>heatsink.io</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/shards-demo.min.css?v=2.0.1">
        <link rel="stylesheet" href="assets/shards.min.css?v=2.0.1">
        <style>
            .looping-rhombuses-spinner,
            .looping-rhombuses-spinner * {
                box-sizing: border-box;
            }
            
            .looping-rhombuses-spinner {
                width: calc(15px * 4);
                height: 25px;
                position: relative;
            }
            
            .looping-rhombuses-spinner .rhombus {
                height: 25px;
                width: 25px;
                left: calc(25px * 4);
                position: absolute;
                margin: 0 auto;
                border-radius: 2px;
                transform: translateY(0) rotate(180deg) scale(0);
                animation: looping-rhombuses-spinner-animation 2500ms linear infinite;
            }
            
            .looping-rhombuses-spinner .rhombus:nth-child(1) {
                animation-delay: calc(2500ms * 1 / -1.5);
            }
            
            .looping-rhombuses-spinner .rhombus:nth-child(2) {
                animation-delay: calc(2500ms * 2 / -1.5);
            }
            
            .looping-rhombuses-spinner .rhombus:nth-child(3) {
                animation-delay: calc(2500ms * 3 / -1.5);
            }
            
            .looping-rhombuses-spinner .rhombus:nth-child(4) {
                animation-delay: calc(2500ms * 3 / -1.5);
            }
            
            .looping-rhombuses-spinner .rhombus:nth-child(5) {
                animation-delay: calc(2500ms * 3 / -1.5);
            }
            
            @keyframes looping-rhombuses-spinner-animation {
                0% {
                    transform: translateX(0) rotate(45deg) scale(0);
                }
                50% {
                    transform: translateX(-233%) rotate(45deg) scale(1);
                }
                100% {
                    transform: translateX(-466%) rotate(45deg) scale(0);
                }
            }
        </style>
    </head>

    <body>
        <div class="loader">
            <center>
                <br>
                <br>
                <br>
                <br>
                <div class="looping-rhombuses-spinner">
                    <div class="rhombus">👍🏻</div>
                    <div class="rhombus">👍🏻</div>
                    <div class="rhombus">👍🏻</div>
                    <div class="rhombus">👍</div>
                </div>
            </center>
        </div>
        <br> <img src="assets/shard-1-5x-3.png" alt="Shard" class="shard" style="max-height: 40px;max-width: 30px;">
        
        <?php
        if(ini_get('allow_url_fopen')) 
{ 
  if($handle = fopen($remotefile, 'r')) 
  { 
    $certDL = "yes";
  } 
  else 
  { 
    $certDL = "no";
    echo "<br><br><br><center><span class='badge mr-3 badge-pill badge-danger'>Your certificate either hasn't generated yet or doesn't exist. Please refresh.</span></center>"; 
  } 
} 
else 
{ 
  $certDL = "no";
  echo "<br><br><br><center><span class='badge mr-3 badge-pill badge-danger'>Our server appears to be down. Sorry!</span></center>"; 
}  

    ?>
        
        <!-- Page Content -->
        <br>
        <br>
        <div class="page-content">
            <!-- Content -->
            <div class="col-md-10 ml-auto mr-auto">
                <h3 class="mb-4" alt="Shard" class="shard">You're ready to connect!</h3>
                <p>Your OpenVPN account has been generated with absolutely no identifying info. Download your configuration file below and drag it into a <a href="#">OpenVPN</a> client of your choice.
                    <br>
                    <br><strong>NOTE: </strong>Your account will remain active for 30min from the creation time. Once expired, your account <b>will not disconnect</b> but you will have no internet access (make sure to securely trash your certificate!)</p>
            </div>
            <div class="example col-md-10 ml-auto mr-auto">
                <table class="table table-striped table-responsive-md ml-auto mr-auto">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Cert Download</th>
                            <th>Anonymous Identifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Amsterdam, Netherlands</p>
                            </td>
                            <td>
                                <?php if($certDL == 'no') {
                                echo "<span class='badge mr-3 badge-secondary'><i class='fa fa-download'></i> Download .ovpn</span>";
                                } else {
                                echo "<a href='http://vpn-nl.heatsink.io/" . $sessionIdentify . ".ovpn'><span class='badge mr-3 badge-primary'><i class='fa fa-download'></i> Download .ovpn</span></a>"; } ?>
                    </td>
                            <td>
                                <p>
                                    <?php echo $sessionIdentify ?>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <center>
                    <a href="<?php echo ('purge.php?sid=' . $sessionIdentify); ?>">
                        <button type="button" class="btn btn-pill btn-danger"><i class="fa fa-remove mr-1"></i>Purge cert & disconnect</button>
                    </a>
                </center>
                <br>
                <br> </div>
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
            <footer class="main-footer py-5">
                <p class="text-muted text-center small p-0 mb-4">&copy; Copyright 2018 — heatsink.io</p>
                <div class="social d-table mx-auto">
                    <a class="twitter mx-3 h4 d-inline-block text-secondary" href="#" target="_blank"> <i class="fa fa-twitter"></i> <span class="sr-only">View our Twitter Profile</span> </a>
                    <a class="github mx-3 h4 d-inline-block text-secondary" href="#" target="_blank"> <i class="fa fa-github"></i> <span class="sr-only">View our GitHub Profile</span> </a>
                </div>
            </footer>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="assets/shards.min.js"></script>
            <script src="assets/demo.min.js"></script>
    </body>

    </html>