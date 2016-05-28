/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 Created on : 14-Sep-2015, 14:48:23
 Author     : drewpal
 */
window.onload = function ()
{
    msmSubscriber = document.getElementById("msmSubscriber");
//    $("div#msmSubscriber").css({'width': '400', 'margin-left': 'auto', 'margin-right': 'auto'});

    OT.setLogLevel(OT.DEBUG);
    console.log(apikey);
    var session;
    var publisher;
    var publisherOptions = {
        insertMode: 'append',
        width: 400,
        height: 300,
        name: 'Host',
        style: {nameDisplayMode: 'auto', audioLevelDisplayMode: 'auto'},
        resolution: '320x240'
    };
    
    session = OT.initSession(apikey, sessionid);

// Subscribe to a newly created stream

    session.connect(token, function (error) {
   session.on('streamCreated', function (event) {
        session.subscribe(event.stream, 'msmSubscriber', publisherOptions, {
            insertMode: 'append',
            width: '200',
            height: '150',
            video: 'false'
        });
    });
    });

//resize

    TriggerClick = 0;
    $("button.resize").click(function () {
        if (TriggerClick == 0) {
            TriggerClick = 1;
            $("button.resize").text('300 px');
            $("div#msmSubscriber").css({'width': '800', 'margin-left': 'auto', 'margin-right': 'auto'});
            subscriber.element.style.width = "800px";
            subscriber.element.style.height = "600px";
        } else {
            TriggerClick = 0;
            $("button.resize").text('800 px');
            $("div#msmSubscriber").css({'width': '400', 'margin-left': 'auto', 'margin-right': 'auto'});
            publisher.element.style.width = "400px";
            publisher.element.style.height = "300px";

        }
        ;
    });
//function disconnect()  
    $("button.disconnect").click(function () {
//session.disconnect();
//         publisher.setStyle("width", "400px");
        subscriber.setStyle("nameDisplayMode", "on");
        subscriber.element.style.width = "400px";
    });

};
