// //alert();

// console.log("はじめてのジャバスクリプト");
// console.log(23+5);
// console.log(2000-1800);
// console.log("18+5");

// var name="荒井勇兵"
// console.log("自分の名前を表示");
// console.log(name);

// var score = 50;
// if(score >=80){
//     console.log("合格！おめでとう！");
// }else{
//     console.log("不合格。");
// }

// var o=Math.floor(Math.random()*5);
// console.log(o)

// //これは45‐70までの乱数
// var weight =Math.floor(Math.random()*(70-45)+45);
// console.log('あなたの体重は');
// console.log(weight);
// if(weight <=45){
//         console.log("よくできました！");
//     }else if(weight <=49){
//         console.log("あと一歩！");
//     }else if(weight <=55){
//         console.log("まだまだ");
//     }else if(weight <=60){
//         console.log("先は長い");
//     }else if(weight <=65){
//         console.log("俺たちの戦いはこれからだ");
//     }else {
//         console.log("今日がスタート");
//     }

$(document).ready(function(){ 
    $('#hide').on('click',function(){
        //$('#test').html('aaaaaaaa');
        //$('#test').css('color','#f00');
        //setInterval(function(){
            $('#test').fadeOut(2000)
            
        //},2000)

    });
    var num =0;
    $('#show').on('click',function(){
            $('#test').fadeIn(2000)
            num++;
            console.log(num)
    });
})