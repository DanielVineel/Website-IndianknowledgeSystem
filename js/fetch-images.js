let server = false;


$.ajax({
    url: "http://127.0.0.1/Website-IndianknowledgeSystem/index.php",
    method: "GET",
    timeout: 1000,

    success: function (data) {
        server = true;
        window.myImages = JSON.parse(data);
        console.log("SERVER ON — using PHP images");
     
    },

    error: function () {
        console.log("SERVER OFF — using local JS backup");
       
    }
});

