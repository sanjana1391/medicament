<!-- Modal -->
<div class="modal fade" id="farmersignupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method='POST' action='partials/_hospitalsignuphandel.php'>
             <!-- m -->
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label for="exampleInputUsername">Hospital name</label>
                        <input type="text" class="form-control" id="signuphospital" name="signuphospital"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Type</label>
                        <input type="text" class="form-control" id="signuptype" name="signuptype"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Specification</label>
                        <input type="text" class="form-control" id="signupspec" name="signupspec"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="signupaddress" name="signupaddress">
                    </div>
                    <div class="form-group">
                        <label>Contact number</label>
                        <input type="tel" class="form-control" id="signupphone" name="signupphone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="signupemail" name="signupemail">
                    </div>
                   
                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" class="form-control" id="password1" name="password1">
                    </div>
                    <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>

                    <button type="submit" class="btn btn-success">Signup</button>
                </div>

            </form>
        </div>
    </div>
</div>