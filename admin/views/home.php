<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    google.charts.load('current', {packages: ['corechart']});
    </script>
<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-3 text-dark mt-3">
                <h2>Thống Kê</h2>
            </div>
            <div class="col-lg-3 ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row ">
            <!-- <section> -->
            <div class="row mt-3 d-flex justify-content-between">
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Danh Mục</p>
                                    <h3 class="my-3"><?=$allhx['sldm']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i></span>Danh Mục Sản Phẩm</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-user" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3"> 
                    <div class="card report-card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Sản Phẩm</p>
                                    <h3 class="my-3"><?=$allhh['slhh']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i></span> Tất Cả Sản Phẩm</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-clock-o" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3 ">
                    <div class="card report-card bg-warning  text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Tổng Đơn Hàng</p>
                                    <h3 class="my-3"><?=$alldh['donhang']?></h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i></span>Tất Cả Đơn Hàng Mới</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-dashboard" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="font-weight-semibold font-14">Số Bài Viết</p>
                                    <h3 class="my-3"><?=$allbv['baiviet']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i></span>Tất Cả Bài Viết Mới</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-folder" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            </section>

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-9">
            <div id="columnchart_values" class="mt-4"></div>
                <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Density", { role: "style" } ], 
                    <?php for ($i=0; $i < count($arr[0]); $i++) { 
                        echo  "['".$arr[0][$i][0]."', ".$arr[1][$i][0].", 'color: gray'],";
                    }?>  
                ]);
    
                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                { calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation" },
                                2]);

                var options = {
                    title: "Số Lượt Xem Từng Sản Phẩm",
                    width: 900,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
            }
            </script>
            
        </div>
    </div>
</div>