<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        margin-top: 10px;
    }

    .customStyle{
        border: 1px solid red;
    }
</style>
<body>
    <button id="toggleElement">Toggle Element</button>
    <button id="toggleClass">Toggle Class</button>
    <button id="removeClass">Remove Element</button>

    <div id="parent" class="settings-menu container">
    <!-- The item is dynamically added and removed here. -->
    </div>
</body>
<script>
    var toggleElementButton = document.getElementById('toggleElement');
    var toggleClassButton = document.getElementById('toggleClass');
    var removeClassButton = document.getElementById('removeClass');
    var parentContainer = document.getElementById('parent');

    /* HTML element to add dynamically. */
    var element = `<div id="test" class="customStyle" style="display: block;">TEST</div>`;

    /* The dynamic element is added to the page when the page loads. */
    window.addEventListener('load', (event) => {
    parentContainer.innerHTML += element;
    });

    /* Clicking the "Toggle Element" button will show/hide the item. */
    toggleElementButton.addEventListener("click", function(){
    var currentElement = document.getElementById('test');
    
    if(document.getElementById('test').style.display == "none")
        currentElement.style.display = "block";
    else
        currentElement.style.display = "none";
    });

    /* Clicking the "Toggle Class" button adds/removes the class style. */
    toggleClassButton.addEventListener("click", function(){
    document.getElementById('test').classList.toggle("customStyle");
    });

    /* Clicking the "Remove Element" button removes the item.       */
    /* When the "Add Element" button is clicked, the item is added. */
    removeClassButton.addEventListener("click", function(){
    if(removeClassButton.innerHTML == "Remove Element")
    {
        document.getElementById('test').remove();
        removeClassButton.innerHTML = "Add Element";
        toggleElementButton.disabled = true;
        toggleClassButton.disabled = true;
    }
    else if(removeClassButton.innerHTML == "Add Element")
    {
        parentContainer.innerHTML += element;
        removeClassButton.innerHTML = "Remove Element";
        toggleElementButton.disabled = false;
        toggleClassButton.disabled = false;
    }   
    });
</script>
</html>