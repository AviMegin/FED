

window.addEventListener('keydown', (e) => {    if (e.target.localName != 'input') {   // if you need to filter <input> elements        switch (e.keyCode) {            case 37: // left            case 39: // right                e.preventDefault();                break;            case 38: // up            case 40: // down                e.preventDefault();                break;            default:                break;        }    }}, {    capture: true,   // this disables arrow key scrolling in modern Chrome    passive: false   // this is optional, my code works without it}); 
