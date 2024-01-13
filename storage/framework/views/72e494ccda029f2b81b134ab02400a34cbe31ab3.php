<!-- plugins:js -->
<script src="<?php echo e(asset('dashboard/vendors/js/vendor.bundle.base.js')); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo e(asset('dashboard/vendors/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/jquery.cookie.js')); ?>" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo e(asset('dashboard/js/off-canvas.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/hoverable-collapse.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/misc.js')); ?>"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo e(asset('dashboard/js/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/todolist.js')); ?>"></script>
<!-- End custom js for this page -->


<script src="<?php echo e(asset('dashboard/js/toastr.min.js')); ?>"></script>


<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyCeo5fAEGfb_P_8hVOzLpx-WqYtX6mkCOA",
        authDomain: "qu-club.firebaseapp.com",
        projectId: "qu-club",
        storageBucket: "qu-club.appspot.com",
        messagingSenderId: "746074656053",
        appId: "1:746074656053:web:dd27f440a901eadff3907c",
        measurementId: "G-QYDFFQ8XGT"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function initFirebaseMessagingRegistration() {
        messaging
            .requestPermission()
            .then(function() {
                return messaging.getToken()
            })
            .then(function(token) {
                console.log(token);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '<?php echo e(route("frontend.teams.save-token")); ?>',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.'); // to sweet alert
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err); // to sweet alert
                    },
                });

            }).catch(function(err) {
                console.log('User Chat Token Error' + err); // to sweet alert
            });
    }

    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });
</script>
<?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/components/frontend/includes/js.blade.php ENDPATH**/ ?>