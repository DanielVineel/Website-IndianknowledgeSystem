window.myImages={

        main: "../images/indian knowledge system.jpg",

        home: {
            main: "../images/indian knowledge system.jpg",
           
        },

        history: {
            indus: "../images/history/indus valley main.jpg",
            vedic: "../images/history/vedic period 1.avif",
            maurya: "../images/history/mauryan 1.jpg",
            gupta: "../images/history/gupta 1.jpg",
            delhiSulthan: "../images/history/delhi sulthan 1.webp",
            mughal: "../images/history/mughal 1.webp",
            british: "../images/history/british 1.jpg",
            freedom: "../images/history/independence.avif",
            postIndependence: "../images/history/post independence.jpg"
        },

        languages: {
            sanskrit: "../images/languages/sanskrit language.jpg",
            prakrit: "../images/languages/prakrit language.jpg",
            tamil: "../images/languages/tamil language.jpg",
            telugu: "../images/languages/telugu language.jpg",
            hindi: "../images/languages/hindi language.jpg",
            kannada: "../images/languages/kannada language.jpg"
        },

        medicine: {
            ayurveda: "../images/medicine/ayurveda medicine.jpg",
            yoga: "../images/medicine/yoga 1.jpg",
            siddha: "../images/medicine/siddha 1.jpg",
            unani: "../images/medicine/unani 1.jpg",
            naturopathy: "../images/medicine/naturopathy 1.png"
        },
        logo:"https://2.gravatar.com/avatar/1b86c20e8c97e359370b9fe5513ba7601c46e7195c6596edc1a122a92450d127?size=512&d=initials"

    };
   

    document.addEventListener("DOMContentLoaded",function(){
     
        if(window.location.hostname==""){
            return;
        }
        let icons=document.getElementsByClassName("menu")
        for(let ele of icons){
            ele.innerHTML=""
        }
        icons=document.getElementsByClassName("close")
        for(let ele of icons){
            ele.innerHTML=""
        }
   



    function loadScreen(){
        const bg=document.createElement('div')
        bgs=bg.style
        bgs.backgroundColor="white";
        bgs.height="100vh";
        bgs.width="100%";
        bgs.position="fixed";
        bgs.top="0";
        bgs.left="0";
        bgs.zIndex="12"

       let body= document.getElementsByTagName("body")[0]
        body.appendChild(bg)
        body.style.overflow="hidden"
        

        const box=document.createElement("div")
        box.style.position="fixed"
        box.style.top="0"
        box.style.left="0";
        box.style.zIndex="12";
        box.style.width="100%";
        box.style.height="100vh";
        // box.style.border="1px solid black"
        box.setAttribute("class","rotate-box")


        const circle1=document.createElement('div')
        circle1.setAttribute("class","load-circle red")
        
        const circle2=document.createElement('div')
        circle2.setAttribute("class","load-circle green")
        
        const circle3=document.createElement('div')
        circle3.setAttribute("class","load-circle yellow")

        const circle4=document.createElement('div')
        circle4.setAttribute("class","load-circle blue")

        box.appendChild(circle1);
        box.appendChild(circle2);
        box.appendChild(circle3);
        box.appendChild(circle4);

        body.appendChild(box)
        
        setTimeout(() => {
            body.removeChild(box)
            body.removeChild(bg)
        body.style.overflow="unset"

        }, 1200);

    }
loadScreen()



 })

