let auditory = 3;
let visual = 4;
let tactile = 5;
let total = auditory + visual + tactile;
// document.write( "Denominator: " + total + "<br>");

let tactilePercent = Math.round(tactile/total*100);
let visualPercent = Math.round(visual/total*100);
let auditoryPercent = Math.round(auditory/total*100);
console.log("Auditory: " + auditoryPercent + "<br>" + "Visual: " + visualPercent + "<br>" + "Tactile: " + tactilePercent + "<br>");

document.getElementById("tactile").innerHTML = tactilePercent.toString();
document.getElementById("visual").innerHTML = visualPercent.toString();
document.getElementById("auditory").innerHTML = auditoryPercent.toString();