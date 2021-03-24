<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once '../conn/dbconnect.php'; ?>
<html>

    <head>
        <meta charset="UTF-8">
        <!-- development version, includes helpful console warnings -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Akomplice</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4">Welcome... <?php echo $current_user; ?></h1>
                    <p>Please use this form to add a contact</p>
                    <hr>
                </div>
            </div>

            <form class="row g-3 shadow-lg rounded">
                <!-- name section -->
                <div class="col-md-6">
                    <label for="contact_firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="contact_firstName">
                </div>
                <div class="col-md-6">
                    <label for="contact_lastName" class="form-label">Last Name</label>
                    <input type="password" class="form-control" id="contact_lastName">
                </div>
                <!-- ======================= -->


                <!-- contact methods -->
                <div class="col-md-6">
                    <label for="contact_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="contact_email">
                </div>
                <div class="col-md-6">
                    <label for="contact_password" class="form-label">Password</label>
                    <input type="tel" class="form-control" id="contact_password">
                </div>
                <!-- ======================= -->


                <div class="col-12">
                    <label for="contact_address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="contact_address" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="contact_address2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="contact_address2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="contact_city" class="form-label">City</label>
                    <input type="text" class="form-control" id="contact_city">
                </div>
                <div class="col-md-4">
                    <label for="contact_state" class="form-label">State</label>
                    <select id="contact_state" class="form-select">
                        <option selected>Choose...</option>
                        <option value="AK">Alaska</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="AZ">Arizona</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DC">District of Columbia</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="IA">Iowa</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MD">Maryland</option>
                        <option value="ME">Maine</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MO">Missouri</option>
                        <option value="MS">Mississippi</option>
                        <option value="MT">Montana</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="NE">Nebraska</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NV">Nevada</option>
                        <option value="NY">New York</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VA">Virginia</option>
                        <option value="VT">Vermont</option>
                        <option value="WA">Washington</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WV">West Virginia</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="contact_zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="contact_zip">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
</body>

</html>