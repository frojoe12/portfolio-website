// animation for homepage
const elements = [
    document.getElementById('animate-in-1'),
    document.getElementById('animate-in-2'),
    document.getElementById('animate-in-3'),
    document.getElementById('animate-in-4'),
    document.getElementById('animate-in-5'),
    document.getElementById('animate-in-6'),
    document.getElementById('animate-in-7'),
    document.getElementById('animate-in-8'),
    document.getElementById('animate-in-9'),
    document.getElementById('animate-in-10'),
    document.getElementById('animate-in-11'),
    document.getElementById('animate-in-12'),
    document.getElementById('animate-in-13'),
    document.getElementById('animate-in-14'),
    document.getElementById('animate-in-15'),
    document.getElementById('animate-in-16'),
]
const timeDelay=50
let currentTimer=0;
elements.map(el=>{
    currentTimer+=timeDelay
    el !== null && (
    setTimeout(()=>{
        el.getAttribute("type")==="project" ? 
        el.classList="fade-in project"
        : 
        el.classList="fade-in"
    },currentTimer) )
})

// hover event for get in touch
/*
const getInTouch = document.getElementById('get-in-touch')
const getInTouchWrapper = document.getElementById('get-in-touch-wrapper')
getInTouch.addEventListener("mouseover", () => {
    console.log("hovered")
    getInTouchWrapper.classList="get-in-touch-wrapper show"
})
getInTouch.addEventListener("mouseout", () => {
    console.log("hovered")
    getInTouchWrapper.classList="get-in-touch-wrapper hide"
})
*/

/*
    snippets
*/
const cssSnippetsButton = document.getElementById("css-snippets-button");
const jsSnippetsButton = document.getElementById('js-snippets-button');
const phpSnippetsButton = document.getElementById('php-snippets-button');
if (cssSnippetsButton !== null) {
    cssSnippetsButton.addEventListener("click",()=>{
        document.getElementById('css-snippets-container').classList="show";
        document.getElementById('js-snippets-container').classList="hide";
        document.getElementById('php-snippets-container').classList="hide";
    })
    jsSnippetsButton.addEventListener("click",()=>{
        document.getElementById('css-snippets-container').classList="hide";
        document.getElementById('js-snippets-container').classList="show";
        document.getElementById('php-snippets-container').classList="hide";
    })
    phpSnippetsButton.addEventListener("click",()=>{
        document.getElementById('css-snippets-container').classList="hide";
        document.getElementById('js-snippets-container').classList="hide";
        document.getElementById('php-snippets-container').classList="show";
    })
}