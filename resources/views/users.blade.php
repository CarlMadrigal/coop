<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Users - COOP</title>
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
            <h1>Users</h1>
            <div class="head-control">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="material-symbols-rounded">search</span>
                </div>
                <a href="/learning"><span class="material-symbols-rounded">book</span><p>Learning Materials</p></a>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="table-con">
                <div class="table-con-head">  
                    <h1 class="table-name">Total registered <br><span class="highlight">Users</span></h1>
                    <div class="table-head-cntrl">
                        <button><a href=""><span class="material-symbols-rounded"> instant_mix</span></a></button>
                    </div>
                </div>
              
                <div class="user-table-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Users</th>
                                <th>Name</th>
                                <th>User ID</th>
                                <th>Barangay</th>
                                <th>Owned Carabao(s)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td id="user-prof"><img src="{{ asset('images/user-profile.png') }}" alt="" width="50px"></td>
                                <td id="user-name">{{$user->name}}</td>
                                <td>#{{$user->id}}</td>
                                <td id="user-address">Balimbing Boac Marinduque</td>
                                <td id="owned-carabaos">{{count($user->carabaos)}}</td>
                                <td><p id="user-status">Active</p></td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>

            </div>
        </div>
    </div>


</body>
</html>