<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">
  @import url("https://fonts.googleapis.com/css?family=Lato:400i,600");

body {
margin: 0px;
padding: 20vmin 20vmin 20vmin 30vmin;
text-align: center;
font-family: 'Lato';
color: rgba(0,0,0,0.6);
font-weight: 400;
font-style: italic;
-webkit-font-smoothing: antialiased;
}

.body {
position: fixed;
left: 0px;
top: 0px;
width: 100vw;
height: 100vh;
filter: blur(10px);
transform: scale(1.2);
animation: getBlurry 0.5s linear;
/* background: url('https://images.unsplash.com/photo-1518002196537-b51e4e4d0f65?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=57ea43a4c76c7df170d96f844ea7c603'); */
background-size: cover;
}

@keyframes getBlurry {
0% {
  filter: blur(0px);
  transform: scale(1);
}
100% {
  filter: blur(10px);
  transform: scale(1.2);
}
}

.chat {
  position: relative;
  display: inline-block;
  width: 40vw;
  min-width: 400px;
  max-width: 80%;
  animation: popFromBottom 0.5s ease-in-out;
  margin-top: 12%;
}

@keyframes popFromBottom {
0% {
  transform: translateY(300px) scale(0);
}
100% {
  transform: translateY(0px) scale(1);
}
}

img {
  height: 22vmin;
}

.profile {
  display:  inline-block;
  width: 22vmin;
  height: 22vmin;
  border-radius:  50%;
  overflow:  hidden;
  position: absolute;
  left: -16vmin;
  top: -1vmin;
  border: 1vmin solid #fff;
}

.message {
  background: #ffe271;
  padding: 2vmin 5vmin 2vmin 10vmin;
  border-radius: 0px 50px 50px 0px;
  font-size: 3vmin;
  text-align: left;
}

.user {
text-align: left;
padding: 2px 30px 5px 60px;
border-radius: 0px 0px 20px;
font-size: 3.2vmin;
background: #fff;
color: #83aebd;
display: inline-block;
float: left;
font-weight: 600;
font-style: normal;
}
  </style>

  <body>

    <div class="body"></div>
    <div class="chat">
      <div class="profile">
          <img src='https://cdn.iconscout.com/icon/free/png-512/check-verified-successful-accept-tick-yes-success-2516.png' alt=''>
      </div>
      <div class="message">
         Thanks For Your Payment.
      </div>
    </div>


  </body>
</html>
