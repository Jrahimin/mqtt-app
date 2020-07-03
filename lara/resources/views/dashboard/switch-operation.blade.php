@extends('layout.master')
@section('main-content')
    <!-- row-offcanvas START -->
    <div class="row-offcanvas row-offcanvas-left">
        <!-- Side menu START -->
        <div id="sidebar" class="sidebar-offcanvas">
            <ul class="nav flex-column nav-sidebar">
                <li class="nav-item active">
                    <a class="nav-link active" href="index.html">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#home"/></svg> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lights.html">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/></svg> Lights
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cameras.html">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#camera"/></svg> Cameras
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="appliances.html">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#appliances"/></svg> Appliances
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="climate.html">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#thermometer"/></svg> <span>Climate</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <svg class="icon-sprite"><use xlink:href="assets/images/icons-sprite.svg#settings"/></svg> Settings
                    </a>
                </li>
            </ul>
        </div>
        <!-- Side menu END -->
        <!-- Main content START -->
        <div id="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card p-2 mb-4">
                            <img src="https://cdn1.vectorstock.com/i/1000x1000/32/65/smart-house-or-iot-concept-smart-home-icons-set-vector-24483265.jpg" width="140" height="20" alt="SYMBIOT 4" class="mx-auto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <!-- Security system START -->
                        <div class="card lock" data-unit="switch-house-lock">
                            <div class="card-body d-flex flex-wrap">
                                <svg class="icon-sprite icon-2x">
                                    <use xlink:href="assets/images/icons-sprite.svg#home"/>
                                    <use class="subicon-unlocked" xlink:href="assets/images/icons-sprite.svg#subicon-unlocked"/>
                                    <use class="subicon-locked" xlink:href="assets/images/icons-sprite.svg#subicon-locked"/>
                                </svg>
                                <div class="title-status">
                                    <h4>Security system</h4>
                                    <p class="status"><span class="arm"></span></p>
                                </div>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-house-lock">
                                </label>
                            </div>
                        </div>
                        <!-- Security system END -->
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <!-- Garage-doors START -->
                        <div class="card" data-unit="garage-doors-1">
                            <div class="card-body">
                                <div class="d-flex flex-wrap mb-2">
                                    <svg class="icon-sprite icon-1x">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#garage"/>
                                    </svg>
                                    <div class="title-status">
                                        <h5>Garage doors</h5>
                                        <p class="status text-danger">Close</p>
                                    </div>
                                    <div class="ml-auto timer-controls" data-controls="garage-doors-1">
                                        <button data-action="open" type="button" class="btn btn-secondary doors-control">Open</button>
                                        <button data-action="pause" type="button" class="btn btn-secondary doors-control">Pause</button>
                                        <button data-action="resume" type="button" class="btn btn-secondary doors-control">Resume</button>
                                        <button data-action="close" type="button" class="btn btn-secondary doors-control">Close</button>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-tiny timer" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="12"></div>
                                </div>
                                <div class="info-holder info-cb">
                                    <div data-toggle="popover-all" data-content="Element driven by javascript (countdown timer)." data-original-title="Progress indicator" data-placement="top" data-offset="0,-12"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Garage-doors END -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <!-- Interior lights  START -->
                        <div class="card" data-unit-group="switch-lights">
                            <div class="card-body">
                                <h3 class="card-title">Lights - interior</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex active" data-unit="switch-light-1">
                                    <svg class="icon-sprite">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                    </svg>
                                    <h5>Kitchen</h5>
                                    <label class="switch ml-auto checked">
                                        <input type="checkbox" id="switch-light-1" checked>
                                    </label>
                                    <div class="info-holder info-rb" style="right:40px;">
                                        <div data-toggle="popover-all" data-content="Checkbox element using localStorage to remember the last status." data-original-title="Switch ON/OFF" data-container="body" data-placement="top" data-offset="0,-6"></div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex" data-unit="switch-light-2">
                                    <svg class="icon-sprite">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                    </svg>
                                    <h5>Dining room</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-2">
                                    </label>
                                </li>
                                <li class="list-group-item d-flex" data-unit="switch-light-3">
                                    <svg class="icon-sprite">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                    </svg>
                                    <h5>Living room</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-3">
                                    </label>
                                </li>
                                <li class="list-group-item d-flex" data-unit="switch-light-4">
                                    <svg class="icon-sprite">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                    </svg>
                                    <h5>Bedroom</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-4">
                                    </label>
                                </li>
                                <li class="list-group-item d-flex" data-unit="switch-light-5">
                                    <svg class="icon-sprite">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                    </svg>
                                    <h5>Bathroom</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-5">
                                    </label>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="lights-controls" data-controls="switch-lights">
                                    <button data-action="all-on" type="button" class="btn btn-primary lights-control">All <strong>ON</strong></button>
                                    <button data-action="all-off" type="button" class="btn btn-secondary lights-control">All <strong>OFF</strong></button>
                                </div>
                            </div>
                        </div>
                        <!-- Interior lights  END -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <!-- Exterior lights  START -->
                        <h3 class="card-title my-3">Lights - exterior</h3>
                        <div class="card" data-unit="switch-light-6">
                            <div class="card-body d-flex flex-row justify-content-start">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Front doors</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-light-6">
                                </label>
                            </div>
                        </div>
                        <div class="card" data-unit="switch-light-7">
                            <div class="card-body d-flex">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Back doors</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-light-7">
                                </label>
                            </div>
                        </div>
                        <div class="card" data-unit="switch-light-8">
                            <div class="card-body d-flex">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Pool</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-light-8">
                                </label>
                            </div>
                        </div>
                        <div class="card" data-unit="switch-light-9">
                            <div class="card-body d-flex">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Garage</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-light-9">
                                </label>
                            </div>
                        </div>
                        <!-- Exterior lights  END -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <!-- Appliances  START -->
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Appliances</h3>
                            </div>
                            <hr class="my-0">
                            <!-- Washing machine  START -->
                            <ul class="list-group borderless active" data-unit="wash-machine">
                                <li class="list-group-item d-flex pb-0">
                                    <svg class="icon-sprite icon-1x">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#wash-machine"/>
                                    </svg>
                                    <h5>Washing machine</h5>
                                    <p class="ml-auto status">ON</p>
                                </li>
                                <li class="list-group-item d-flex pt-0 pb-4">
                                    <p class="entry">Remaining time</p>
                                    <p id="wash-machine" class="ml-auto mb-0"></p>
                                </li>
                            </ul>
                            <!-- Washing machine  END -->
                            <hr class="my-0">
                            <!-- Fridge  START -->
                            <ul class="list-group borderless active" data-unit="home-fridge">
                                <li class="list-group-item d-flex pb-0">
                                    <svg class="icon-sprite icon-1x">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#home-fridge"/>
                                    </svg>
                                    <h5>Fridge</h5>
                                    <p class="ml-auto status">ON</p>
                                </li>
                                <li class="list-group-item d-flex pt-0 pb-4">
                                    <p class="entry">Temperature</p>
                                    <p class="ml-auto mb-0">35<sup>°F</sup></p>
                                </li>
                            </ul>
                            <!-- Fridge  END -->
                            <hr class="my-0">
                            <!-- TV  START -->
                            <ul class="list-group borderless" data-unit="tv-lcd">
                                <li class="list-group-item d-flex">
                                    <svg class="icon-sprite icon-1x">
                                        <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                        <use xlink:href="assets/images/icons-sprite.svg#tv-lcd"/>
                                    </svg>
                                    <h5>TV</h5>
                                    <p class="ml-auto status">OFF</p>
                                </li>
                            </ul>
                            <!-- TV  END -->
                        </div>
                        <!-- Appliances  END -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <!-- Camera 1  START -->
                        <div class="card active" data-unit="switch-camera-1">
                            <div class="card-img-top card-stream">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video muted loop>
                                        <source src="assets/videos/street.mp4" type="video/mp4" />
                                        <source src="assets/videos/street.webm" type="video/webm" />
                                    </video>
                                    <div class="card-preloader">
                                        <div class="center-preloader d-flex align-items-center">
                                            <div class="spinners">
                                                <div class="spinner01"></div>
                                                <div class="spinner02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-img-top card-stream off">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <h2 class="center-abs">OFF</h2>
                                </div>
                            </div>
                            <div class="card-body d-flex">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#camera"/>
                                </svg>
                                <h5>Outdoor front</h5>
                                <label class="switch ml-auto checked">
                                    <input type="checkbox" id="switch-camera-1" checked>
                                </label>
                            </div>
                        </div>
                        <!-- Camera 1  END -->
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <!-- Camera 2  START -->
                        <div class="card" data-unit="switch-camera-2">
                            <div class="card-img-top card-stream">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video muted loop>
                                        <source src="assets/videos/room.mp4" type="video/mp4" />
                                        <source src="assets/videos/room.webm" type="video/webm" />
                                    </video>
                                    <div class="card-preloader">
                                        <div class="center-preloader d-flex align-items-center">
                                            <div class="spinners">
                                                <div class="spinner01"></div>
                                                <div class="spinner02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-img-top card-stream off">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <h2 class="center-abs">OFF</h2>
                                </div>
                            </div>
                            <div class="card-body d-flex">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)" xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#camera"/>
                                </svg>
                                <h5>Joe's room</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch-camera-2">
                                </label>
                            </div>
                        </div>
                        <!-- Camera 2  END -->
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Demonstration - buttons -->
                        <button type="button" class="btn btn-lg btn-danger mx-2 my-2" data-toggle="modal" data-target="#alarmModal"> Test ALARM </button>
                    </div>
                </div>
            </div>
            <!-- Main content overlay when side menu appears  -->
            <div class="cover-offcanvas" data-toggle="offcanvas"></div>
        </div>
        <!-- Main content END -->
    </div>
    <!-- row-offcanvas END -->
@endsection

@push('js-lib')
@endpush
@section('js-custom')
    <script>
        $(document).ready(function() {

            //MQTT Client code start

            var client = mqtt.connect('157.230.30.178:1883');
            client.on('connect', function(event) {
                console.log(event);
                client.subscribe('topic/ftflteam3/general', function(err) {
                    if (!err) {
                        client.publish('topic/ftflteam3/general', 'Hello mqtt')
                    }
                })
            });

            client.on('topic/ftflteam3/general', function(topic, message) {
                // message is Buffer
                console.log(message.toString())
                client.end()
            });
            //MQTT Client code end

            // Get checkbox statuses from localStorage if available (IE)
            if (localStorage) {

                // Menu minifier status (Contract/expand side menu on large screens)
                var checkboxValue = localStorage.getItem('minifier');

                if (checkboxValue === 'true') {
                    $('#sidebar,#menu-minifier').addClass('mini');
                    $('#minifier').prop('checked', true);

                } else {

                    if ($('#minifier').is(':checked')) {
                        $('#sidebar,#menu-minifier').addClass('mini');
                        $('#minifier').prop('checked', true);
                    } else {
                        $('#sidebar,#menu-minifier').removeClass('mini');
                        $('#minifier').prop('checked', false);
                    }
                }

                // Switch statuses
                var switchValues = JSON.parse(localStorage.getItem('switchValues')) || {};

                $.each(switchValues, function(key, value) {

                    // Apply only if element is included on the page
                    if ($('[data-unit="' + key + '"]').length) {

                        if (value === true) {

                            // Apply appearance of the "unit" and checkbox element
                            $('[data-unit="' + key + '"]').addClass("active");
                            $("#" + key).prop('checked', true);
                            $("#" + key).closest("label").addClass("checked");

                            //In case of Camera unit - play video
                            if (key === "switch-camera-1" || key === "switch-camera-2") {
                                $('[data-unit="' + key + '"] video')[0].play();
                            }

                        } else {
                            $('[data-unit="' + key + '"]').removeClass("active");
                            $("#" + key).prop('checked', false);
                            $("#" + key).closest("label").removeClass("checked");
                            if (key === "switch-camera-1" || key === "switch-camera-2") {
                                $('[data-unit="' + key + '"] video')[0].pause();
                            }
                        }
                    }
                });
            }


            // Contract/expand side menu on click. (only large screens)
            $('#minifier').click(function() {

                $('#sidebar,#menu-minifier').toggleClass('mini');

                // Save side menu status to localStorage if available (IE)
                if (localStorage) {
                    checkboxValue = this.checked;
                    localStorage.setItem('minifier', checkboxValue);
                }

            });


            // Side menu toogler for medium and small screens
            $('[data-toggle="offcanvas"]').click(function() {
                $('.row-offcanvas').toggleClass('active');
            });


            // Switch (checkbox element) toogler
            $('.switch input[type="checkbox"]').on("change", function(t) {

                // Check the time between changes to prevert Android native browser execute twice
                // If you dont need support for Android native browser - just call "switchSingle" function
                if (this.last) {

                    this.diff = t.timeStamp - this.last;

                    // Don't execute if the time between changes is too short (less than 250ms) - Android native browser "twice bug"
                    // The real time between two human taps/clicks is usually much more than 250ms"
                    if (this.diff > 250) {

                        this.last = t.timeStamp;

                        iot.switchSingle(this.id, this.checked);

                    } else {
                        return false;
                    }

                } else {

                    // First attempt on this switch element
                    this.last = t.timeStamp;

                    iot.switchSingle(this.id, this.checked);

                }
            });

            // All ON/OFF controls
            $('.lights-control').click(function() {

                var target = $(this).closest('.lights-controls').data('controls');
                var action = $(this).data('action');

                iot.switchGroup(target, action);
            });

            // Reposition to center when a modal is shown
            $('.modal.centered').on('show.bs.modal', iot.centerModal);

            // Reset/Stop countdown timer (EXIT NOW)
            $('#armModal').on('hide.bs.modal', iot.clearCountdown);

            // Garage doors controls
            $('.doors-control').click(function() {

                var target = $(this).closest('.timer-controls').data('controls');
                var action = $(this).data('action');

                iot.garageDoors(target, action);
            });

            // Alerts "Close" callback - hide modal and alert indicator dot when user closes all alerts
            $('#alertsModal .alert').on('close.bs.alert', function() {
                var sum = $('#alerts-toggler').attr('data-alerts');
                sum = sum - 1;
                $('#alerts-toggler').attr('data-alerts', sum);

                if (sum === 0) {
                    $('#alertsModal').modal('hide');
                    $('#alerts-toggler').attr('data-toggle', 'none');

                }

            });

            // Show/hide tips (popovers) - FAB button (right bottom on large screens)
            $('#info-toggler').click(function() {

                if ($('body').hasClass('info-active')) {
                    $('[data-toggle="popover-all"]').popover('hide');
                    $('body').removeClass('info-active');
                } else {
                    $('[data-toggle="popover-all"]').popover('show');
                    $('body').addClass('info-active');
                }
            });

            // Hide tips (popovers) by clicking outside
            $('body').on('click', function(pop) {

                if (pop.target.id !== 'info-toggler' && $('body').hasClass('info-active')) {
                    $('[data-toggle="popover-all"]').popover('hide');
                    $('body').removeClass('info-active');
                }

            });

        });

        // Apply necessary changes, functionality when content is loaded
        $(window).on('load', function() {

            // This script is necessary for cross browsers icon sprite support (IE9+, ...)
            svg4everybody();

            // Washing machine - demonstration of running program/cycle
            $('#wash-machine').timer({
                countdown: true,
                format: '%H:%M:%S',
                duration: '1h17m10s',
                callback: function() {
                    $('[data-unit="wash-machine"]').removeClass("active");
                }
            });

            if ($('[data-unit="switch-camera-1"]').hasClass("active")) {
                var activeVideo = $('[data-unit="switch-camera-1"] video').get(0);

                if (activeVideo.paused) {
                    activeVideo.autoplay = true;
                    activeVideo.load();
                    activeVideo.play();
                } else {
                    activeVideo.pause();
                }
            }

            if ($('[data-unit="switch-camera-2"]').hasClass("active")) {
                var activeVideo = $('[data-unit="switch-camera-2"] video').get(0);

                if (activeVideo.paused) {
                    activeVideo.autoplay = true;
                    activeVideo.load();
                    activeVideo.play();
                } else {
                    activeVideo.pause();
                }
            }

            // "Timeout" function is not neccessary - important is to hide the preloader overlay
            setTimeout(function() {

                // Hide preloader overlay when content is loaded
                $('#iot-preloader,.card-preloader').fadeOut();
                $("#wrapper").removeClass("hidden");

                // Check for Main contents scrollbar visibility and set right position for FAB button
                iot.positionFab();

            }, 800);

        });

        // Apply necessary changes if window resized
        $(window).on('resize', function() {

            // Modal reposition when the window is resized
            $('.modal.centered:visible').each(iot.centerModal);

            // Check for Main contents scrollbar visibility and set right position for FAB button
            iot.positionFab();
        });
    </script>
@endsection