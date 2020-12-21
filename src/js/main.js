import Vue from 'vue';
import axios from "axios";







const app = new Vue({
    
    el: "#app",
    data:{
     listArtist: [],
     listAlbum: [],
     DataUrl: window.location.href + 'partial/database-filtered.php',
     authorfiltered: "all",
    },
    
    created(){
        // Testing API search //
         axios.get(this.DataUrl)
                
   
                
   
              .then(response => {
                // deafaukt situation
                console.log(response.data)
                this.listAlbum = response.data.albums;
                console.log(this.listAlbum)
                this.listArtist = response.data.artists;
                 
               })
   
              .catch(error => {
               console.log(error);
              });
   
          },

        methods:{

            filteredArtist(){

                axios.get(this.DataUrl,{
                    params:{
                       artist: this.authorfiltered,
                    }
                
                })
                
   
                
   
                .then(response => {
                  // deafaukt situation
                  console.log(response.data)
                  this.listAlbum = response.data.albums;
                  this.listArtist = response.data.artists;
                   
                 })
     
                .catch(error => {
                 console.log(error);
                });
            }
        } 
});


