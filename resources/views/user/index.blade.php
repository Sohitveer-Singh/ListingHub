@extends('layouts.app.user')
@section('page')

                <!-- Dashboard Sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-12">
                    <div class="user-dashboard-inner h-100 border-end bg-dark border-2 py-5 d-lg-block d-none">
                        <div class="dashboard_users mb-4">
                            <div class="square--80 circle mx-auto mb-1"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt="User Image"></div>
                            <div class="user-nameTitle text-center">
                                <h4 class="lh-base fw-medium text-white mb-0">Welcome Back</h4>
                                <h6 class="text-white fw-normal opacity-75 mb-0">Themez Hub</h6>
                            </div>
                        </div>
                        <div class="user-Dashboard-menu">
                            <ul>
                                <li><a href="dashboard-user.html" class="active"><i class="bi bi-speedometer me-2"></i>Dashboard Area</a></li>
                                <li><a href="dashboard-my-profile.html"><i class="bi bi-person-lines-fill me-2"></i>My Profile</a></li>
                                <li><a href="dashboard-my-bookings.html"><i class="bi bi-journal-check me-2"></i>My Bookings</a></li>
                                <li><a href="dashboard-my-listings.html"><i class="bi bi-ui-radios-grid me-2"></i>My Listings</a></li>
                                <li><a href="dashboard-bookmarks.html"><i class="bi bi-bookmark-star me-2"></i>Bookmarkes</a></li>
                                <li><a href="dashboard-messages.html"><i class="bi bi-chat-dots me-2"></i>Messages<span class="notti_coun bg-success">3</span></a></li>
                                <li><a href="dashboard-reviews.html"><i class="bi bi-yelp me-2"></i>Reviews</a></li>
                                <li><a href="dashboard-wallet.html"><i class="bi bi-wallet me-2"></i>Wallet</a></li>
                                <li><a href="dashboard-add-listing.html"><i class="bi bi-patch-plus me-2"></i>Add Listing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Content -->
                <div class="col-xl-10 col-lg-9 col-md-12">
                    <div class="user-dashboard-box bg-light">

                        <!-- Dashboard Title -->
                        <div class="dashHeader p-xl-5 p-4 pb-xl-0 pb-0">
                            <h2 class="fw-medium mb-0">Hello, Themez</h2>
                        </div>

                        <!-- Dashboard Details -->
                        <div class="dashCaption p-xl-5 p-3 p-md-4">

                            <!-- Row Start -->
                            <div class="row align-items-start g-4 mb-4">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        Your listing <strong>Holy Guacamole!</strong> has been approved!.
                                        <button type="button" class="btn-close text-sm text-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Row End -->

                            <!-- Row Start -->
                            <div class="row align-items-start g-4 mb-lg-5 mb-4">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card rounded-3 position-relative p-4">
                                        <div class="position-absolute w-30 h-100 bg-light-success start-0 top-0 rounded-end-pill"><div class="position-absolute top-50 start-50 translate-middle"><i class="bi bi-pin-map-fill text-success fs-2"></i></div></div>
                                        <div class="d-flex flex-column align-items-end justify-content-end ht-80">
                                            <h2 class="fw-medium mb-0"><span class="ctr">23</span></h2>
                                            <p class="text-muted-2 fw-medium mb-0">Active Listings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card rounded-3 position-relative p-4">
                                        <div class="position-absolute w-30 h-100 bg-light-danger start-0 top-0 rounded-end-pill"><div class="position-absolute top-50 start-50 translate-middle"><i class="bi bi-graph-up-arrow text-danger fs-2"></i></div></div>
                                        <div class="d-flex flex-column align-items-end justify-content-end ht-80">
                                            <h2 class="fw-medium mb-0"><span class="ctr">32</span>K</h2>
                                            <p class="text-muted-2 fw-medium mb-0">Total Views</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card rounded-3 position-relative p-4">
                                        <div class="position-absolute w-30 h-100 bg-light-warning start-0 top-0 rounded-end-pill"><div class="position-absolute top-50 start-50 translate-middle"><i class="bi bi-suit-heart text-warning fs-2"></i></div></div>
                                        <div class="d-flex flex-column align-items-end justify-content-end ht-80">
                                            <h2 class="fw-medium mb-0"><span class="ctr">4</span>K</h2>
                                            <p class="text-muted-2 fw-medium mb-0">Total Saved</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card rounded-3 position-relative p-4">
                                        <div class="position-absolute w-30 h-100 bg-light-info start-0 top-0 rounded-end-pill"><div class="position-absolute top-50 start-50 translate-middle"><i class="bi bi-yelp text-info fs-2"></i></div></div>
                                        <div class="d-flex flex-column align-items-end justify-content-end ht-80">
                                            <h2 class="fw-medium mb-0"><span class="ctr">88</span></h2>
                                            <p class="text-muted-2 fw-medium mb-0">Total Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row End -->

                            <!-- Row Start -->
                            <div class="row align-items-start g-4 mb-lg-5 mb-4">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="card rounded-3 shadow-sm">
                                        <div class="card-header py-3 px-4">
                                            <h4 class="m-0">Recent Activities</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="dashboardListgroup">
                                                <li>
                                                    <span class="icons bg-light-warning text-warning"><i class="bi bi-star"></i></span>
                                                    <div class="listCaps">Mortin Musk left a review<span class="ratting high">4.2</span>on <a href="single-listing-01.html" class="listing-link">Snow Restaurants</a></div>
                                                </li>
                                                <li>
                                                    <span class="icons bg-light-danger text-danger"><i class="bi bi-heart"></i></span>
                                                    <div class="listCaps">Someone bookmark your <a href="single-listing-01.html" class="listing-link">Pepsco Cafe</a> Listing</div>
                                                </li>
                                                <li>
                                                    <span class="icons bg-light-warning text-warning"><i class="bi bi-star"></i></span>
                                                    <div class="listCaps">Arun Kovil left a review<span class="ratting mid">3.7</span>on <a href="single-listing-01.html" class="listing-link">Blue Crystel</a></div>
                                                </li>
                                                <li>
                                                    <span class="icons bg-light-success text-success"><i class="bi bi-check-circle"></i></span>
                                                    <div class="listCaps">Your listing <a href="single-listing-01.html" class="listing-link">Craft Casino</a> has been approved!</div>
                                                </li>
                                                <li>
                                                    <span class="icons bg-light-warning text-warning"><i class="bi bi-star"></i></span>
                                                    <div class="listCaps">Arun Kovil left a review<span class="ratting low">2.9</span>on <a href="single-listing-01.html" class="listing-link">Sagar Salon</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="card rounded-3 shadow-sm">
                                        <div class="card-header py-3 px-4">
                                            <h4 class="m-0">Messages</h4>
                                            <a href="dashboard-user.html#" class="text-muted-2 text-md fw-medium">View All</a>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="messagesWrapers d-flex flex-column gap-4">

                                                <!-- Single Line -->
                                                <div class="singleMessagesline">
                                                    <a href="dashboard-user.html#" class="d-flex align-items-center justify-content-start gap-2">
                                                        <div class="msgLinethumb"><div class="square--50 circle"><img src="assets/img/team-8.jpg" class="img-fluid circle" alt=""></div></div>
                                                        <div class="msgLinecaption flex-fill">
                                                            <div class="msglineTitle d-flex align-items-center justify-content-between gap-3">
                                                                <h6 class="fw-medium m-0">Warlinton Diggs</h6>
                                                                <span class="text-sm fw-medium text-muted">08:20 AM</span>
                                                            </div>
                                                            <div class="msglineParag d-flex align-items-center justify-content-between gap-3">
                                                                <p class="text-md m-0">How are you stay dude?</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <!-- Single Line -->
                                                <div class="singleMessagesline">
                                                    <a href="dashboard-user.html#" class="d-flex align-items-center justify-content-start gap-2">
                                                        <div class="msgLinethumb"><div class="square--50 circle"><img src="assets/img/team-7.jpg" class="img-fluid circle" alt=""></div></div>
                                                        <div class="msgLinecaption flex-fill">
                                                            <div class="msglineTitle d-flex align-items-center justify-content-between gap-3">
                                                                <h6 class="fw-medium m-0">Chad M. Pusey</h6>
                                                                <span class="text-sm fw-medium text-muted">06:40 AM</span>
                                                            </div>
                                                            <div class="msglineParag d-flex align-items-center justify-content-between gap-3">
                                                                <p class="text-md m-0">Hey man it is possible to pay mo..</p>
                                                                <span class="square--20 circle bg-primary text-light text-sm">5</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <!-- Single Line -->
                                                <div class="singleMessagesline">
                                                    <a href="dashboard-user.html#" class="d-flex align-items-center justify-content-start gap-2">
                                                        <div class="msgLinethumb"><div class="square--50 circle"><img src="assets/img/team-6.jpg" class="img-fluid circle" alt=""></div></div>
                                                        <div class="msgLinecaption flex-fill">
                                                            <div class="msglineTitle d-flex align-items-center justify-content-between gap-3">
                                                                <h6 class="fw-medium m-0">Mary D. Homer</h6>
                                                                <span class="text-sm fw-medium text-muted">08:10 AM</span>
                                                            </div>
                                                            <div class="msglineParag d-flex align-items-center justify-content-between gap-3">
                                                                <p class="text-md m-0">Dear you have a spacial offers...</p>
                                                                <span class="square--20 circle bg-primary text-light text-sm">3</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <!-- Single Line -->
                                                <div class="singleMessagesline">
                                                    <a href="dashboard-user.html#" class="d-flex align-items-center justify-content-start gap-2">
                                                        <div class="msgLinethumb"><div class="square--50 circle"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt=""></div></div>
                                                        <div class="msgLinecaption flex-fill">
                                                            <div class="msglineTitle d-flex align-items-center justify-content-between gap-3">
                                                                <h6 class="fw-medium m-0">Marc S. Solano</h6>
                                                                <span class="text-sm fw-medium text-muted">10:10 AM</span>
                                                            </div>
                                                            <div class="msglineParag d-flex align-items-center justify-content-between gap-3">
                                                                <p class="text-md m-0">Sound good! We will meet you aft...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                                <!-- Single Line -->
                                                <div class="singleMessagesline">
                                                    <a href="dashboard-user.html#" class="d-flex align-items-center justify-content-start gap-2">
                                                        <div class="msgLinethumb"><div class="square--50 circle"><img src="assets/img/team-4.jpg" class="img-fluid circle" alt=""></div></div>
                                                        <div class="msgLinecaption flex-fill">
                                                            <div class="msglineTitle d-flex align-items-center justify-content-between gap-3">
                                                                <h6 class="fw-medium m-0">Sandra W. Barge</h6>
                                                                <span class="text-sm fw-medium text-muted">07:20 PM</span>
                                                            </div>
                                                            <div class="msglineParag d-flex align-items-center justify-content-between gap-3">
                                                                <p class="text-md m-0">I am also good and how are...</p>
                                                                <span class="square--20 circle bg-primary text-light text-sm">2</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row End -->

                            <!-- Row Start -->
                            <div class="row align-items-start g-4 mb-lg-5 mb-4">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card rounded-3 shadow-sm">
                                        <div class="card-header flex-wrap gap-3 px-4">
                                            <div class="cardTitle"><h4>View Invoices</h4></div>

                                            <div class="headerInformations">
                                                <div class="d-flex align-items-center justify-content-start justify-content-md-between flex-wrap gap-3">
                                                    <div class="singleCaps">
                                                        <div class="form-group position-relative m-0">
                                                            <input type="text" class="form-control form-control-md bg-light border-0 ps-5" placeholder="Search any parameters...">
                                                            <span class="position-absolute top-50 start-0 translate-middle-y ms-3"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body p-3">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Package Name</th>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">View</th>
                                                </tr>
                                                </thead>

                                                <tbody>

                                                <tr>
                                                    <td data-label="Package Name">Basic Platinum Plan</td>
                                                    <td data-label="Order ID">#PC01362</td>
                                                    <td data-label="Status"><span class="badge badge-xs badge-success rounded-pill">Paid</span></td>
                                                    <td data-label="Due Date"><span class="text-normal">Dec 10,2023</span></td>
                                                    <td data-label="View"><a href="invoice-page.html" class="btn btn-sm fw-medium btn-light-primary rounded-pill">View Invoice</a></td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Package Name">Standard Platinum Plan</td>
                                                    <td data-label="Order ID">#PC01363</td>
                                                    <td data-label="Status"><span class="badge badge-xs badge-danger rounded-pill">Unpaid</span></td>
                                                    <td data-label="Due Date"><span class="text-normal">Jan 23,2024</span></td>
                                                    <td data-label="View"><a href="invoice-page.html" class="btn btn-sm fw-medium btn-light-primary rounded-pill">View Invoice</a></td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Package Name">Extended Platinum Plan</td>
                                                    <td data-label="Order ID">#PC01364</td>
                                                    <td data-label="Status"><span class="badge badge-xs badge-info rounded-pill">On Hold</span></td>
                                                    <td data-label="Due Date"><span class="text-normal">July 12,2023</span></td>
                                                    <td data-label="View"><a href="invoice-page.html" class="btn btn-sm fw-medium btn-light-primary rounded-pill">View Invoice</a></td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Package Name">Basic Platinum Plan</td>
                                                    <td data-label="Order ID">#PC01365</td>
                                                    <td data-label="Status"><span class="badge badge-xs badge-success rounded-pill">Paid</span></td>
                                                    <td data-label="Due Date"><span class="text-normal">Aug 15,2024</span></td>
                                                    <td data-label="View"><a href="invoice-page.html" class="btn btn-sm fw-medium btn-light-primary rounded-pill">View Invoice</a></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row End -->

                            <!-- Row Start -->
                            <div class="row align-items-start g-4">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <p class="text-muted m-0">©ListingHub 2025 Design By Themezhub</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


@endsection
