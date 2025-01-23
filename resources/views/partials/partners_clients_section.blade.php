<div class="partnershipAndClient" style="background-color: {{ $partnerData['background_color'] }}">
    <div class="container" style="background-color: {{ $partnerData['container']['background_color'] }}; border-radius: {{ $partnerData['container']['border_radius'] }}; height: {{ $partnerData['container']['height'] }}">
        <h1 class="heading1" style="text-align: {{ $partnerData['heading']['alignment'] }}; font-size: {{ $partnerData['heading']['font_size'] }}; color: {{ $partnerData['heading']['color'] }}; font-weight: {{ $partnerData['heading']['font_weight'] }}; padding: {{ $partnerData['heading']['padding'] }}; margin-bottom: {{ $partnerData['heading']['margin_bottom'] }}">
            {{ $partnerData['heading']['text'] }}
        </h1>
        <div class="customer-logos slider">
            @foreach ($partnerData['logos'] as $logo)
                <div class="slide">
                    <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.customer-logos');
        const slides = Array.from(slider.children);
        let currentIndex = 0;

        function showSlide(index) {
            const totalSlides = slides.length;
            if (index >= totalSlides) currentIndex = 0;
            else if (index < 0) currentIndex = totalSlides - 1;
            else currentIndex = index;
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

        let autoSlideInterval = setInterval(() => showSlide(currentIndex + 1), {{ $data['slider_settings']['autoplaySpeed'] ?? 3000 }});

        slider.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
        slider.addEventListener('mouseout', () => autoSlideInterval = setInterval(() => showSlide(currentIndex + 1), {{ $data['slider_settings']['autoplaySpeed'] ?? 3000 }}));

        showSlide(currentIndex);  
    });
</script>
