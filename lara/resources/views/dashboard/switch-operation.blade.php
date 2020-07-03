@extends('layout.master')
@section('main-content')
    <!-- Main content START -->
    <div id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card p-2 mb-4">
                        <img src="https://cdn1.vectorstock.com/i/1000x1000/32/65/smart-house-or-iot-concept-smart-home-icons-set-vector-24483265.jpg"
                             width="140" height="20" alt="SYMBIOT 4" class="mx-auto">
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
                                <use class="subicon-unlocked"
                                     xlink:href="assets/images/icons-sprite.svg#subicon-unlocked"/>
                                <use class="subicon-locked"
                                     xlink:href="assets/images/icons-sprite.svg#subicon-locked"/>
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
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#garage"/>
                                </svg>
                                <div class="title-status">
                                    <h5>Garage doors</h5>
                                    <p class="status text-danger">Close</p>
                                </div>
                                <div class="ml-auto timer-controls" data-controls="garage-doors-1">
                                    <button data-action="open" type="button"
                                            class="btn btn-secondary doors-control">Open
                                    </button>
                                    <button data-action="pause" type="button"
                                            class="btn btn-secondary doors-control">Pause
                                    </button>
                                    <button data-action="resume" type="button"
                                            class="btn btn-secondary doors-control">Resume
                                    </button>
                                    <button data-action="close" type="button"
                                            class="btn btn-secondary doors-control">Close
                                    </button>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-tiny timer" role="progressbar" aria-valuenow="0"
                                     aria-valuemin="0" aria-valuemax="12"></div>
                            </div>
                            <div class="info-holder info-cb">
                                <div data-toggle="popover-all"
                                     data-content="Element driven by javascript (countdown timer)."
                                     data-original-title="Progress indicator" data-placement="top"
                                     data-offset="0,-12"></div>
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
                            <h5 class="card-title">
                                <span class="text-white-50" id="temperature"></span>
                                <span class="text-white-50 float-right" id="heart"></span>
                            </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex active" data-unit="switch1">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Blue LED</h5>
                                <label class="switch ml-auto checked">
                                    <input type="checkbox" id="switch1" checked>
                                </label>
                                <div class="info-holder info-rb" style="right:40px;">
                                    <div data-toggle="popover-all"
                                         data-content="Checkbox element using localStorage to remember the last status."
                                         data-original-title="Switch ON/OFF" data-container="body"
                                         data-placement="top" data-offset="0,-6"></div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex" data-unit="switch2">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Green LED</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch2">
                                </label>
                            </li>
                            <li class="list-group-item d-flex" data-unit="switch3">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Red LED</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch3">
                                </label>
                            </li>
                            <li class="list-group-item d-flex" data-unit="switch4">
                                <svg class="icon-sprite">
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
                                    <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                                </svg>
                                <h5>Light</h5>
                                <label class="switch ml-auto">
                                    <input type="checkbox" id="switch4">
                                </label>
                            </li>
                        </ul>
                        {{--                            <div class="card-body">--}}
                        {{--                                <div class="lights-controls" data-controls="switch-lights">--}}
                        {{--                                    <button data-action="all-on" type="button" class="btn btn-primary lights-control">--}}
                        {{--                                        All <strong>ON</strong></button>--}}
                        {{--                                    <button data-action="all-off" type="button"--}}
                        {{--                                            class="btn btn-secondary lights-control">All <strong>OFF</strong></button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                    </div>
                    <!-- Interior lights  END -->
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <!-- Exterior lights  START -->
                    {{--                        <h3 class="card-title my-3">Lights - exterior</h3>--}}
                    <div class="card" data-unit="switch5">
                        <div class="card-body d-flex flex-row justify-content-start">
                            <svg class="icon-sprite">
                                <use class="glow" fill="url(#radial-glow)"
                                     xlink:href="assets/images/icons-sprite.svg#glow"/>
                                <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                            </svg>
                            <h5>Fan</h5>
                            <label class="switch ml-auto">
                                <input type="checkbox" id="switch5">
                            </label>
                        </div>
                    </div>
                    <div class="card" data-unit="switch6">
                        <div class="card-body d-flex">
                            <svg class="icon-sprite">
                                <use class="glow" fill="url(#radial-glow)"
                                     xlink:href="assets/images/icons-sprite.svg#glow"/>
                                <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                            </svg>
                            <h5>Light Auto Mode</h5>
                            <label class="switch ml-auto">
                                <input type="checkbox" id="switch6">
                            </label>
                        </div>
                    </div>
                    <div class="card" data-unit="switch7">
                        <div class="card-body d-flex">
                            <svg class="icon-sprite">
                                <use class="glow" fill="url(#radial-glow)"
                                     xlink:href="assets/images/icons-sprite.svg#glow"/>
                                <use xlink:href="assets/images/icons-sprite.svg#bulb-eco"/>
                            </svg>
                            <h5>Fan Auto Mood</h5>
                            <label class="switch ml-auto">
                                <input type="checkbox" id="switch7">
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
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
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
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
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
                                    <use class="glow" fill="url(#radial-glow)"
                                         xlink:href="assets/images/icons-sprite.svg#glow"/>
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
                                    <source src="assets/videos/street.mp4" type="video/mp4"/>
                                    <source src="assets/videos/street.webm" type="video/webm"/>
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
                                <use class="glow" fill="url(#radial-glow)"
                                     xlink:href="assets/images/icons-sprite.svg#glow"/>
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
                                    <source src="assets/videos/room.mp4" type="video/mp4"/>
                                    <source src="assets/videos/room.webm" type="video/webm"/>
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
                                <use class="glow" fill="url(#radial-glow)"
                                     xlink:href="assets/images/icons-sprite.svg#glow"/>
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
                    <button type="button" class="btn btn-lg btn-danger mx-2 my-2" data-toggle="modal"
                            data-target="#alarmModal"> Test ALARM
                    </button>
                </div>
            </div>
        </div>
        <!-- Main content overlay when side menu appears  -->
        <div class="cover-offcanvas" data-toggle="offcanvas"></div>
    </div>
    <!-- Main content END -->
@endsection

@push('js-lib')
@endpush
@section('js-custom')
    <script>
        const topic1 = "topic/ftflteam3/commands";
        const topic2 = "topic/ftflteam3/activities";
        const topic3 = "topic/ftflteam3/heartbeats";
        const topic4 = "topic/ftflteam3/temperature";
        $(document).ready(function () {
            var flag = true;
            //MQTT Client code start
            var clientId = 'ftfl_' + Math.random().toString(16).substr(2, 8);
            var client = mqtt.connect('http://mqtt.eclipse.org/mqtt', {clientId: clientId})
            client.on('connect', function () {
                client.subscribe('ftfl_home', function (err) {
                    if (!err) {
                    }
                })
                client.subscribe('topic/ftflteam3/commands', function (err) {
                    if (!err) {
                    }
                })
                client.subscribe('topic/ftflteam3/activities', function (err) {
                    if (!err) {
                    }
                })
                client.subscribe('topic/ftflteam3/heartbeats', function (err) {
                    if (!err) {
                    }
                })
                client.subscribe('topic/ftflteam3/temperature', function (err) {
                    if (!err) {
                    }
                })
            });
            client.on('message', function (topic, message) {
                switch (topic) {
                    case 'topic/ftflteam3/activities':
                        message = message.toString();
                        const messageArray = message.split('-');
                        console.log($("#" + messageArray[0]).val(), messageArray[1]);
                        if ($("#" + messageArray[0]).val() !== messageArray[1]) {
                            if (messageArray[0] === 'switch4') {
                                if ($("#switch6").val() === 'off') {
                                    flag = false;
                                    $("#" + messageArray[0]).val($("#" + messageArray[0]).val()=='on'?'off':'on');
                                    $("#" + messageArray[0]).click();
                                    // iot.switchSingle(messageArray[0], messageArray[1]==='on');
                                    ajaxCall('device-info', {
                                        'device_name': messageArray[0],
                                        'status': messageArray[1] === 'on',
                                        'topic': topic,
                                        'message': message,
                                    }, 'post', (data, code, message) => {
                                    }, false)
                                }
                            } else if (messageArray[0] === 'switch5') {
                                if ($("#switch7").val() === 'off') {
                                    flag = false;
                                    $("#" + messageArray[0]).val($("#" + messageArray[0]).val()=='on'?'off':'on');
                                    $("#" + messageArray[0]).click();
                                    ajaxCall('device-info', {
                                        'device_name': messageArray[0],
                                        'status': messageArray[1] === 'on',
                                        'topic': topic,
                                        'message': message,
                                    }, 'post', (data, code, message) => {
                                    }, false)
                                }
                            } else {
                                flag = false;
                                $("#" + messageArray[0]).val($("#" + messageArray[0]).val()=='on'?'off':'on');
                                $("#" + messageArray[0]).click();
                                ajaxCall('device-info', {
                                    'device_name': messageArray[0],
                                    'status': messageArray[1] === 'on',
                                    'topic': topic,
                                    'message': message,
                                }, 'post', (data, code, message) => {
                                }, false)
                            }
                        }
                        break;
                    case 'topic/ftflteam3/heartbeats':
                        $("#heart").html(message.toString() + "");
                        break;
                    case 'topic/ftflteam3/temperature':
                        $("#temperature").html(message.toString() + "C");
                        break;
                    default:
                }
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

                $.each(switchValues, function (key, value) {

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
            $('#minifier').click(function () {

                $('#sidebar,#menu-minifier').toggleClass('mini');

                // Save side menu status to localStorage if available (IE)
                if (localStorage) {
                    checkboxValue = this.checked;
                    console.log('542', checkboxValue);
                    localStorage.setItem('minifier', checkboxValue);
                }

            });


            // Side menu toogler for medium and small screens
            $('[data-toggle="offcanvas"]').click(function () {
                $('.row-offcanvas').toggleClass('active');
            });


            // Switch (checkbox element) toogler
            $('.switch input[type="checkbox"]').on("change", function (t) {

                // Check the time between changes to prevert Android native browser execute twice
                // If you dont need support for Android native browser - just call "switchSingle" function
                if (this.last) {

                    this.diff = t.timeStamp - this.last;

                    // Don't execute if the time between changes is too short (less than 250ms) - Android native browser "twice bug"
                    // The real time between two human taps/clicks is usually much more than 250ms"
                    if (this.diff > 250) {

                        this.last = t.timeStamp;

                        iot.switchSingle(this.id, this.checked);
                        if (flag == true) {
                            client.publish('topic/ftflteam3/commands', this.id + '-' + (this.checked ? 'on' : 'off'));
                            ajaxCall('device-info', {
                                'device_name': this.id,
                                'status': this.checked,
                                'topic': 'topic/ftflteam3/commands',
                                'message': this.id + '-' + (this.checked ? 'on' : 'off'),
                            }, 'post', (data, code, message) => {
                            }, false)
                        } else {
                            flag = true;
                        }
                    } else {
                        return false;
                    }

                } else {

                    // First attempt on this switch element
                    this.last = t.timeStamp;
                    iot.switchSingle(this.id, this.checked);
                    if (flag == true) {
                        client.publish('topic/ftflteam3/commands', this.id + '-' + (this.checked ? 'on' : 'off'));
                        ajaxCall('device-info', {
                            'device_name': this.id,
                            'status': this.checked,
                            'topic': 'topic/ftflteam3/commands',
                            'message': this.id + '-' + (this.checked ? 'on' : 'off'),
                        }, 'post', (data, code, message) => {
                        }, false)
                    } else {
                        flag = true;
                    }

                }
            });

            // // All ON/OFF controls
            // $('.lights-control').click(function () {
            //
            //     var target = $(this).closest('.lights-controls').data('controls');
            //     var action = $(this).data('action');
            //     console.log(target, action);
            //     iot.switchGroup(target, action);
            // });

            // Reposition to center when a modal is shown
            $('.modal.centered').on('show.bs.modal', iot.centerModal);

            // Reset/Stop countdown timer (EXIT NOW)
            $('#armModal').on('hide.bs.modal', iot.clearCountdown);

            // Garage doors controls
            $('.doors-control').click(function () {

                var target = $(this).closest('.timer-controls').data('controls');
                var action = $(this).data('action');
                //@todo
                iot.garageDoors(target, action);
            });

            // Alerts "Close" callback - hide modal and alert indicator dot when user closes all alerts
            $('#alertsModal .alert').on('close.bs.alert', function () {
                var sum = $('#alerts-toggler').attr('data-alerts');
                sum = sum - 1;
                $('#alerts-toggler').attr('data-alerts', sum);

                if (sum === 0) {
                    $('#alertsModal').modal('hide');
                    $('#alerts-toggler').attr('data-toggle', 'none');

                }

            });

            // Show/hide tips (popovers) - FAB button (right bottom on large screens)
            $('#info-toggler').click(function () {

                if ($('body').hasClass('info-active')) {
                    $('[data-toggle="popover-all"]').popover('hide');
                    $('body').removeClass('info-active');
                } else {
                    $('[data-toggle="popover-all"]').popover('show');
                    $('body').addClass('info-active');
                }
            });

            // Hide tips (popovers) by clicking outside
            $('body').on('click', function (pop) {

                if (pop.target.id !== 'info-toggler' && $('body').hasClass('info-active')) {
                    $('[data-toggle="popover-all"]').popover('hide');
                    $('body').removeClass('info-active');
                }

            });

        });

        // Apply necessary changes, functionality when content is loaded
        $(window).on('load', function () {

            // This script is necessary for cross browsers icon sprite support (IE9+, ...)
            svg4everybody();

            // Washing machine - demonstration of running program/cycle
            $('#wash-machine').timer({
                countdown: true,
                format: '%H:%M:%S',
                duration: '1h17m10s',
                callback: function () {
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
            setTimeout(function () {

                // Hide preloader overlay when content is loaded
                $('#iot-preloader,.card-preloader').fadeOut();
                $("#wrapper").removeClass("hidden");

                // Check for Main contents scrollbar visibility and set right position for FAB button
                iot.positionFab();

            }, 800);

        });

        // Apply necessary changes if window resized
        $(window).on('resize', function () {

            // Modal reposition when the window is resized
            $('.modal.centered:visible').each(iot.centerModal);

            // Check for Main contents scrollbar visibility and set right position for FAB button
            iot.positionFab();
        });
    </script>
@endsection