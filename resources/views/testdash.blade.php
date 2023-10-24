<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('backend/style2.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bxl-mailchimp'></i>
            <div class="logo-name"><span>Chimp</span>Pro</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="#"><i class='bx bx-group' ></i>Student Create</a></li>
            <li><a href="#"><i class='bx bxs-user-detail' ></i>Users Management</a></li>
            <!-- <li><a href="#"><i class='bx bx-cog bx-spin' ></i>Setting</a></li> -->
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out' ></i>
                    Logout
                </a>
            </li>
        </ul>

    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
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
                    <h1>Dashboard | Welcome,{{ Auth::user()->name }}</h1>
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
                        <h3>Soft Drink</h3>
                        <!-- <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i> -->
                        <a href="{{ route('food.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                    
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm float-end me-3" type="submit">Logout</button>
                        </form>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>food_menu</th>
                                <th>food_price</th>
                            </tr>
                        </thead>
                        <tbody>
                @if(!empty($data) && (is_array($data) || $data instanceof Countable) && count($data)>0)
                    @foreach ($softDrinkData as $row)
                        <tr>
                            <td>{{ $row->food_menu }}</td>
                            <td>{{ $row->food_price }}</td>
                            <td>
                                <form action="{{ route('food.destroy', $row->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('food.show', $row->id ) }}" class="btn btn-primary btn-sm m-2">View</a>
                                    <a href="{{ route('food.edit', $row->id ) }}" class="btn btn-warning btn-sm m-2">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  class="text-center">No Data Found</td>
                    </tr>
                @endif
                        </tbody>
                    </table>
                </div>   
            </div>


            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Lunch</h3>
                        <a href="{{ route('food.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                    
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm float-end me-3" type="submit">Logout</button>
                        </form>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>food_menu</th>
                                <th>food_price</th>
                            </tr>
                        </thead>
                        <tbody>
                @if(!empty($data) && (is_array($data) || $data instanceof Countable) && count($data)>0)
                    @foreach ($lunchData as $row)
                        <tr>
                            <td>{{ $row->food_menu }}</td>
                            <td>{{ $row->food_price }}</td>
                            <td>
                                <form action="{{ route('food.destroy', $row->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('food.show', $row->id ) }}" class="btn btn-primary btn-sm m-2">View</a>
                                    <a href="{{ route('food.edit', $row->id ) }}" class="btn btn-warning btn-sm m-2">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  class="text-center">No Data Found</td>
                    </tr>
                @endif
                        </tbody>
                    </table>
                </div>   
            </div>



        </main>

    </div>

    <script src="{{ url('backend/js/app2.js')}}"></script>
</body>
</html>