document.addEventListener("DOMContentLoaded", function(event) {

    //Un commentaire
    console.log("Ça fonctionne!!!");

    const uneFonction = ()=>{
        console.log('coucou');
    }

    uneFonction();

    let prev = document.getElementById('prev');
    let next = document.getElementById('next');
    let slides = document.getElementById('slides');
    let pos = 0;
    const tailleImage = 200;
    console.log($('.slides').css('margin-left'));
    console.log(pos);
    prev.addEventListener('click', ()=>{
            console.log('prev');
           
            if($('.slides').css('margin-left')==="0px"||pos<=0){
                pos=6;
                $('.slides').finish().animate({
                    'marginLeft':"-1200px"
                },500)
                console.log('0');
            }else{
                $('.slides')
                .finish()
                .animate({
                    'marginLeft': "+="+tailleImage+"px"
                }, 300);
                pos--;
                console.log(pos);
                console.log($('.slides').css('margin-left'));
            }
    });

    next.addEventListener('click', ()=>{
        console.log('next');
        if($('.slides').css('margin-left')==="-1200px"||pos>=6){
            pos=0;
                $('.slides').finish().animate({
                    'marginLeft':"0px"
                }, 500)
            console.log('0');
        }else{
            $('.slides')
            .finish()
            .animate({
                'marginLeft': "-="+tailleImage+"px"
            }, 300);
            pos++;
            console.log(pos);
            console.log($('.slides').css('margin-left'));
        }
        //console.log($('.slides').css('margin-left'));
});

});