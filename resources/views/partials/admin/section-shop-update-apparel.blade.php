  <!-- Modal -->
  <div class="modal fade" id="update-apparel{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">T E S L A | Update Apparel</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('admin') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="section" value="Shop Update">
                  <div class="modal-body">
                      <div class="row mb-3">
                          <input type="hidden" name="category_id" value="3">
                          <div class="col-md-3">
                              <label for="type">Item Type</label>
                              <select required name="type" id="type" class="form-select"
                                  aria-label="Floating label select example">
                                  <option {{ ($d->type == "Tees")? "selected":""; }} value="Tees">Tees</option>
                                  <option {{ ($d->type == "Sweathshirts and Hoodies")? "selected":""; }} value="Sweathshirts and Hoodies">Sweathshirts and Hoodies</option>
                                  <option {{ ($d->type == "Onesies")? "selected":""; }} value="Onesies">Onesies</option>
                                  <option {{ ($d->type == "Outerwear")? "selected":""; }} value="Outerwear">Outerwear</option>
                                  <option {{ ($d->type == "Joggers")? "selected":""; }} value="Joggers">Joggers</option>
                                  <option {{ ($d->type == "Hats")? "selected":""; }} value="Hats">Hats</option>
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
                                      <option {{ ($d->model == "Men")? "selected":""; }} value="Men">Men</option>
                                      <option {{ ($d->model == "Women")? "selected":""; }} value="Women">Women</option>
                                      <option {{ ($d->model == "Kids")? "selected":""; }} value="Kids">Kids</option>
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
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Update data</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
