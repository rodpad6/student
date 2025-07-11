<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg">
            <rect width="100%" height="100%" fill="#6c757d" />
            <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle">Student Photo</text>
        </svg>
        <div class="card-body">
            <h5 class="card-title">{{ $studentName }}</h5>
            <p class="card-text">{{ $courseYear }}</p>
            {{ $slot }}

        </div>
    </div>
</div>
