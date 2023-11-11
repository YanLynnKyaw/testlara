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
            
                <!-- <div class="food_menu">
                    @foreach ($softDrinkData as $record)
                    <h4>
                        {{ $record->category }}
                    </h4>
                    @endforeach
                    <ul>
                        @foreach($softDrinkData as $record)
                            <li>{{ $record->food_menu }}</li>
                        @endforeach
                    </ul>
                </div> -->
                <div class="food_menu">
                    @php $firstCategory = true @endphp
                    @foreach ($softDrinkData as $record)
                        @if ($firstCategory)
                            <h4>{{ $record->category }}</h4>
                            <ul>
                            @php $firstCategory = false @endphp
                        @endif
                        <li>{{ $record->food_menu }}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        @foreach($softDrinkData as $record)
                            <li>{{ $record->food_price }}</li>
                        @endforeach
                    </ul>
                </div>
               
                
                <!-- <div class="food_menu">
                    <h4>Lunch</h4>
                    <ul>
                        @foreach($lunchData as $record)
                            <li>{{ $record->food_menu }}</li>
                        @endforeach
                        <li>Fried Rice</li>
                        <li>Kyay Ohh</li>
                        <li>Pashue Fried Rice</li>
                    </ul>
                </div> -->
                <div class="food_menu">
                    @php $firstCategory = true @endphp
                    @foreach ($lunchData as $record)
                        @if ($firstCategory)
                            <h4>{{ $record->category }}</h4>
                            <ul>
                            @php $firstCategory = false @endphp
                        @endif
                        <li>{{ $record->food_menu }}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        @foreach($lunchData as $record)
                            <li>{{ $record->food_price }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <!-- <div class="food_menu">
                    <h4>Break Fast</h4>
                    <ul>
                        @foreach($breakfastData as $record)
                            <li>{{ $record->food_menu }}</li>
                        @endforeach
                        <li>Ice Tea</li>
                    </ul>
                </div> -->
                <div class="food_menu">
                    @php $firstCategory = true @endphp
                    @foreach ($breakfastData as $record)
                        @if ($firstCategory)
                            <h4>{{ $record->category }}</h4>
                            <ul>
                            @php $firstCategory = false @endphp
                        @endif
                        <li>{{ $record->food_menu }}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="food_price">
                    <h4>Price</h4>
                    <ul>
                        @foreach($breakfastData as $record)
                            <li>{{ $record->food_price }}</li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- <div class="food_menu">
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
                </div> -->
            </div>
        </div>
        
    </div>
    
    
    <footer>
        <span class="foot">KBTC All Right Reserve 2023.</span>
    </footer>
</body>
</html>