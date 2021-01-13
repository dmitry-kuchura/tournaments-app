<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>Urgent Paper - Writer Control Panel</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<div class="writers-sidebar">
    <div class="writers-top-logo clearfix">
        <h1 class="writers-h1">
            <a href="#" class="writers-logo">
                <div class="clearfix">
                    <img src="/images/logo_top.png" alt="">
                </div>
            </a>
        </h1>
        <div href="#" class="top-bell"><img src="/images/notification-icon.png" alt=""><span></span></div>
        <a href="#" class="top-hamburger">
            <div class="top-hamburger-lines"><span></span><span></span><span></span></div>
        </a>
    </div>
    <div class="writers-account-info">
        <div class="writers-profile-image">
            <img src="/images/profile-full.png" alt="">
            <a href="profile.html" class="writers-profile-settings">
                <img src="/images/settings-icon.png" alt="">
            </a>
        </div>
        <p class="profile-name"><a href="profile.html">Gennadiy Apostolidi</a></p>
        <p class="profile-status">Status: <span id="writer-status">Premium</span></p>
        <p class="profile-balance">Balance: <span id="writer-balance">$1,087.00</span></p>
    </div>
    <ul class="writers-sidebar-menu">
        <li class="writers-sidebar-menu-item">
            <a href="available_orders.html" class="current-menu-item">
                <div class="menu-available-icon"></div>
                <span class="sidebar-menu-item-text">Available Orders</span>
                <span id="writers-available-orders-amount">128</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="confirmation_needed.html">
                <div class="menu-confirmation-needed-icon"></div>
                <span class="sidebar-menu-item-text">Confirmation Needed</span>
                <span id="writers-confirmation-needed-amount">8</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="my_orders.html">
                <div class="menu-my-orders-icon"></div>
                <span class="sidebar-menu-item-text">My Orders</span>
                <span id="writers-my-orders-amount">6</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="applied_orders.html">
                <div class="menu-applied-icon"></div>
                <span class="sidebar-menu-item-text">Applied Orders</span>
                <span id="writers-applied-orders-amount">3</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="previous_orders.html">
                <div class="menu-previous-icon"></div>
                <span class="sidebar-menu-item-text">Previous Orders</span>
                <span id="writers-previous-orders-amount">10</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="transactions.html">
                <div class="menu-transactions-icon"></div>
                <span class="sidebar-menu-item-text">Transactions</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="payment_methods.html">
                <div class="menu-payment-icon"></div>
                <span class="sidebar-menu-item-text">Payment Methods</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="referral_program.html">
                <div class="menu-referal-icon"></div>
                <span class="sidebar-menu-item-text">Referral Program</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="main_us.html">
                <div class="menu-mail-icon"></div>
                <span class="sidebar-menu-item-text">Mail Us</span>
            </a>
        </li>
        <li class="writers-sidebar-menu-item">
            <a href="#">
                <div class="menu-logout-icon"></div>
                <span class="sidebar-menu-item-text">Logout</span>
            </a>
        </li>
    </ul>
</div>
<div class="writers-content">
    <div class="writers-notifications display-none">
        <p class="writers-notifications-header">Notifications</p>
        <img src="/images/close.png" alt="" class="writers-close-notifications">
        <div class="writers-notifications-message writers-notifications-unread-message clearfix">
            <p class="writers-notifications-message-text writers-notifications-message-order">Order #31218</p>
            <p><a href="#">Consectetur adipisicing. Lorem ipsum dolor sit amet, elit.</a></p>
            <p class="writers-notifications-message-text writers-notifications-message-time">1 day ago</p>
            <p class="writers-notifications-message-text writers-notifications-message-mark display-none">Mark as
                Read</p>
        </div>
        <div class="writers-notifications-message clearfix">
            <p class="writers-notifications-message-text writers-notifications-message-order">Order #31218</p>
            <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
            <p class="writers-notifications-message-text writers-notifications-message-time">2 day ago</p>
            <p class="writers-notifications-message-text writers-notifications-message-mark display-none">Mark as
                Read</p>
        </div>
        <div class="writers-notifications-message clearfix">
            <p class="writers-notifications-message-text writers-notifications-message-order">Order #31218</p>
            <p><a href="#">Eum, facere. Lorem ipsum dolor sit amet.</a></p>
            <p class="writers-notifications-message-text writers-notifications-message-time">4 day ago</p>
            <p class="writers-notifications-message-text writers-notifications-message-mark display-none">Mark as
                Read</p>
        </div>
        <div class="writers-notification-bottom clearfix">
            <a href="notifications.html" class="writers-notifications-link-page">View All</a>
            <p class="writers-notifications-read-mark">Mark All as Read</p>
        </div>
    </div>
    <h2 class="writers-h2">Available Orders</h2>
    <div class="writers-top-table-panel">
        <div class="clearfix">
            <p class="writers-show-entries-text">Show Entries</p>
            <select class="writers-show-entries-select">
                <option>10</option>
                <option>20</option>
                <option>30</option>
            </select>
        </div>
        <div class="writers-top-table-checkbox-wrapper">
            <input type="checkbox" id="writers-top-table-checkbox">
            <label class="label-writers-top-table-checkbox" for="writers-top-table-checkbox"><span></span></label>
            <p class="writers-top-table-proficiency"><label for="writers-top-table-checkbox">Show only orders within my
                    proficiency</label></p>
        </div>
        <div class="writers-top-table-search">
            <img src="/images/search.svg" alt="" class="writers-search-icon">
            <input type="text" class="writers-search-input" placeholder="Search by Order Id, Price, Pages...">
        </div>
    </div>
    <div class="writers-available-orders-table">
        <table>
            <thead>
            <tr>
                <th><p>Order Id</p></th>
                <th><p>Price</p></th>
                <th><p>Pages</p></th>
                <th><p>Slides</p></th>
                <th><p>Problems</p></th>
                <th><p>Questions</p></th>
                <th><p>Type of Paper</p></th>
                <th><p>Subject</p></th>
                <th><p>Topic</p></th>
                <th><p>Deadline</p></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="order_page.html">30703</a></td>
                <td>25</td>
                <td>4</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>Essay</td>
                <td>Sociology</td>
                <td>Film Analysis</td>
                <td>3 days 5 hours 55 minutes</td>
            </tr>
            <tr>
                <td><a href="order_page.html">26808</a></td>
                <td>70</td>
                <td>4</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>Dissertation introduction</td>
                <td>Chemistry</td>
                <td>Thermomechanical, Mechanical and Rheological Properties of Maleated Poly (lactic) acid/Cellulose
                    nanocomposite
                </td>
                <td>No date</td>
            </tr>
            <tr>
                <td><a href="order_page.html">26706</a></td>
                <td>105</td>
                <td>4</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>Thesis methodology</td>
                <td>Medicine</td>
                <td>Adherence of Geriatric Patients and their Beliefs toward their Medicines in the United Arab
                    Emirates
                </td>
                <td>6 days 13 hours 2 minutes</td>
            </tr>
            <tr>
                <td><a href="order_page.html">25453</a></td>
                <td>62</td>
                <td>4</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>Other</td>
                <td>Psychology</td>
                <td>Mechanical, Thermomechanical and Maleated Poly of Rheological Properties (lactic) nanocomposite</td>
                <td>7 days 10 hours 8 minutes</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="writers-page-links">
        <ul>
            <li><img src="/images/arrow-1.svg" alt=""></li>
            <li class="writers-page-links-active"><p>1</p></li>
            <li><p>2</p></li>
            <li><p>3</p></li>
            <li><img src="/images/invalid-name.svg" alt=""></li>
            <li><p>13</p></li>
            <li><img src="/images/arrow-2.svg" alt=""></li>
        </ul>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>

</html>
