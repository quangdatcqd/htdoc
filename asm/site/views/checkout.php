<form action="?act=luudonhang" method="post">
<fieldset class="border m-2 p-3">
   <legend class="small text-primary fw-bold">Thông tin người nhận hàng</legend>
   <div class="form-group row mb-3">
    <label for="ht" class="col-sm-2 col-form-label">Họ tên</label>
    <div class="col-sm-10"><input type="text" class="form-control" id="ht" name="HoTen"> </div>
  </div>
  <div class="form-group row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10"> <input type="email" class="form-control" id="email" name="email"> </div>
  </div>
  <div class="form-group row mb-3">
    <label for="address" class="col-sm-2 col-form-label">Địa Chỉ</label>
    <div class="col-sm-10"> <input type="text" class="form-control" id="address" name="address"> </div>
  </div>
  <div class="form-group row ">
    <label for="phone" class="col-sm-2 col-form-label">Số Điện Thoại</label>
    <div class="col-sm-10"> <input type="number" class="form-control" id="phone" name="phone"> </div>
  </div>
</fieldset>
<div class="m-2 d-flex">
   <fieldset class="border p-3 mr-2 col-6">    
      <legend class="small text-primary fw-bold">Phương thức thanh toán</legend>
      <div class="form-group row">
        <p><input type="radio" checked name="phuongthuctt" id="ck" value="ck"> <label for="ck">Chuyển khoản</label></p>
        <p><input type="radio" name="phuongthuctt" id="khinhan"  value="khinhan"> <label for="khinhan">Khi nhận hàng</label></p>
        <p><input type="radio" name="phuongthuctt" id="onepay" value="onepay"> <label for="onepay">Onepay</label></p>
        <p><input type="radio" name="phuongthuctt" id="nganluong" value="nganluong"> <label for="nganluong">Ngân Lượng</label></p>
      </div>
    </fieldset>
    <fieldset class="border p-3 ml-3 col-6">    
       <legend class="small text-primary fw-bold">Phương thức giao hàng</legend>
       <div class="form-group row">
        <p> <input type="radio" checked name="phuongthucgh"   id="ghnhanh" value="ghnhanh"> <label for="ghnhanh"> Giao hàng nhanh </label> </p>
        <p> <input type="radio" name="phuongthucgh" id="ghtietkiem" value="ghtietkiem">  <label for="ghtietkiem"> Giao hàng tiế t kiệm</label> </p>
        <p> <input type="radio" name="phuongthucgh" id="vnpost" value="vnpost">   <label for="vnpost"> VN Post </label> </p>
         <p><input type="radio" name="phuongthucgh" id="viettel" value="viettel">  <label for="viettel"> Viettel</label> </p>
       </div>
    </fieldset>    
</div>  
<div class="py-2 m-2 d-flex justify-content-end">  
    <div class="col-2 text-end">
        <button class="btn btn-success" type="submit">Mua hàng</button>
    </div>
</div>
</form>