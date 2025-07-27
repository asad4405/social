<div class="col-lg-2 sidebar d-none d-lg-block">
    <div class="pt-3 pb-2 ps-4">
        <h4>{{ env('APP_NAME') }}</h4>
    </div>
    <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
    <a href="#"><i class="fas fa-search"></i> Search</a>
    <a href="#"><i class="fas fa-compass"></i> Explore</a>
    <a href="#"><i class="fas fa-clapperboard"></i> Reels</a>
    <a href="#"><i class="fas fa-envelope"></i> Messages</a>
    <a href="#"><i class="fas fa-heart"></i> Notifications</a>
    <a href="#"><i class="fas fa-plus-square"></i> Create</a>
    <a href="{{ route('user.profile',Auth::user()->unique_id) }}"><img src="https://via.placeholder.com/30" class="rounded-circle me-2" /> Profile</a>
    <a href="#"><i class="fas fa-at"></i> Threads</a>
    <a href="#"><i class="fas fa-bars"></i> More</a>
</div>
<div class="col-lg-1"></div>
