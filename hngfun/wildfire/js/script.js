$(document).ready(function() {
    // retrieving the coins data from the back-end script
    // Use callback method for setot and recusn

    jQuery.getJSON('https://jsonplaceholder.typicode.com/photos', (data, status, jqXHR) => { 

        var output = '';

        // Saving a reference to the html container
        var container = $('.container');

        var counter = 0;
        // counter for controlling how many html snippets to add to the page, this is mainly for the test api
        // and also for benchmarking the speed of the page.
        // THIS IS TO BE REMOVED IN PRODUCTION CODE

        // the test api returns an array of 5000 objects, use the counter to render as as much snippet as you want to test the speed of rendering

        if (data != null && data.length > 0) {

            for (user of data) {

                if (counter > 500) break;
                
                var title = user.title;
                var url = user.url;
                var thumbnail = user.thumbnailUrl;
                var snippet = `<div id="one"class="currency"><div><p>1</p><p class="currency-name">${title}</p></div><p class="bought second">${url}</p><p class="sold third">${thumbnail}</p><p class="status fourth"><span class="fa fa-arrow-up"></span> 0.05%</p></div>`
                output += snippet;
                counter++;
            }
        }
        container.append(output);                
    }).fail(() => {

        // Handle connection error
        console.log('connection error'); 
    });
});