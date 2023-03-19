<!-- Vendor JS Files -->
<script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('template/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('template/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('template/assets/js/main.js') }}"></script>

{{-- Table --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            scrollX: true,
        });
    });
</script>