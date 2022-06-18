<form action="<?= URL ?>index.php/admin/postaddcate" method="post">
  <div class="form-group">
    <label>Category name</label>
    <input type="text" name="category_name" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label>Parent</label>
    <select class="form-control" name="parent">
      <option value="0">Trống</option>
      <?php
      foreach ($data['category'] as $val) {
        echo "<option value='" . $val['id'] . "'>" . $val['category_name'] . "</option>";
      }

      ?>
    </select>
  </div>
  <div class="form-group">
    <label>Status</label>
    <select class="form-control" name="status">
      <option value="0">Hiện</option>
      <option value="1">Ẩn</option>

    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>