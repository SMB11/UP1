function getData(game, date){

    const matchApiUrl = "http://142.93.34.56/api/match";
    const livefootballApiUrl = "http://142.93.34.56/api/tickets/livefootball";
    const livefootballUrlAppend = "&LP=www.LiveFootballTickets.com&OID=FS";
    const stubhubApiUrl = "http://142.93.34.56/api/tickets/stubhub";
    const stubhubResBefore= "http://pdt.tradedoubler.com/click?a(2813023)p(248222)prod(3030627499)ttid(5)url(";
    const stubhubUrlAfter = "/fix?afl=1X00396LRG&utm_medium=affiliate&utm_content=feed&utm_campaign=1&utm_source=td-tech)";

    $.post( matchApiUrl, 
    { event: game, date: date},
    function( data ) {
        let liveFootballRes;
        let stubhubRes;
        $.when(
            $.post( livefootballApiUrl,
                { url:data.livefootball[0].event_url },
                function( d) {
                    liveFootballRes = d.tickets;
                },
                "json"),
            $.post( stubhubApiUrl,
                { url:data.stubhub[0].event_url },
                function( d) {
                    stubhubRes = d.tickets;
                },
                "json")
          
        ).then(function() {
            for(var i = 0; i< liveFootballRes.length; i++){
                liveFootballRes[i].nameOfSupplier = "LiveFootball";
                liveFootballRes[i].url += livefootballUrlAppend;
            }
            for(var i = 0; i< stubhubRes.length; i++){
                stubhubRes[i].nameOfSupplier = "StubHub";
                stubhubRes[i].url = stubhubResBefore + stubhubRes[i].url + stubhubUrlAfter;
            }
            var resArray = stubhubRes.concat(liveFootballRes);
            bubbleSort(resArray);
            console.log(resArray);
        });
    },
    "json");
    
}


function bubbleSort(a){
    var flag;
    do{
      flag = false;
      for(var i = 0; i<a.length-1; i++){
        if(parseInt(a[i].price)>parseInt(a[i+1].price)){
          var temp = a[i];
          a[i] = a[i+1];
          a[i+1] = temp;
          flag = true;
        }
      }
    }while(flag);
  }
  
  


getData("Liverpool v Chelsea", "2019-04-13");   