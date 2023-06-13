<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('script')
@yield('script-bottom')

@if (session()->has('notify.message'))
    @notifyJs
@endif
