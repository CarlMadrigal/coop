<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Carabao - COOP</title>
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
            <a href="/carabao" class="active"><span class="material-symbols-rounded active-icon">format_list_bulleted</span><p>Carabaos</p></a>
            <a href="/users"><span class="material-symbols-rounded ">group</span><p>Users</p></a>
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
            <h1>Carabaos</h1>
            <div class="head-control">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="material-symbols-rounded">search</span>
                </div>
                <a><span class="material-symbols-rounded">pets</span><p>Vet</p></a>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="table-con">
                <div class="table-con-head">  
                    <h1 class="table-name">Total registered <br><span class="highlight">Carabaos</span></h1>
                    <div class="table-head-cntrl">
                        <button><a href="/carabao/register"><span class="material-symbols-rounded">add</span><p>Carabao</p></a></button>
                        <button><a href=""><span class="material-symbols-rounded"> instant_mix</span></a></button>
                    </div>
                </div>
              
                <div class="table-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Carabao</th>
                                <th>Name</th>
                                <th>Carabao ID</th>
                                <th>Owner</th>
                                <th>Produced Milk</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carabaos as $carabao)
                            <tr>
                                <td id="carabao-prof"><img src="../images/carabao-profile.png" alt="" width="50px"></td>
                                <td id="carabao-name">{{$carabao->name}}</td>
                                <td id="carabao-id">#{{$carabao->id}}</td>
                                <td id="owner">{{$carabao->user->name}}</td>
                                <td id="milk-prod">100 L</td>
                                <td><p id="status">Healthy</p></td>
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