<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboardtrend.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/dashboardusers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="js/dashboardusers.js"></script>
    <title>PeoplePerTask</title>
</head>
<body>
<div class="row">
    <div class="col-1" id="column1">
        <a href="#"><img id="logo" src="images/PeoplePerTask.png" alt="logo">
        </a>
        <div id="menu">
        <div id="home-container">
        <a href="dashboard.php"><img src="images/material-symbols_home-rounded.svg" alt="Home">
        </a>
        </div>
        <div class="menu-section">
        <a href="dashboardtrend.php"><img src="images/fire3 1.png" alt="tredning">
        <p class="menu-paragraph">Treding Offers</p></a>
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/jam_messages-alt.svg" alt="feedbacks">
        <p class="menu-paragraph">feedbacks</p></a>
        </div>
        <div class="menu-section">
        <a href="dashboardusers.php"><img src="images/group2 1.png" alt="Users">
        <p class="menu-paragraph">Users</p></a>
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/graph2 1.png" alt="Stats">
        <p class="menu-paragraph">Stats</p></a>
        </div>
        <div class="line">
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/Vector.svg" alt="help"></a>
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/Vector2.svg" alt="settings"></a>
        </div>
        </div>
        </div>
<div class="col-11" id="column2">
    <div id="nav-bar">
        <img id="menu-logo" style="height: 40px;" src="images/more.png" alt="menu">
        <div id="nav-bar-section2">
        <img id="notification" src="images/carbon_notification-new.svg" alt="notification-icon">
        <div id="profil">
        <h1>Welcome back,Yasser</h1>
        <img src="images/profil.png" alt="profil-logo">
        </div>
        </div>
        </div>
<h1 class="users-header">All Users:</h1>
<div id="table-container">
<table id="userTable" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Country</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>Admin</td>
            <td>USA</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$75,000</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Freelancer</td>
            <td>UK</td>
            <td>32</td>
            <td>2014-05-12</td>
            <td>$85,000</td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Client</td>
            <td>France</td>
            <td>45</td>
            <td>2010-11-28</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Admin</td>
            <td>Germany</td>
            <td>29</td>
            <td>2013-02-17</td>
            <td>$65,000</td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Freelancer</td>
            <td>Spain</td>
            <td>33</td>
            <td>2012-09-26</td>
            <td>$92,000</td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Client</td>
            <td>Italy</td>
            <td>41</td>
            <td>2010-12-13</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Admin</td>
            <td>France</td>
            <td>39</td>
            <td>2013-10-22</td>
            <td>$137,500</td>
        </tr>
        <tr>
            <td>Rhona Davidson</td>
            <td>Client</td>
            <td>Ireland</td>
            <td>55</td>
            <td>2011-10-16</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Colleen Hurst</td>
            <td>Freelancer</td>
            <td>Canada</td>
            <td>29</td>
            <td>2014-09-15</td>
            <td>$78,000</td>
        </tr>
        <tr>
            <td>Sonya Frost</td>
            <td>Admin</td>
            <td>UK</td>
            <td>43</td>
            <td>2011-12-03</td>
            <td>$120,000</td>
        </tr>
        <tr>
            <td>Jena Gaines</td>
            <td>Client</td>
            <td>USA</td>
            <td>30</td>
            <td>2014-12-19</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Quinn Flynn</td>
            <td>Freelancer</td>
            <td>Australia</td>
            <td>38</td>
            <td>2012-03-03</td>
            <td>$105,000</td>
        </tr>
        <tr>
            <td>Charde Marshall</td>
            <td>Admin</td>
            <td>Spain</td>
            <td>36</td>
            <td>2013-08-25</td>
            <td>$72,500</td>
        </tr>
        <tr>
            <td>Haley Kennedy</td>
            <td>Client</td>
            <td>Canada</td>
            <td>43</td>
            <td>2011-12-18</td>
            <td>$0</td>
        </tr>
        <tr>
            <td>Tatyana Fitzpatrick</td>
            <td>Freelancer</td>
            <td>Ireland</td>
            <td>19</td>
            <td>2010-03-17</td>
            <td>$85,000</td>
        </tr>
        <tr>
            <td>Michael Silva</td>
            <td>Admin</td>
            <td>UK</td>
            <td>49</td>
            <td>2012-11-27</td>
            <td>$98,000</td>
        </tr>
        <tr>
            <td>Sakura Tanaka</td>
            <td>Freelancer</td>
            <td>Japan</td>
            <td>28</td>
            <td>2015-07-08</td>
            <td>$70,000</td>
        </tr>
        <tr>
            <td>Hiroshi Yamamoto</td>
            <td>Client</td>
            <td>Japan</td>
            <td>36</td>
            <td>2012-04-16</td>
            <td>$95,000</td>
        </tr>
        <tr>
            <td>Akari Kobayashi</td>
            <td>Freelancer</td>
            <td>Japan</td>
            <td>31</td>
            <td>2013-12-28</td>
            <td>$80,000</td>
        </tr>
        <tr>
            <td>Rahul Patel</td>
            <td>Client</td>
            <td>India</td>
            <td>34</td>
            <td>2014-08-21</td>
            <td>$75,000</td>
        </tr>
        <tr>
            <td>Asha Sharma</td>
            <td>Freelancer</td>
            <td>India</td>
            <td>40</td>
            <td>2010-09-14</td>
            <td>$85,000</td>
        </tr>
        <tr>
            <td>Linh Nguyen</td>
            <td>Client</td>
            <td>Vietnam</td>
            <td>27</td>
            <td>2016-02-03</td>
            <td>$68,000</td>
        </tr>
        <tr>
            <td>Min-Joon Kim</td>
            <td>Freelancer</td>
            <td>South Korea</td>
            <td>29</td>
            <td>2017-11-30</td>
            <td>$72,000</td>
        </tr>
        <tr>
            <td>Wei Chen</td>
            <td>Freelacner</td>
            <td>China</td>
            <td>33</td>
            <td>2014-05-19</td>
            <td>$78,000</td>
        </tr>
        <tr>
            <td>Yuki Tanaka</td>
            <td>Client</td>
            <td>Japan</td>
            <td>30</td>
            <td>2015-08-11</td>
            <td>$82,000</td>
        </tr>
        <tr>
            <td>Arjun Mehta</td>
            <td>Freelancer</td>
            <td>India</td>
            <td>39</td>
            <td>2012-07-26</td>
            <td>$90,000</td>
        </tr>
        <tr>
            <td>Sara Khan</td>
            <td>Freelancer</td>
            <td>Pakistan</td>
            <td>35</td>
            <td>2013-04-09</td>
            <td>$88,000</td>
        </tr>
        <tr>
            <td>Hyun-woo Park</td>
            <td>Client</td>
            <td>South Korea</td>
            <td>32</td>
            <td>2014-11-22</td>
            <td>$76,000</td>
        </tr>
        <tr>
            <td>Lin Wang</td>
            <td>Client</td>
            <td>China</td>
            <td>29</td>
            <td>2016-06-15</td>
            <td>$70,000</td>
        </tr>
        <tr>
            <td>Anusha Reddy</td>
            <td>Client</td>
            <td>India</td>
            <td>31</td>
            <td>2015-02-14</td>
            <td>$80,000</td>
        </tr>
        <tr>
            <td>Kaori Nakamura</td>
            <td>Freelancer</td>
            <td>Japan</td>
            <td>33</td>
            <td>2014-09-10</td>
            <td>$85,000</td>
        </tr>
        <tr>
            <td>Wei-Li Huang</td>
            <td>Client</td>
            <td>China</td>
            <td>37</td>
            <td>2013-05-29</td>
            <td>$92,000</td>
        </tr>
        <tr>
            <td>Ji-hyun Lee</td>
            <td>Freelancer</td>
            <td>South Korea</td>
            <td>36</td>
            <td>2012-12-17</td>
            <td>$87,000</td>
        </tr>
        <tr>
            <td>Vikram Singh</td>
            <td>Client</td>
            <td>India</td>
            <td>28</td>
            <td>2017-10-08</td>
            <td>$75,000</td>
        </tr>
        <tr>
            <td>Linh Tran</td>
            <td>Freelancer</td>
            <td>Vietnam</td>
            <td>30</td>
            <td>2016-12-22</td>
            <td>$78,000</td>
        </tr>
    </tbody>
</table>
</div>
</div> 
</div>
   

    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="js/dashboardusers.js"></script>
    <script src="js/dashboardhome.js"></script>
    
</body>
</html>