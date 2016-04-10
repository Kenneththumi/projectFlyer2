@if (session()->has('flash'))
    <script>
        swal({
            title: "{{ session('flash_message.title') }}",
            text: "{{ session('flash_message.message') }}",
            type: "error",
            timer: 1700,
            showConfirmButtonText: false
        });
    </script>
@endif