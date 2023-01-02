<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
    

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Activity</h2>
        <ul>
        <li><a href="{{URL::to('/')}}"><i class="fas fa-user"></i>Profile</a></li>
            <!-- <li><a href="{{URL::to('/')}}"><i class="fas fa-address-card"></i>Account</a></li> -->
            <li><a href="{{URL::to('/grade')}}"><i class="fas fa-marker"></i>Grades</a></li>
            <li><a href="{{URL::to('/assignment')}}"><i class="fas fa-book"></i>Assignments</a></li>
            <li><a href="{{URL::to('/attendance')}}"><i class="fas fa-address-book"></i>Attendance</a></li>
            <li><a href="{{URL::to('/announcement')}}"><i class="fas fa-bullhorn"></i>Announcements</a></li>
            <li><a href="{{URL::to('/logout')}}"><i class="fas fa-sign-out"></i>LOGOUT</a></li>
            </ul>
    </div>
</div>
    <div class="user"><img class="profile" src="https://i.pinimg.com/564x/c9/e3/e8/c9e3e810a8066b885ca4e882460785fa.jpg" alt="">
    <h3>user...</h3>
</div>
    
        <form class="form" action="edit.php" method="POST">
            @foreach($data as $lecturer)
        <h1 class="topic">PERSONAL DETAILS</h1><br><br><br>
            <label for="name"><b>Name: </b></label>
            <input type="text" id="name" name="name" placeholder={{$lecturer['Name']}} required><br><br><br><br>
            <label for="email"><b>Email: </b></label>
            <input type="text" id="email" name="email" placeholder={{$lecturer['Email']}} required><br><br><br><br>
            <label for="tel"><b>Telephone: </b></label>
            <input type="text" id="tel" name="tel" placeholder={{$lecturer['Tel']}} required><br><br><br><br>
            <button class="btn" type="submit">SAVE</button>
@endforeach
        </form>     
        </body>
</html>
