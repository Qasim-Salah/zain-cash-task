@if (session()->has('notify.message'))
    <div data-notify data-notify-text="{{ session()->get('notify.message') }}"
         data-notify-type="{{ session()->get('notify.type') }}"></div>
@endif
