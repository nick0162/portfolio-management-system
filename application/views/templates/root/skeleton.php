
<html>
    
    <head>
        <title>PMS<?php if(isset($title)){ echo ' - '.$title; } ?> </title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/resources/root/css/bootstrap.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/resources/root/css/table.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/resources/root/css/style.css'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="<?php echo base_url('public/resources/root/js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/resources/root/js/bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/resources/root/js/dataTables.js'); ?>"></script>
        
    </head>

    <body>
        <?php if($view === 'login'){ $this->load->view('templates/'.$template.'/pages/'.$view, $data);exit; } ?>
        <?php $this->load->view('templates/'.$template.'/template/nav', $data);  ?>
        
        <div class="container-fluid">
            <div class="row">
                
                <?php $this->load->view('templates/'.$template.'/template/sidebar'); ?>
                
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <?php if(isset($message)){ ?>
                        <div class="alert alert-<?php echo $message['class'] ?>" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <?php echo $message['message']; ?>
                        </div>
                    <?php } ?>

                    <?php $this->load->view('templates/'.$template.'/pages/'.$view, $data);  ?>

                </div>
            </div>
        </div>
    </body>
</html>
