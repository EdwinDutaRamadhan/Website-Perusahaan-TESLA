<!-- Tambah Inventory -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <form action="/admin/inventory/store" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="modal-header">
                    <input type="hidden" name="user_id" value="1">
                    <h5 class="modal-title" id="exampleModalLabel">T E S L A | Insert Data</h5>
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
                                    <option value="">Select Model</option>
                                    <option value="Model S">Model S</option>
                                    <option value="Model 3">Model 3</option>
                                    <option value="Model X">Model X</option>
                                    <option value="Model Y">Model Y</option>
                                </select>
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
                                <input class="form-check-input" type="radio" name="type"id="newId"
                                    value="New" checked>
                                <label class="form-check-label" for="newId">New</label>
                                <input class="form-check-input" type="radio" name="type"id="usedId"
                                    value="Used">
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
                                <select required class="form-select" id="trim" name="trim"
                                    aria-label="Default select example">
                                    <option value="">Select Trim</option>
                                    <option value="Model S Plaid">Model S Plaid</option>
                                    <option value="Model S Dual Motor All-Wheel Drive">Model S Dual Motor All-Wheel Drive</option>
                                    <option value="Model 3 Performance Dual Motor All-Wheel Drive">Model 3 Performance Dual Motor All-Wheel Drive</option>
                                    <option value="Model 3 Long Range Dual Motor All-Wheel Drive">Model 3 Long Range Dual Motor All-Wheel Drive</option>
                                    <option value="Model 3 Standard Range Plus Rear-Wheel Drive">Model 3 Standard Range Plus Rear-Wheel Drive</option>
                                    <option value="Model X Plaid">Model X Plaid</option>
                                    <option value="Model X Long Range Plus All-Wheel Drive">Model X Long Range Plus All-Wheel Drive</option>
                                    <option value="Model X Performance All-Wheel Drive">Model X Performance All-Wheel Drive</option>
                                    <option value="Model Y Long Range All-Wheel Drive Performance">Model Y Long Range All-Wheel Drive Performance</option>
                                    <option value="Model Y Performance Dual Motor All-Wheel Drive">Model Y Performance Dual Motor All-Wheel Drive</option>
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
                                    <option value="">Select Exterior Color</option>
                                    <option value="Pearl White Multi-Coat">Pearl White Multi-Coat</option>
                                    <option value="Pearl White Paint">Pearl White Paint</option>
                                    <option value="Pearl White Multi-Coat Paint">Pearl White Multi-Coat Paint</option>
                                    <option value="Solid Black">Solid Black</option>
                                    <option value="Solid Black Paint">Solid Black Paint</option>
                                    <option value="Deep Blue Metallic">Deep Blue Metallic</option>
                                    <option value="Deep Blue Metallic Paint">Deep Blue Metallic Paint</option>
                                    <option value="Midnight Silver Metallic Paint">Midnight Silver Metallic Paint
                                    </option>
                                    <option value="Silver Metallic Paint">Silver Metallic Paint</option>
                                    <option value="Red Multi-Coat">Red Multi-Coat</option>
                                    <option value="Red Multi-Coat Paint">Red Multi-Coat Paint</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="internal" class="form-label">Interior Color</label>
                                <select required class="form-select" id="internal" name="internal"
                                    aria-label="Default select example">
                                    <option value="">Select Interior Color</option>
                                    <option value="All Black Premium Interior">All Black Premium Interior</option>
                                    <option value="All Black Premium Interior with Carbon Fiber Décor">All Black Premium Interior with Carbon Fiber Décor</option>
                                    <option value="All Black Premium Interior with Ebony Décor">All Black Premium
                                        Interior with Ebony Décor</option>
                                    <option value="Black and White Premium Interior">Black and White Premium Interior
                                    </option>
                                    <option value="Black and White Premium Interior with Walnut Décor">Black and White
                                        Premium Interior with Walnut Décor</option>
                                    <option value="Black and White Premium Interior with Carbon Fiber Décor">Black and White Premium Interior with Carbon Fiber Décor</option>
                                    <option value="Cream Interior with Carbon Fiber Decor">Cream Interior with Carbon
                                        Fiber Decor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="wheels" class="form-label">Wheels Size</label>
                                <select required class="form-select" id="wheels" name="wheels"
                                    aria-label="Default select example">
                                    <option value="">Select Wheels</option>
                                    <option value="18'' Aero Wheels">18'' Aero Wheels</option>
                                    <option value="19'' Gemini Wheels">19'' Gemini Wheels</option>
                                    <option value="19'' Sport Wheels">19'' Sport Wheels</option>
                                    <option value="19'' Silver Slipstream Wheels">19'' Silver Slipstream Wheels</option>
                                    <option value="19'' Tempest Wheels">19'' Tempest Wheels</option>
                                    <option value="20'' Cyberstream Wheels">20'' Cyberstream Wheels</option>
                                    <option value="20'' Introduction Wheels">20'' Introduction Wheels</option>
                                    <option value="20'' Silver Wheels">20'' Silver Wheels</option>
                                    <option value="20'' Überturbine Wheels">20'' Überturbine Wheels</option>
                                    <option value="21'' Arachnid Wheels">21'' Arachnid Wheels</option>
                                    <option value="21'' Sonic Carbon Twin Turbine Wheels">21'' Sonic Carbon Twin Turbine Wheels</option>
                                    <option value="21'' Überturbine Wheels ">21'' Überturbine Wheels </option>
                                    <option value="22'' Turbine Wheels">22'' Turbine Wheels</option>
                                </select>
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
                                    <option value="">Select Autopilot</option>
                                    <option value="Autopilot">Autopilot</option>
                                    <option value="Enhanced Autopilot">Enhanced Autopilot</option>
                                    <option value="Full Self Driving">Full Self Driving</option>
                                </select>
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
                            <label for="additional" class="form-label">Additional</label>
                                <select class="form-select" id="additional" name="additional"
                                    aria-label="Default select example">
                                    <option value="">Select Additional</option>
                                    <option value="Performance Upgrade">Performance Upgrade</option>
                                    <option value="Rear Heated Seats">Rear Heated Seats</option>
                                    <option value="Tow Hitch">Tow Hitch</option>
                                </select>
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
                                    name="image" placeholder="Image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trial" class="form-label">Trial Time</label>
                                <select required class="form-select" id="trial" name="trial"
                                    aria-label="Default select example">
                                    <option value="">Select Trial</option>
                                    <option value="30-Day">30-Day</option>
                                    <option value="6-Month">6-Month</option>
                                    <option value="1-Year">1-Year</option>
                                </select>
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
