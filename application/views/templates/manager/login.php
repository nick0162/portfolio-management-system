<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="description" content="Nick & Koen - PMS">
            <meta name="keywords" content="portfolio management raamsdonk raamsdonksveer ">
            <meta name="author" content="Nick & Koen">
            <meta name="viewport" content="width=device-width, user-scalable=no" />

            <title>Nick & Koen | PMS solutions</title>
            <link href="<?php echo base_url('public/resources/manager/css/style.css'); ?>" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
<body>

    <div class="msg-box bg-danger" id="error_box" style="width:350px;display:none;">
        
    </div>
    
    <div class="msg-box" style="width:350px;">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group">
                <input class="input-lg" id="password" type="password" name="password" placeholder="Password">
                <i class="fa fa-lock"></i>
            </div>
            <button class="btn btn-default" id="submit_login">Login</button>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo base_url('public/resources/manager/js/script.js'); ?>"></script>

<script>
$(document).ready(function(){
    
    var username = null;
    var password = null;
    
    $('#submit_login').click(function(){
        
        username = $('#username').val();
        password = $('#password').val();
        
        var post_data = {'username' : username, 'password': password};
        
        $.ajax({
            method: 'GET',
            url: "<?php echo base_url('admin/manage/checkLogin'); ?>",
            data : post_data,
            headers: {'content-type': 'application/json'},
            async: true,
            success: function(data){
               var response = JSON.parse(data);
               
                if(response.error === 1)
                {
                    $('#error_box').html(response.message);
                    $('#error_box').show();
                }
                else
                {
                    window.location ='<?php echo ($this->session->flashdata('redirect')) ? base_url($this->session->flashdata('redirect')) : base_url('admin/manage/'); ?>';      
                }
            },
            error : function(e){
                console.log(e);
                $('#error_box').html(e.responseText);
                $('#error_box').show();
            }
        });
    });
    
});

</script>

</body>
</html>