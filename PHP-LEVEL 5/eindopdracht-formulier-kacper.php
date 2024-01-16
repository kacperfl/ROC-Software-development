<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <style>
       
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .card-header {
            background-color: #28a745;
            padding: 10px;
            border-radius: 5px 5px 0px 0px;
            color: white
        }
        .card-body {
            padding: 10px;
            border-radius: 0px 0px 5px 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type=number],
        select {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=radio] {
            margin-right: 5px;
        }
        
       
        
        .alert {
            padding: 10px;
            background-color: #28a745;
            color: white;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<form method="POST" action="eindopdracht-resultaat-kacper.php">
    <main>
        <div class="container">
    
            <div class="card-header">
                <h4>Weg</h4>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="lengte">Lengte (in KM):</label>
                        <input type="number" class="form-control" id="lengte" placeholder="Voer het aantal KM in." name="lengte" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="vertragingDoorFile">Vertraging door file (in minuten):</label>
                        <input type="number" class="form-control" id="vertragingDoorFile" placeholder="Aantal minuten vertraging door file" name="vertragingDoorFile" value="" required>
                    </div>
                    <!-- <div class="alert">Weg</div> -->
                </form>
            </div>
        </div>

        
                <div class="kader">

  <div class="alert alert-success">Fiets</div>
  <div class="form-group">
    <label for="bandenspanningFiets">Bandenspanning (in %):</label>
    <input type="number" class="form-control" id="bandenspanningFiets" placeholder="Bandenspanning Fiets" name="bandenspanningFiets" value="" required>
  </div>

  <label class="checkbox-inline" style="margin-right: 20px;">
    <input type="radio" name="welNietElektrisch" value="15" style="opacity: 1;"  required> Niet Elektrisch (fietssnelheid = 15km/u)
  </label>
  <label class="radio-inline">
    <input type="radio" name="welNietElektrisch" value="25" style="opacity: 1;"  required> Elektrisch (fietssnelheid = 25km/u)
  </label>
</div>




<div class="form-group">
<div class="alert alert-success">Scooter</div>
        <label for="bandenspanningScooter">Bandenspanning (in %):</label>
        <input type="number" class="form-control" id="bandenspanningScooter" placeholder="Bandenspanning Scooter" name="bandenspanningScooter" value="" required>
    </div>
    <div class="form-group">
        
        <label for="maximaleSnelheidScooter">Snelheid:</label>
        <select class="form-control" id="maximaleSnelheidScooter" name="maximaleSnelheidScooter">
            <option value="25">25 KM/u (snorscooter)</option>
            <option value="45">45 KM/u (bromscooter)</option>
        </select>
        <br><br>
        <input  type="submit" value="Verstuur">
    </div>
    </div>
</div>

