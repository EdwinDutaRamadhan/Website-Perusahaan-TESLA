  <!-- Modal -->
  <div class="modal fade" id="update-vehicle{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">T E S L A | Update Vehicle Accessories</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/admin/shop/update" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $d->id }}">
                  <div class="modal-body">
                      <div class="row mb-3">
                          <input type="hidden" name="category_id" value="2">
                          <div class="col-md-3">
                              <label for="type">Item Type</label>
                              <select required name="type" id="type" class="form-select"
                                  aria-label="Floating label select example">
                                  <option {{ ($d->type == "Interior")? "selected":""; }} value="Interior">Interior</option>
                                  <option {{ ($d->type == "Eksterior")? "selected":""; }} value="Eksterior">Eksterior</option>
                                  <option {{ ($d->type == "Wheels and Tires")? "selected":""; }} value="Wheels and Tires">Wheels and Tires</option>
                                  <option {{ ($d->type == "Floor Mats")? "selected":""; }} value="Floor Mats">Floor Mats</option>
                                  <option {{ ($d->type == "Keys")? "selected":""; }} value="Keys">Keys</option>
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
                          <div class="col-md-3">
                              <div class="mt-3">
                                  <label for="model">Model</label>
                                  <select name="model" id="model" class="form-select"
                                      aria-label="Floating label select example">
                                      <option {{ ($d->model == "Model S")? "selected":";" }} value="Model S">Model S</option>
                                      <option {{ ($d->model == "Model 3")? "selected":";" }} value="Model 3">Model 3</option>
                                      <option {{ ($d->model == "Model X")? "selected":";" }} value="Model X">Model X</option>
                                      <option {{ ($d->model == "Model Y")? "selected":";" }} value="Model Y">Model Y</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="mt-3">
                                  <label for="floatingTextarea">Item Description</label>
                                  <textarea name="desc" class="form-control" placeholder="Leave a description here" id="floatingTextarea"
                                      style="width: 100%;height: 200px;">{{ $d->desc }}</textarea>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="mt-3">
                                    <input type="hidden" name="image_kw" value="{{ $d->image }}">
                                  <label for="image" class="form-label">Default file input example</label>
                                  <input name="image" class="form-control" type="file" id="image">
                                  <div class="mt-2">
                                    @if ($d->image)
                                        <img src="{{ asset('storage/'.$d->image) }}" alt="" class="img-preview img-fluid mb-3">
                                    @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                  </div>
                              </div>
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
