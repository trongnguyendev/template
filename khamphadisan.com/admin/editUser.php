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
        <script src="../js/jquery.dataTables.js" type="text/javascript"></script>

        <script src="../js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>

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
                            <li><a href="indexUser.php">User</a></li>
                            <li><a href="indexMenu.php">Menu</a></li>
                            <li><a href="indexNews.php">Tin tức</a></li>
                            <li><a href="indexDiemden.php">Điểm đến</a></li>
                            <li><a href="indexExp.php">Kinh nghiệm</a></li>
                            <li><a href="indexSale.php">CT khuyến mãi</a></li>
                            <li><a href="indexFood.php">ẨM thực</a></li>
                            <li><a href="indexTour.php">Tour du lịch</a></li>
                            <li><a href="indexTour.php">Video</a></li>
                            <li><a href="indexSlide.php">Slideshow</a></li>
                        </ul>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="col9">
                    <div class="content">
                        <h1 id="h1">
                            Sửa user
                        </h1>
                        <div class="content-item">
                            <form action="indexUser.php">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Tên menu</th>
                                        <td><input type="text" class="form-control" value="HOME"></td>
                                    </tr>
                                    <tr>
                                        <th>Thứ tự</th>
                                        <td><input type="text" class="form-control" value="02"></td>
                                    </tr>
                                    <tr>
                                        <th>Vị trí</th>
                                        <td><input type="text" class="form-control" value="01"></td>
                                    </tr>
                                    <tr>
                                        <th>Ẩn hiện</th>
                                        <td>
                                            <input type="checkbox" checked="true"> ẩn <br>
                                            <input type="checkbox"> hiện
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>THUỘC MENU</th>
                                        <td><input type="text" class="form-control" value="Sản phẩm"></td>
                                    </tr>
                                </table>
                                <input type="submit" value="SỬA">
                                <div style="clear: both;"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </body>
</html>
