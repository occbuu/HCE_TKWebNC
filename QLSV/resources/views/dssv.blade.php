<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Checkout example · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">




  <!-- JQuery CSS -->
  <link rel="stylesheet" href="assets/dist/css/jquery-ui.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/dist/css/bootstrap-datepicker.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">

</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/hce_logo_03.png" alt="" height="100">
        <h2>Danh sách sinh viên</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group
          has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <button type="button" 
        onclick='setModal("ins");' 
        class="btn btn-outline-info"
        data-bs-toggle="modal" 
        data-bs-target="#ModalSinhVien">
        Thêm Mới Sinh Viên
      </button>
      <div class="g-5">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Mã SV</th>
              <th scope="col">Họ Tên</th>
              <th scope="col">Giới Tính</th>
              <th scope="col">Ngày Sinh</th>
              <th scope="col">Lớp</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="tbodySV">
            <tr>
              <th scope="row">1</th>
              <td>123456</td>
              <td>Nguyễn Văn An</td>
              <td>21CIS01</td>
              <td>
                <button class="btn-sm btn-danger">Xoá</button>
                <button class="btn-sm btn-info">Sửa</button>
              </td>
            </tr>
        </table>
        <nav aria-label="Page navigation example">
          <ul id="ulPagination" class="pagination">
            <li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="goPrev()">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#"><span id="spanCurPage">1</span></a></li>           
            <li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="goNext()">Next</a></li>
          </ul>
        </nav>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017–2023 Thiết kế Web Nâng cao</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="ModalSinhVien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin sinh viên</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="txtMSSV" class="col-sm-3 col-form-label">MSSV</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="txtMSSV" value="" placeholder="Vui lòng nhập MSSV">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtHoTen" class="col-sm-3 col-form-label">Họ Tên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="txtHoTen" placeholder="Nhập họ tên">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtLop" class="col-sm-3 col-form-label">Lớp</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="txtLop" placeholder="Nhập họ tên">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtLop" class="col-sm-3 col-form-label">Giới Tính</label>
            <div class="col-sm-9">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="GioiTinh" id="radioNu" value="Nữ">
                <label class="form-check-label" for="radioNu">
                  Nữ
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="GioiTinh" id="radioNam" checked value="Nam">
                <label class="form-check-label" for="radioNam">
                  Nam
                </label>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="txtNgaySinh" class="col-sm-3 col-form-label">Ngày Sinh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="txtNgaySinh" readonly>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="btnCreate" type="button" class="btn btn-primary" onclick="createSV()">Tạo mới SV</button>
          <button id="btnUpdate" type="button" class="btn btn-success" onclick="updateSV()">Cập nhật SV</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/dist/js/jquery-3.6.4.js"></script>
  <script src="assets/dist/js/jquery-ui.js"></script>
  <script src="assets/dist/js/jquery.tmpl.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/dist/js/bootstrap-datepicker.js"></script>
  <script src="form-validation.js"></script>
  <script src="sv.js"></script>
  <script id="svTemplate" type="text/x-jQuery-tmpl">
    <tr>
      <th scope="row">${STT}</th>
      <td>${MaSV}</td>
      <td>${HoTen}</td>
      <td>${GioiTinh}</td>
      <td>${NgaySinh}</td>
      <td>${Lop}</td>
      <td>
        <button class="btn-sm btn-danger" onclick="delStudent('${MaSV}');">Xoá</button>
        <button class="btn-sm btn-info"  onclick="upStudent('${MaSV}');">Sửa</button>
      </td>
    </tr>
  </script>
</body>

</html>