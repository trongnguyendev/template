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

        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>


        <style>
            #set {
                font-weight: bold;
                font-size: 16px;
                background: #575757;
                color: white;
                padding: 0 5px;
                border-radius: 100% ;
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
                            Sửa tin kinh nghiệm du lịch
                        </h1>
                        <div class="content-item">
                            <form action="indexExp.php">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Nội dung</th>
                                        <td style="width: 80%;">
                                            <textarea id="content">Hello, Trọng Nguyễn.</textarea>
                                            <script>
                                                config = {};
                                                config.toolbarGroups = [
                                                    {name: 'clipboard', groups: ['clipboard', 'undo']},
                                                    {name: 'document', groups: ['document', 'doctools', 'mode']},
                                                    {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                                                    {name: 'forms', groups: ['forms']},
                                                    '/',
                                                    {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                                                    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                                                    {name: 'links', groups: ['links']},
                                                    {name: 'insert', groups: ['insert']},
                                                    '/',
                                                    {name: 'styles', groups: ['styles']},
                                                    {name: 'colors', groups: ['colors']},
                                                    {name: 'tools', groups: ['tools']},
                                                    {name: 'others', groups: ['others']},
                                                    {name: 'about', groups: ['about']}
                                                ];

                                                config.removeButtons = 'NewPage,Preview,Print,Source,Cut,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,About';
                                                CKEDITOR.replace('content', config);
                                            </script>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <td>
                                            <img src="../images/disan1.jpg">
                                            <input type="file" class="form-control">
                                        </td>
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
