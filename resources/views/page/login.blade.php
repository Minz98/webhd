<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}
    
    input[type=email], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }
    
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    .container {
      padding: 16px;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    </style>
@extends('master')
@section('tieudetrang')
    Đăng nhập
@endsection
@section('content')

<form class="form-signin" action="showlogin/login" method="POST">
    {{csrf_field()}}
    <div class="imgcontainer">
        <img src="../../public/img/core-img/logo.png" alt="Avatar" class="avatar" width="200px">
      </div>
    
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Nhập email" name="email" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="NHập mật khẩu" name="passlogin" required>
            
        <button type="submit">Đăng nhập</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
    
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
      </form>
@endsection