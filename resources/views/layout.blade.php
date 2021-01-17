<!DOCTYPE html>
<html>
<title>Martin's website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>
<div class="w3-collapse">
    <div style="" class="w3-bar w3-red w3-wide w3-padding w3-card">
        <a href="{{url('/')}}" class="w3-bar-item w3-button"><b>✪Apple</b></a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="{{url('/index')}}" class="w3-bar-item w3-button">All IPhones</a>
            <a href="{{url('/show')}}" class="w3-bar-item w3-button">YourPhones</a>
            <a href="{{url('/search')}}" class="w3-bar-item w3-button">Search</a>
            <a href="{{url('/contact')}}" class="w3-bar-item w3-button">Contact☏</a>
        </div>
    </div>
</div>

@yield('content')

</body>

<footer class="w3-center w3-black w3-padding-16">
    <p>Created by <a href="https://www.facebook.com/" title="Kalonkin" target="_blank" class="w3-hover-text-green">Martin Kalonkin</a></p>
</footer>


</html>

