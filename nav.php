<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">AL-NASER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item  <?php if($page_active=="home"){echo "active";} ?> ">
            <a class="nav-link" href="index.php">таблице1 <span class="sr-only"></span></a>
        </li>
        <li class="nav-item <?php if($page_active=="employees"){echo "active";} ?>">
            <a class="nav-link" href="ttttt.php">таблице2</a>
        </li>
        <li class="nav-item <?php if($page_active=="add-employee"){echo "active";} ?>">
            <a class="nav-link" href="rrr.php">таблице3</a>
        </li>
        
        </ul>
    </div>
</nav>