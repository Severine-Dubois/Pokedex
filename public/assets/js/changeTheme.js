const changeTheme = {
    init: function() {
    changeTheme.dark();
    changeTheme.light();
},

    dark: function() {

        const dark = document.querySelector(".gengar");
        console.log(dark);
      
        dark.addEventListener("click", function() {
      
          const change = document.getElementsByClassName("change-theme");
          console.log(change);
      
          for (const changeToDark of change) {
              changeToDark.classList.add("dark-theme"); 
          }
      
        });
    },
      
    light: function() {
        const pika = document.querySelector(".pika");
      
          pika.addEventListener("click", function() {
              const darkclass = document.querySelectorAll(".dark-theme");
              console.log(darkclass);
      
      
             for (const darkclassRemove of darkclass) {
              darkclassRemove.classList.remove("dark-theme");
            };
    
            });
        
        }
        
}

