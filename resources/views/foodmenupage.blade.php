<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('backend/style3.css') }}">
    <title>Document</title>
</head>
<body>
    <nav>
        <span class="navbar"><h1>Food Menu</h1></span>
        <span class="navbar_sec"><h2>School Of IT</h2></span>
    </nav>
    
    <div class="content">
            
        <div class="container">
            <div class="row">
            
                <div class="food_menu">
                    <h4>Soft Drink</h4>
                    <ul>
                        @foreach($softDrinkData as $record)
                            <li>{{ $record->food_menu }}</li>
                        @endforeach
                    </ul>
                    <!-- <ul>
                        @if(isset($newMenuItem) && $newMenuItem !== null)
                        <li>{{ $newMenuItem->food_menu }}</li>
                        @else
                        <li>Default Menu Item</li>
                        @endif
                        <li>Ice Tea</li>
                    </ul>  -->
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        @foreach($softDrinkData as $record)
                            <li>{{ $record->food_price }}</li>
                        @endforeach
                    </ul>
                    <!-- <ul>
                        @if(isset($newMenuItem) && $newMenuItem !== null)
                        <li>{{ $newMenuItem->food_price }}</li>
                        @else
                        <li>500 KS</li>
                        @endif
                        <li>800 KS</li>
                    </ul> -->
                </div>
               
                
                <div class="food_menu">
                    <h4>Lunch</h4>
                    <ul>
                        @foreach($lunchData as $record)
                            <li>{{ $record->food_menu }}</li>
                        @endforeach
                        <li>Fried Rice</li>
                        <li>Kyay Ohh</li>
                        <li>Pashue Fried Rice</li>
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        @foreach($lunchData as $record)
                            <li>{{ $record->food_price }}</li>
                        @endforeach
                        <li>2000 KS</li>
                        <li>3000 KS</li>
                        <li>2000 KS</li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <div class="food_menu">
                    <h4>Soft Drink</h4>
                    <ul>
                        <li>Ice Coffee</li>
                        <li>Coffee</li>
                        <li>Milk</li>
                        <li>Ice Tea</li>
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        <li>1000 KS</li>
                        <li>800 KS</li>
                        <li>1000 KS</li>
                        <li>800 KS</li>
                    </ul>
                </div>
                
                <div class="food_menu">
                    <h4>Lunch</h4>
                    <ul>
                        <li>Shan Noodle</li>
                        <li>Fried Rice</li>
                        <li>Kyay Ohh</li>
                        <li>Pashue Fried Rice</li>
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        <li>3000 KS</li>
                        <li>2000 KS</li>
                        <li>3000 KS</li>
                        <li>2000 KS</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    
    <footer>
        <span class="foot">KBTC All Right Reserve 2023.</span>
    </footer>
</body>
</html>