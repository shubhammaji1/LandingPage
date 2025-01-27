<div class="global_courses">
<div class="container-fluid p-3 mb-5 courseContainer">
    <div class="d-flex align-items-center justify-content-center mb-4 position-relative">
        <button
            class="carousel-control-prev btn-custom position-absolute start-0"
            type="button"
            data-bs-target="#coursesCarousel"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <h2 class="text-center text-dark mx-3">Our Featured Courses</h2>
        <button
            class="carousel-control-next btn-custom position-absolute end-0"
            type="button"
            data-bs-target="#coursesCarousel"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="coursesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach(collect($courses)->chunk(3) as $index => $courseChunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row g-4 justify-content-center">
                        @foreach($courseChunk as $course)
                            <div class="col-md-4 col-sm-8">
                                <div class="card text-center">
                                    @if($course['badge'])
                                        <span class="badge-{{ strtolower($course['badge']) }}">{{ $course['badge'] }}</span>
                                    @endif
                                    <div class="card-body">
                                        <img src="{{ asset($course['image']) }}" class="card-img-top" alt="{{ $course['title'] }}" />
                                        <h5 class="card-title">{{ $course['title'] }}</h5>
                                        <p class="card-text">{{ $course['description'] }}</p>
                                        <a href="{{ $course['buttonLink'] }}" class="btn-enroll-now">{{ $course['buttonText'] }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
