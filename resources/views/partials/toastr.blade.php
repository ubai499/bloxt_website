<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        @if(session('error'))
            toastr.error("Error", "{{ Session::get('error') }}", {
                progressBar: true
            });
        @endif

        @if(session('success'))
            toastr.success("{{ Session::get('success') }}", {
                progressBar: true
            });
        @endif
    });
</script>