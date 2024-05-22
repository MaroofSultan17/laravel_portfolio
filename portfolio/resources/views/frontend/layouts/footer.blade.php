<div class="footer-copyright text-center pt-25 pb-25 alert">
    <span>© 2024 All Rights Reserved by <a href="{{ env('GITHUB ') }}" target="_blank" rel="noopener noreferrer"
            style="color: #1b74e4;">Maroof
            Sultan</a> Under the Supervision of<br><a style="color: #1b74e4;" href="{{ env('GITHUB ') }}" target="_blank"
            rel="noopener noreferrer">Mr.
            Muhammad Jamil</a></span>
</div>

</div>
</div>
<div class="col-xxl-1 d-xxl-block d-none">
    <div class="bostami-main-menu-wrap">
        <nav class="bastami-main-menu main_menu">
            <ul>
                <li class="{{ request()->routeIs('home.maroof') ? 'active' : '' }}">
                    <a href="{{ route('home.maroof') }}">
                        <span>
                            <i class="fa-light fa-address-card"></i>
                        </span>
                        about
                    </a>
                </li>
                <li class="{{ request()->routeIs('resume.maroof') ? 'active' : '' }}">
                    <a href="{{ route('resume.maroof') }}">
                        <span>
                            <i class="fa-light fa-file-user"></i>
                        </span>
                        Resume
                    </a>
                </li>
                <li class="{{ request()->routeIs('works.maroof') ? 'active' : '' }}">
                    <a href="{{ route('works.maroof') }}">
                        <span>
                            <i class="fa-light fa-briefcase"></i>
                        </span>
                        Works
                    </a>
                </li>
                <li class="{{ request()->routeIs('contact.maroof') ? 'active' : '' }}">
                    <a href="{{ route('contact.maroof') }}">
                        <span>
                            <i class="fa-light fa-address-book"></i>
                        </span>
                        contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
</div>
</div>
<script src="{{ url('frontend/js/jquery.min.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('frontend/js/swipper-bundle.min.js') }}"></script>
<script src="{{ url('frontend/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ url('frontend/js/wow.min.js') }}"></script>
<script src="{{ url('frontend/js/odometer.min.js') }}"></script>
<script src="{{ url('frontend/js/jquery.modal.min.js') }}"></script>
<script src="{{ url('frontend/js/appear.min.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>
</body>

</html>
