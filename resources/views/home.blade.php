
    @extends('layouts.app')
   
    @include('partials.header', ['header' => $header])
    @include('partials.feature', ['featureSection' => $featureSection])
    @include('partials.capacity_building_section', ['capacityBuildingData' => $capacityBuildingData])
    @include('partials.overview_section', ['overviewData' => $overviewData])
    @include('partials.partners_clients_section', ['partnerData' => $partnerData])
    @include('partials.achievement-section', ['achievements' => $achievements])
    @include('partials.MyTalentAndWorkForce', ['config' => $config])
    @include('partials.courseCarousel',['courses' => $courses])
    @include('partials.section', ['sections' => $sections])
    @include('partials.success',['success' => $success])
    @include('partials.donation_section', ['donationData' => $donationData])
    @include('partials.footer', ['footerData' => $footerData])


    
