<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHS</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'navbar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="padding: 100px;">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body" style="margin:60px;">
                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">수급자명</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="name" name="name" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birth_date" class="col-sm-2 col-form-label">생년월일</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telephone" class="col-sm-2 col-form-label">연락처</label>
                                    <div class="col-sm-2">
                                        <input type="text" id="telephone1" name="telephone1" class="form-control m-input" placeholder="" maxlength="4">
                                    </div>
                                    <label style="font-weight:bold;">-</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="telephone2" name="telephone2" placeholder="" maxlength="4">
                                    </div>
                                    <label style="font-weight:bold;">-</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="telephone3" name="telephone3" placeholder="" maxlength="4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">주소</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="repair" class="col-sm-2 col-form-label">보수범위</label>
                                    <div class="col-sm-2">
                                        <select name="repair" class="form-control">
                                            <option value="">선택</option>
                                            <option value="e">경보수</option>
                                            <option value="m">중보수</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="support" class="col-sm-2 col-form-label">보수범위지원율</label>
                                    <div class="col-sm-2">
                                        <select name="support" class="form-control">
                                            <option value="">선택</option>
                                            <option value="100">100%</option>
                                            <option value="90">90%</option>
                                            <option value="80">80%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="disability" class="col-sm-2 col-form-label">장애인해당여부</label>
                                    <div class="col-1">
                                        <input type="checkbox" class="form-control" id="disability" name="disability" checked="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="elderly" class="col-sm-2 col-form-label">고령자해당여부</label>
                                    <div class="col-1">
                                        <input type="checkbox" class="form-control" id="elderly" name="elderly" checked="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-2 col-form-label">비고</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="note" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-5 d-flex justify-content-center">
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger" value="">취소</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-info" value="">등록</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>