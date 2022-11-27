<!-- Tambah Inventory -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        
            <div class="modal-content">
                <div class="modal-header">
                    <form action="/admin/inventory/" method="post" enctype="multipart/form-data">
                        @csrf
                    <h5 class="modal-title" id="exampleModalLabel">Insert New Car Data | T E S L A</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Row One --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="model" class="form-label">Tesla Model</label>
                                <input required type="text" class="form-control" id="model" name="model"
                                    placeholder="Model">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Car Name</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="mb-3" for="">Type</label><br>
                                <input class="form-check-input" type="radio" name="type"id="newId" value="New" checked>
                                <label class="form-check-label" for="newId">New</label>
                                <input class="form-check-input" type="radio" name="type"id="usedId" value="Used">
                                <label class="form-check-label" for="usedId">Used</label>
                            </div>
                        </div>
                    </div>
                    {{-- Row Two --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="milage" class="form-label">Mil Age</label>
                                <input required type="text" class="form-control" id="milage"
                                    name="milage"placeholder="Mil Age">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="delivery" class="form-label">Delivery Location</label>
                                <input required type="text" class="form-control" id="delivery"
                                    name="delivery"placeholder="Delivery Location">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trim" class="form-label">Trim</label>
                                <input required type="text" class="form-control" id="trim"
                                    name="trim"placeholder="Trim">
                            </div>
                        </div>
                    </div>
                    {{-- Row Three --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="color" class="form-label">Car Color</label>
                                <input required type="text" class="form-control" id="color"
                                    name="color"placeholder="External Color">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="internal" class="form-label">Interior Color</label>
                                <input required type="text" class="form-control" id="internal"
                                    name="internal"placeholder="Internal Color">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="wheels" class="form-label">Wheels</label>
                                <input required type="text" class="form-control" id="wheels"
                                    name="wheels"placeholder="Wheels size (description)">
                            </div>
                        </div>
                    </div>
                    {{-- Row Four --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="autopilot" class="form-label">Autopilot</label>
                                <input type="text" class="form-control" id="autopilot"
                                    name="autopilot"placeholder="Autopilot">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="seatlayout" class="form-label">Seat Layout</label>
                                <input type="text" class="form-control" id="seatlayout"
                                    name="seatlayout"placeholder="Seat Layout">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="additional" class="form-label">Car Additional</label>
                                <input type="text" class="form-control" id="additional"
                                    name="additional"placeholder="Additional">
                            </div>
                        </div>
                    </div>
                    {{-- Row Five --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="startspeed" class="form-label">Start Speed Time(sec)</label>
                                <input required type="text" class="form-control" id="startspeed"
                                    name="startspeed"placeholder="Speed (0-60mph)">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="topspeed" class="form-label">Top Speed(mph)</label>
                                <input required type="number" class="form-control" id="topspeed"
                                    name="topspeed"placeholder="Top Speed">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="range" class="form-label">Range(mil)</label>
                                <input required type="number" class="form-control" id="range"
                                    name="range"placeholder="Range">
                            </div>
                        </div>
                    </div>
                    {{-- Row Six --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="fee" class="form-label">Car Price</label>
                                <input required type="number" class="form-control" id="fee"
                                    name="fee"placeholder="Price">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input required type="file" class="form-control" id="image"
                                    name="image"placeholder="Image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trial" class="form-label">Trial Time</label>
                                <input required type="text" class="form-control" id="trial"
                                    name="trial"placeholder="Trial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert Car</button>
                </div>
            </div>
        </form>
    </div>
</div>
