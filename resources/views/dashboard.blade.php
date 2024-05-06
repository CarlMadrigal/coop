<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/designStyle.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Dashboard - COOP</title>
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
            <a href="/" class="active"><span class="material-symbols-rounded active-icon">grid_view</span><p>Dashboard</p></a>
            <a href="/carabao"><span class="material-symbols-rounded ">format_list_bulleted</span><p>Carabaos</p></a>
            <a href="/users"><span class="material-symbols-rounded ">group</span><p>Users</p></a>
            <a href="/analytics"><span class="material-symbols-rounded">pie_chart</span><p>Analytics</p></a>
            <a href="/notification"><span class="material-symbols-rounded">notifications</span><p>Notifications</p></a>
            <a href=""><span class="material-symbols-rounded">settings</span><p>Settings</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">

        <!-- Head -->
        <div class="head">
            <h1>Dashboard</h1>
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
                        <p>Total Registered<br><span class="highlight">CARABAOS</span></p>
                        <h2>{{count($carabaos)}}</h2>
                    </div>
                </div>
    
                <div class="total-users">
                    <img src="{{ asset('images/user.png') }}" alt="" >
                    <div>
                        <p>Total Registered<br><span class="highlight">USERS</span></p>
                        <h2>{{count($users)}}</h2>
                    </div>
                </div>
    
                <div class="total-milk">
                    <img src="{{ asset('images/milk.png') }}" alt="">
                    <div>
                        <p>Total Produced<br><span class="highlight">MILK</span></p>
                        <h2>2232 <small>liters</small></h2> 
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
                            <h2><span id="count-carabao">5360</span> Carabaos</h2>
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
                            <h2><span id="count-carabao">600</span> Carabaos</h2>
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
                            <h2><span id="count-carabao">1200</span> Carabaos</h2>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
            </div>

            <div class="breed-gender">
                <div class="car-breed">
                    <h2>Carabao's Breed</h2>
                    <div class="box">
                        <div class="breeds"><img src="{{ asset('images/carabao-profile.png') }}" width="50px"><h3 value="Philippine">Philippine</h3><p>60%</p></div>
                        <div class="breeds"><img src="{{ asset('images/carabao-profile.png') }}" width="50px"><h3 value="Murrah">Murrah</h3><p>10%</p></div>
                        <div class="breeds"><img src="{{ asset('images/carabao-profile.png') }}" width="50px"><h3 value="Nelore">Nelore</h3><p>5%</p></div>
                        <div class="breeds"><img src="{{ asset('images/carabao-profile.png') }}" width="50px"><h3 value="Jafarabadi">Jafarabadi</h3><p>13%</p></div>
                        <div class="breeds"><img src="{{ asset('images/carabao-profile.png') }}" width="50px"><h3 value="Pandharpuri">Pandharpuri</h3><p>7%</p></div>
                    </div>
                </div>
                <div class="car-gender">
                    <h2>Carabao's Gender</h2>
                    <div class="box">
                        <div class="female"><img src="{{ asset('images/female-cow.png') }}" width="100px"><h3>Female</h3><p>60%</p></div>
                        <div class="male"><img src="{{ asset('images/male-cow.png') }}" width="100px"><h3>Male</h3><p>40%</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <aside>
        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="recUp-con">
                <div class="recUp">
                    <img src="{{ asset('images/user-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details">
                        <p><span id="up-name">Carl Madrigal</span> Lorem ipsum dolor sit amet.</p>
                        <small id="time">1 hour ago</small>
                    </div>
                </div>
                <div class="recUp">
                    <img src="{{ asset('images/user-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details">
                        <p><span id="up-name">Carl Madrigal</span> Lorem ipsum dolor sit amet.</p>
                        <small id="time">1 hour ago</small>
                    </div>
                </div>
                <div class="recUp">
                    <img src="{{ asset('images/user-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details">
                        <p><span id="up-name">Carl Madrigal</span> Lorem ipsum dolor sit amet.</p>
                        <small id="time">1 hour ago</small>
                    </div>
                </div>
                <div class="recUp">
                    <img src="{{ asset('images/user-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details">
                        <p><span id="up-name">Carl Madrigal</span> Lorem ipsum dolor sit amet.</p>
                        <small id="time">1 hour ago</small>
                    </div>
                </div>
                
                
            </div>
        </div>


        <div class="top-milk">
            <h2>Highest milk produced</h2>
            <div class="recUp-con">
                <div class="recUp top-carab">
                    <h1 id="rank">1</h1>
                    <img src="{{ asset('images/carabao-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details prod-milk-details">
                        <div class="name-id">
                            <p id="carabao-name">Carlabao</p>
                            <p id="carabao-id">#22B0933</p>
                        </div>
                        <div class="milk-quanti">
                            <span class="material-symbols-rounded">water_full</span>
                            <h4 id="milk-prod">60 L</h4>
                        </div>
                        
                    </div>
                </div>

                <div class="recUp top-carab">
                    <h1 id="rank">2</h1>
                    <img src="{{ asset('images/carabao-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details prod-milk-details">
                        <div class="name-id">
                            <p id="carabao-name">Carlabao</p>
                            <p id="carabao-id">#22B0933</p>
                        </div>
                        <div class="milk-quanti">
                            <span class="material-symbols-rounded">water_full</span>
                            <h4 id="milk-prod">58 L</h4>
                        </div>
                        
                    </div>
                </div>

                <div class="recUp top-carab">
                    <h1 id="rank">3</h1>
                    <img src="{{ asset('images/carabao-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details prod-milk-details">
                        <div class="name-id">
                            <p id="carabao-name">Carlabao</p>
                            <p id="carabao-id">#22B0933</p>
                        </div>
                        <div class="milk-quanti">
                            <span class="material-symbols-rounded">water_full</span>
                            <h4 id="milk-prod">57 L</h4>
                        </div>
                        
                    </div>
                </div>
                
                <div class="recUp top-carab">
                    <h1 id="rank">4</h1>
                    <img src="{{ asset('images/carabao-profile.png') }}" alt="" width="110px">
                    <div class="recUp-details prod-milk-details">
                        <div class="name-id">
                            <p id="carabao-name">Carlabao</p>
                            <p id="carabao-id">#22B0933</p>
                        </div>
                        <div class="milk-quanti">
                            <span class="material-symbols-rounded">water_full</span>
                            <h4 id="milk-prod">53 L</h4>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </aside>


</body>
</html>