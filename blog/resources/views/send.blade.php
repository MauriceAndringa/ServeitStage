<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notification Center - Send</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href='/css/style.css'>



        
    </head>
    <body style="background-color: #5b6161; font-family: Source Sans Pro, sans-serif">
        <section>
            <div class="col-md-12" style="background-color: #5b6161;">
                <br>
            </div>    
        </section>

        <section id="header">
              <div class="col-md-12" style="background-color:white; color: grey;">
              <div class="container">
                <div class="row">
                    <div class="col-sm-3 ">
                        <a href='/'><img src='/logo.png' width="150px" ></a>
                    </div>
                    <div class="col-sm-6" style="margin-top: 50px;" >
                    
                        <center><h1><i>Notification Center</i></h1></center>
                    </div>
                    <div class="col-sm-1" style="margin-top: 50px; ">
                        <h4>Admin</h4>
                        Uitloggen

                    </div>
                    <div class="col-sm-2" style="margin-top: 50px; ">
                        <img src='/pf.png'>
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
                    <div class="row">
                    <br><br>
                    <form class="form-horizontal" method="POST" action="/posts">

                        {{ csrf_field() }}

                        <div class="col-md-6">
                            <div class="form-group">
                                <h2>Notificatie</h2><br>
                                <label class="col-sm-2">Titel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Uw titel hier" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Inhoud</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="4" id="body" name="body" placeholder="Uw bericht hier" required></textarea>
                                    </div> 
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Opties</label>
                                    <div class="col-sm-10">
                                        <label class="switch"><input type="checkbox" id="opt_vibrate" name="opt_vibrate"><div class="slider round"></div></label>
                                        <label><h4>&nbsp;Trillen</h4></label>
                                    </div>
                                <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <label class="switch"><input type="checkbox" id="opt_sound" name="opt_sound"><div class="slider round"></div></label>
                                        <label><h4>&nbsp;Geluid</h4></label>
                                    </div>
                                <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <label class="switch"><input type="checkbox" id="opt_led" name="opt_led"><div class="slider round"></div></label>
                                        <label><h4>&nbsp;LED</h4></label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Custom Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="custom_link" name="custom_link" placeholder="link...">
                                    </div>
                        </div>
                    </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <h2>Gebruikers selecteren</h2><br>
                                <div class="col-sm-5">
                                        <label>Groepen:</label>
                                    </div>
                                <label class="col-sm-2">Zoeken...</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="searchvalue" name="searchvalue" placeholder="Zoeken...">
                                    </div>
                                    
                            </div>
                            <div class="form-group">
                                 <div class="col-sm-5">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="gr_invallers" id="gr_invallers">Invallers</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="gr_directeuren" id="gr_directeuren">Directeuren</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="gr_beheerders" id="gr_beheerders">Beheerders</label>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                        <select multiple="multiple" name="users[]">
                                            <option value="1">APA91bGrHkOwusVsXqpyDZKz0O2VL_OwYXjOj4uj88Q5nUNlST1JGCgUmfz-zJpMBK04QquP_C0jHoJyYUIvglxfJS7kvzbcMtzxBk2aHybYtRIF5nzr4_3pOnq-Lty8SyY-CgsLS86S</option>
                                            <option value="2">Naam van persoon</option>
                                            <option value="3">Naam van persoon</option>
                                            <option value="4">Naam van persoon</option>
                                            <option value="5">Naam van persoon</option>
                                        </select>

                                     <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
