<!-- @foreach ($users as $user)
    <p>{{ $user->name }} - {{ $user->email }}
        <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('backend/style2.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    
    <div class="sidebar">
        <a href="{{ route('dashboard') }}" class="logo">
            <i class='bx bxl-mailchimp'></i>
            <div class="logo-name"><span>Chimp</span>Pro</div>
        </a>
        <ul class="side-menu">
            <li><a href="{{ route('dashboard') }}" data-menu="dashboard" class="{{ Request::is('dashboard*') ? 'active' : '' }}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <!-- <li><a href="#"><i class='bx bx-group' ></i>Student Create</a></li> -->
            <li><a href="{{ route ('users.index')}}" data-menu="users-management" class="{{ Request::is('users*') ? 'active' : '' }}"><i class='bx bxs-user-detail' ></i>Users Management</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li class="de">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="logout" type="submit"> <i class='bx bx-log-out' ></i>Logout</button>
            </form>  
            </li>
        </ul>

    </div>
    <div class="content">
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <!-- <img src="images/logo.png"> -->
                <h4>{{ Auth::user()->name }}</h4>
            </a>
        </nav>



        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard | Welcome {{ Auth::user()->name }}</h1>
                </div>
                <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a>
            </div>
        
            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Users</h3>
                        <a href="{{ route('users.create') }}" class="newbtn2">Add New User</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th><h2>User Name</h2></th>
                                <th><h2>User Mail</h2></th>
                                <th><h2>Action</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        @if(auth()->user()->can('ed_de'))
                                            <button type="submit">Delete</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
        </main>

    </div>
    <script src="{{ url('backend/js/app2.js')}}"></script>
</body>
</html>