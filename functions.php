<?php 

function connect(){ 
    //if 1st arg in return === 0, 2nd arg contains error message
    //if 1st arg in return === 1, 2nd arg contains connection variable $con 

    $con = mysqli_connect('localhost','root','','db1');
    if(!$con){
        $error = mysqli_connect_error();
        return array(0, $error);
    }
    else{
        //all ok
        return array(1, $con);
    }
}

function insert(){

    //if 1st arg in return === 0, 2nd arg contains error message
    //if 1st arg in return === 1, 2nd arg contains connection variable $con 

    list($validity, $con) = connect();
    if($validity === 0){
        $error = $con;
        return array(0, $error); 
    }
    if(!isset($_POST["submit"])){
        return array(0, "form not submitted");
    }
    else{
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "insert into users (name, password) values ('$username', '$password')";
        $result = mysqli_query($con, $query);

        if(!$result){
            return array(0, mysqli_error($con));
        }
        else{
            //all ok
            return array(1, $con);
        }
    }
}


function delete(/* field name, key*/){

    //if 1st arg in return === 0, 2nd arg contains error message
    //if 1st arg in return === 1, 2nd arg contains connection variable $con

    list($validity, $con) = connect();
    if($validity === 0){
        $error = $con;
        return array(0, $error);
    }
    if(!isset($_POST["submit"])){
        return array(0, "form not submitted");
    }
    else{
        $field = "uid";
        $key = $_POST["uid"];
        $query = "delete from db1.users where $field = $key";
        mysqli_query($con, $query);
        if(mysqli_error($con)){
            return array(0, mysqli_error($con));
        }
        else{
            return array(1, $con);
        }
    }
}


function update(){

    //if 1st arg in return === 0, 2nd arg contains error message
    //if 1st arg in return === 1, 2nd arg contains connection variable $con

    list($validity, $con) = connect();
    if($validity === 0){
        return array(0, $con);
    }
    if(!isset($_POST["submit"])){
        return array(0, "form not submitted");
    }
    $index_field = "uid";
    $index_key = $_POST["uid"];
    $target_field = "name";
    $target_key = $_POST["name"];
    $query = "update db1.users set $target_field = '$target_key' where $index_field = $index_key";
    mysqli_query($con, $query);
    if(mysqli_error($con)){
        return array(0, mysqli_error($con));
    }
    else{
        return array(1, $con);
    }
}


function show(){
    //if 1st arg in return === 0, 2nd arg contains error message, 3rd arg is duplicate of 2nd
    //if 1st arg in return === 1, 2nd arg contains query result $result, 3rd arg contains connection $con

    list($validity, $con) = connect();
    if($validity === 0){
        return array(0, "connection fault", "connection fault");
    }
    $query = "select * from db1.users";
    $result = mysqli_query($con, $query);
    if(!$result){
        return array(0, mysqli_error(), mysqli_error());
    }
    else{
        return array(1, $result, $con);
    }
}

function authenticate(){
    //if 1st arg in return === 0, 2nd arg contains error message, 3rd arg is duplicate of 2nd
    //if 1st arg in return === 1, 2nd arg 1, 3rd arg contains 1

    //check if form submitted
    if(!isset($_POST['submit'])){
        return array(0, 'form not submitted');
    }

    //prepare connection
    list($validity, $con) = connect();
    if($validity === 0){
        return array(0, "database connection failed", "database connection failed");
    }

    //prepare query and execute
    $query = "select username, password from db1.admin";
    $result = mysqli_query($con, $query);
    if(!$result){
        return array(0, "database query failed", "database query failed");
    }
    $result_set = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //search inside result
    $flag = 0;
    foreach($result_set as $row){
        if($row['username'] == $_POST["username"] && $row['password'] == $_POST['password']){
            $flag = 1;  //found
        }
        else if($row['username'] == $_POST["username"] && $row['password'] != $_POST['password']){
            $flag = 2;   //wrong passoword
        }
    }
    if($flag === 1){
        return array(1,1,1);
    }else if($flag === 2){
        return array(0, "wrong password", "wrong password");
    }
    else{
        return array(0, "user not found", "user not found");
    }
}




