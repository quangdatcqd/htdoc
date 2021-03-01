 <div>
     <form action="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=insert" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="ten_dt" class="form-label">Tên Điện Thoại</label>
             <input type="text" class="form-control" id="ten_dt" name="ten_dt" placeholder="Nhập Tên Điện">
         </div>
         <div class="mb-3">
             <label for="mota" class="form-label">Nhập Mô Tả</label>
             <textarea class="mytextarea" name="mota" name="mytextarea">
      Hello, World!
        </textarea>
         </div>
         <div class="form-group row">

<div class="mb-3 col-sm-6">
    <label for="nsx" class="form-label">Nhà Sản Xuất</label>
    <select  class="form-control" id="nsx" name="nsx"  >
       <?php
        foreach ($nhasanxuat as $nsx ) {
            


            ?>
     <option value="<?=$nsx['idNSX']?>"> <?=$nsx['TenNSX']?></option>

            <?php
        }
       
       ?>
    </select>
</div>
<!-- <div class="mb-3 col-sm-3">
    <label for="thuoctinh" class="form-label">Thuộc Tính Điện Thoại</label>
    <select type="number" class="form-control" id="thuoctinh" name="thuoctinh"  >
    <option value=""></option>
    </select>
</div> -->
 
</div>

         <div class="form-group row">

             <div class="mb-3 col-sm-3">
                 <label for="gia" class="form-label">Giá</label>
                 <input type="number" class="form-control" id="gia" name="gia" placeholder="Nhập Giá">
             </div>
             <div class="mb-3 col-sm-3">
                 <label for="giakm" class="form-label">Giá KM</label>
                 <input type="number" class="form-control" id="giakm" name="giakm" placeholder="Nhập  Giá  ">
             </div>
             <div class="mb-3 col-sm-3">
                 <label for="thutu" class="form-label">Thứ Tự</label>
                 <input type="number" class="form-control" id="thutu" name="thutu" placeholder="Nhập thứ tự">
             </div>
             <div class="mb-3 col-sm-3">
                 <label for="tonkho" class="form-label">Tồn Kho</label>
                 <input type="number" class="form-control" id="tonkho" name="tonkho" placeholder="Nhập Số Lượng Tồn Kho">
             </div>
         </div>
         <div class="form-group row">
             <div class="mb-3 col-sm-3">
                 <label for="hide" class="form-label">Ẩn </label>
                 <input type="checkbox" class="hide  " id="hide" name="hide">
             </div>
             <div class="mb-3 col-sm-3">
                 <label for="hot" class="form-label">HOT </label>
                 <input type="checkbox" class="hot  " id="hot" name="hot">
             </div>
             <div class="mb-3 col-sm-6">
                 <label for="file" class="form-label">Thêm Ảnh </label>
                 <input type="file" class="file " id="file" name="file">
             </div>
         </div>

         <button type="submit" class=" px-5 btn btn-primary " name="nhap">Thêm</button>
     </form>

 </div>