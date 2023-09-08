<?php include '../layout/header.php'; ?>

    <div class="container-fluid shadow p-1 rounded mt-1">
        <div class="flex">
            <div class="col-md-12 card-header text-right">
                <button class="btn btn-info" id="btnShow" name="myTaskList">
                    Show Products
                </button>
            </div>
        </div><br>
        
        <div class="table-responsive">
            <table class="table display table-striped table-bordered shadow p-1 rounded mt-1" style="display:none" id="data"></table>
        </div>
    </div><br>

    <div class="modal-body">
        <div id="viewModal" class="modal fade mr-tp-100" role="dialog">
            <div class="modal-dialog modal-lg flipInX animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 align="center" class="modal-title" id="myModalLabel"><b>DETAIL PRODUCT</b></h2>
                        <button type="button" class="close" data-dismiss="modal" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <h2><input style='border-bottom: 3px solid #ccc; width:315px; margin-left: 15px' class="Input" type="text" outline= "none" id="title" readonly=""></h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4" class="shadow p-1 rounded mt-1">
                                <div>
                                    <image type="images" id="images" readonly="">
                                </div>
                            
                                <div class="mySlides">
                                    <div class="numbertext">1 / 3</div>
                                    <img id="thumbnail_1" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 3</div>
                                    <img id="thumbnail_2" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 3</div>
                                    <img id="thumbnail_3" style="width:100%">
                                </div>
                        
                                <a class="prev1" onclick="plusSlides(-1)">❮</a>
                                <a class="next1" onclick="plusSlides(1)">❯</a>

                                <div class="row">
                                    <div class="column">
                                        <img class="demo cursor" id="images_1" style="width:100%" onclick="currentSlide(1)">
                                    </div>

                                    <div class="column">
                                        <img class="demo cursor" id="images_2" style="width:100%" onclick="currentSlide(2)">
                                    </div>

                                    <div class="column">
                                        <img class="demo cursor" id="images_3" style="width:100%" onclick="currentSlide(3)">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="form-group">
                                    <text>Price :  $<input class="Input" type="text" id="price" readonly=""></text>
                                    <text id="rating"></text>
                                </div>

                                <div class="form-group">
                                    <text>Category : <input class="Input" type="text" id="category" cols="30" rows="10" readonly="">Brand : <input class="Input" type="text" id="brand" readonly=""></text>
                                </div>

                                <div class="form-group">
                                    <text>Stock : <input class="Input" type="text" id="stock" readonly=""></text>
                                </div>

                                <div class="form-group">
                                    <text>Description : <br><textarea class="Input" type="text" id="description" readonly="" cols="30" rows="10"></textarea></text>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="data.js"></script>

<?php include '../layout/footer.php'; ?>