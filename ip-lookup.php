
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>IP Lookup</title>
</head>
<style>
    .header{
        background-color: #000b76;
        
    }
    .backimg{
        background-image: url('wave.svg');
        height: 70px;
    }
    #iplookupbtn{
        background-color: #000b76;
        color: #fff;
    }
</style>
<header>
    <div class="header text-white text-center pt-3 pb-3">
        <h4>IP Lookup</h4>
    </div>
    <div class="backimg"></div>
</header>
<body>

    <div class="container pt-5 pb-5">
       
        <div class="header-lookup form-group col-8 m-auto">
            <input type="text" name="" id="ipadd" class="form-control" placeholder="IP Address (eg: 127.0.0.1)">
        </div>
        <div class="header-lookup text-center form-group mt-4">
           <input type="button" value="Lookup" id="iplookupbtn" class="btn col-4">
        </div>
        <div class="mt-5 body-details">
        <?php
        //   echo json_encode(dns_get_record("examole.com", DNS_HINFO));
        ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="ipdetails">
                        <table class=" table table-resonsive table-bordered table-striped">
                           <tbody>
                            <tr>
                                <td><b>IP Address</b></td>
                                <td id="ipaddress"></td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td id="address"></td>
                            </tr>
                            <tr>
                                <td><b>Lat, Log  Location</b></td>
                                <td id="loc"></td>
                            </tr>
                            <tr>
                                <td><b>Network</b></td>
                                <td id="network"></td>
                            </tr>
                            <tr>
                                <td><b>Pin code</b></td>
                                <td id="pincode"></td>
                            </tr>
                            <tr>
                                <td><b>Time Zone</b></td>
                                <td id="timezone"></td>
                            </tr>
                           </tbody>

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center">
       
        <div class="own-details text-center">
            <?php
                $myip = $_SERVER["REMOTE_ADDR"];
                echo 'Your IP Address - '.$myip;
            ?>
        </div>
        <p><?php echo date('Y');?> &copy; arunpandiyan.in</p>
    </div>
   
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.min.js"></script>
</body>
</html>