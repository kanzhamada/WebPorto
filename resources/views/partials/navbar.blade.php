<link rel="stylesheet" href="../css/navbar.css">

<header>
    <div class="nav-bar">
        <a href="../" class="logo">Kanz</a>
        <div class="navigation">
            <div class="nav-items">
                @auth
                <form action="/logout" method="POST">
                    @csrf
                <a href="../#home">Home</a>
                <a href="../#project">Project</a>
                <a href="../#about">About</a>
                {{-- @auth --}}
                
                    
                <a href=""><button style="background-color: transparent;
                    border: none;/* Adjust font size as needed */
                    cursor: pointer; color: white; font-size: 0.9em;
                font-weight: 500;">Logout</button></a>
                </form>
                @else
                <a href="../#home">Home</a>
                <a href="../#project">Project</a>
                <a href="../#about">About</a>
                <a href="/login">Login</a>
                @endauth
                
            </div>
        </div>
    </div>
</header>