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
                                <h4 class="page-title">Application Status</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row gy-5">
                    <div class="Detail col-12 col-sm-12 col-md-12 col-lg-12 ">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5> <b class="search-title">Advanced Search</b> </h5>

                                <div class="row" style="gap: 0;">

                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label>Application ID</label>
                                            <input class="form-control" type="text">
                                        </div>

                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="form-group">

                                            <label for="usermenu">Order No</label>
                                            <input class="form-control" type="text">
                                        </div>

                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="form-group">

                                            <label for="usermenu">Company Name</label>
                                            <input class="form-control" type="text">
                                        </div>

                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="custom-select">
                                                <option value="All">All</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Submited">Submited</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Closed">Closed Billed</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Cancelled">Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label>Application ID</label>
                                            <input class="form-control" type="date" placeholder="dd/mm/yyyy" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="search-Btns text-right">
                                    <button type="button" class="btn btn-outline-secondary waves-effect">
                                        <i class="fas fa-undo"></i>
                                        Reset</button>
                                    <button type="button" class="btn btn-info waves-effect waves-light">
                                        <i class="fas fa-search"></i> Search
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="Detail col-12 col-sm-12 col-md-12 col-lg-12 ">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>

                                                <th>#</th>
                                                <th>Date Crated</th>
                                                <th>Application ID</th>
                                                <th>Order No</th>
                                                <th>Company Name</th>
                                                <th>Package</th>
                                                <th>Status</th>
                                                <th>Last Status Modified Date</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>XXXXX</td>
                                                <td>1324513</td>
                                                <td>#236256</td>
                                                <td>Example Name</td>
                                                <td>Standard</td>
                                                <td> <b class="badge badge-success badge-pill">Activated</b> </td>
                                                <td> 2022-07-04<br> 00:02:31</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>


</body>

</html>