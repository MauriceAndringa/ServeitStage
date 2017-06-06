<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notification Center - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        
    </head>
    <body style="background-color: #5b6161; font-family: Source Sans Pro, sans-serif">
        <section>
            <div class="col-md-12" style="background-color: #5b6161;">
                <br>
            </div>    
        </section>

        <section id="header"> 
            <div class="col-md-12" style="background-color:white; color: grey; ">
                <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href='/'><img src='/logo.png' width="150px"></a>
                    </div>
                    <div class="col-sm-6" style="margin-top: 50px;">
                        <center><h1><i>Notification Center</i></h1></center>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                </div>
            </div>
            
        </section>

        <section>
            <div class="col-md-12" style="background-color:white;">
                <br><br>
            </div>    
        </section>

        <section>
            <div class="col-md-12" style="background-color:#ec8121; color:white;">
                <div class="container">
                    <br>
                        <center><h2>Inloggen</h2></center>
                    <br>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="inputEmail">E-mailadres</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            <label>
                            <input type="checkbox"> Bewaar inloggegevens
                            </label>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputPassword">Wachtwoord</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Wachtwoord">
                            <label class="pull-right"><u>Wachtwoord vergeten?</u></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <a href='../start'><button type="submit" class="btn btn-primary pull-right">Inloggen</button></a>
                        </div>
                    </div>
                </div>  

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label style="display: block;"">Inloggen als...</label>
                            <button type="submit" class="btn btn-primary" >Test Admin</button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <center><h1>Demo Invallers Online</h1>
                        Klik <a href="https://demo.invallersonline.nl">hier</a> om naar de demo omgeving van Invallers Online te gaan.</center>
                        <br><br>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="col-md-12" style="color:white; padding-top: 25px;">
                <div class="row">
                <p><center>&copy; 2017 Maurice Andringa, Kevin Geubels, Serve it V.O.F.</center></p>
                </div>
            </div>
        </section>

    </body>
</html>
