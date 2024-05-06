<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Learning Materials - COOP</title>
</head>
<body>
    <!-- Navigational Bar -->
    <div class="sidebar">
        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('images/logo-sidebar.png') }}" class="logo">
        </a>

        <!-- User Profile -->
        <div class="user">
            <img class="profile-pic" src="{{ asset('images/profile.jpg') }}" alt="">
            <h2 id="name">{{auth()->user()->name}}</h2>
        </div>

        <!-- Controls -->
        <div class="controls">
            <a href="/"><span class="material-symbols-rounded">grid_view</span><p>Dashboard</p></a>
            <a href="/carabao"><span class="material-symbols-rounded">format_list_bulleted</span><p>Carabaos</p></a>
            <a href="/users" class="active"><span class="material-symbols-rounded active-icon">group</span><p>Users</p></a>
            <a href="/analytics"><span class="material-symbols-rounded">pie_chart</span><p>Analytics</p></a>
            <a href="/notification"><span class="material-symbols-rounded">notifications</span><p>Notifications</p></a>
            <a href="#"><span class="material-symbols-rounded">settings</span><p>Settings</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">

        <!-- Head -->
        <div class="head">
            <h1>Learning Materials</h1>
            <div class="head-control">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="material-symbols-rounded">search</span>
                </div>
                <a><span class="material-symbols-rounded">Upload</span><p>Upload</p></a>
                <a href="/users" id="backBtn"><span class="material-symbols-rounded">arrow_back</span></a>
            </div>
        </div>

        <!-- Content -->
        <div class="mats-content">
            <a href="#" class="mats-con">
                <img src="{{ asset('images/file.png') }}" alt="" width="400px">
                <h2>Files</h2>
            </a>

            <a href="#" class="mats-con">
                <img src="{{ asset('images/video.png') }}" alt="" width="400px">
                <h2>Videos</h2>
            </a>

            <a href="#" class="mats-con">
                <img src="{{ asset('images/link.png') }}" alt="" width="400px">
                <h2>Links</h2>
            </a>

            <a href="#" class="mats-con">
                <img src="{{ asset('images/e-book.png') }}" alt="" width="400px">
                <h2>E-Books</h2>
            </a>
        </div>
    </div>


</body>
</html>