<!DOCTYPE html>
<html lang="en">
@include("partials.head")
<body>
    <div id="wrapper">
    @include("partials.preloader")
    @include("partials.navbar")
    @yield('content')
    @include("partials.footer")
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/custom-marquee.js') }}"></script>
    <script src="{{ asset('assets/js/custom-swiper-1.js') }}"></script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault(); // stop default form submission

        const form = this;
        const formData = new FormData(form);

        fetch('{{route('contact.submit')}}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent!',
                    text: data.success,
                    confirmButtonColor: '#3085d6'
                });
                form.reset(); // optional: reset form after success
            })
            .catch(error => {
                // Show SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred. Please try again.',
                    confirmButtonColor: '#d33'
                });
                console.error('Error:', error);
            });
    });
</script>

</body>

</html>