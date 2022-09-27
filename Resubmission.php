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
                                <h4 class="page-title">Resubmission</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="background-color:#F4F6F9;">

                    <div class="row">
                        <div class=" col-12 col-md-12 col-lg-12">
                            <div class="App-paragraph" style="color: red;">
                                <p class="text-18">
                                    Kindly follow below steps to ensure smooth process. Failed to follow might lead to rejection.
                                </p>
                                <p class="text-10">
                                    -Application is complete without any missing info (Name, IC, Address, Mobile No, Plan, Device, Promo code, Case No & etc)
                                </p>
                                <p class="text-10">
                                    -Ensure billing address/delivery address is same as per bill (Kindly fill in as per company chop. If there's slight different, kindly edit it as per company chop and update the
                                    address in portal as well)
                                </p>
                                <p class="text-10">
                                    -Highly suggest ONLY one authorised signatory/PIC name inside (to avoid confusion from processing team)
                                </p>
                                <p class="text-10">
                                    -Attach any supporting documents if needed (LOA/LOR, SSM, IC/Passport, Coverage Check, Calculator and etc
                                </p>
                                <p class="text-10">
                                    -ONLY submit application when everything is ready (Do not submit and cancel case unless instructed by clients)
                                </p>
                                <p class="text-10">
                                    -Only use latest form which is accepted by processing team (Latest form can be downloaded at Dashboard <hyperlink>> Sales Materials)
                                </p>

                            </div>

                            <div class="App-key d-flex mt-4 pt-2">
                                <p class="pr-3"> Please Key In Application ID:</p> <input type="text" name="" class="form-control">
                            </div>

                            <div class="drag-drop ">

                                <div id="div1" class="position-relative dropFiles" id="dropFiles" ondrop="drop(event)" ondragover="allowDrop(event)" data-toggle="tooltip" title="Drag the drop here the files you want to upload">

                                    <div id="dropFiles" class="dropFiles"></div>

                                    <label class="file-up-btn">
                                        <input type="file" class="File-upload" style="display:none" name="" id="file" onchange="javascript:updateList()" multiple>

                                        Upload Amended Attatchment Her <br> (Drag & Drop Here)
                                    </label>

                                </div>



                                <div class="attatchments">
                                    Selected files:

                                    <div id="fileList" class="mb-4"></div>

                                    <div class="Attatchment-new">
                                        <button class="btn btn-lg"> Resubmit(With New Attatchment) </button>
                                    </div>
                                    <div class="Attatchment-new mt-3">
                                        <button class="btn btn-lg"> Resubmit Only (As Per Previous Attatchment) </button>
                                    </div>


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