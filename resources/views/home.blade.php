
    @extends('layouts.app')
   
    @include('partials.achievement-section', ['achievements' => $achievements])
    @include('partials.MyTalentAndWorkForce', ['config' => $config])
    @include('partials.courseCarousel',['courses' => $courses])
    @include('partials.section', ['sections' => $sections])
    @include('partials.success',['success' => $success])
   

    @include('partials.footer', ['footerData' => $footerData])

   
