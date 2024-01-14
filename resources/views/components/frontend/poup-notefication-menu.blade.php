@if ($messages > 0 || $notefications > 0)
    <nav class="menu">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" checked id="menu-open" />
        <label class="menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
        </label>

        @if ($notefications > 0)
            <a href="{{ route('frontend.notefications.index') }}" class="menu-item d-flex justify-content-center blue text-decoration-none">
                <span style="font-size: 15px">{{ $notefications }}</span>
                <i class="mdi mdi-bell-outline"></i>
            </a>
        @endif

        @if ($messages)
            <a href="{{  route('frontend.message-notefications.index') }}" class="menu-item d-flex justify-content-center green text-decoration-none">
                <span style="font-size: 15px">{{ $messages }}</span>
                <i class="mdi mdi-email-outline mx-1"></i>
            </a>
        @endif

        {{-- <a href="#" class="menu-item red"> <i class="fa fa-heart"></i> </a>
        <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> </a>
        <a href="#" class="menu-item orange"> <i class="fa fa-star"></i> </a>
        <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i> </a> --}}
    </nav>
@endif
