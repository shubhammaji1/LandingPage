const mix=require('laravel-mix');

mix.sass('resources/css/feature.scss', 'public/css')
    .sass('resources/css/aboutUs.scss', 'public/css')
    .sass('resources/css/achievement.scss', 'public/css')
    .sass('resources/css/contactUs.scss', 'public/css')
    .sass('resources/css/courses.scss', 'public/css')
    .sass('resources/css/myTalent.scss', 'public/css')
    .sass('resources/css/success.scss', 'public/css')
    .sass('resources/css/help.scss', 'public/css')
    .sass('resources/css/community.scss', 'public/css')
    .sass('resources/css/service.scss', 'public/css')
    .sass('resources/css/privacy.scss', 'public/css')
    .sass('resources/css/goalSection.scss', 'public/css')
    .sass('resources/css/navbar.scss', 'public/css')
    .sass('resources/css/overview_section.scss', 'public/css')
    .sass('resources/css/capacity_building_section.scss', 'public/css')
    .sass('resources/css/donation_section.scss', 'public/css')
    .sass('resources/css/partners_and_clients.scss', 'public/css')
    .sass('resources/css/footer.scss', 'public/css')
    .sass('resources/css/login.scss', 'public/css')

    .setPublicPath('public');