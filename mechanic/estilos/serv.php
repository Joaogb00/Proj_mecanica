<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet" />

<style>
.elementos {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 30px;
  margin-top: 50px;
}

.ele1 {
  background-color: white;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
  box-shadow: 0 6px 15px rgba(13, 59, 102, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: fadeInUp 0.5s ease forwards;
  height: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Animação no hover: pulse + destaque */
@keyframes pulseHover {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1.05); }
}

.ele1:hover {
  animation: pulseHover 0.4s forwards;
  box-shadow: 0 8px 20px rgba(13, 59, 102, 0.2);
}

/* Animação de entrada suave */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


.ele1 h1 {
  font-size: 1.2rem;
  color: #0d3b66;
  font-family: 'Raleway', sans-serif;
}
</style>
 </head>
    <body>