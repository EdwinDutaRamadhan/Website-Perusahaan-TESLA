  <!-- Modal -->
  <div class="modal fade" id="insert-charging" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">T E S L A | Insert Charging</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/admin/shop/store" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="category_id" value="1">
                      <div class="row mb-3">
                          <div class="col-md-3">
                              <label for="type">Item Type</label>
                              <select required name="type" id="type" class="form-select"
                                  aria-label="Floating label select example">
                                  <option value="">Select Type</option>
                                  <option value="At Home">At Home</option>
                                  <option value="On the Road">On the Road</option>
                                  <option value="Parts">Parts</option>
                              </select>
                          </div>
                          <div class="col-md-5">
                              <label for="title" class="form-label">Title</label>
                              <input required type="text" class="form-control" id="title" name="title"
                                  placeholder="Title">
                          </div>
                          <div class="col-md-4">
                            <label for="price" class="form-label">Price</label>
                              <input required type="number" class="form-control" id="price" name="price"
                                  placeholder="Price">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-8">
                              <label for="floatingTextarea">Item Description</label>
                              <textarea name="desc" class="form-control" placeholder="Leave a description here" id="floatingTextarea"
                                  style="width: 100%;height: 200px;"></textarea>
                          </div>
                          <div class="col-md-4">
                              <label for="image" class="form-label">Default file input example</label>
                              <input name="image" class="form-control" type="file" id="imageCharging" onchange="previewImageCharging()">
                              <img src="" class="image-preview-charging img-fluid">
                          </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Insert Data</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
