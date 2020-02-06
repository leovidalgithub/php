(function(d) {
    setInterval(function() {
        d.documentElement.style.setProperty(
        		'--myColor','rgba(' + rNumber(255) + ',' + rNumber(255) + ',' + rNumber(255) + ', .95)');
    }, 4000);
})(document);

let rNumber = (max) => Math.floor((Math.random() * max) + 1);

// function rNumber(max) {
//     return Math.floor((Math.random() * max) + 1);
// }
