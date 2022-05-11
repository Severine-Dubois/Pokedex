
const accordion = {

  init: function() {
      console.log('initialisation');
      accordion.addEvent();
  },

  addEvent: function() {
    const acc = document.querySelector(".accordion");

    
    if (acc != null) {
    
      acc.addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
    
        /* Toggle between hiding and showing the active panel */
        const panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
    
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      })
    }
  },
}