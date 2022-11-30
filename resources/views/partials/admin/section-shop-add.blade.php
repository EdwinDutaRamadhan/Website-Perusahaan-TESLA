  <!-- Modal -->
  <div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">T E S L A | Insert Charging</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/admin/dashboard/" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="section" value="Shop Insert">
                  <div class="modal-body">
                      <div class="row mb-3">
                          <div class="col-md-3">
                              <label for="category_id">Category</label>
                              <select required name="category_id" id="category_id" class="form-select"
                                  aria-label="Floating label select example">
                                  <option selected>Select Category</option>
                                  <option value="1">Charging</option>
                                  <option value="2">Vehicle Accessories</option>
                                  <option value="3">Apparel</option>
                                  <option value="4">lifestyle</option>
                              </select>
                          </div>
                          <div class="col-md-5">
                              <label for="type">Item Type</label>
                              <select required name="type" id="type" class="form-select"
                                  aria-label="Floating label select example">
                                  <option selected>Select Type</option>
                                  <option value="At Home">Charging - At Home</option>
                                  <option value="On the Road">Charging - On the Road</option>
                                  <option value="Parts">Charging - Parts</option>
                                  <option value="Interior">Vehicle Accessories - Interior</option>
                                  <option value="Eksterior">Vehicle Accessories - Eksterior</option>
                                  <option value="Wheels and Tires">Vehicle Accessories - Wheels and Tires</option>
                                  <option value="Floor Mats">Vehicle Accessories - Floor Mats</option>
                                  <option value="Keys">Vehicle Accessories - Keys</option>
                                  <option value="Tees">Apparel - Tees</option>
                                  <option value="Sweathshirts and Hoodies">Apparel - Sweathshirts and Hoodies</option>
                                  <option value="Onesies">Apparel - Onesies</option>
                                  <option value="Outerwear">Apparel - Outerwear</option>
                                  <option value="Joggers">Apparel - Joggers</option>
                                  <option value="Hats">Apparel - Hats</option>
                                  <option value="Bags">Lifestyle - Bags</option>
                                  <option value="Socks">Lifestyle - Socks</option>
                                  <option value="Drinkware">Lifestyle - Drinkware</option>
                                  <option value="Mini Teslas">Lifestyle - Mini Teslas</option>
                                  <option value="Outdoor and Tech">Lifestyle - Outdoor and Tech</option>
                              </select>

                          </div>
                          <div class="col-md-4">
                              <label for="title" class="form-label">Title</label>
                              <input required type="text" class="form-control" id="title" name="title"
                                  placeholder="Title">

                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-3">
                              <label for="price" class="form-label">Price</label>
                              <input required type="number" class="form-control" id="price" name="price"
                                  placeholder="Price">
                              <div class="mt-3">
                                  <label for="model">Model (Vehicle)</label>
                                  <select name="model" id="model" class="form-select"
                                      aria-label="Floating label select example">
                                      <option selected>Select Model</option>
                                      <option value="Model S">Model S</option>
                                      <option value="Model 3">Model 3</option>
                                      <option value="Model X">Model X</option>
                                      <option value="Model Y">Model Y</option>
                                      <option value="Men">Men</option>
                                      <option value="Women">Women</option>
                                      <option value="Kids">Kids</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <label for="floatingTextarea">Item Description</label>
                              <textarea name="desc" class="form-control" placeholder="Leave a description here" id="floatingTextarea"
                                  style="width: 100%;height: 200px;"></textarea>

                          </div>
                          <div class="col-md-4">
                              <label for="image" class="form-label">Default file input example</label>
                              <input name="image" class="form-control" type="file" id="image">
                              <div class="mt-3">
                                <label for="size">Size (Lifestyle Only)</label>
                                <select name="size" id="size" class="form-select"
                                    aria-label="Floating label select example">
                                    <option selected>Select Size</option>
                                    <option value="M">M</option>
                                    <option value="S">S</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
