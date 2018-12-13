// this class assumes the original color is the last item in the colors list.
// Extract this out, perhaps? see if I can get one radial gradient to expand to another radial gradient?
function updateGradient(expand, colors) {

    var c = [];

    if (expand) {
        for (var i = colors.length - 1; i >= 0; i--) {
            var newPercent = colors[i].percent;
            if (i === colors.length - 1) {
                newPercent = colors[i].percent + 1;
            } else if (i === colors.length - 2) {
                newPercent = colors[i+1].percent - 1;
            } else if (colors[i+1].percent > 100/(colors.length-1)) {
                newPercent = colors[i].percent + 1;
            }

            colors[i].percent = newPercent;
            c[i] = colors[i].color + " " + newPercent + "%";
        }

    } else if (!expand) {
        for (var i = 0; i < colors.length; i++) {
            var newPercent = colors[i].percent;
            if (i === colors.length - 1) {
                newPercent = colors[i].percent - 1;
            } else if (colors[i].percent > 0) {
                newPercent = colors[i].percent - 1;
            }
            colors[i].percent = newPercent;
            c[i] = colors[i].color + " " + newPercent + "%";
        }
    }

    var grad = c.join(", ");
    var radGrad = "";
    radGrad = "url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/859573/FloweryDisasterByDanaRounds5.svg)";
    //radGrad += ", radial-gradient(center, circle cover, "+ grad +")";
    //radGrad += ", -moz-radial-gradient(center, circle cover, "+ grad +")";
    // radGrad += ", -ms-radial-gradient(center, circle cover, "+ grad +")";
    // radGrad += ", -o-radial-gradient(center, circle cover, "+ grad +")";
    radGrad += ", -webkit-radial-gradient(center, circle cover, "+ grad +")";
    var body = document.getElementsByTagName('body')[0];
    body.style.backgroundImage = radGrad;
}