@push('script')
    <script>
        $(window).on('load', function() {
            window.print();
        });

        window.onafterprint = function(){
            window.location.replace(`{{ url()->previous() }}`);
        }
    </script>
@endpush