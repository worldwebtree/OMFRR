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
            icon: 'success',
        })
    </script>

    @elseif (session('deleted'))
    <script type="text/javascript">
        swal.fire({
            title: 'Deleted',
            text: "{{ session('deleted') }}",
            icon: 'success',
        })
    </script>
@endif

