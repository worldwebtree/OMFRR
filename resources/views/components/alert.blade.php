@if (session('created'))
    <script type="text/javascript">
        swal.fire({
            title: 'Created',
            text: "{{ session('created') }}",
            icon: 'success',
        })
    </script>

    @elseif (session('updated'))
    <script type="text/javascript">
        swal.fire({
            title: 'Updated',
            text: "{{ session('updated') }}",
            icon: 'info',
        })
    </script>

    @elseif (session('deleted'))
    <script type="text/javascript">
        swal.fire({
            title: 'Deleted',
            text: "{{ session('deleted') }}",
            icon: 'info',
        })
    </script>

    @elseif (session('exists'))
    <script type="text/javascript">
        swal.fire({
            title: 'Exists',
            text: "{{ session('exists') }}",
            icon: 'info',
        })
    </script>
@endif

