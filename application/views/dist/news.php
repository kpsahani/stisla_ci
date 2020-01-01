<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
$this->load->helper('form');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>News</h1>
          </div>

          <div class="section-body">
              <div class="row">
              <div class="col-12">
              <?php echo form_open_multipart('admin/news/add'); ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Full Summernote</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric">
                          <option>Tech</option>
                          <option>News</option>
                          <option>Political</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                      <div class="col-sm-12 col-md-7">
                        <img id="blah" src="https://via.placeholder.com/150" style="width:200px;height:auto;padding-bottom: 10px" alt="your image" />  
                        <input type="file" class="form-control" onchange="readURL(this);">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>

          </div>

        </section>
      </div>
      <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
      </script>
<?php $this->load->view('dist/_partials/footer'); ?>