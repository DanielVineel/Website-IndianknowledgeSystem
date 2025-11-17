<?php 

$origin="http://127.0.0.1";

$origin="*";
header("Access-Control-Allow-Origin : $origin");
header("Access-Control-Allow-Methods : GET");


function local_or_online($localPath, $onlinePath) {
    return file_exists(".".$localPath) ? $localPath : $onlinePath;
}

$images = [];

// MAIN IMAGE
$images['main'] = local_or_online(
    "./images/indian knowledge system.jpg",
    "https://d3f1iyfxxz8i1e.cloudfront.net/courses/course_image/fdf2c6e62f14.jpg"
);



// HOME IMAGES
$images['home'] = [
    "main"      => local_or_online(  "./images/indian knowledge system.jpg","https://d3f1iyfxxz8i1e.cloudfront.net/courses/course_image/fdf2c6e62f14.jpg")
];




// HISTORY IMAGES
$images['history'] = [
    "indus"           => local_or_online("./images/history/indus valley main.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6-ruyIZSMGmlk1aK8WpkP6GzK0vOMzxHjLw&s"),
    "vedic"           => local_or_online("./images/history/vedic period 1.avif","https://studentsfree.in/wp-content/uploads/2024/12/Pre-Vedic.jpg"),
    "maurya"          => local_or_online("./images/history/mauryan 1.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWapfJm55VOie6XdbHrADrf6Ojf746BVSqsQ&s"),
    "gupta"           => local_or_online("./images/history/gupta 1.jpg","https://historyfinder.in/wp-content/uploads/2021/08/gupta-empire-golden-age-of-india.jpg"),
    "delhiSulthan"    => local_or_online("./images/history/delhi sulthan 1.webp","https://i0.wp.com/iasnext.com/wp-content/uploads/2023/12/Jama-Mosque.webp"),
    "mughal"          => local_or_online("./images/history/mughal 1.webp","https://i0.wp.com/iasnext.com/wp-content/uploads/2023/12/Architecture-During-Mughals.webp"),
    "british"         => local_or_online("./images/history/british 1.jpg","https://upload.wikimedia.org/wikipedia/commons/b/b3/Ripon_Building_panorama.jpg"),
    "freedom"         => local_or_online("./images/history/independence.avif","https://akm-img-a-in.tosshub.com/indiatoday/styles/medium_crop_simple/public/2025-08/fpj_custom_pic_56_1_0.jpg"),
    "postIndependence"=> local_or_online("./images/history/post independence.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWbWiMxPgnVZr7jV5gBVY5PFSLtEeGFwnuEQ&s")
];

// LANGUAGES
$images['languages'] = [
    "sanskrit" => local_or_online("./images/languages/sanskrit language.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1UVfYUBGrQzqzIH6rFD02pKzFfy1CupIQ0Q&s"),
    "prakrit"   => local_or_online("./images/languages/prakrit language.jpg","https://www.indianetzone.com/public/admin/uploadImage/Origin_of_Prakrit_Language_1.jpg"),
    "tamil"    => local_or_online("./images/languages/tamil language.jpg","https://ih1.redbubble.net/image.5519926208.5411/farp,small,wall_texture,product,750x1000.jpg"),
    "telugu"   => local_or_online("./images/languages/telugu language.jpg","https://i.pinimg.com/564x/df/24/92/df2492a5f9b6c70f058b92711729db1d.jpg"),
    "hindi"    => local_or_online("./images/languages/hindi language.jpg","https://i.pinimg.com/736x/aa/f0/82/aaf0820f2dbb065fe2f2dc560aaa14d0.jpg"),
    "kannada"  => local_or_online("./images/languages/kannada language.jpg","https://qph.cf2.quoracdn.net/main-qimg-69e243da777bb69906ed6ff038db659e-lq")
];

// MEDICINE
$images['medicine'] = [
    "ayurveda"    => local_or_online("./images/medicine/ayurveda medicine.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEjID_7P-VnJpN5F4j-6tKx-dCs9NhAJ3P-g&s"),
    "yoga"        => local_or_online("./images/medicine/yoga 1.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRudVHyIL_EX51bpHRR2AyKjaqe1JU70oZ--w&s"),
    "siddha"      => local_or_online("./images/medicine/siddha 1.jpg","https://ayushline.com/wp-content/uploads/Classification-of-Siddha-Medicines.jpg"),
    "unani"       => local_or_online("./images/medicine/unani 1.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTAQB3NC1MPeqBXukhOk6PkvLPdv-wCMWVrQ&s"),
    "naturopathy" => local_or_online("./images/medicine/naturopathy 1.png","https://www.arogyanaturecure.com/images/naturopathy.png")
];
$images['logo']=local_or_online("./images/logo.png","https://2.gravatar.com/avatar/1b86c20e8c97e359370b9fe5513ba7601c46e7195c6596edc1a122a92450d127?size=512&d=initials")

return json_encode($images, JSON_PRETTY_PRINT);
// exit;

