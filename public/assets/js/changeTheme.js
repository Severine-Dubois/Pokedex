const changeTheme = {
    init: function() {
    changeTheme.saveToLocalStorage();
    changeTheme.dark();
    changeTheme.light();
},

    dark: function() {

        const dark = document.querySelector(".gengar");
        // console.log(dark);
      
        dark.addEventListener("click", function() {

        const change = document.querySelectorAll(".change-theme");
        // console.log(change);
        
        for (const changeToDark of change) {
                changeToDark.classList.add("dark-theme"); 
        }

          localStorage.setItem("dark-mode", "enabled");
          // const isDark = localStorage.getItem("dark-mode");
          //console.log(isDark);
          
        });
    },
      
    light: function() {
        const pika = document.querySelector(".pika");
      
          pika.addEventListener("click", function() {
              const darkclass = document.querySelectorAll(".change-theme");
              // console.log(darkclass);
      
      
             for (const darkclassRemove of darkclass) {
              darkclassRemove.classList.remove("dark-theme");
            };
    
            localStorage.setItem("dark-mode", "disabled");

            });
        
        },

        saveToLocalStorage: function (){
    
            const isDark = localStorage.getItem("dark-mode");
            // console.log(isDark);
    
            if(isDark === "enabled"){
                const change = document.querySelectorAll(".change-theme");
                // console.log(change);
            
                for (const changeToDark of change) {
                    changeToDark.classList.add("dark-theme"); 
                }
            }
    
        },
        
}

