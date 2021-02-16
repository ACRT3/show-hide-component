<!DOCTYPE html>
<html>
    <head>
        <title>Accordion with symbols</title>
        <link href="https://europe.cdn.sunderland.ac.uk/assets/css/style.css" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .accordion {
                background-color: #eee;
                color: #003359;
                border-top: 1px solid black;
                border-left: 1px solid black;
                border-right: 1px solid black;
                border-bottom: 1px solid black;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }
            .accordion:after {
                content: '\002B';
                color: #003359;
                font-weight: bold;
                float: right;
                margin-left: 10px;
            }
            .active:after {
                content: "\2212";
            }
            .panel {
                margin-top: 5px;
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                font-size: 13px;
                transition: max-height 0.2s ease-out;
            }
        </style>
    </head>
    <body>
        <button class="accordion">Section 1</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor and vitality, so that the labor and sorrow, some important things to do eiusmod. Over the years, I will come, who will nostrud aliquip out of her the advantage of exercise, so that stimulus efforts if the school district and longevity.</p>
        </div>
        <button class="accordion">Section 2</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor and vitality, so that the labor and sorrow, some important things to do eiusmod. Over the years, I will come, who will nostrud aliquip out of her the advantage of exercise, so that stimulus efforts if the school district and longevity.</p>
        </div>
        <button class="accordion">Section 3</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor and vitality, so that the labor and sorrow, some important things to do eiusmod. Over the years, I will come, who will nostrud aliquip out of her the advantage of exercise, so that stimulus efforts if the school district and longevity.</p>
        </div>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
            }
        </script>
    </body>
</html>
