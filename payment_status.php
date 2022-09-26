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
                                <h4 class="page-title">Payment Status</h4>
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

                <div class="card card-style-two">
                    <div class="card-body">
                        <div class="d-flex flex-wrap filter-header justify-content-between" style="gap: 0 25px">
                            <div class="form-group">
                                <label class="control-label">Show</label>
                                <input id="demo0" type="number" class="form-control" style="width: auto; display: inline; max-width: 62px;" value="10">
                                <span>entries</span>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date Received</th>
                                        <th>Application ID</th>
                                        <th>Agent Code</th>
                                        <th>Agent Name</th>
                                        <th>Attachment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>9/26/2022</td>
                                        <td><a href="" class="text-info">CL12DFJNO19</a></td>
                                        <td>195201</td>
                                        <td>Bkash</td>
                                        <td>themebracket-bg.png</td>
                                        <td>
                                            <button class="border-0 badge badge-success badge-pill">Pick Up</button>
                                            <button class="border-0 badge badge-danger badge-pill">Cancel Pick Up</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap align-items-center mt-3 justify-content-between" style="gap: 10px 25px">
                            <p class="mb-0">Showing 1 to 1 of 1 entries</p>
                            <ul class="pagination pagination-style-two mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>


</body>

</html>