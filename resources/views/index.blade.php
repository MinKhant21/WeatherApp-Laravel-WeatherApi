
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Weather App</title>
</head>
<body style="background-image: url('{{ asset('pexels-pixabay-209831.jpg') }}')">
    <div class="container">
       
        <h1>What's The Weather?</h1>
        
        <form action="/api/weather/" method="POST">
            @csrf
            <fieldset class="form-group">
                <label for="city">Enter the name of a city.</label>
                <input type="text" class="form-control" name="city"  placeholder="Eg. Yangon, Mandalay" value = "">
            </fieldset>
   
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
       
        <div class="container" id="result">
         
          <ul>
            <li><strong>City : {{ $city }}</strong></li>
            <br>
            <li><strong>Conditions : {{ $condition }}</strong></li>
           <br>
            <li><strong>Temperature : {{ $Celisus }} <span>&#8451;</span></strong></li>
          </ul>
        </div>
    </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

  </body>
</html>