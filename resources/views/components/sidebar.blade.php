<x-head />

<head>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="mainbody">
        <div class="close slider ">
            <div class="profile">
                <div class="profileText">
                    <p class="text maintext">{{ auth()->user()->name }}</p>
                </div>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class="links">
                <div class="dashboard childs">
                    <i class="fa-solid fa-house icons"></i>
                    <p class="text">Dashboard</p>
                </div>
                </a>
                <div class="notifications childs">
                    <i class="fa-solid fa-hotel icons"></i>
                    <p class="text">Rooms</p>
                </div>
                <div class="messages childs">
                    <i class="fa-solid fa-bell icons"></i>
                    <p class="text">meal</p>
                </div>
                <div class="heart childs">
                    <i class="fa-solid fa-bus icons"></i>
                    <p class="text">tours</p>
                </div>
                <hr>
                <div class="logout childs">
                    <i class="fa-solid fa-right-from-bracket icons"></i>
                    <p class="text">Log Out</p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/sidebar.js') }}"></script>
