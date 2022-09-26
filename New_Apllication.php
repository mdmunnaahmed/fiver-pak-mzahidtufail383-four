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



                        <div class="drag-drop drag-area">

                            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" data-toggle="tooltip" title="Drag the drop here the files you want to upload">



                                <label class="file-up-btn">
                                    <input type="file" class="File-upload" style="display:none" name="" id="file" multiple onchange="javascript:updateList()" />
                                    Drag & Drop Here
                                </label>


                            </div>

                            <div class="attatchments">
                                Selected files:
                                <p>
                                <div id="fileList" style="color:black;"></div>

                                </p>
                                <div class="Attatchment-submit">
                                    <button class="btn btn-lg"> Submit Now</button>
                                </div>
                            </div>

                        </div>
                        <div class="drag-area">
                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <header>Drag & Drop to Upload File</header>
                            <span>OR</span>
                            <button>Browse File</button>
                            <input type="file" hidden>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <script>
            //selecting all required elements
            const dropArea = document.querySelector(".drag-area"),
                dragText = dropArea.querySelector("header"),
                button = dropArea.querySelector("button"),
                input = dropArea.querySelector("input");
            let file; //this is a global variable and we'll use it inside multiple functions

            button.onclick = () => {
                input.click(); //if user click on the button then the input also clicked
            }

            input.addEventListener("change", function() {
                //getting user select file and [0] this means if user select multiple files then we'll select only the first one
                file = this.files[0];
                dropArea.classList.add("active");
                showFile(); //calling function
            });


            //If user Drag File Over DropArea
            dropArea.addEventListener("dragover", (event) => {
                event.preventDefault(); //preventing from default behaviour
                dropArea.classList.add("active");
                dragText.textContent = "Release to Upload File";
            });

            //If user leave dragged File from DropArea
            dropArea.addEventListener("dragleave", () => {
                dropArea.classList.remove("active");
                dragText.textContent = "Drag & Drop to Upload File";
            });

            //If user drop File on DropArea
            dropArea.addEventListener("drop", (event) => {
                event.preventDefault(); //preventing from default behaviour
                //getting user select file and [0] this means if user select multiple files then we'll select only the first one
                file = event.dataTransfer.files[0];
                showFile();
            });

            function showFile() {
                let fileReader = new FileReader();
                fileReader.onload = () => {
                    let fileURL = fileReader.result;
                    dropArea.innerHTML = imgTag;
                }
                fileReader.readAsDataURL(file);

            }
        </script>

        <?php include('footer.php'); ?>
    </div>
</body>


</html>