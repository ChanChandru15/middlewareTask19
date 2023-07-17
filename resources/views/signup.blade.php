<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] , input[type=email] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
    </style>
  </head>
  <body>
    <form action="{{route('storeUser')}}" method="POST">
        @csrf
      <h1>Signup Form</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="name"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        <label for="email"><strong>Email</strong></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit">Signup</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        </label>
        <span class="psw"><a href="{{route('login')}}"> Already have an account?</a></span>
      </div>
    </form>
  </body>
</html>
