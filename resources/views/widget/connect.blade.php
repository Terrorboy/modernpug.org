
<!-- Widget Area -->
<div class="sidebar-widget-area">
    <h5 class="title">Connect</h5>
    <div class="widget-content">
        <div class="social-area d-flex justify-content-around">
            @if(config('modernpug.facebook'))
                <a href="{{ config('modernpug.facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
            @endif
            @if(config('modernpug.discord'))
                <a href="{{ config('modernpug.discord') }}" target="_blank"><i class="fab fa-discord"></i></a>
            @endif
            @if(config('modernpug.github_repo'))
                <a href="{{ config('modernpug.github_repo') }}" target="_blank"><i class="fa fa-github"></i></a>
            @endif
            @if(config('modernpug.blog'))
                <a href="{{ config('modernpug.blog') }}" target="_blank"><i class="fa fa-blog"></i></a>
            @endif
            @if(config('modernpug.youtube'))
                <a href="{{ config('modernpug.youtube') }}" target="_blank"><i class="fa fa-youtube"></i></a>
            @endif
        </div>
    </div>
</div>
