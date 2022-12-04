  <!-- Modal -->
  <div class="modal fade" id="update-charging{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">T E S L A | Update Charging</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/admin/shop/update" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $d->id }}">
                  <div class="modal-body">
                    <input type="hidden" name="category_id" value="1">
                      <div class="row mb-3">
                          <div class="col-md-3">
                              <label for="type">Item Type</label>
                              <select required name="type" id="type" class="form-select"
                                  aria-label="Floating label select example">
                                  <option {{ ($d->type == "At Home")? "selected" : ""; }} value="At Home">At Home</option>
                                  <option {{ ($d->type == "On the Road")? "selected" : ""; }} value="On the Road">On the Road</option>
                                  <option {{ ($d->type == "Parts")? "selected" : ""; }} value="Parts">Parts</option>
                              </select>
                          </div>
                          <div class="col-md-5">
                              <label for="title" class="form-label">Title</label>
                              <input required type="text" class="form-control" id="title" name="title"
                                  placeholder="Title" value="{{ $d->title }}">
                          </div>
                          <div class="col-md-4">
                            <label for="price" class="form-label">Price</label>
                              <input required type="number" class="form-control" id="price" name="price"
                                  placeholder="Price" value="{{ $d->price }}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-8">
                              <label for="floatingTextarea">Item Description</label>
                              <textarea name="desc" class="form-control" placeholder="Leave a description here" id="floatingTextarea"
                                  style="width: 100%;height: 200px;">{{ $d->desc }}</textarea>
                          </div>
                          <input type="hidden" name="image_kw" value="{{ $d->image }}">
                          <div class="col-md-4">
                              <label for="image" class="form-label">Default file input example</label>
                              <input name="image" class="form-control" type="file" id="image">
                          </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Update Data</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
