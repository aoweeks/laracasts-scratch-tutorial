    @if(Session::has('flash_message'))
        <div class="Alert Alert--{{Session::get('flash_message_level') }}">
            {{ Session::get('flash_message') }}
        </div>
    @endif