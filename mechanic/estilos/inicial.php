<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Open+Sans&display=swap" rel="stylesheet" />

<style>

.car {
 
  opacity: 0;
  animation: slideIn 1.2s ease-out forwards;
  transition: transform 0.3s ease-in-out;
}

.car:hover {
  transform: scale(1.05);
}

/* Animação personalizada */
@keyframes slideIn {
  0% {
    transform: translateY(80px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
</style>
 </head>
    <body>