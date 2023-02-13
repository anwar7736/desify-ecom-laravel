<div class="col-sm-3 side-2 sidebar">
    <div class="block block-account-navigation">
    <div class="title">
        <strong>My account</strong>
    </div>
    <div class="">
        <ul class="list">
            <li>
                <a href="/privatemessages" class="ico-inbox">
                <span class="inbox-label">Messages</span>
                <span class="inbox-unread"></span>
                </a>
            </li>
            <li class="customer-orders">
                <a href="{{ route('order.index') }}" class="active">Orders</a>
            </li>
            <li>
                <a href="#" class="ico-wishlist">
                <span class="wishlist-label">Wishlist</span>
                <span class="wishlist-qty">(0)</span>
                </a>
            </li>
            <li class="active_Info">
                <a class="collapsed" data-toggle="collapse" data-target="#dropdownMenu_4" aria-expanded="true" aria-controls="dropdownMenu_4">
                Refer to Earn
                <div class="sublist-toggle">
                </div>
                </a>
                <ul id="dropdownMenu_4" aria-expanded="true" class="sub_list2 collapse">
                <li><a href="/customer/referral-program" class="inactive">Referral program</a></li>
                <li><a href="/customer/referral-commission" class="inactive">Referral commission</a></li>
                </ul>
            </li>
            <li class="active_Info">
                <a class="collapsed" data-toggle="collapse" data-target="#dropdownMenu_2" aria-expanded="true" aria-controls="dropdownMenu_2">
                Settings
                <div class="sublist-toggle">
                </div>
                </a>
                <ul id="dropdownMenu_2" aria-expanded="true" class="sub_list2 collapse">
                <li><a href="{{ route('profile.index') }}" class="inactive">My Profile</a></li>
                <li><a href="#" class="inactive">Address Book</a></li>
                <li><a href="{{ route('password.change') }}" class="inactive">Change password</a></li>
                </ul>
            </li>
            <li>
                <a href="/merchant/info" class="ico-wishlist">
                <span class="wishlist-label">Join As Reseller</span>
                </a>
            </li>
            <li class="visible-mobile li-language">
                <div>
                Languages : 
                </div>
                <div class="dropdown language-selector">
                <a href="/changelanguage/1?returnurl=%2Forder%2Fhistory" title="English" class="hidden">
                <span>English</span>
                </a>
                <a href="/changelanguage/2?returnurl=%2Forder%2Fhistory" title="বাংলা">
                <span>বাংলা</span>
                </a>
                </div>
            </li>
            <li class="visible-mobile">
                <a href="{{ route('logout') }}" class="ico-logout">Log out</a>
            </li>
        </ul>
    </div>
    </div>
    <style>
    .backgroundAnimation {
    background: #96c472;
    }
    .backgroundAnimationError {
    background: #fb4444;
    font-style:italic;
    }
    </style>
    <script>
    setInterval(function () {
        $("#divtoBlink").toggleClass("backgroundAnimation");
        $("#divtoBlinkError").toggleClass("backgroundAnimationError");
    }, 1000)
    </script>
</div>