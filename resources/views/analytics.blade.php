<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Analytics - COOP</title>


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
            <a href="/carabao"><span class="material-symbols-rounded ">format_list_bulleted</span><p>Carabaos</p></a>
            <a href="/users"><span class="material-symbols-rounded ">group</span><p>Users</p></a>
            <a href="/analytics" class="active"><span class="material-symbols-rounded active-icon">pie_chart</span><p>Analytics</p></a>
            <a href="/notification"><span class="material-symbols-rounded">notifications</span><p>Notifications</p></a>
            <a href="#"><span class="material-symbols-rounded">settings</span><p>Settings</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">

        <!-- Head -->
        <div class="head">
            <h1>Analytics</h1>
            <div class="head-control">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="material-symbols-rounded">search</span>
                </div>
                <input id="date" type="date">
                <a><p>Edit</p><span class="material-symbols-rounded">edit</span></a>
            </div>
        </div>

        <!-- Content -->
        <div class="analytics">
            <div class="coop-summary">
                <div class="total-carabaos">
                    <img src="{{ asset('images/cow.png') }}" alt="" >
                    <div>
                        <p>Registered<br><span class="highlight">CARABAOS</span></p>
                        <h2>{{count($carabaos)}}</h2>
                    </div>
                </div>
    
                <div class="total-users">
                    <img src="{{ asset('images/user.png') }}" alt="" >
                    <div>
                        <p>Registered<br><span class="highlight">USERS</span></p>
                        <h2>{{count($users)}}</h2>
                    </div>
                </div>
    
                <div class="total-milk">
                    <img src="{{ asset('images/milk.png') }}" alt="">
                    <div>
                        <p>Produced<br><span class="highlight">MILK</span></p>
                        <h2>{{$milk}} <small>liters</small></h2> 
                    </div>

                </div>
            </div>
            

            <div class="insights">
                <div class="healthy">
                    <div class="middle">
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>70%</p>
                            </div>
                        </div>
                        <div class="right">
                            <h3>Healthy</h3>
                            <h2><span id="count-carabao">{{count($healthy)}}</span> Carabaos</h2>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>

                <div class="unhealthy">
                    <div class="middle">
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>10%</p>
                            </div>
                        </div>
                        <div class="right">
                            <h3>Unhealthy</h3>
                            <h2><span id="count-carabao">{{count($unhealthy)}}</span> Carabaos</h2>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>

                <div class="under-observation">
                    <div class="middle">
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>20%</p>
                            </div>
                        </div>
                        <div class="right">
                            <h3>Under Observation</h3>
                            <h2><span id="count-carabao">{{count($pregnant)}}</span> Carabaos</h2>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
            </div>
            <div class="linegraph">
                <canvas id="line-chart" height="450"></canvas>
            </div>
            <div class="bar-donut">
                <div class="bar"><canvas id="bar-chart" height="450"></canvas></div>
                <div class="donut"><canvas id="doughnut-chart" height="450"></canvas></canvas></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{ asset('js/mychart.js') }}"></script>


</body>
</html>