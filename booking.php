<!DOCTYPE html>
<html>
    <title>
        Booking - Yeran Electronics
    </title>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Music Festival</title>
    <link rel="stylesheet" href="styles.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    </head>
    <body>
        <div id="div1">
            <p align="center" class="h1r"><b>Yeran Electronics</b></p>
        </div>
        <div id="div2">
            <ul align="center">
                <li><a href="blank.pdf" class="h7">Track your package</a></li>
                <li><a href="yt.pdf" class="h2">Youtube</a></li>
                <li><a href="wapp.pdf" class="h2">WhatsApp</a></li>
            </ul> 
        </div>
        <div id="div7">
            <ul>
                <li><a href="index.html" class="h8"><b>HOME</b></a></li>
                <li><a href="services.html" class="h8"><b>SERVICES</b></a></li>
                <li><a href="faq.html" class="h8"><b>FAQ</b></a></li>
                <li><a href="about.html" class="h8"><b>ABOUT</b></a></li>
            </ul>
        </div>
    </body>
    <div class="row" id="div16">
        <div class="col-6">
            <div class="row">
                <form class="card p-2" method="post">
                    <div class="col-sm-6">
                        <label for="wname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="wname" placeholder="Enter name" value="" required>
                        <div class="invalid-feedback">
                            Name is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="waddr" class="form-label">Address</label>
                        <input type="text" class="form-control" id="waddr" placeholder="Enter address" value="" required>
                        <div class="invalid-feedback">
                            Address is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="wmail" class="form-label">Email</label>
                        <input type="mail" class="form-control" id="wmail" placeholder="Enter email address" value="" required>
                        <div class="invalid-feedback">
                            Email is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="wtel" class="form-label">Telephone no.</label>
                        <input type="tel" class="form-control" id="wtel" placeholder="Enter telephone no." value="" minlength=10 required>
                        <div class="invalid-feedback">
                            Telephone no. is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="wdev" class="form-label">Device type</label>
                        <input type="text" class="form-control" id="wdev" placeholder="Enter device type" value="" required>
                        <div class="invalid-feedback">
                            Device type is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="wfault" class="form-label">Fault description</label>
                        <input type="text" class="form-control" id="wfault" placeholder="Brief description about the fault" value="" required>
                        <div class="invalid-feedback">
                            Fault description is required.
                        </div>
                    </div>
                    <br>
                    <center><button class="w-25 btn btn-primary btn-lg" type="button" onclick="find()">Submit</button></center>
                </form>
            </div>
        </div>
        <div class="col-6">


    </div>
    <div id="div10">
        <br>
        <p align="center" class="h1"><b>Yeran Electronics</b></p>
        <p class="h6">NEWSLETTER</p>
        <form method=post align="center" action="home.html">
            <input type="text" size="20"
            maxlength="45">
            <input type="Submit" value="Submit">
            </form>
    </div>
    <div id="div9">
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
           
        });

        function find(){
            var vals = $("input").map(function(){return $(this).val();}).get()
            alert(vals);
            $.ajax({
                type:'post',
                data:{dts:vals},
                url:'import.php',
                success:function (json){ $("#bdata").html(json)   }
            });
        }
    </script>
</html>