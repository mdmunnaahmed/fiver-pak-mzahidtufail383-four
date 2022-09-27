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
                                <h4 class="page-title">New Application</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="background-color:#F4F6F9;">

                    <div class="App-paragraph" style="color: red;">
                        <p class="text-18">
                            <i>Kindly follow below steps to ensure smooth process. Failed to follow might lead to rejection.</i>
                        </p>
                        <p class="text-10">
                            <i>-Application is complete without any missing info (Name, IC, Address, Mobile No, Plan, Device, Promo code, Case No & etc)</i>
                        </p>
                        <p class="text-10">
                            <i> -Ensure billing address/delivery address is same as per bill (Kindly fill in as per company chop. If there's slight different, kindly edit it as per company chop and update the
                                address in portal as well)</i>
                        </p>
                        <p class="text-10">
                            <i>-Highly suggest ONLY one authorised signatory/PIC name inside (to avoid confusion from processing team) </i>
                        </p>
                        <p class="text-10">
                            <i> -Attach any supporting documents if needed (LOA/LOR, SSM, IC/Passport, Coverage Check, Calculator and etc)</i>
                        </p>
                        <p class="text-10">
                            <i>-ONLY submit application when everything is ready (Do not submit and cancel case unless instructed by clients) </i>
                        </p>
                        <p class="text-10">
                            <i>-Only use latest form which is accepted by processing team (Latest form can be downloaded at Dashboard <hyperlink>> Sales Materials) </i>
                        </p>

                    </div>

                    <div class="drag-drop drag-area">

                        <div id="div1" class="position-relative" ondrop="drop(event)" ondragover="allowDrop(event)" data-toggle="tooltip" title="Drag the drop here the files you want to upload">
                            <div id="dropFiles" class="dropFiles"></div>
                            <label class="file-up-btn">
                                <input type="file" class="File-upload" style="display:none" name="" id="file" multiple onchange="javascript:updateList()" />
                                Drag & Drop Here
                            </label>

                        </div>

                        <div class="attatchments">
                            Selected files:
                            <div id="fileList" class="mb-4"></div>

                        </div>
                        <div class="Attatchment-submit">
                            <button type="submit" class="btn btn-lg"> Submit Now</button>
                        </div>

                    </div>


                </div>

            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>
</body>


</html>