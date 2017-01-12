$(document).ready(function () {
    $(document).on('click',"#up",function () {      
       var votesHTML = $(this).parent().parent().siblings().children()[1];
       var actualVotes = $(votesHTML);
       var txt = actualVotes.text();
       var numVotes = parseInt(txt);
       numVotes++;
       votesHTML.innerHTML = numVotes;
    });

    $(document).on('click',"#down",function () { 
       var votesHTML = $(this).parent().parent().siblings().children()[1];
       var actualVotes = $(votesHTML);
       var txt = actualVotes.text();
       var numVotes = parseInt(txt);
       numVotes--;
       votesHTML.innerHTML = numVotes;
    });
});