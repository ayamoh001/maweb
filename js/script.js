var ar = document.querySelector("#ar");
var en = document.querySelector("#en");


ar.addEventListener("click", function () {    
    changeLang("arabic");
});

en.addEventListener("click", function () {   
    changeLang("english"); 
});

var changeLang = lang => {

    var req= new XMLHttpRequest();
    req.open("GET","../lang/lang.json");

    req.onload = function() {
        var langData= JSON.parse(req.responseText);
        document.querySelector("#resume p").textContent = langData[lang]["resume"][1];
        var headerTags = document.querySelectorAll("#mainmenu li a");
        for(var i=0;i< langData[lang]["header"][1].length;i++){
            headerTags[i].textContent = langData[lang]["header"][1][i];
        }
    };
    req.send();
};

window.onload = () => {

    var images=[
        "./imgs/img1.webp",
        "./imgs/img2.webp",
        "./imgs/img3.webp",
        "./imgs/img4.webp",
        "./imgs/img5.webp",
        "./imgs/img6.webp",
        "./imgs/img7.webp",
        "./imgs/img8.webp",
        "./imgs/img9.webp"
    ];
    var cards=document.querySelectorAll(".port");
    var c=0;
    cards.forEach(img => {
            img.src=images[c];
            c++;
        }
    );
//////////////////////////////////
    var heroImages=[
        "./imgs/hero1.svg",
        "./imgs/hero2.svg",
        "./imgs/hero3.svg"
    ];

    var heros = document.querySelectorAll(".hero");
    c=0;
    heros.forEach(hero => {
        hero.src=heroImages[c];
        c++;
    });
/////////////////////////////////
    var adsImages=[
        "./imgs/img1.webp",
        "./imgs/img2.webp",
        "./imgs/img3.webp",
        "./imgs/img4.webp",
        "./imgs/img5.webp"
    ];
    c=0;
    var ads = document.querySelectorAll(".ad");
    ads.forEach(ad => {
        ad.src=adsImages[c];
        c++;
    });
};


