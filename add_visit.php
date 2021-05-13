<html>
<title>Add visit</title>
<link rel='stylesheet' type='text/css' href='../general_css.css'/>
<link rel='stylesheet' type='text/css' href='add_visit_style.css'/>
<div id='covid_header'><h1 align="center" id='covid_text_header'>COVID - 19 Contact Tracing</h1></div>

<div class='main'>
    <div class="background-image2">
    </div>
    <div class="writing">
        <div class="title"><p>Add a new Visit</p></div>
        <hr>
    <div class="sidenav">
        <div class="button-area">
            <ul>
                <li><a href="../home/home_page.php">Home</a></li>
                <li><a href="../overview/overview.php">Overview</a></li>
                <li><a class="active">Add Visit</a></li>
                <li><a href="../report/report.php">Report</a></li>
                <li><a href="../settings/settings.php">Settings</a></li>

            </ul>
            <div class="sidebar-footer">
                <li><a href="logout">Logout</a></li>
            </div>
        </div>
        </div>
        <div class="map">
            <img src = "../exeter.jpeg" alt="exeter" width="450" height="450">
        </div>
        <div class='add-visit-form'>
            <form action="/action_page.php" method="post">
                <div class="container">
                    <label for="Date"></label>
                    <input class = "date" type="date" placeholder="Date" name="date" required>

                    <label for="Time"></label>
                    <input class= "time" type="time" placeholder="Time" name="time" required>

                    <label for="Duration"></label>
                    <input class= "duration" type="text" placeholder="Duration" name="duration" required>

                    <input class= "add" type="submit" value="Add"/>
                    <input class= "cancel" type="submit" value="Cancel"/>
                </div>

            </form>
    </div>
</div>
</div>

</html>


