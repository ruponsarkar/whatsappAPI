<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Assignment</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">WhatsApp messaging API</h2>
                </div>
                <div class="card-body">
                
                    <form action="api/saveData" method="POST">
                        @csrf                        
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <!-- <input class="input--style-5" type="text" name="message"> -->
                                    <textarea class="input--style-5" name="message" id="" cols="45" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
               
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" value="91" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Want to save in Database?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" value="yes" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="no" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <button class="btn btn--radius-2 btn--green btn--block" onclick="window.location.href='allList';" type="submit">Check All Message</button>
            </div>
        </div>
    </div>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->