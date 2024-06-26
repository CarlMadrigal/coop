<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <title>Cooperative - PCC</title>
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
                <a id="backBtn"><span class="material-symbols-rounded">arrow_back</span></a>
            </div>
        </div>

        <!-- Content -->
        <div class="add-carabao">
            <div class="add-user-form">
                <form action="/carabao/register/process" method="POST">
                    @csrf
                    <input type="text" style="display:none" name="cooperative" value="{{Auth::user()->cooperative->id}}">
                    <h1>Fill up the form</h1>
                    <div class="basic-info-carabao">
                        <h3>Carabao's Info</h3>

                        <input type="text" placeholder="Carabao's name" name="name" value="{{old ('name') }}" required>
                    <div class="breed-weight">
                        <select id="breed" name="breed" value="{{old ('breed') }}" required placeholder>
                            <option disabled selected>Select breed</option>
                            <option value="Jafarabadi">Jafarabadi</option>
                            <option value="Murrah">Murrah</option>
                            <option value="Nelore">Nelore</option>
                            <option value="Pandharpuri">Pandharpuri</option>
                            <option value="Phippine Carabao">Phippine Carabao</option>
                        </select>

                        <input type="text" placeholder="Weight" name="weight" value="{{old ('weight') }}" required>
                    </div>
                     
                        <select id="owner" name="owner" required>
                            <option disabled selected>Select owner</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <button type="submit">Submit</button>
                </form>
                <img src="{{ asset('images/carabao.png') }}" alt="" >
            </div>

            
        </div>
    </div>


</body>
</html>