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
    msmPublisher = document.getElementById("adminPublisher");
    msmSubscriber = document.getElementById("msmSubscriber");
    $("div#msmContainer").css({'width': '820', 'margin-left': 'auto', 'margin-right': 'auto'});
    $("div#adminPublisher").css({'width': '820', 'margin-left': 'auto', 'margin-right': 'auto'});

    $("div#adminPublisher > .OT_publisher").css({'width': '400', 'float': 'left', 'margin': '0 5px'});
        $("div.OT_publisher").css({'width': '400', 'float': 'left', 'margin': '0 5px'});
    $("div#adminPublisher > div.OT_subscriber").css({'width': '400', 'float': 'left', 'margin': '0 5px'});
    
    OT.setLogLevel(OT.DEBUG);
    console.log(apikey);
    var session;
    var publisher;
    var subscriber;
    var publisherOptions = {
        insertMode: 'append',
        width: 400,
        height: 300,
        name: 'Host',
        style: {nameDisplayMode: 'auto', audioLevelDisplayMode: 'auto'},
        resolution: '320x240'
    };
    
    var subscriberOptions = {
        insertMode: 'append',
        width: 400,
        height: 300,
        name: 'Speaker',
        style: {nameDisplayMode: 'auto', audioLevelDisplayMode: 'auto'},
        resolution: '320x240'
    };
    
    session = OT.initSession(apikey, sessionid);

// Subscribe to a newly created stream

    session.on('streamCreated', function (event) {
        session.subscribe(event.stream, 'adminPublisher', subscriberOptions, {
            insertMode: 'append',
            width: '200',
            height: '150',
            video: 'false'
        });
    });


    session.connect(token, function (error) {
        if (session.capabilities.publish == 1) {
            publisher = OT.initPublisher(adminPublisher, publisherOptions);
            session.publish(publisher);
        } else {
            console.log("You cannot publish or subscribe to an audio-video stream.");
        }
    });

//resize

    TriggerClick = 0;
    $("button.resize").click(function () {
        if (TriggerClick == 0) {
            TriggerClick = 1;
            $("button.resize").text('300 px');
            $("div#msmPublisher").css({'width': '800', 'margin-left': 'auto', 'margin-right': 'auto'});
            publisher.element.style.width = "800px";
            publisher.element.style.height = "600px";
        } else {
            TriggerClick = 0;
            $("button.resize").text('800 px');
            $("div#msmPublisher").css({'width': '400', 'margin-left': 'auto', 'margin-right': 'auto'});
            publisher.element.style.width = "400px";
            publisher.element.style.height = "300px";

        }
        ;
    });

    $(".one").click(function () {
        $("div#msmPublisher").css({'width': '70%', 'margin-left': 'auto', 'margin-right': 'auto'});
        publisher.element.style.width = "70%";
        publisher.element.style.height = "400px";
    });
    $(".two").click(function () {
        $("div#msmPublisher").css({'width': '40%', 'margin-left': 'auto', 'margin-right': 'auto'});
        publisher.element.style.width = "40%";
        publisher.element.style.height = "250px";
    });
    $(".four-n").click(function () {
        $("div#msmPublisher").css({'width': '40%', 'margin-left': 'auto', 'margin-right': 'auto'});
        publisher.element.style.width = "40%";
        publisher.element.style.height = "250px";
    });
    $(".four").click(function () {
        $("div#msmPublisher").css({'width': '70%', 'margin-left': 'auto', 'margin-right': 'auto'});
        publisher.element.style.width = "70%";
        publisher.element.style.height = "400px";
    });


$("#stopArchiveLink").hide();
$("button#closeArchiveLink").click(stopArchive);

      session.on('archiveUpdated', function(event) {
        console.log("ARCHIVE UPDATED");
      });
      
      session.on('archiveDestroyed', function(event) {
        console.log("ARCHIVE DESTROYED");
      });

      session.on('archiveStarted', function(event) {
        archiveID = event.id;
        console.log("Archive id - " + archiveID);

        console.log("ARCHIVE STARTED");
        $("#createArchiveLink").hide();
        $("#closeArchiveLink").show();
      });

function stopArchive() {
$("#stoparchive").load("/demo/app.php/close-archives/" + archiveID);
}
      session.on('archiveStopped', function(event) {
        archiveID = event.id;
        console.log("ARCHIVE STOPPED");
        console.log("Archive id - " + archiveID);

        $("#createArchiveLink").show();
        $("#closeArchiveLink").hide();
      });

    $("button.disconnect").click(function () {
session.disconnect();

    });

};
