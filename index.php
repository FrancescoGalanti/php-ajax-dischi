

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Painter</title>
   
    
    
    <!-- main css -->
    <link rel="stylesheet" href="./dist/css/main.css">


    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">

</head>
<body>
 <div id="app">
    <header class="app-header">
      <img class="img-logo" src="./img/logo.png" alt="">
      <select v-model="authorfiltered" @change="filteredArtist">
        <option value="all">all</option>
        <option v-for="element in listArtist" :value="element">{{element}}</option>
      </select>
    </header>

    <main>
       <div class="albums">
               <div v-for="element in listAlbum" class="album">
                   <div><img class="album-cover" :src="element.poster" alt="cover"></div>
                   <h2>{{element.title}}</h2>
                   <h3>{{element.author}}</h3>
                   <span>{{element.genre}}</span>
                   <span>{{element.year}}</span>
               </div>     
       </div>
    

    
     </main>
 </div>
    
    <script src="./dist/js/main.js"></script>
</body>
</html>
