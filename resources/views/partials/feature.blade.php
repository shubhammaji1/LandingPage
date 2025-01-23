<div id="{{ $featureSection['carousel']['id'] }}" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
    <div class="carousel-indicators">
        @foreach($featureSection['carousel']['indicators'] as $index => $indicator)
            <button 
                type="button" 
                data-bs-target="#{{ $featureSection['carousel']['id'] }}" 
                data-bs-slide-to="{{ $indicator['slideTo'] }}" 
                class="{{ $indicator['class'] ?? '' }}" 
                aria-label="{{ $indicator['ariaLabel'] }}" 
                @if(isset($indicator['class']) && $indicator['class'] === 'active') aria-current="true" @endif>
            </button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($featureSection['carousel']['slides'] as $index => $slide)
            <div class="carousel-item @if($index === 0) active @endif">
                <img src="{{ asset($slide['image']) }}" alt="{{ $slide['altText'] }}" class="d-block w-100" />
                <div class="pf-carousel-caption text-center">
                    <h1 class="animate__animated animate_slideInDown">{{ $slide['caption']['title'] }}</h1>
                    <h3 class="animate__animated animate_zoomIn">{{ $slide['caption']['subtitle'] }}</h3>
                    <button class="{{ $slide['caption']['button']['classes'] }} mt-3">{{ $slide['caption']['button']['text'] }}</button>
                </div>
            </div>
        @endforeach
    </div>
    <button 
        class="carousel-control-prev" 
        type="button" 
        data-bs-target="#{{ $featureSection['carousel']['id'] }}" 
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ $featureSection['carousel']['controls']['prev']['label'] }}</span>
    </button>
    <button 
        class="carousel-control-next" 
        type="button" 
        data-bs-target="#{{ $featureSection['carousel']['id'] }}" 
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ $featureSection['carousel']['controls']['next']['label'] }}</span>
    </button>
</div>
