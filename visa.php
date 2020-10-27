<?php
    include 'include/header.php';
?>
<div class="banner-wrap">
    <div class="col-md-12 visa-panel">
        <div class="col-md-8 visa-panel-left">

        </div>
        <div class="col-md-4 visa-panel-right">
            <form action="" method="POST" role="form" class="visaForm">
                <legend>Get Visa Assistance Now</legend>

                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Country of Residence</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Destination Country</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label>Departing Date</label>
                    <input class="date has Datepicker form-control" id="datepicker" name="startDate" type="text" value="Start Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/01/2019';}" required>
                </div>
                <div class="form-group ">
                    <label>Returning Date</label>
                    <input class="date has Datepicker form-control" id="datepicker1" name="startDate" type="text" value="Start Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/12/2019';}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>
