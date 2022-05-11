const app = {
    init: function(){
        changeTheme.init();
        accordion.init();
    },
}

document.addEventListener('DOMContentLoaded', app.init);