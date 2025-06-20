<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet" />

<style>
form{
    padding: 40px;
    height: 40vh;
    border-radius: 20px;
    max-width: 300px;
    background: linear-gradient(135deg, #0d1b2a, #1b263b);
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.475);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center;
}
.input{
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 50px;
}
.inputs{
    padding: 10px;
    border-radius: 10px;
    border: none;
    background-color:#1d3751;
     transition: background-color 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.432);
      color: white;
}
.inputs:focus{
     background-color: #0d3b66;
     border: none;
     box-shadow: 0 0 8px 2px #00b4d8;
     outline: none;
}
.inputs::placeholder{
    color:white;
    border: none;
}
button{
    padding: 10px;
    text-align: center;
    border-radius: 10px;
      background-color:#1d3751;
     transition: background-color 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.432);
      border: none;
      color: white;
}
button:hover{
    background-color: #286eb0;
     border: none;
     box-shadow: 0 0 8px 2px #00b4d8;
     outline: none;
}
</style>
 </head>
    <body>