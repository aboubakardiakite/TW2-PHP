<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Dessiner SVG</title>
        <style>
            * {
                font-family : sans-serif;
            }
            svg {
                width : 400px;
                height : 400px;
                border : solid 1pt black;
            }
            #dessin * {
                fill-opacity : 0.7;
            }
            svg rect {
                fill : lightblue;
                stroke : none;
            }
            svg circle {
                fill : red;
            }
            svg polygon {
                fill : #333;
            }
            line.axe {
                stroke : grey;
                stroke-width : 1;
            }
            line.marque {
                stroke : grey;
                stroke-width : 1;
            }
            svg text {
                text-anchor : middle;
                font-size:7pt;
                
            }
        </style>
    </head>
    <body>
        <h1>Test SVG</h1>
        <svg viewBox="-320,-320,640,640" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
            <!-- axes et graduations -->
            <line class ="axe" id="axeX" x1="0" y1="0" x2="300" y2="0"/>
            <line class="axe" id="axey" x1="0" y1="0" x2="0" y2="300"/>
            <g transform="translate(100,0)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">100</text>
            </g>
            <g transform="translate(0,100) rotate (-90)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">100</text>
            </g>
            <g transform="translate(200,0)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">200</text>
            </g>
            <g transform="translate(0,200) rotate (-90)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">200</text>
            </g>
            <g transform="translate(300,0)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">300</text>
            </g>
            <g transform="translate(0,300) rotate (-90)">
                <line class="marque" x1="0" y1="0" x2="0" y2="-3" />
                <text x="0" y="-4" fill="blue">300</text>
            </g> 
            <!-- dessin   -->
            <g id="dessin">
<?php
if($gl==1){
   echo cercle($centreX,$centreY,$rayon)."\n";
}else if($gl==2){
   echo carreInscrit($centreX,$centreY,$rayon,$angle)."\n";
}else if($gl==3){
   echo triangleInscrit($centreX,$centreY,$rayon,$angle)."\n";
}else if($gl==4){
   echo cercle($centreX,$centreY,$rayon)."\n";
   echo carreInscrit($centreX,$centreY,$rayon,$angle)."\n";
   echo triangleInscrit($centreX,$centreY,$rayon,$angle)."\n";
}
?>
            </g>
        </svg>
    </body>
</html>
