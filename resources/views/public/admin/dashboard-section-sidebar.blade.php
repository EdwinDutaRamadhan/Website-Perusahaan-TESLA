<h6>Sidebar</h6>

                <div class="row">
                    <form action="/admin/dashboard/" method="post">
                        @csrf
                        <div class="col-12 p-2">
                            <input type="hidden" name="section" value="Home All">
                            <input type="submit" class="btn btn-light" value="Home">
                        </div>
                    </form>
                    <form action="/admin/dashboard/" method="post">
                        @csrf
                        <div class="col-12 p-2">
                            <input type="hidden" name="section" value="Landing All">
                            <input type="submit" class="btn btn-light" value="Landing">
                        </div>
                    </form>
                    <form action="/admin/dashboard/" method="post">
                        @csrf
                        <div class="col-12 p-2">
                            <input type="hidden" name="section" value="Inventory All">
                            <input type="submit" class="btn btn-light" value="Inventory">
                        </div>
                    </form>
                    <form action="/admin/dashboard/" method="post">
                        @csrf
                        <div class="col-12 p-2">
                            <input type="hidden" name="section" value="Shop All">
                            <input type="submit" class="btn btn-light" value="Shop">
                        </div>
                    </form>
                </div>