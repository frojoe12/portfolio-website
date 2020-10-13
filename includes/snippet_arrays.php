<?php
$snippet_css=[

[
"title"=>"FLEX: Resize",
"code"=>".parent {
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
}
.content {
    flex: 1 1 150px; // no stretch
    flex: 0 1 150px; // stretch
    margin: 5px;
}"        
],

[
"title"=>"GRID: Center Items",
"code"=>".parent {
    display:grid;
    place-items:center;
}"
],

[
"title"=>"GRID: minmax()",
"code"=>".parent {
    display:grid;
    grid-template-columns: minmax(150px, 25%), 1fr;
}"        
],

[
"title"=>"GRID: Stack",
"code"=>".parent {
    display:grid;
    grid-template-rows: auto 1fr auto;
}"        
],

[
"title"=>"GRID: template column/rows",
"code"=>".parent {
    display:grid;
    grid-template: auto 1fr auto / auto 1fr auto;
}"        
],

[
"title"=>"GRID: repeat",
"code"=>".parent {
    display:grid;
    grid-template-columns: repeat(12,1fr);
}
.content {
    grid-column: span 1/13; // span entire width    
    grid-column: span 1/7; // span first half width   
    grid-column: span 7/13; // span second half width   
}"        
],

[
"title"=>"GRID: repeat, auto, minmax",
"code"=>".parent {
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(<base>,1fr); // set <base> to size of single content
    grid-gap:1rem;
}"        
],
[
"title"=>"CSS: supports",
"code"=>"
@supports (display:grid) {
    section {
        display:grid;
    }
}
@supports not (display:grid) {
    section {
        float:right;
    }
}
"        
],
];

$snippet_js = [
    ["title"=>"Javascript",
    "code"=>"// js"]
];

$snippet_php = [
    ["title"=>"PHP",
    "code"=>"// php"]
];