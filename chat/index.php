<?php
include 'header.php';
?>       

<!-- Main Content -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <?php
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $q = "select * from users where user_id=$id";
            $ress = mysqli_query($conn, $q);
            $to_data = mysqli_fetch_array($ress);

            $q2 = "select * from msgs where (from_id=$user_id and to_id=$id) or (from_id=$id and to_id=$user_id)";
            $chat_res = mysqli_query($conn, $q2);
            ?>
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $to_data['name']; ?></h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body overflow-y" id="chat" style="height: 300px;">
                        <?php
                        /*                while ($chat = mysqli_fetch_array($chat_res)) {
                          if ($chat['from_id'] == $user_id) {
                          echo "<div class='text-right text-danger'>" . $chat['msg'] . "</div>";
                          } else {

                          echo "<div class=' text-success'>" . $chat['msg'] . "</div>";
                          }
                          }
                         * 
                         */
                        ?>

                    </div>
                    <script>
                        var source = new EventSource("msg-data.php?id=<?php echo $to_data['user_id']; ?>");
                        source.onmessage = function (event) {
                            document.getElementById("chat").innerHTML = event.data + "<br>";
                        };
                    </script>
                    <div class="card-footer">
                        <form class="" action="msg-save.php" method="post">
                            <div class="input-group">
                                <input type="hidden" name="to_id" value="<?php echo $to_data['user_id']; ?>">
                                <input type="text" name="msg" class="form-control "
                                       placeholder="Type msg here..." required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-arrow-right fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include 'footer.php';
?>