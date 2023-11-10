<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Bootstrap Form Tutorial</title>
</head>

<body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
        <img src="https://i.ibb.co/8cDgdFX/Logo.png" alt="network-logo" width="72" height="72" />
        <h2>Meeting Room Booking Form</h2>
        <p>
            Below is an example form built entirely with Bootstrap's form controls.
        </p>
    </div>
    <!-- End Header form -->

    <!-- Start Card -->
    <div class="card">
        <!-- Start Card Body -->
        <div class="card-body">
            <!-- Start Form -->
            <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">
                <!-- Start Input Name -->
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Your name"
                        required />
                    <small class="form-text text-muted">Please fill your name</small>
                </div>
                <!-- End Input Name -->

                <!-- Start Input Email -->
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!-- End Input Email -->

                <!-- Start Input Telephone -->
                <div class="form-group">
                    <label for="inputPhone">Phone</label>
                    <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="099xxxxxxx"
                        pattern="\d{3}\d{3}\d{4}" required />
                    <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                </div>
                
                <div class="form-row">
                    <!-- Start Input Date -->
                    <div class="form-group col-md-4">
                        <label for="inputDate">Date start</label>
                        <input type="date" class="form-control" id="inputDate" name="date" required />
                        <small class="form-text text-muted">Please choose date and time for meeting.</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputDate">Date end</label>
                        <input type="date" class="form-control" id="inputDate" name="date" required />
                        <small class="form-text text-muted">Please choose date and time for meeting.</small>
                    </div>
                    
                </div>
                

                <div class="form-group">
                    <legend class="col-form-label pt-0">Choose a Room</legend>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType"
                            value="type1" required />
                        <label class="form-check-label" for="inlineRadioType1">Room 1 (10 People)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType"
                            value="type2" required />
                        <label class="form-check-label" for="inlineRadioType2">Room 2 (20 People)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType3" name="roomType"
                            value="type3" required />
                        <label class="form-check-label" for="inlineRadioType3">Room 3 (30 People)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType4" name="roomType"
                            value="type4" required />
                        <label class="form-check-label" for="inlineRadioType4">Room 4 (40 People)</label>
                    </div>
                </div>
                <!-- End Check Room Type -->

                <hr />


                <!-- Start Submit Button -->
                <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
                <!-- End Submit Button -->
            </form>
            <!-- End Form -->
        </div>
        <!-- End Card Body -->
    </div>
    <!-- End Card -->
    <footer>
        <div class="my-4 text-muted text-center">
            <p>© My Company</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>



</body>

</html>