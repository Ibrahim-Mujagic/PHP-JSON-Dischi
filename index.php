<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <title>Dischi</title>
</head>
<body id="app">
  <header>
    <img src="https://static-00.iconduck.com/assets.00/spotify-icon-2048x2048-5gqpkwih.png" alt="logo">
    <div class="inputs">
      <input type="text" v-model="title" placeholder="Inserisci un disco">
      <input type="text" v-model="author" placeholder="Inserisci un autore">
      <input type="text" v-model="poster" placeholder="Inserisci un immagine">
      <button @click="sendNewRecord()">INVIA</button>
    </div>
  </header>
  <div class="container-general">
    <div v-for="(record,index) in records" :key="index" class="card">
      <div class="card-image">
        <img :src="record.poster" alt="">
      </div>
      <div class="card-text">
        <h2>{{record.title}}</h2>
        <p>{{record.author}}</p>
      </div>
    </div>
  </div>
<script src="js/script.js"></script>
</body>
</html>