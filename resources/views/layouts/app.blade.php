<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pentapolis</title>
    <!-- <title>@yield('title', config('app.name', 'Pentapolis'))</title> -->
    <link rel="icon" href="{{ asset('logo/PPF-LOGO.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
    <link rel="stylesheet" href="{{ mix('css/feature.css') }}">
    <link rel="stylesheet" href="{{ mix('css/capacity_building_section.css') }}">
    <script src="{{asset('js/capacityBuilding.js')}}"></script>
    <link rel="stylesheet" href="{{ mix('css/overview_section.css') }}">
    <link rel="stylesheet" href="{{ mix('css/donation_section.css') }}">
    <link rel="stylesheet" href="{{ mix('css/partners_and_clients.css') }}">
    <link rel="stylesheet" href="{{ mix('css/footer.css') }}">
    <link rel="stylesheet" href="{{ mix('css/achievement.css') }}">
    <link rel="stylesheet" href="{{ mix('css/goalSection.css') }}">
    <link rel="stylesheet" href="{{ mix('css/courses.css') }}">
    <link rel="stylesheet" href="{{ mix('css/myTalent.css') }}">
    <link rel="stylesheet" href="{{ mix('css/aboutUs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/success.css') }}">
    <link rel="stylesheet" href="{{ mix('css/help.css') }}">
    <link rel="stylesheet" href="{{ mix('css/community.css') }}">
    <link rel="stylesheet" href="{{ mix('css/service.css') }}">
    <link rel="stylesheet" href="{{ mix('css/privacy.css') }}">
    <link rel="stylesheet" href="{{ mix('css/contactUs.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
