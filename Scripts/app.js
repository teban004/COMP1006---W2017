/* custom JavaScript goes here */
// IIFE - Immediately Invoked Function Expression

(function(){
    console.log("App started");

    $(".btn-danger").click(function(event){
        if(!confirm("Are you sure?")) {
            event.preventDefault();
            window.location.assign('./');
        }
    });
})();
