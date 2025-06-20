 <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet" />
     <style>
      * {
  margin: 0;
  padding: 0;
}

body {
  background: linear-gradient(to left, blue, black);
  color: white;
  overflow-y: scroll;
  font-family: 'Raleway', sans-serif;
}

header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 15vh;
  padding: 0 40px;
  background-color: rgba(0, 0, 0, 0.5);
}

.logo {
  font-size: 17px;
  font-weight: bold;
  color: white;
  text-decoration: none;
}


.btn {
  display: flex;
  justify-content: flex-end;
  flex-direction: row;
  gap: 20px;
}

.links {
  color: white;
  font-weight: bold;
  font-size: large;
 
  text-decoration: none;
  padding: 20px;
  width: 100px;
  text-align: center;
  border-radius: 20px;
  position: relative; /* necessário para o ::after */
}

.links::after {
  content: '';
  position: absolute;
  bottom: 10px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: white;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}

.links:hover::after {
  transform: scaleX(1);
}


.conteiner{
  display: flex;
  justify-content: center;
  height: 80vh;
  width: 100%;
}
.frase {
  text-align: center;
  margin-top: 20px;
  margin-top: -50px;
}

.txt {
  
  font-weight: bold;
  color: white;
  text-shadow: 8px 8px 8px rgba(0, 0, 0, 0.8); /* <- sombra aplicada */
}



     body {
  background: linear-gradient(to left, blue, black);
  color: white;
  overflow-y: scroll;
  font-family: 'Raleway', sans-serif;
}
form{
    padding: 40px;
    height: 50vh;
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
    gap:10px;
}
input{
    display: flex;
    flex-direction: column;
    margin-bottom:20px:
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
a{
  text-decoration:none;
}
.troca{
  display:flex;
  flex-direction:column;
  text-align:left;
}
.ele5{
  color:white;
  text-decoration:underline;
  font-size:small;
  text-align:left;
}
     </style>

      <!--Let browser know website is optimized for mobile-->
     
    </head>
    <body>