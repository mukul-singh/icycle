<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Events
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{BASE_URL}}adminme/events/weekend-events">Weekend Events</a>
            <a class="dropdown-item" href="{{BASE_URL}}adminme/events/annual-events">Annual Events</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="logout()">Logout</a>
    </li>
</ul>
