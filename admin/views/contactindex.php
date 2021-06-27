<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-6 text-dark mt-3">
                <h2>DANH SÁCH ĐƠN HÀNG</h2>
            </div>
            <div class="col-lg-3 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Đơn Hàng</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                <div class="row d-flex justify-content-center">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th width="200">#</th>
                                <th width="200">Tên KH</th>
                                <th width="400">Email KH</th>
                                <th width="300">Điện Thoại</th>
                                <th width="300">Tin Nhắn</th>
                                <th width="300">Ngày Giờ</th>
                                <th width="300">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $id = 0;
                            foreach ($showAllContact as $motcontact) {
                                $id= $motcontact['id'];
                                $linkdel = "index.php?ctrl=contact&act=del&iddel=".$id;
                                ?>
                                <tr>
                                    <td><?=$id++?></td>
                                    <td><?=$motcontact['name']?></td>
                                    <td><?=$motcontact['email']?></td>
                                    <td><?=$motcontact['phone']?></td>
                                    <td><?=$motcontact['message']?></td>
                                    <td><?=$motcontact['date']?></td>
                                    <td><a onclick="checkDelete('<?=$linkdel?>')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                           <?php  }?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>