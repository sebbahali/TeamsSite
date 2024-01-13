<script>
    $(document).ready(function () {
        $(".delete-confirmation").click(function(event){
            event.preventDefault();
            swal({
                icon : "warning",
                title : "هل انت متأكد ؟",
                text : "لا يمكنك استعادة البيانات التي تحذفها",
                buttons: {
                    confirm: "موافق",
                    cancel: "الغاء",
                }

            })
            .then((value) => {
                switch (value) {

                    case true:
                        $(this).parent().submit();
                        break;

                    case null:
                        return false;
                        break;

                    default:
                        swal("حدث خطاء الرجاء المحاولة مرة اخرى");
                }
            })
        });
        $(".archive-confirmation").click(function(event){
            event.preventDefault();
            swal({
                icon : "warning",
                title : "هل انت متأكد ؟",
                text : "لا يمكنك استعادة البيانات التي تأرشفها",
                buttons: {
                    confirm: "موافق",
                    cancel: "الغاء",
                }

            })
            .then((value) => {
                switch (value) {

                    case true:
                        $(this).parent().submit();
                        break;

                    case null:
                        return false;
                        break;

                    default:
                        swal("حدث خطاء الرجاء المحاولة مرة اخرى");
                }
            })
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".send-list-club").click(function(event){
            event.preventDefault();
            swal({
                icon : "warning",
                title : "أرسال الكشف للنادي",
                text : "هل انت متاكد من اكمالك لتسجيل اللاعبين ، و تريد ارسال الكشف للنادي؟",
                buttons: {
                    confirm: "موافق",
                    cancel: "الغاء",
                }

            })
            .then((value) => {
                switch (value) {

                    case true:
                        window.location.href = $(this).attr('href');
                        break;

                    case null:
                        return false;
                        break;

                    default:
                        swal("حدث خطاء الرجاء المحاولة مرة اخرى");
                }
            })
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".turning-off").click(function(event){
            event.preventDefault();
            swal({
                icon : "warning",
                title : "هل انت متأكد",
                text : "سيتم ايقاف اللاعب وحذفه من فريقه",
                buttons: {
                    confirm: "موافق",
                    cancel: "الغاء",
                }

            })
            .then((value) => {
                switch (value) {

                    case true:
                        window.location.href = $(this).attr('href');
                        break;

                    case null:
                        return false;
                        break;

                    default:
                        swal("حدث خطاء الرجاء المحاولة مرة اخرى");
                }
            })
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".affiliated-in").click(function(event){
            event.preventDefault();
            swal({
                icon : "warning",
                title : "هل انت متأكد",
                text : "سيعاد انتساب اللاعب وسيظهر في فريقه",
                buttons: {
                    confirm: "موافق",
                    cancel: "الغاء",
                }

            })
            .then((value) => {
                switch (value) {

                    case true:
                        window.location.href = $(this).attr('href');
                        break;

                    case null:
                        return false;
                        break;

                    default:
                        swal("حدث خطاء الرجاء المحاولة مرة اخرى");
                }
            })
        });
    });
</script>
