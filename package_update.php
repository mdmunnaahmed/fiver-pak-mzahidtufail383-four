<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agent Dashboard | TELLINK</title>
    <?php
    include('header.php');
    ?>
</head>

<body>


    <div id="wrapper">
        <?php include('navbar.php'); ?>
        <?php include('menue.php'); ?>

        <div class="content-page">
            <div class="content">
                <div class="page-title-box">

                    <div class="row align-items-center ">
                        <div class="col-md-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Package / Scheme Update</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-10">
                        <div class="row" style="gap:0">
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="" class="form-label mb-0 d-block text-center">Number</label>
                                    <p class="text-center">1</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="form-group text-center">
                                    <label for="" class="form-label mb-0 d-block text-center">Type</label>
                                    <select class="form-control form-select-tow custom-scrollbar">
                                        <option value="1">RENEWAL</option>
                                        <option value="2">NEW</option>
                                        <option value="3">PORT IN</option>
                                        <option value="4">PRE TO POST</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="form-group text-center">
                                    <label for="" class="form-label mb-0 d-block text-center">Package</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="form-group text-center">
                                    <label for="" class="form-label mb-0 d-block text-center">Scheme</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mt-sm-5">
                            <a href="" class="btn btn-outline-secondary btn-lg custom-btn">Update</a>
                        </div>
                    </div>
                </div>

                <div class="container overflow-hidden ">

                </div>

            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>


</body>

</html>