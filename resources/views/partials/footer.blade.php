<div class="global_footer">
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Social Media Section -->
    <section class="d-flex justify-content-between p-1" style="background-color: rgb(244, 241, 39)">
        <div class="me-5 mt-2 text-black fw-bold">
            <h4>Connect with us on Social Networks:</h4>
        </div>
        <div>
            @foreach ($footerData['social_links'] as $link)
                <a href="{{ $link['url'] }}" class="text-dark icon-spacing" target="_blank">
                    <i class="{{ $link['icon'] }}"></i>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Useful Links Section -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Useful Links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #cdff4d; height: 2px" />
                    @foreach ($footerData['useful_links'] as $link)
                        <p>
                            <a href="{{ $link['url'] }}" class="text-white link-underline-dark">{{ $link['text'] }}</a>
                        </p>
                    @endforeach
                </div>
                <!-- Contact Section -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 contact">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> {{ $footerData['contact']['address'] }}</p>
                    <p><i class="fas fa-envelope me-3"></i> {{ $footerData['contact']['email'] }}</p>
                    <p><i class="fas fa-phone me-3"></i> {{ $footerData['contact']['phone'] }}</p>
                    <p><i class="fas fa-print me-3"></i> {{ $footerData['contact']['fax'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright Section -->
    <div class="text-center p-3" style="background-color: rgb(244, 241, 39)">
        <a class="ft-copyright text-black">{{ $footerData['copyright'] }}</a>
    </div>
</footer>
</div>
