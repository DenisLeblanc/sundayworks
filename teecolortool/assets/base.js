

// get #page_wrap element
var pageWrap = document.getElementById('page_wrap');
var contentWrap = document.getElementById('content_wrap');
var bg_color_text = document.querySelector('#color_result .bg_color');

// Add event listener to the Background Toolbar
pageWrap.querySelector('.toolbar_bg').addEventListener('click', function(event) {
    var button = event.target.closest('button');
    if (button) {
        var color = button.style.backgroundColor;
        contentWrap.style.backgroundColor = color;
        var colorKey = button.getAttribute('data-color-key');
        bg_color_text.textContent = button.dataset.colorKey;
    }
});

var svgElement = document.getElementById('graphic_wrap').querySelector('svg');
var graphic_color = document.getElementById('graphic_color');
var graphic_color_text = document.querySelector('#color_result .graphic_color');

// Add event listener to the Swatches Toolbar
pageWrap.querySelector('.toolbar_swatches').addEventListener('click', function(event) {
    var button = event.target.closest('button');
    if (button) {
        var color = button.style.backgroundColor;
        // Set the fill color for all SVG child elements
        svgElement.querySelectorAll('*').forEach(function(child) {
            child.style.fill = color;
        });
        var colorKey = button.getAttribute('data-color-key');
        graphic_color_text.textContent = button.dataset.colorKey;
    }
});



// Get the button element
var refreshButton = document.getElementById('randomizeButton');

// Add event listener to the button
refreshButton.addEventListener('click', function() {
    // Reload the current page
    location.reload();
});


document.getElementById('copyButton').addEventListener('click', function() {
    var colorResult = document.getElementById('color_result');
    
    // Get the text content of the colorResult element
    var textToCopy = colorResult.textContent;
    
    // Remove HTML tags from the text content
    textToCopy = textToCopy.replace(/<[^>]+>/g, '');

    // Check if the Clipboard API is supported
    if (navigator.clipboard && navigator.clipboard.writeText) {
        // Copy the text to the clipboard using the Clipboard API
        navigator.clipboard.writeText(textToCopy)
            .then(function() {
                // Alert the user that the text has been copied
                alert('Text copied to clipboard: ' + textToCopy);
            })
            .catch(function(error) {
                console.error('Failed to copy text: ', error);
            });
    } else {
        // Provide an alternative method or inform the user that the feature is not supported
        alert('Copying to clipboard is not supported in this browser.');
    }
});



