var callBackGetSuccess = function(data){
console.log("donnees API",data)
}




function buttonClickGET(){
    var url = "https://api.openweathermap.org/data/2.5/forecast?id=524901&APPID=1111111111" 

$.get(url, callBackGetSuccess).done(function(){

})
.fail(function(){
    alert("error"); 

})
.always(function(){

}); 
}