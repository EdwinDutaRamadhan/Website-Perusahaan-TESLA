<!-- Update Inventory -->
<div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <form action="/admin/inventory/" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">T E S L A | Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Row One --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="model" class="form-label">Tesla Model</label>
                                <select required class="form-select" id="model" name="model"
                                    aria-label="Default select example">
                                    <option {{ ($d->model == "Model S")? "selected" : ""; }} value="Model S">Model S</option>
                                    <option {{ ($d->model == "Model 3")? "selected" : ""; }} value="Model 3">Model 3</option>
                                    <option {{ ($d->model == "Model X")? "selected" : ""; }} value="Model X">Model X</option>
                                    <option {{ ($d->model == "Model Y")? "selected" : ""; }} value="Model Y">Model Y</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Car Name</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" value="{{ $d->name }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="mb-3" for="">Type</label><br>
                                <input class="form-check-input" type="radio" name="type"id="newId"
                                    value="New" {{ ($d->type == "New")? "checked" : ""; }}>
                                <label class="form-check-label" for="newId">New</label>
                                <input class="form-check-input" type="radio" name="type"id="usedId"
                                    value="Used" {{ ($d->type == "Used")? "checked" : ""; }}>
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
                                    name="milage"placeholder="Mil Age" value="{{ $d->milage }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="delivery" class="form-label">Delivery Location</label>
                                <input required type="text" class="form-control" id="delivery"
                                    name="delivery"placeholder="Delivery Location" value="{{ $d->delivery }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trim" class="form-label">Trim</label>
                                <select required class="form-select" id="trim" name="trim"
                                    aria-label="Default select example">
                                    <option {{ ($d->trim == "Model S Plaid")? "selected" : ""; }} value="Model S Plaid">Model S Plaid</option>
                                    <option {{ ($d->trim == "Model S Dual Motor All-Wheel Drive")? "selected" : ""; }} value="Model S Dual Motor All-Wheel Drive">Model S Dual Motor All-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model 3 Performance Dual Motor All-Wheel Drive")? "selected" : ""; }} value="Model 3 Performance Dual Motor All-Wheel Drive">Model 3 Performance Dual Motor All-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model 3 Long Range Dual Motor All-Wheel Drive")? "selected" : ""; }} value="Model 3 Long Range Dual Motor All-Wheel Drive">Model 3 Long Range Dual Motor All-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model 3 Standard Range Plus Rear-Wheel Drive")? "selected" : ""; }} value="Model 3 Standard Range Plus Rear-Wheel Drive">Model 3 Standard Range Plus Rear-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model X Plaid")? "selected" : ""; }} value="Model X Plaid">Model X Plaid</option>
                                    <option {{ ($d->trim == "Model X Long Range Plus All-Wheel Drive")? "selected" : ""; }} value="Model X Long Range Plus All-Wheel Drive">Model X Long Range Plus All-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model X Performance All-Wheel Drive")? "selected" : ""; }} value="Model X Performance All-Wheel Drive">Model X Performance All-Wheel Drive</option>
                                    <option {{ ($d->trim == "Model Y Long Range All-Wheel Drive Performance")? "selected" : ""; }} value="Model Y Long Range All-Wheel Drive Performance">Model Y Long Range All-Wheel Drive Performance</option>
                                    <option {{ ($d->trim == "Model Y Performance Dual Motor All-Wheel Drive")? "selected" : ""; }} value="Model Y Performance Dual Motor All-Wheel Drive">Model Y Performance Dual Motor All-Wheel Drive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Row Three --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="color" class="form-label">Car Color</label>
                                <select required class="form-select" id="color" name="color"
                                    aria-label="Default select example">
                                    <option {{ ($d->color == "Pearl White Multi-Coat")? "selected" : ""; }} value="Pearl White Multi-Coat">Pearl White Multi-Coat</option>
                                    <option {{ ($d->color == "Pearl White Paint")? "selected" : ""; }}  value="Pearl White Paint">Pearl White Paint</option>
                                    <option {{ ($d->color == "Pearl White Multi-Coat Paint")? "selected" : ""; }}  value="Pearl White Multi-Coat Paint">Pearl White Multi-Coat Paint</option>
                                    <option {{ ($d->color == "Solid Black")? "selected" : ""; }}  value="Solid Black">Solid Black</option>
                                    <option {{ ($d->color == "Solid Black Paint")? "selected" : ""; }}  value="Solid Black Paint">Solid Black Paint</option>
                                    <option {{ ($d->color == "Deep Blue Metallic")? "selected" : ""; }}  value="Deep Blue Metallic">Deep Blue Metallic</option>
                                    <option {{ ($d->color == "Deep Blue Metallic Paint")? "selected" : ""; }}  value="Deep Blue Metallic Paint">Deep Blue Metallic Paint</option>
                                    <option {{ ($d->color == "Midnight Silver Metallic Paint")? "selected" : ""; }}  value="Midnight Silver Metallic Paint">Midnight Silver Metallic Paint
                                    </option>
                                    <option {{ ($d->color == "Silver Metallic Paint")? "selected" : ""; }}  value="Silver Metallic Paint">Silver Metallic Paint</option>
                                    <option {{ ($d->color == "Red Multi-Coat")? "selected" : ""; }}  value="Red Multi-Coat">Red Multi-Coat</option>
                                    <option {{ ($d->color == "Red Multi-Coat Paint")? "selected" : ""; }}  value="Red Multi-Coat Paint">Red Multi-Coat Paint</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="internal" class="form-label">Interior Color</label>
                                <select required class="form-select" id="internal" name="internal"
                                    aria-label="Default select example">
                                    <option {{ ($d->internal == "All Black Premium Interior")? "selected" : ""; }} value="All Black Premium Interior">All Black Premium Interior</option>
                                    <option {{ ($d->internal == "All Black Premium Interior with Carbon Fiber Décor")? "selected" : ""; }} value="All Black Premium Interior with Carbon Fiber Décor">All Black Premium Interior with Carbon Fiber Décor</option>
                                    <option {{ ($d->internal == "All Black Premium Interior with Ebony Décor")? "selected" : ""; }} value="All Black Premium Interior with Ebony Décor">All Black Premium
                                        Interior with Ebony Décor</option>
                                    <option {{ ($d->internal == "Black and White Premium Interior")? "selected" : ""; }} value="Black and White Premium Interior">Black and White Premium Interior
                                    </option>
                                    <option {{ ($d->internal == "Black and White Premium Interior with Walnut Décor")? "selected" : ""; }} value="Black and White Premium Interior with Walnut Décor">Black and White
                                        Premium Interior with Walnut Décor</option>
                                    <option {{ ($d->internal == "Black and White Premium Interior with Carbon Fiber Décor")? "selected" : ""; }} value="Black and White Premium Interior with Carbon Fiber Décor">Black and White Premium Interior with Carbon Fiber Décor</option>
                                    <option {{ ($d->internal == "Cream Interior with Carbon Fiber Decor")? "selected" : ""; }} value="Cream Interior with Carbon Fiber Decor">Cream Interior with Carbon
                                        Fiber Decor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="wheels" class="form-label">Wheels</label>
                                <input required type="text" class="form-control" id="wheels"
                                    name="wheels"placeholder="Wheels size (description)" value="{{ $d->wheels }}">
                            </div>
                        </div>
                    </div>
                    {{-- Row Four --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="autopilot" class="form-label">Autopilot</label>
                                <select class="form-select" id="autopilot" name="autopilot"
                                    aria-label="Default select example">
                                    <option {{ ($d->autopilot == "Autopilot")? "selected" : ""; }} value="Autopilot">Autopilot</option>
                                    <option {{ ($d->autopilot == "Enhanced Autopilot")? "selected" : ""; }} value="Enhanced Autopilot">Enhanced Autopilot</option>
                                    <option {{ ($d->autopilot == "Full Self Driving")? "selected" : ""; }} value="Full Self Driving">Full Self Driving</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="seatlayout" class="form-label">Seat Layout</label>
                                <input type="text" class="form-control" id="seatlayout"
                                    name="seatlayout"placeholder="Seat Layout" value="{{ $d->seatlayout }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="additional" class="form-label">Additional</label>
                                <select class="form-select" id="additional" name="additional"
                                    aria-label="Default select example">
                                    <option {{ ($d->autopilot == "Performance Upgrade")? "selected" : ""; }} value="Performance Upgrade">Performance Upgrade</option>
                                    <option {{ ($d->autopilot == "Rear Heated Seats")? "selected" : ""; }} value="Rear Heated Seats">Rear Heated Seats</option>
                                    <option {{ ($d->autopilot == "Tow Hitch")? "selected" : ""; }} value="Tow Hitch">Tow Hitch</option>
                                </select>
                        </div>
                    </div>
                    {{-- Row Five --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="startspeed" class="form-label">Start Speed Time(sec)</label>
                                <input required type="text" class="form-control" id="startspeed"
                                    name="startspeed"placeholder="Speed (0-60mph)" value="{{ $d->startspeed }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="topspeed" class="form-label">Top Speed(mph)</label>
                                <input required type="number" class="form-control" id="topspeed"
                                    name="topspeed"placeholder="Top Speed" value="{{ $d->topspeed }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="range" class="form-label">Range(mil)</label>
                                <input required type="number" class="form-control" id="range"
                                    name="range"placeholder="Range" value="{{ $d->range }}">
                            </div>
                        </div>
                    </div>
                    {{-- Row Six --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="fee" class="form-label">Car Price</label>
                                <input required type="number" class="form-control" id="fee"
                                    name="fee"placeholder="Price" value="{{ $d->fee }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image"
                                    name="image"placeholder="Image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trial" class="form-label">Trial Time</label>
                                <select class="form-select" id="trial" name="trial"
                                    aria-label="Default select example">
                                    <option {{ ($d->value == "30-Day")? "selected":""; }} value="30-Day">30-Day</option>
                                    <option {{ ($d->value == "6-Month")? "selected":""; }} value="6-Month">6-Month</option>
                                    <option {{ ($d->value == "1-Year")? "selected":""; }} value="1-Year">1-Year</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Car</button>
                </div>
        </div>
        </form>
    </div>
</div>
