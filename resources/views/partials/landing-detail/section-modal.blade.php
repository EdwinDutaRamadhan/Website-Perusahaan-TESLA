<div class="modal fade" id="modal1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Auto Lane Change</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-8">
                        <video width="100%" height="100%" autoplay muted loop>
                            <source src="{{ asset('img/autopilot/lane_change.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-md-4">
                        <h3>Auto Lane Change</h3>
                        <p>While driving on the highway, Automatic Lane Change will position your car in the optimal
                            lane to prepare for merges and exits while overtaking slow cars. Drivers are given clear
                            insight to upcoming lane changes as well as customization to Auto Lane Change functionality.
                        </p>
                        <div class="m-4">
                            <h6 align="center">Enhanced Autopilot</h6>
                            <h6 align="center">$6000</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button align="center" class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Next</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Autopark</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-8">
                        <video width="100%"height="100%" autoplay muted loop>
                            <source src="{{ asset('img/autopilot/autopark.webm') }}" type="video/webm">
                        </video>
                    </div>
                    <div class="col-4">
                        <h3>Autopark</h3>
                        <p>Park with ease in both parallel and perpendicular parking spaces with a single button tap on
                            the Center Display. Model Y will alert you to available parking spots by continuously
                            monitoring the space around you.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modal3" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Next</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Navigate on Autopilot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-8">
                        <video width="100%"height="100%" autoplay muted loop>
                            <source src="{{ asset('img/autopilot/navigate-on-autopilot.webm') }}" type="video/webm">
                        </video>
                    </div>
                    <div class="col-4">
                        <h3>Navigate on Autopilot</h3>
                        <p>Automatic driving from highway on-ramp to off-ramp includes automatic lane changes,
                            Traffic-Aware Cruise Control with complete stopping and re-engagement, Autosteer, and
                            overtaking slow cars in your lane.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modal4" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Next</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Smart Summon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-8">
                        <video width="100%"height="100%" autoplay muted loop>
                            <source src="{{ asset('img/autopilot/summon_v2.webm') }}" type="video/webm">
                        </video>
                    </div>
                    <div class="col-4">
                        <h3>Smart Summon</h3>
                        <p>Activated by the Tesla App, your parked car will come find you and even park or unpark itself
                            in tight spaces. Summon navigates complex parking situations while abiding by lane markings
                            and stop signs, avoiding pedestrians and obstacles like traffic cones, trash bins and rogue
                            shopping carts.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modal1" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Back to first</button>
            </div>
        </div>
    </div>
</div>
{{-- Key Features --}}
<div class="modal fade" id="kfmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Connectivity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Package Features</th>
                                <th scope="col">Standard</th>
                                <th scope="col">Premium</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Navigation</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Live Traffic Visualization</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Satellite-View Maps</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Video Streaming*</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Caraoke*</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Music Streaming*</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Internet Browser*</td>
                                <td>No</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Features subject to change and may vary based on hardware configuration. New features that become
                        available after delivery may be subject to additional charges.</p>
                    <br>
                    <p>* Available on Wi-Fi only with Standard Connectivity <br>
                        1. Standard connectivity is included, at no additional cost, until July 2030. Certain high data
                        usage vehicle features require at least Standard Connectivity, including maps, navigation and
                        voice commands. <br>
                        2. Premium Connectivity is complimentary for 30 days, then available as a subscription</p>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
{{-- Charging --}}
<div class="modal fade" id="cmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Connectivity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="max-height: 500px;">
                <div class="row">
                    <div class="col-md-8">
                        <img src="{{ asset('img/utilities/wallcharger.png') }}" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <h2>Wall Connector</h2>
                        <p>Our recommended home charging solution.</p>
                        <p>With charging speeds up to 44 miles of range added per hour depending on vehicle model, a
                            versatile indoor/outdoor design and a 24 foot cable, the Wall Connector is our quickest,
                            most convenient way to charge at home.</p>
                        <p>Installation required and not included.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
{{-- Warranty --}}
<div class="modal fade" id="wmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 500px;">
                    <h2 class="mb-2">Limited Warranty</h2>
                    <p>Your new vehicle is covered by the New Vehicle Limited Warranty, which includes the Basic Vehicle
                        Limited Warranty, the Supplemental Restraint System Limited Warranty and the Battery and Drive
                        Unit Limited Warranty.
                        The Basic Limited Vehicle Warranty provides coverage up to 4 years or 50,000 miles, whichever
                        comes first.
                        The Supplemental Restraint System Warranty provides coverage up to 5 years or 60,000 miles,
                        whichever comes first.
                        The Battery and Drive Unit Limited Warranty provides coverage up to 8 years or 120,000 miles,
                        whichever comes first.
                        The warranty period for Demo vehicles begins the day the car was first put into service by Tesla
                        and is active up to 4 years after this date or 50,000 total miles, whichever comes first.
                        For additional details, please review the New Vehicle Limited Warranty.</p>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
{{-- Condition --}}
<div class="modal fade " id="cdmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 500px;">
                    <h2 class="mb-1">Cosmetic and Mechanical Standards</h2>
                    <p>Every Demo/Previous-Demo Tesla has passed an internal inspection and may undergo light repairs to
                        be prepared for sale. Normal wear and tear indicative of the age and mileage of the car should
                        be expected.</p>
                      <table>
                        <tr>
                          <th class="p-4" >Exterior</th>
                          <td class="p-4">Paint scratches that measure up to 1" in one direction Scuffs and scrapes that measure up to 1" in multiple directions Dents or dings that are less than 1/2" in diameter Rock chips</td>
                        </tr>
                        <tr>
                          <th class="p-4">Interior</th>
                          <td class="p-4">Wear on upholstery or interior panels including markings, discoloration, small tears or stains up to 1"Wear on entry and exit points</td>
                        </tr>
                        <tr>
                          <th class="p-4">Glass</th>
                          <td class="p-4">Pitting on windshield Up to one chip less than or equal to 1" in diameter, not in the driver's line of sightSurface scratches, not in the driver's line of sight</td>
                        </tr>
                        <tr>
                          <th class="p-4">Wheels</th>
                          <td class="p-4">Scratches, gouges, chips or dents less than 6"</td>
                        </tr>
                      </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
