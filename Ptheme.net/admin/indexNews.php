<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>

        <link href="styleAdmin.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.dataTables.js" type="text/javascript"></script>

        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        

        <script>

        </script>
        <style>
            #set {
                font-weight: bold;
                font-size: 16px;
                background: #575757;
                color: white;
                padding: 0 5px;
                border-radius: 100%;
            }
        </style>
    </head>
    <body>
        <div class="admin">
            <div class="head_admin">
                <span id="spantitle">TRANG QUẢN TRỊ WEBSITE</span>
                <span id="introuser">
                    <i class="fa fa-user"></i>
                    TrongNguyen
                    <a href="#" class="fa fa-sign-out" style="text-decoration: none;font-size: 20px; padding: 0 5px;"></a>
                </span>
            </div>
            <div class="content_admin">
                <div class="col3">
                    <div class="sideAdmin-left">
                        <h2 id="h2">Danh mục Admin
                        </h2> 
                        <ul>
                            <li><a href="indexMenu.php">Menu</a></li>
                            <li><a href="indexProduct.php">Sản phẩm</a></li>

                            <li><a href="indexNews.php">Tin Tức</a></li>
                        </ul>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="col9">
                    <div class="content">
                        <h1 id="h1">
                            Quản lí tin tức
                            <a id="a1" href="addNews.php" class="fa fa-plus"> Thêm</a>
                            <div style="clear: both;"></div>
                        </h1>
                        <div class="content-item">
                            <table id="myTable" class="table table-striped " cellspacing="0" width="100%">
                                <thead>
                                    <tr id="tr-first">
                                        <th>STT</th>
                                        <th>TIÊU ĐỀ</th>
                                        <th>TÓM TẮT</th>
                                        <th>NỘI DUNG</th>
                                        <th>NGÀY</th>
                                        <th>HÌNH ẢNH</th>
                                        <th>CHỨC NĂNG</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th>002</th>
                                        <th>Cà phê</th>
                                        <th>Cà phê nguyên chất..</th>
                                        <th>Cà phê mang lại hương...</th>
                                        <th>17/02/2017</th>
                                        <th><img src="../images/theme1.jpg"></th>
                                        <th>
                                            <a href="#" style="background: #575757;padding: 5px;color: white;border-radius: 10px;">Xóa</a>
                                            <a href="editNews.php" style="background: #575757;padding: 5px;color: white;border-radius: 10px;">Sửa</a>
                                        </th>
                                    </tr>                                   
                                </tbody>
                            </table>
                            <script>
                                $(document).ready(function () {
                                    $('#myTable').DataTable();
                                });
                            </script>

                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </body>
</html>
