 

<div>
    <form action="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=insert" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tên Nhà Sản Xuất</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="ten_nsx" placeholder="Nhập tên nhà sản xuất">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Thứ Tự</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="thutu" placeholder="Nhập thứ tự">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Ẩn </label>
        <input type="checkbox" class="" id="" name="hide" >
    </div>
        <button type="submit" class=" px-5 btn btn-primary " name="nhap">Thêm</button>
    </form>
     
</div>