<?php 
ob_start();
session_start();
include 'connection1.php';



?>
<html>
    <title>Distributor|Home</title><head>         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>*{margin: 0;padding: 0}body{overflow-x: hidden;background: #000000}#bg-div{margin: 0;margin-top:100px;margin-bottom:100px}#border-btm{padding-bottom: 20px;margin-bottom: 0px;box-shadow: 0px 35px 2px -35px lightgray}#test{margin-top: 0px;margin-bottom: 40px;border: 1px solid #FFE082;border-radius: 0.25rem;width: 60px;height: 30px;background-color: #FFECB3}.active1{color: #00C853 !important;font-weight: bold}.bar4{width: 35px;height: 5px;background-color: #ffffff;margin: 6px 0}.list-group .tabs{color: #000000}#menu-toggle{height: 50px}#new-label{padding: 2px;font-size: 10px;font-weight: bold;background-color: red;color: #ffffff;border-radius: 5px;margin-left: 5px}#sidebar-wrapper{min-height: 100vh;margin-left: -15rem;-webkit-transition: margin .25s ease-out;-moz-transition: margin .25s ease-out;-o-transition: margin .25s ease-out;transition: margin .25s ease-out}#sidebar-wrapper .sidebar-heading{padding: 0.875rem 1.25rem;font-size: 1.2rem}#sidebar-wrapper .list-group{width: 15rem}#page-content-wrapper{min-width: 100vw;padding-left: 20px;padding-right: 20px}#wrapper.toggled #sidebar-wrapper{margin-left: 0}.list-group-item.active{z-index: 2;color: #fff;background-color: #fff !important;border-color: #fff !important}@media (min-width: 768px){#sidebar-wrapper{margin-left: 0}#page-content-wrapper{min-width: 0;width: 100%}#wrapper.toggled #sidebar-wrapper{margin-left: -15rem;display: none}}.card0{margin-top: 10px;margin-bottom: 10px}.top-highlight{color: #00C853;font-weight: bold;font-size: 20px}.form-card input, .form-card textarea{padding: 10px 15px 5px 15px;border: none;border: 1px solid lightgrey;border-radius: 6px;margin-bottom: 25px;margin-top: 2px;width: 100%;box-sizing: border-box;font-family: arial;color: #2C3E50;font-size: 14px;letter-spacing: 1px}.form-card input:focus, .form-card textarea:focus{-moz-box-shadow: 0px 0px 0px 1.5px skyblue !important;-webkit-box-shadow: 0px 0px 0px 1.5px skyblue !important;box-shadow: 0px 0px 0px 1.5px skyblue !important;font-weight: bold;border: 1px solid skyblue;outline-width: 0}input.btn-success{height: 50px;color: #ffffff;opacity: 0.9}#below-btn a{font-weight: bold;color: #000000}.input-group{position:relative;width:100%;overflow:hidden}.input-group input{position:relative;height:90px;margin-left: 1px;margin-right: 1px;border-radius:6px;padding-top: 30px;padding-left: 25px}.input-group label{position:absolute;height: 24px;background: none;border-radius: 6px;line-height: 48px;font-size: 15px;color: gray;width:100%;font-weight:100;padding-left: 25px}input:focus + label{color: #1E88E5}#qr{margin-bottom: 150px;margin-top: 50px}</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' crossorigin='anonymous'></script>
    <script src='https://use.fontawesome.com/releases/v5.8.1/css/all.css' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
    
    <body>
							<?php
								$payyys=$_SESSION['payy'];
								
								?>
								</span></h4></b></font>   
                                <div class="container-fluid px-0" id="bg-div">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-12">
            <div class="card card0">    <a href="orderdisadd.php">  <strong>close</strong>
</a>
                <div class="d-flex" id="wrapper">

                    <div class="bg-light border-right" id="sidebar-wrapper">
                        <div class="sidebar-heading pt-5 pb-4"><strong>PAY WITH</strong></div>
                        <div class="list-group list-group-flush"> <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item bg-light">
                        
                            </a> <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item active1">
                                <div class="list-div my-2">
                                    <div class="fa fa-credit-card"></div> &nbsp;&nbsp; Card
                                </div>
                            </a> <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
                               
                            </a> </div>
                    </div> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3" id="border-btm">
                            
                            <div class="col-8">
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                        <p class="mb-0 mr-4 mt-4 text-right"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center" id="test">Pay</div>
                        </div>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Enter bank details to pay</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_nm" placeholder="BBB Bank"> <label>BANK NAME</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" name="ben_nm" id="ben-nm" placeholder="John Smith"> <label>BENEFICIARY NAME</label> </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" name="scode" placeholder="ABCDAB1S" class="placeicon" minlength="8" maxlength="11"> <label>SWIFT CODE</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"> <input type="submit" value="Pay $ 100" class="btn btn-success placeicon"> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane in active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Enter your card details to pay</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>CARD NUMBER</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> <label>CARD EXPIRY</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="placeicon" minlength="6" maxlength="6"> <label>PIN</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row"><a href="retailbuyproduct.php" onclick="myFunction()">
                                                    <div class="col-md-12"> <input type="submit"  value=" &#8377;<?php echo $payyys; ?>" class="btn btn-success placeicon"> </div>
                                                </div></a>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <h3 class="mt-0 mb-4 text-center">Scan the QR code to pay</h3>
                                        <div class="row justify-content-center">
                                            <div id="qr"> <img src="https://i.imgur.com/DD4Npfw.jpg" width="200px" height="200px"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <script>
function myFunction() {
  confirm("Payment Successfull");
}
</script>

</html>