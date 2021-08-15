<!-- Modal -->
<div class="modal fade" id="retailersignupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action='partials/_pharmsignuphandel.php' method="POST">
                <!-- m -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputUsername">Pharmacy name</label>
                        <input type="text" class="form-control" id="signupusername" name="signupusername"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">GSTIN NUMBER</label>
                        <input type="text" class="form-control" id="signupusername" name="signupusername"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label>Contact number</label>
                        <input type="tel" class="form-control" id="signupphone" name="signupphone"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="text" class="form-control" id="signupemail" name="signupemail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="signupaddress" name="signupaddress"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" class="form-control" id="password1" name="password1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control" id="password2" name="password2"
                            aria-describedby="emailHelp">
                    </div>
                    <!-- <div class="form-group">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
                        </form>
                    </div> -->
                    <button type="submit" class="btn btn-success">Signup</button>

                </div>

            </form>
        </div>
    </div>
</div>