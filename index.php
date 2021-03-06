<?php
    //57 https://youtu.be/lRaL-8qZ0mM
    
    $output = 
'<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <h1>Design System</h1>
            <section id="colors">
                <h2 class="numbered-title"><span>01</span> colors</h2>
                <div class="flex">
                    <div style="flex-grow: 1;">
                        <div class="bg-dark text-white" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                            #0B0D17
                        </div>
                        <p><span class="accent">RGB 11, 13, 23</span></p>
                        <p><span class="accent">HSL 230°, 35%, 7%</span></p>
                    </div>
                    <div style="flex-grow: 1;">
                        <div class="bg-accent text-dark" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                            #0B0D17
                        </div>
                        <p><span class="accent">RGB 11, 13, 23</span></p>
                        <p><span class="accent">HSL 230°, 35%, 7%</span></p>
                    </div>
                    <div style="flex-grow: 1;">
                        <div class="bg-white text-dark" style="padding: 3rem 1rem 1rem; border: 1px solid white">
                            #0B0D17
                        </div>
                        <p><span class="accent">RGB 11, 13, 23</span></p>
                        <p><span class="accent">HSL 230°, 35%, 7%</span></p>
                    </div>
                </div>  
            </section>
            <section id="typography" style="margin: 4rem 0">
                <h2 class="numbered-title"><span>02 </span>Typography</h2>
                <div class="flex">
                    <div class="flow" style="flex-basis: 100%; --flow-space: 4rem;">
                        <div>
                            <p class="text-accent">Heading 1 - Bellefair Regular - 150px</p>
                            <p class="fs-900 ff-serif uppercase">Earth</p>
                        </div>
                        <div>
                            <p class="text-accent">Heading 2 - Bellefair Regular - 100px</p>
                            <p class="fs-800 ff-serif uppercase">Venus</p>
                        </div>
                        <div>
                            <p class="text-accent">Heading 3 - Bellefair Regular - 56px</p>
                            <p class="fs-700 ff-serif uppercase">Jupiter & Saturn</p>
                        </div>
                        <div>
                            <p class="text-accent">Heading 4 - Bellefair Regular - 32px</p>
                            <p class="fs-600 ff-serif uppercase">Uranus, Neptune, & Pluto</p>
                        </div>
                        <div>
                            <p class="text-accent">Heading 5 - Bellefair Regular - 28px - 4.75 Character Space</p>
                            <p class="text-accent fs-500 ff-sans-cond uppercase letter-spacing-1">So, you want to travel to space?</p>
                        </div>
                    </div>

                    <div class="flow" style="flex-basis: 100%; --flow-space: 4rem;">
                        <div>
                            <p class="text-accent">Subheading 1 - Bellefair Regular -28px</p>
                            <p class="fs-500 ff-serif uppercase">384,400 km</p>
                        </div>
                        <div>
                            <p class="text-accent">Subheading 2 - Barlow Condensed Regular - 14px - 2.35 Character Space</p>
                            <p class="fs-200 ff-sans-cond uppercase letter-spacing-3">Avg. Distance</p>
                        </div>
                        <div>
                            <p class="text-accent">Nav Text - Barlow Condensed Regular - 16px - 2.7 Character Space</p>
                            <p class="fs-300 ff-sans-cond uppercase letter-spacing-2">Europa</p>
                        </div>
                        <div>
                            <p class="text-accent">Body Text</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="flow" id="interactive-elements">
                <h2 class="numbered-title"><span>03</span> Interactive Elements</h2>

                <!-- navigation -->
                <div></div>
                <div class="flex">
                    <div style="margin-top: 5rem">
                        <a href="#" class="large-button uppercase ff-serif fs-600 text-dark bg-white">Explore</a>
                        <!-- <a href="#" class="large-button uppercase ff-serif fs-600 text-dark bg-accent">Explore</a> -->
                    </div>
                    <div style="margin-bottom: 50vh;">
                        <!-- Tabs -->

                        <!-- Dots -->

                        <!-- Numbers -->

                    </div>
                </div>
            </section>
        </div>
        <script src="index.js"></script>
    </body>
</html>';

    echo($output);
?>