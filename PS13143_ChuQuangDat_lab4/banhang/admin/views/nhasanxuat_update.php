 

<div>
    <form action="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=update" method="post">
    <input type="hidden" value="<?=$id_nsx?>" name="id_NSX">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tên Nhà Sản Xuất</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="ten_nsx" value="<?=$ten_nsx?>" placeholder="Nhập tên nhà sản xuất">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Thứ Tự</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="thutu" value="<?=$thutu_nsx?>" placeholder="Nhập thứ tự">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Ẩn </label>
        <input type="checkbox" class="" id=""  <?=$an_nsx?> name="hide" >
    </div>
        <button type="submit" class=" px-5 btn btn-primary " name="nhap">Sửa</button>
    </form>
     
</div>