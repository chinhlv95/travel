<div class="container">
                <div class="filter">
                    <div class="title-filter">
                        <h3><span class="glyphicon glyphicon-search"></span> Tìm Tour</h3>
                    </div>
                    <div class="filter-content">
                        <form class="form-inline">
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" data-live-search="true">
                                    <option  data-icon="glyphicon-map-marker">Điểm Khởi hành</option>
                                    <option  value="1">Hà nội</option>
                                    <option  value="2">Hải phỏng</option>
                                    <option  value="3">Đà Nẵng</option>
                                    <option  value="4">Quảng Nam</option>
                                    <option  value="5">HCM</option>
                                    <option  value="6">Phú quốc</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="3" onchange="test()" id="tour" data-live-search="true">
                                    <option  >-Chọn tuyến-</option>
                                    <option value="1">Du lịch trong nước</option>
                                    <option value="2">Du lịch ngoài nước</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" data-live-search="true">
                                    <option  data-icon="glyphicon-map-marker">Điểm đến</option>
                                    <option  value="1">Hà nội</option>
                                    <option  value="2">Hải phỏng</option>
                                    <option  value="3">Đà Nẵng</option>
                                    <option  value="4">Quảng Nam</option>
                                    <option  value="5">HCM</option>
                                    <option  value="6">Phú quốc</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control start-date" data-toggle="tooltip" title="Ngày khởi đầu">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" data-live-search="true">
                                    <option  data-icon="glyphicon-usd">Chọn giá tour</option>
                                    <option >1-2 triệu</option>
                                    <option >3-5 triệu</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default search">Tìm Kiếm</button
                        </form>
                    </div>
                </div>
            </div>