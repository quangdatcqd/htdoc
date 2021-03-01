 <div class="p-3 mb-5">
     <form action="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=insert" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="ten_dt" class="form-label">Tên Điện Thoại</label>
             <input type="text" class="form-control" id="ten_dt" name="ten_dt" placeholder="Nhập Tên Điện">
         </div>
         <div class="mb-3">
             <label for="mota" class="form-label">Nhập Mô Tả</label>
             <textarea class="mytextarea" name="mota" name="mytextarea" placeholder="Mô Tả"></textarea>
         </div>
         <div class="form-group row">

             <div class="mb-3 col-sm-6">
                 <label for="nsx" class="form-label">Nhà Sản Xuất</label>
                 <select class="form-control" id="nsx" name="nsx">
                     <?php
                        foreach ($nhasanxuat as $nsx) {



                        ?>
                         <option value="<?= $nsx['idNSX'] ?>"> <?= $nsx['TenNSX'] ?></option>

                     <?php
                        }

                        ?>
                 </select>
             </div> 
             <div class="mb-3 col-sm-6">
             
                 <label for="tonkho" class="form-label">Tồn Kho</label>
                 <input type="number" class="form-control" id="tonkho" name="tonkho" placeholder="Nhập Số Lượng Tồn Kho">
            
             </div>
         </div>

         <div class="form-group row">

             <div class="mb-3 col-sm-4">
                 <label for="gia" class="form-label">Giá</label>
                 <input type="number" class="form-control" id="gia" name="gia" placeholder="Nhập Giá">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="giakm" class="form-label">Giá KM</label>
                 <input type="number" class="form-control" id="giakm" name="giakm" placeholder="Nhập  Giá  ">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="thutu" class="form-label">Thứ Tự</label>
                 <input type="number" class="form-control" id="thutu" name="thutu" placeholder="Nhập thứ tự">
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
                 <label for="file" class="form-label mr-2">Thêm Ảnh </label>  
                 <input type="file" class="file  " id="file" name="file">
             </div>
         </div>
         <h4>Thuộc Tính</h4> <br>
         <div class="form-group row">
                
             <div class="mb-3 col-sm-4">
                 <label for="manhinh" class="form-label">Màn hình</label>
                 <input type="text" class="form-control" id="manhinh" name="manhinh" placeholder="Màn hình">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="hedieuhanh" class="form-label">Hệ Điều Hành</label>
                 <input type="text" class="form-control" id="hedieuhanh" name="hedieuhanh" placeholder="Hệ Điều Hành">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="camerasau" class="form-label">Camera Sau</label>
                 <input type="text" class="form-control" id="camerasau" name="camerasau" placeholder="Camera Sau">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="cameratruoc" class="form-label">Camera Trước</label>
                 <input type="text" class="form-control" id="cameratruoc" name="cameratruoc" placeholder="Camera Trước">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="cpu" class="form-label">CPU</label>
                 <input type="text" class="form-control" id="cpu" name="cpu" placeholder="CPU">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="bonhotrong" class="form-label">Bộ Nhớ Trong</label>
                 <input type="text" class="form-control" id="bonhotrong" name="bonhotrong" placeholder="Bộ Nhớ Trong">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="ram" class="form-label">Bộ Nhớ Ram</label>
                 <input type="text" class="form-control" id="ram" name="ram" placeholder="Bộ Nhớ Ram">
             </div>
          
             <div class="mb-3 col-sm-4">
                 <label for="thenho" class="form-label">Thẻ Nhớ</label>
                 <input type="text" class="form-control" id="thenho" name="thenho" placeholder="Thẻ Nhớ">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="sim" class="form-label">Thẻ SIM</label>
                 <input type="text" class="form-control" id="sim" name="sim" placeholder="Thẻ SIM">
             </div>
             <div class="mb-3 col-sm-4">
                 <label for="pin" class="form-label">Dung Lượng Pin</label>
                 <input type="text" class="form-control" id="pin" name="pin" placeholder="Dung Lượng Pin">
             </div>
          
         </div>
 
         <button type="submit" class=" px-5   btn btn-primary " name="nhap">Thêm</button>
     </form>

 </div>