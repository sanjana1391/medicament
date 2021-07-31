<!-- Modal -->
<div class="modal fade" id="retailerloginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method='POST' action='partials/_pharmloginhandel.php'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="loginusername1">Username</label>
                        <input type="text" class="form-control" id="loginusername1"  name="loginusername1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="loginPassword1">Password</label>
                        <input type="password" class="form-control" name="loginPassword1" id="loginPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
                <div class="container ml-1">
                <p>
                        Not yet a member? <a href="index1.php">Sign up</a>
                </p>
                </div>
            </form>

        </div>
    </div>
</div>